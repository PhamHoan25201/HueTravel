<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Requests\AdvertisementRequest;
use \Illuminate\Support\Facades\Validator;
use App\Repositories\Advertisement\AdvertisementEloquentRepository;

class AdvertisementController extends Controller
{
    protected $advertisementRepository;

    public function __construct(AdvertisementEloquentRepository $advertisementRepository){
        $this->advertisementRepository = $advertisementRepository;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$listAdvertisement = Advertisement::all();
        $listAdvertisement = $this->advertisementRepository->getAll();
        return view('advertisement.index', array('listAdvertisement' => $listAdvertisement));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertisementRequest $request)
    {
        //
        //Advertisement::create($request->all());
        $data = $request->all();
        $this->advertisementRepository->create($data);
        return redirect()->route('advertisement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$advertisement = Advertisement::find($id);
        $advertisement = $this->advertisementRepository->find($id);
        return view('advertisement.show', array('advertisement' => $advertisement));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       // $advertisement = Advertisement::find($id);
       $advertisement = $this->advertisementRepository->find($id);
        return view('advertisement.edit', array('advertisement' => $advertisement));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdvertisementRequest $request, $id)
    {
        //
        //$advertisement = Advertisement::find($id);
        //$advertisement->update($request->all());

        
        $data = $request->all();
        $this->advertisementRepository->update($id, $data);
        return redirect()->route('advertisement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //Advertisement::destroy($id);
        $this->advertisementRepository->delete($id);
        return redirect()->route('advertisement.index');
    }
}
