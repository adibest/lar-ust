<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    protected $table = 'guru';
    protected $fillable = [
    	'nama', 'email', 'nip', 'gender', 'phone'
    ];
}
