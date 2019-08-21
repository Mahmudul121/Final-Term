<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rent extends Model
{
    //
    protected $table = "rentcar";
    protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
