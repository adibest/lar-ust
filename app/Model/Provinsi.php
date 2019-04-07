<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    protected $fillable = [
    	'nama'
    ];

    public function santri()
    {
    	return $this->belongsTo(Santri::class, 'provinsi_id');
    }
}
