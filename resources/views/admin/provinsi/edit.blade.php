@extends('layouts.app')

@section('title', 'Edit Provinsi')

@section('contentheader')
    <section class="content-header">
      <h1>
        Edit Provinsi
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Provinsi</a></li>
        <li class="active">Edit Provinsi</li>
      </ol>
    </section>
@endsection

@section('content')
   <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data Provinsi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="{{ url('admin/provinsi') }}" method="post" class="form-horizontal">
          	@csrf
            @method('PUT')

          	<div class="form-group">
              <input type="hidden" name="id" value="{{ $provinsi->id }}">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10"> 
                <input type="text" class="form-control" id="inputEmail3" name="nama" value="{{ $provinsi->nama }}">
                @foreach ($errors->get('nama') as $message)
                <div class="text text-danger">
                  {{ $message }}
                </div>
                @endforeach
              </div>
            </div>
          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{ url('admin/provinsi') }}" class="btn btn-primary">Kembali</a>
          <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
        </form>
        <!-- /.box-footer-->
      </div>
    
@endsection