<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    //
    protected $table = "complain";
    protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
