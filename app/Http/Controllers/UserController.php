<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);
      return view('accounts.edit', compact('user'));
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

      $nombre = $request->first_name;
      $lastName = $request->last_name;
      $email = $request->email;
      $birth_date = $request->birth_date;
      $username = $request->username;

      $user = User::find($id);
      $user->first_name = $nombre;
      $user->last_name = $lastName;
      $user->email = $email;
      $user->birth_date = $birth_date;
      $user->username = $username;
      $user->save();

      return redirect("/profile");
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
    }

    public function changeProfilePicture(Request $request, $id)
    {
      $user = User::find($id);
      $profilePicture = $request->file('profile_picture')->storeAs("public", $user->email . time() . '.jpg');

      $profileImageSaveAsName = $user->email . time() . '.jpg';
      $upload_path = '../../storage/';
      $profile_image_url = $upload_path . $profileImageSaveAsName;

      $user->profile_picture = $profile_image_url;
      $user->save();

      return redirect("/profile");

    }



}
