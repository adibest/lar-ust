<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\GuruModel;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    public $folder = 'admin.guru';
    public function index()
    {
    	$data['guru'] = GuruModel::orderBy('created_at', 'desc')->get();
    	return view ($this->folder.'.index', $data);
    }

    public function create()
    {
    	return view ($this->folder.'.create');
    }

    public function store(Request $request)
    {
    	$messages           = [
            'required'  => 'mohon :attribute di isi yang sayang',
            'min'       => 'isilah :attribute minimal :min karakter',
            'max'       => ':attribute maksimal :max karakter to',
        ];
        $validateData       = $request->validate([
            'nama'      => 'required|min:5|max:20',
            'email'     => 'required|max:30|email|unique:guru,email',
            'gender'    => 'required',
            'nip'  		=> 'required|min:15|max:20',
            'phone'		=> 'required|max:14',
        ],$messages);

        $guru 				= new GuruModel;
        $guru->nama			= $request->nama;
        $guru->nip			= $request->nip;
        $guru->gender		= $request->gender;
        $guru->phone		= $request->phone;
        $guru->email		= $request->email;
        $guru->save();

        return redirect('admin/guru')->with('success', 'Data berhasil diinput');
    }

    public function edit($id)
    {
    	$guru 				= GuruModel::find($id);

    	return view($this->folder.'.edit', compact('guru'));
    }

    public function update(Request $request)
    {

    	$messages           = [
            'required'  => 'mohon :attribute di isi yang sayang',
            'min'       => 'isilah :attribute minimal :min karakter',
            'max'       => ':attribute maksimal :max karakter to',
        ];

        $id                 = $request->id;

        $validateData       = $request->validate([
            'nama'      => 'required|min:5|max:20',
            'email'     => 'required|max:30|email|unique:guru,email,'.$id,
            'gender'    => 'required',
            'nip'  		=> 'required|min:15|max:20',
            'phone'		=> 'required|max:14',
        ],$messages);

        $guru 				= GuruModel::find($id);
        $guru->nama			= $request->nama;
        $guru->nip			= $request->nip;
        $guru->gender		= $request->gender;
        $guru->phone		= $request->phone;
        $guru->email		= $request->email;
        $guru->save();

        return redirect('admin/guru')->with('success', 'Data berhasil diedit');
    }

    public function delete($id)
    {
    	$guru = GuruModel::find($id)->delete();
    	return redirect('admin/guru')->with('success', 'Data berhasil dihapus');
    }
}
