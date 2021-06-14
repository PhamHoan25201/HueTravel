<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        

        try {
            DB::beginTransaction();
            $data = $request->all();
            $this->advertisementRepository->create($data);
            DB::commit();
            return redirect()->route('advertisement.index')->with("success",trans('tpl.admin.add.success'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('advertisement.index')->with("error",trans('tpl.admin.add.fail'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        try {
            DB::beginTransaction();
            $advertisement = Advertisement::findOrFail($id);
            DB::commit();
            return view('advertisement.show', array('advertisement' => $advertisement));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('advertisement.index')->with("error",trans('tpl.admin.notFound'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        try {
            DB::beginTransaction();
            $advertisement = Advertisement::findOrFail($id);
            DB::commit();
            return view('advertisement.edit', array('advertisement' => $advertisement));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('advertisement.index')->with("error",trans('tpl.admin.notFound'));        
        }
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
        try {
            DB::beginTransaction();
            $data = $request->all();
            $this->advertisementRepository->update($id, $data);
            DB::commit();
            return redirect()->route('advertisement.index')->with("success",trans('tpl.admin.update.success'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('advertisement.index')->with("error",trans('tpl.admin.update.fail'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $this->advertisementRepository->delete($id);
            DB::commit();
            return redirect()->route('advertisement.index')->with("success",trans('tpl.admin.delete.success'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('advertisement.index')->with("error",trans('tpl.admin.delete.fail'));
        }
    }
}
