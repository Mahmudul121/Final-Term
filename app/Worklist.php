<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worklist extends Model
{
	protected $table = "worklist";
    protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
