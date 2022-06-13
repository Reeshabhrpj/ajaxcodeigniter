<?php
// if(count($_POST)>0) {
// mysqli_query($this->db,"UPDATE signupform set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', contact='" . $_POST['contact'] . "' ,message='" . $_POST['message'] . "' WHERE id='" . $_POST['id'] . "'");
// $message = "Record Modified Successfully";
// }
// $result = mysqli_query($db,"SELECT * FROM signupform WHERE id='" . $_GET['id'] . "'");
// $row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update User Data</title>
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
    <?php extract($data); ?>
<form method="post" id="editUserForm">
	<div id="editUserModal">
<div style="padding-bottom:5px;">
<h1>User Data</h1>
<div id="success"></div>
</div>
	Id: <br>
	<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
	<input type="number" name="id"  id="id" value="<?php echo $id; ?>">
	<br><br>
	Name: <br>
	<input type="text" name="name" id="name" value="<?php echo $name; ?>">
	<br><br>
	Email :<br>
	<input type="text" name="email" id="email" value="<?php echo $email; ?>">
	<br><br>
	Contact:<br>
	<input type="text" name="contact" id="contact" value="<?php echo $contact; ?>">
	<br><br>
	message:<br>
	<input type="text" name="message" id="message" value="<?php echo $message; ?>">
	<br><br>

	<input type="button" value="update" id="update" onclick="updaterecord()" name="update"><br><br>

</div>
</form>

<script>
function updaterecord(){
    var id = $('#id').val();
	// alert(id);
    var name = $('#name').val();
	// alert(name);
    var email = $('#email').val();
	// alert(email);
    var contact = $('#contact').val();
	// alert(contact);
    var message = $('#message').val();
	//  alert(message);			
   
    $.ajax({
        type : "POST",
        url  : "<?php echo base_url() ?>Signupform/updateuser/",
        dataType : "JSON",
        data : {id:id, name:name, email:email, contact:contact,  message: message},
        success: function(data){
			$('#success').html("Data updated successfully");
		
			}
        
    });
    return false;
}
	</script>
</body>
</html>