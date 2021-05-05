<?php
namespace App\Http\Controllers;
 
use App\Models\Image;
use App\Jobs\ProcessImageThumbnails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Validator;
 
class ImageController extends Controller
{
    /**
     * Show Upload Form
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('upload_form');
    }
 
    /**
     * Upload Image
     *
     * @param  Request  $request
     * @return Response
     */
    public function upload(Request $request)
    {
        // upload image
        $this->validate($request, [
          'demo_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('demo_image');
        $input['demo_image'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['demo_image']);
 
        // make db entry of that image
        $image = new Image;
        $image->org_path = 'images' . DIRECTORY_SEPARATOR . $input['demo_image'];
        $image->save();
 
        // defer the processing of the image thumbnails
        ProcessImageThumbnails::dispatch($image);
 
        return Redirect::to('image/index')->with('message', 'Image uploaded successfully!');
    }
}