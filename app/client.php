<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
	protected $table='clients';
    protected $fillable = ['firstname', 'lastname', 'email', 'contacts'];
}
