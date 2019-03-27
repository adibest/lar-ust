<form action="{{ url('admin/santri') }}" method="post">
	@csrf
	
	Nama : <input type="text" name="nama"/><br>
	Email : <input type="email" name="email"/><br>
	Gender : 
	<input type="radio" value="1" name="gender"/> L
	<input type="radio" value="0" name="gender"/> P <br>

	Pass : <input type="password" name="password"/><br>

	<input type="submit" value="Submit"/>
</form>