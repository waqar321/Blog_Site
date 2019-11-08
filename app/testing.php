<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testing extends Model
{
    protected $table = "test";
    protected $primaryKey = "id";
	protected $fillable = ['name','email'];
	public $timestamps = false;

	
}
