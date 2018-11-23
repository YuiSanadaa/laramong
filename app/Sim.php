<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Sim extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'sim';

	protected $fillable = [
		'nama', 'alamat','ttl','tinggi','pekerjaan','no_sim','berlaku'
	];
	public function pemohon()
	{
		return $this->belongsTo(Pemohon::class);
	}
}
