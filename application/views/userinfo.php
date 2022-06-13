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
	<h1>USER DATA</h1>

	<div id="body">
		
		<table>  
        <thead>  
            <th>ID</th>  
            <th>NAME</th>  
            <th>EMAIL ID</th>  
            <th>CONTACT</th>  
            <th>MESSAGE</th> 
			<th>ACTION</th> 
			<th>DELETE</th>
            
        </thead>  
        <tbody id="listRecords">  


            <?php  
                foreach($getUserList as $row)  
                {  
                    echo "<tr>  
                                <td>$row->id</td>  
                                <td>$row->name</td>  
                                <td>$row->email</td>  
                                <td>$row->contact</td>  
                                <td>$row->message</td>  
								<td><a href='updatedata?id=".$row->id."'>Update</a></td>
								<td><a href='deletedata?id=".$row->id."'>Delete</a></td>;

                   		  </tr>";  
                }  
            ?>  
        </tbody>  
    </table>  
        <br>
        <br>
	</div>
</div>

<!-- <script>
function listUser(){
	$.ajax({
		type  : 'ajax',
		url   : '<?php echo base_url() ?>Signupform/userlisting',
		async : false,
		dataType : 'json',
		success : function(data){
			var html = '';
			var i;
			for(i=0; i<data.length; i++){
				html += '<tr id="'+data[i].id+'">'+
						'<td>'+data[i].name+'</td>'+
						'<td>'+data[i].email+'</td>'+
						'<td>'+data[i].contact+'</td>'+		                        
						'<td>'+data[i].message+'</td>'+
						'<td style="text-align:right;">'+
							'<a href="javascript:void(0);" class="updatedata" data-id="'+data[i].id+'" data-name="'+data[i].name+'" data-email="'+data[i].email+'" data-contact="'+data[i].contact+'" data-message="'+data[i].message+'">Edit</a>'+' '+
							'<a href="javascript:void(0);" class="deletedata" data-id="'+data[i].id+'">Delete</a>'+
						'</td>'+
						'</tr>'; 
			}
			$('#listRecords').html(html);					
		}
	});
}
</script> -->
</body>
</html>
