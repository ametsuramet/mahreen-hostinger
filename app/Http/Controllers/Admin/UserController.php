<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\UserProfile;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.users.index')->with('users', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->remember_token = $request->input('remember_token');
        $user->role = $request->input('role');
        $user->save();
        $user_profile = new UserProfile;
        $user_profile->user_id = $user->id;
        $user_profile->address = $request->input('address');
        $user_profile->phone = $request->input('phone');
        if ($request->hasFile('avatar')) {
            $destinationPath = public_path().'/images/';
            $filename = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move($destinationPath, $filename);
            $user_profile->avatar = $filename;
        }
        $user_profile->facebook = $request->input('facebook');
        $user_profile->twitter = $request->input('twitter');
        $user_profile->instagram = $request->input('instagram');
        $user_profile->save();
        return redirect('admin/user')->with('message', 'data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $user = User::find($id);
         $user_profile = UserProfile::find($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->remember_token = $request->input('remember_token');
        $user->role = $request->input('role');
        $user->save();
        $user_profile = UserProfile::find($user->profile->id);
        $user->profile->user_id = $user->id;
        $user->profile->address = $request->input('address');
        $user->profile->phone = $request->input('phone');        
        if ($request->hasFile('avatar')) {
            $destinationPath = public_path().'/images/';
            $filename = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move($destinationPath, $filename);
            $user->profile->avatar = $filename;
        }
        $user->profile->facebook = $request->input('facebook');
        $user->profile->twitter = $request->input('twitter');
        $user->profile->instagram = $request->input('instagram');
        $user->profile->save();
        return redirect('admin/user')->with('message', 'data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect('admin/user')->with('message', 'data berhasil dihapus!');
    }
}
