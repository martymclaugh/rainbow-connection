<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //display list of all users
    public function index($id = null) {
      if ($id == null) {
        // if there is no id in the route return all users
        return User::orderBy('id', 'asc')->get();
      } else {
        // otherwise show the specific user
        return $this->show($id)
      }
    }

    // create user function
    public function store(Request $request) {
      $user = new User;

      $user->first_name = $request->input('first_name');
      $user->last_name = $request->input('last_name');
      $user->favorite_color = $request->input('favorite_color');

      $user->save();

      return 'User successfully created with id of ' . $user->id;
    }

    // display specific user
    public function show($id) {
      return User::find($id);
    }

    // seed database
    public function seed($num) {
      // populate database with users
      // populate database with friendships
    }
}
