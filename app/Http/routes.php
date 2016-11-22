<?php

// initial route lists all users (www.rainbowconnection.com)
Route::get('/', 'Users@index');

// User view displays specific user (www.rainbowconnection.com/:user_id)
Route::get('/{id}', 'Users@show');

// Delete friend relationship (www.rainbowconnection.com/users/:friend_one_id/friends/:friend_two_id)
Route::delete('/users/{friend_one_id}/friends/{friend_two_id}')

// Test Endpoint to populate database with n amount of users (www.rainbowconnection.com/:amount_of_users)
// post to users seed function
Route::post('/{amount_of_users}', 'Users@seed')
