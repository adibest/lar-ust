<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SantriModel;
use App\Model\Provinsi;

class SantriController extends Controller
{
	public $folder = 'admin.santri';
    public function index()
    {
    	$data['santri'] = SantriModel::orderBy('id', 'desc')->get();
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
            'nama'      => 'required|min:5|max:25',
            'email'     => 'required|max:30|email|unique:santri,email',
            'gender'    => 'required',
            'password'  => 'required|min:5',
        ],$messages);

    	// $santri 			= new SantriModel;
    	// $santri->nama 		= $request->nama;
    	// $santri->email 		= $request->email;
    	// $santri->gender 	= $request->gender;
    	// $santri->password 	= bcrypt($request->password);
    	// $santri->save();

        $santri = SantriModel::create($request->all());

    	return redirect('admin/santri')->with('success', 'Data berhasil diinput');
    }

    public function edit($id)
    {
    	$santri 			= SantriModel::find($id);

    	return view($this->folder.'.edit', compact('santri'));
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
            'nama'      => 'required|min:5|max:25',
            'email'     => 'required|max:30|email|unique:santri,email,'.$id,
            'gender'    => 'required',
            'password'  => 'required|min:5',
        ],$messages);
        
    	// $santri 			= SantriModel::find($id);
    	// $santri->nama 		= $request->nama;
    	// $santri->email 		= $request->email;
    	// $santri->gender 	= $request->gender;
    	// $santri->password 	= bcrypt($request->password);
    	// $santri->save();

        SantriModel::find($id)->update($request->all());

    	return redirect('admin/santri')->with('success', 'Data berhasil diedit');
    }

    public function delete($id)
    {
    	$santri = SantriModel::find($id)->delete();
    	return redirect('admin/santri')->with('success', 'Data berhasil dihapus');
    }
}
