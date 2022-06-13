<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Signup Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	table, th, td {
 		 border:1px solid black;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>SignUp Form</h1>

	

	<div id="body">
	<div id="success"></div>
		<form action="<?php echo base_url().'signupform/register' ?>" method="post" id="addUserForm">
		<div id="addUserModal">
			<label for="id">ID</label><br>
			<input type="number" id="id" name="id" placeholder="ID"><br><br>

			<label for="name">Name</label><br>
			<input type="text" id="name" name="name" placeholder="Name"><br><br>

			<label for="email">Email</label><br>
			<input type="email" id="email" name="email" placeholder="Email id"><br><br>

			<label for="contact">Contact</label><br>
			<input type="contact" id="contact" name="contact" placeholder="Contact"><br><br>

			<label for="field1">Your Message</label><br>
			<textarea name="message" id="message" cols="21" rows="5" placeholder="Message"></textarea><br><br>

			<input type="button" value="Submit" name="submit" onclick="addrecord()"><br><br>
			</div>
		</form>	

	</div>
</div>
	<script>
		
		function addrecord(){
		var id = $('#id').val();
		var name = $('#name').val();
		var email = $('#email').val();
		var contact = $('#contact').val();
		var message = $('#message').val();
		
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url() ?>signupform/register",
			dataType : "JSON",
			data : {id:id, name:name, email:email, contact:contact,  message: message},
			success: function(data){
				$('#success').text("Data added successfully");
				
			}
		});
		return false;
	}
	
	</script>
</body>
</html>
