<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserProfile;


class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user_profile = UserProfile::all();
        return view('admin.userProfiles.index')->with('userProfiles', $user_profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.userProfiles.create', compact('user_profile', 'user_profile'));
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
        $user_profile = new UserProfile;
        $user_profile->user_id = $request->input('user_id');
        $user_profile->address = $request->input('address');
        $user_profile->phone = $request->input('phone');
        $user_profile->avatar = $request->input('avatar');
        $user_profile->facebook = $request->input('facebook');
        $user_profile->twitter = $request->input('twitter');
        $user_profile->instagram = $request->input('instagram');
        $user_profile->save();
        return redirect('admin/userProfile')->with('message', 'data berhasil ditambahkan!');
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
        $user_profile = UserProfile::find($id);
        return view('admin.userProfiles.edit', compact('user_profile'));
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
        $user_profile = UserProfile::find($id);
        $user_profile->user_id = $request->input('user_id');
        $user_profile->address = $request->input('address');
        $user_profile->phone = $request->input('phone');
        $user_profile->avatar = $request->input('avatar');
        $user_profile->facebook = $request->input('facebook');
        $user_profile->twitter = $request->input('twitter');
        $user_profile->instagram = $request->input('instagram');
        $user_profile->save();
        return redirect('admin/userProfile')->with('message', 'data berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user_profile = UserProfile::find($id)->delete();
        return redirect('admin/userProfile')->with('message', 'data berhasil dihapus!');
    }
}
