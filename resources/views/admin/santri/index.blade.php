<table>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Created At</th>
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
		</tr>
	@endforeach
	{{$santri->links()}}
</table>