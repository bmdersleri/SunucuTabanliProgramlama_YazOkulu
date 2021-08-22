<!DOCTYPE html>
<html>
<head>
	<title>İletişim Formu</title>
	<meta charset="utf-8">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<style type="text/css">
		form
		{
			margin-top: 150px;
		}
	</style>
</head>
<body>
	
	<div class="container">

		<form class="well span8" method="POST" action="iletisim-post.php">
			<?php if ( isset($_GET['success']) ): ?>
				<div class="alert alert-success">Mesajınız başarıyla iletildi.</div>
			<?php endif ?>

			<div class="row">
				<div class="span3">
					<label>Adınız Soyadınız</label> 
					<input class="span3" name="adi_soyadi" type="text" required=""> 

					<label>Telefon</label> 
					<input class="span3" name="telefon" type="text" required=""> 

					<label>Email</label> 
					<input class="span3" name="email" type="email" required=""> 
				</div>
				<div class="span5">
					<label>Mesaj</label> 
					<textarea class="input-xlarge span5" id="message" name="mesaj" rows="10" required=""></textarea>
				</div>
				<button class="btn btn-primary pull-right" type="submit">Gönder</button>
			</div>
		</form>
	</div>
</body>
</html>