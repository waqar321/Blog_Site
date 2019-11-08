<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register_model extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";	
	protected $fillable = ['name','email','password'];
	public $timestamps = false;
	
}
