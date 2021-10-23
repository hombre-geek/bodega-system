<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index()
    {
        return view('backend.user.index');
    }

   
    public function create()
    {
       
        return view('backend.user.create');
        
    }

    public function store(UserStoreRequest $request)
    {
        $valuesToSave = $request->validated();        //dd($valuesToSave);

        User::create($valuesToSave);

        return redirect()->route('users.index')->with([
            'type' => 'success',
            'msg' => 'En la creación del Nuevo Usuario',
        ]);
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
