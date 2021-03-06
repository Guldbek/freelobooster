<?php

namespace App\Http\Controllers;

use App\User;
use App\Booster;
use App\Booster_group;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $users = User::all();
    return view('admin.users.users', compact('users'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('admin.users.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {

    $request->validate([
      'name' => 'required|max:255',
      'email' => 'required|unique:users|max:255',
      'role' => 'required',
      'password' => 'required|min:6'
    ]);

    $user = User::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'password' => bcrypt($request['password']),
      'role' => $request['role']
    ]);

    $users = User::all();

    Session::flash('message', 'User '.$user->name.' succesfully addeed!');

    // redirect
    return redirect('admin/users');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\User  $user
  * @return \Illuminate\Http\Response
  */
  public function show(User $user)
  {
    $user = $user::where('id', '=', $user->id)->with(['boosterJobs', 'userJobs', 'orders', 'orders.info', 'orders.info.rankTo', 'orders.info.rankFrom', 'booster', 'booster.boosterGroup'])->first();

    $boosterGroups = Booster_group::all();

    $data = [
      'user' => $user,
      'boostergroups' => $boosterGroups
    ];

    return view('admin.users.profile', compact('data'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\User  $user
  * @return \Illuminate\Http\Response
  */
  public function edit(User $user)
  {


  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\User  $user
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, User $user)
  {
    $user->update($request->all());

    if($request->has('role')){
      if($request->get('role') == 3) {
        $booster = new Booster;
        $booster->create([
          'user_id' => $user->id,
          'booster_group_id' => 2,
          'payment_discount' => 0,
        ]);
      }
    }

    Session::flash('message', 'User succesfully updated!');

    return back();
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\User  $user
  * @return \Illuminate\Http\Response
  */
  public function destroy(User $user)
  {
    $user->delete();

    $users = User::all();

    Session::flash('message', 'User succesfully deleted!');
    // redirect
    return redirect('admin/users');
  }
}
