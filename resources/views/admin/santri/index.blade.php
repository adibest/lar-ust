@extends('layouts.app')

@section('contentheader')
<section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>
@endsection

@section('content')
   <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        	
          <table class="table table-bordered">
          	<tr>
          		<th style="width: 10px">No</th>
          		<th>Nama</th>
          		<th>Email</th>
          		<th>Gender</th>
          		<th>Created At</th>
          		<th>Action</th>
          	</tr>
          	@php
          	$nomor = 1;
          	@endphp
          	@foreach($santri as $row)
          		<tr>
          			<td>{{ $nomor++ }}</td>
          			<td>{{ $row->nama }}</td>
          			<td>{{ $row->email }}</td>
          			<td>{{ ($row->gender)?'Laki-laki':'Perempuan' }}</td>
          			<td>{{ $row->created_at }}</td>
          			<td>
          				<form action="{{ url('admin/santri/'.$row->id.'/delete') }}" method="post">
          				<a href="{{ url('admin/santri/'.$row->id.'/edit') }}" class="btn btn-primary btn-xs">Edit</a>
          					@csrf
          					@method('DELETE')
          					<button type="submit" class="btn btn-danger btn-xs">DELETE</button>
          				</form>

          			</td>
          		</tr>
          	@endforeach
       		{{$santri->links()}}
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{ url('admin/santri/create') }}" class="btn btn-primary pull-right">Create</a>
        </div>
        <!-- /.box-footer-->
      </div>
    
@endsection