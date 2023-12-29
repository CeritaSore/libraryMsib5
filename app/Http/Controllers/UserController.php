<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liststatus = ['Active', 'Not Active', 'Banned'];
        $listrole = ['Admin', 'Staff', 'Guest'];
        $users = User::orderBy('id', 'desc')->get();
        return view('backend.user.index', compact('users','liststatus', 'listrole'));
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
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //
         User::create([
            'users' => $request->input('nama')

        ]);
        return redirect('/kelola');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        //
        $request->validate([
            'nama' => 'required|in:Active,Not Active,Banned',
            'role' => 'required|in:Administrator,Staff,Guest',
        ]);
        $user = User::find($id);
        $user->status = $request->status;
        $user->role = $request->role;
        $user->save();
        return redirect('/kelola');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect('/kelola');
    }

    public function password(){
        $data['tittle'] = 'Change Password';
        return view('user/password', $data);
    }

    public function password_action(Request $request){
        $request->validate([
            'old_password'=>'required|current_password',
            'new_password'=>'required',
            'new_password_confirmation'=>'required|same:new_password',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password Berhasil Diubah');
    }
}
