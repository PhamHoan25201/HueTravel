<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repositories\User\UserEloquentRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserEloquentRepository $userRepository){
        $this->userRepository = $userRepository;
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
        $listUser = $this->userRepository->getAll();
        return view('user.index', array('listUser' => $listUser));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
       try {
            DB::beginTransaction();
            $data = $request->all();
        $this->userRepository->create($data);
            DB::commit();
            return redirect()->route('user.index');
        } catch (\Exception $exception) {
            return redirect()->route('user.index');
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
            $user = User::findOrFail($id);
            return view('user.show', array('user' => $user));
        } catch (\Exception $exception){
            return redirect()->route('user.index');
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
            $user = User::findOrFail($id);
            return view('user.edit', array('user' => $user));
        } catch (\Exception $exception){
            return redirect()->route('user.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        
        try {
            DB::beginTransaction();
            $data = $request->all();
            $user = $this->userRepository->update($id, $data);
            DB::commit();
            return redirect()->route('user.index');
        } catch (\Exception $exception) {
            return redirect()->route('user.index');
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
            $this->userRepository->delete($id);
            DB::commit();
            return redirect()->route('user.index');
        } catch (\Exception $exception) {
            return redirect()->route('user.index');
        }
    }
}
