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
    	$data['santri'] = SantriModel::orderBy('id', 'desc')->paginate(6);
    	return view ($this->folder.'.index', $data);
    }

    public function create()
    {
    	return view ($this->folder.'.create');
    }

    public function store(Request $request)
    {
    	$santri 			= new SantriModel;
    	$santri->nama 		= $request->nama;
    	$santri->email 		= $request->email;
    	$santri->gender 	= $request->gender;
    	$santri->password 	= bcrypt($request->password);
    	$santri->save();

    	return redirect('admin/santri')->with('success', 'Data berhasil diinput');
    }

    public function edit($id)
    {
    	$santri 			= SantriModel::find($id);

    	return view($this->folder.'.edit', compact('santri'));
    }

    public function update(Request $request)
    {
    	$id 				= $request->id;
    	$santri 			= SantriModel::find($id);
    	$santri->nama 		= $request->nama;
    	$santri->email 		= $request->email;
    	$santri->gender 	= $request->gender;
    	$santri->password 	= bcrypt($request->password);
    	$santri->save();

    	return redirect('admin/santri')->with('success', 'Data berhasil diedit');
    }

    public function delete($id)
    {
    	$santru = SantriModel::find($id)->delete();
    	return redirect('admin/santri')->with('success', 'Data berhasil dihapus');
    }
}
