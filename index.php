<!--  -->
<html>
<head>
	<title>Whatsapp</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div >
	<form method="post"
	action="aksi.php" >
	
	
		<!-- <input type="text" name="nomor" placeholder="Nomor..." > -->
		<div class="form-group col-md-3">
			<h3>Selamat Datang</h3>
	    <label for="exampleInputEmail1">Masukkan Nomor Whatsapp : </label>
	    <input type="text" class="form-control" name="nomor" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor...">
	    <small id="emailHelp" class="form-text text-muted">Gunakan Kode negara seperti 6281xxxxxxx</small>
	    
	  </div>
	  	<div class="form-group col-md-3">
	  	<button type="submit" name="simpan" value="simpan" class="btn btn-primary">Submit</button>
	  </div>
		
	</form>
	</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
