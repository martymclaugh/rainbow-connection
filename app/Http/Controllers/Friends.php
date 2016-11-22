<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Friends extends Controller
{
    // display all friends
    public function index($id) {
      // set user to user with id of $id
      $user = User::find($id)
      // find all friends of that user
      return $user->allFriends()
    }

    // delete friend
    public function destroy(Request $request) {
      $user = User::find($request->input('id'));
      // logic to find and delete friend request below
    }
}
