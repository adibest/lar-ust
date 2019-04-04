<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Provinsi;
use App\Http\Controllers\Controller;

class ProvinsiController extends Controller
{
    public $folder = 'admin.provinsi';
    public function index()
    {
    	$data['provinsi'] = Provinsi::orderBy('created_at', 'desc')->get();
    	return view ($this->folder.'.index', $data);
    }

    public function create()
    {
    	return view ($this->folder.'.create');
    }

    public function store(Request $request)
    {
    	$validateData = $request->validate([
    		'nama' => 'required',
    	]);

    	$provinsi 		= new Provinsi;
    	$provinsi->nama = $request->nama;
    	$provinsi->save();

    	return redirect('admin/provinsi')->with('success', 'Data berhasil diinput');
    }

    public function edit($id)
    {
    	$provinsi = Provinsi::find($id);

    	return view($this->folder.'.edit', compact('provinsi'));
    }

    public function update(Request $request)
    {
    	$id 		= $request->id;
    	$validateData = $request->validate([
    		'nama' => 'required',
    	]);

    	$provinsi 		= Provinsi::find($id);
    	$provinsi->nama = $request->nama;
    	$provinsi->save();

    	return redirect('admin/provinsi')->with('success', 'Data berhasil diedit');
    }

    public function delete($id)
    {
    	$guru = Provinsi::find($id)->delete();
    	return redirect('admin/provinsi')->with('success', 'Data berhasil dihapus');
    }
}
