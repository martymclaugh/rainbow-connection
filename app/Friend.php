<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// friends table attributes
class Friend extends Model
{
    protected $fillable = ['id', 'friend_one_id', 'friend_two_id']
}
