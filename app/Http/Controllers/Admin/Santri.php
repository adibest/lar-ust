<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\SantriModel;
use App\Http\Controllers\Controller;

class Santri extends Controller
{
	public $folder = 'admin.santri';
    public function index()
    {
    	$data['santri'] = SantriModel::orderBy('id', 'desc')->paginate(3);
    	return view ($this->folder.'.index', $data);
    }

    public function create()
    {
    	return view ($this->folder.'.create');
    }

    public function store(Request $request)
    {
    	$santri = new SantriModel;
    	$santri->nama = $request->nama;
    	$santri->email = $request->email;
    	$santri->gender = $request->gender;
    	$santri->password = bcrypt($request->password);
    	$santri->save();

    	return redirect('admin/santri')->with('success', 'Data berhasil diinput');
    }
}
