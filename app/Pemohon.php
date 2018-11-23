<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Pemohon extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'pemohon';

	protected $fillable = [
		'nama', 'alamat','ttl','tinggi','pekerjaan'
	];
}
