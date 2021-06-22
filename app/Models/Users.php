<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    protected $table='users';
    protected $fillables=['username','password','gender','cnic','type','contact','email','country','city','address']; 
}
