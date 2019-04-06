<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SantriModel extends Model
{
    protected $table = 'santri';

    protected $fillable = [
    	'nama', 'email', 'gender', 'password', 'provinsi_id'
    ];

    public function provinsi()
    {
    	return $this->hasMany(Provinsi::class, 'provinsi_id');
    }
}
