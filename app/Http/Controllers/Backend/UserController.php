<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UserStoreRequest;
use App\Http\Requests\Backend\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index()
    {
        $users = User::where('id','!=',1)->orderBy('created_at', 'DESC')->get();
       // dd($users);
        return view('backend.user.index', compact('users'));
    }

   
    public function create()
    {
        $user = new User();
       
        return view('backend.user.create', compact('user'));
        
    }

    public function store(UserStoreRequest $request)
    {
        $valuesToSave = $request->validated();        //dd($valuesToSave);

        User::create($valuesToSave);

        return redirect()->route('users.index')->with([
            'type' => 'success',
            'msg' => 'En la Creación del Nuevo Usuario',
        ]);
    }
   
    public function edit(User $user)
    {
        return view('backend.user.edit', compact('user') );
    }

   
    public function update(User $user, UserUpdateRequest $request)
    {
        $valuesToSave = $request->validated(); 

        $user->update($valuesToSave);

        return redirect()->route('users.index')->with([
            'type' => 'success',
            'msg' => 'En la Edición del Usuario',
        ]);

    }

   
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with([
            'type' => 'success',
            'msg' => 'En la Eliminación del Usuario',
        ]);
    }
}
