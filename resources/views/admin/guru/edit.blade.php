@extends('layouts.app')

@section('title', 'Edit guru')

@section('contentheader')
    <section class="content-header">
      <h1>
        Edit guru
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">guru</a></li>
        <li class="active">Edit guru</li>
      </ol>
    </section>
@endsection

@section('content')
   <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data guru</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="{{ url('admin/guru') }}" method="post" class="form-horizontal">
          	@csrf
            @method('PUT')

          	<div class="form-group">
              <input type="hidden" name="id" value="{{ $guru->id }}">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10"> 
                <input type="text" class="form-control" id="inputEmail3" name="nama" value="{{ $guru->nama }}">
                @foreach ($errors->get('nama') as $message)
                <div class="text text-danger">
                  {{ $message }}
                </div>
                @endforeach
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">NIP</label>
              <div class="col-sm-10"> 
                <input type="text" class="form-control" id="inputEmail3" name="nip" value="{{ $guru->nip }}">
                @foreach ($errors->get('nip') as $message)
                <div class="text text-danger">
                  {{ $message }}
                </div>
                @endforeach
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10"> 
                <input type="email" class="form-control" id="inputEmail3" name="email" value="{{ $guru->email }}">
                @foreach ($errors->get('email') as $message)
                <div class="text text-danger">
                  {{ $message }}
                </div>
                @endforeach
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
              <div class="col-sm-10">
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" id="optionsRadios2" value="1" {{ ($guru->gender)?'checked':'' }}> Laki-laki
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" id="optionsRadios2" value="0" {{ ($guru->gender)?'':'checked' }}> Perempuan
                  </label>
                </div>
                @foreach ($errors->get('gender') as $message)
                <div class="text text-danger">
                  {{ $message }}
                </div>
                @endforeach
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
              <div class="col-sm-10"> 
                <input type="text" class="form-control" id="inputEmail3" name="phone" value="{{ $guru->phone }}">
                @foreach ($errors->get('phone') as $message)
                <div class="text text-danger">
                  {{ $message }}
                </div>
                @endforeach
              </div>
            </div>
          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{ url('admin/guru') }}" class="btn btn-primary">Kembali</a>
          <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
        </form>
        <!-- /.box-footer-->
      </div>
    
@endsection