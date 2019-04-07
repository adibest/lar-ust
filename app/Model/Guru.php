<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = [
    	'nama', 'email', 'nip', 'gender', 'phone'
    ];
}
