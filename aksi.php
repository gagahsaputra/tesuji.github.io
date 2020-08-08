<!DOCTYPE html>
<html>
<head>
	<title>Nomor Yang dituju</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

<?php
if (isset($_POST['simpan']))
{ $nomor=$_POST['nomor'];
echo '
		<table class="table table-hover col-md-3 mt-3 ml-3">
		  <thead>
		    <tr>
		      <th scope="col">Nomor Tujuan :</th>
		      <th scope="col">'.$nomor.'</th>
		    </tr>
		  </thead>
		</table>
		<a href="https://api.whatsapp.com/send?phone='.$nomor.'" class="btn btn-primary ml-3"><i class="fa fa-whatsapp"></i>Kirim Pesan</a>


' ;}
?>