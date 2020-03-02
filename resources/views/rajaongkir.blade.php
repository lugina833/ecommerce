<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	data province
	<form>
		<label for="province">Pilih Province</label>
		<select id="province">
			@foreach($daftarProvinsi as $province)
			<option>{{$province}}</option>
			@endforeach
		</select>
	</form>
</body>
</html>