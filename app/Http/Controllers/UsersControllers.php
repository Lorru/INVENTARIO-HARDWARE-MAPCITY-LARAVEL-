<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Http\Requests\CreateUsersRequest;
use App\User;
use Illuminate\Support\Facades\Storage;

class UsersControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::pluck('display_name', 'id');
        $users = User::paginate(10);
        return view('users.index', compact(['roles', 'users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUsersRequest $request)
    {
        

        $user = new User;
        $user->name = $request->input('name-user');
        $user->password = $request->input('password');
        $user->email = $request->input('email-user');
        $user->avatar = $request->file('avatar-user')->store('public');
        $user->save();

        $user->roles()->attach($request->roles);

        return redirect()->route('usuarios.index')->with('mensaje', 'El usuario se genero con exito');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('display_name', 'id');
        return view('users.edit', compact(['user', 'roles']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->file('avatar-user'));
        $user = User::findOrFail($id);
        $user->name = $request->input('name-user');
        $user->password = $request->input('password');
        $user->email = $request->input('email-user');

        if($request->hasfile('avatar-user'))
        {
            $user->avatar = $request->file('avatar-user')->store('public');
            $user->save();
        }

        $user->roles()->sync($request->roles);
        
        return back()->with('mensaje', 'El usuario se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        Storage::delete($user->avatar);
        $user->delete();
        return redirect()->route('usuarios.index')->with('mensajeElim', 'El usuario se elimino con exito');
    }
}
