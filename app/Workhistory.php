<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workhistory extends Model
{
    protected $table = "workhistory";
    protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
