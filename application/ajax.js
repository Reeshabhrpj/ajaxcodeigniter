function listEmployee(){
	$.ajax({
		type  : 'ajax',
		url   : 'Signupform/userlisting',
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
							'<a href="javascript:void(0);" class="editRecord" data-id="'+data[i].id+'" data-name="'+data[i].name+'" data-email="'+data[i].email+'" data-contact="'+data[i].contact+'" data-message="'+data[i].message+'">Edit</a>'+' '+
							'<a href="javascript:void(0);" class="deleteRecord" data-id="'+data[i].id+'">Delete</a>'+
						'</td>'+
						'</tr>';
			}
			$('#listRecords').html(html);					
		}
	});
}



$('#adduser').submit('click',function(){
    var Name = $('#name').val();
    var email = $('#email').val();
    var contact = $('#contact').val();
    var message = $('#message').val();
    
    $.ajax({
        type : "POST",
        url  : "signupform/register",
        dataType : "JSON",
        data : {name:Name, email:email, contact:contact,  message: message},
        success: function(data){
            $('#name').val("");
            $('#email').val("");
            $('#contact').val("");
            $('#message').val("");
            $('#addUserModal').modal('hide');
            listEmployee();
        }
    });
    return false;
});



$('#editUserForm').on('update',function(){
    var id = $('#id').val();
    var Name = $('#name').val();
    var email = $('#email').val();
    var contact = $('#contact').val();
    var message = $('#message').val();			
   
    $.ajax({
        type : "POST",
        url  : "Signupform/updatedata",
        dataType : "JSON",
        data : {id:id, name:Name, email:email, contact:contact,  message: message},
        success: function(data){
            $("#id").val("");
            $('#name').val("");
            $('#email').val("");
            $('#contact').val("");
            $('#message').val("");
            $('#editUserModal').modal('hide');
            listEmployee();
        }
    });
    return false;
});


$('#deleteUserForm').on('delete',function(){
    var id = $('#deleteid').val();
    $.ajax({
        type : "POST",
        url  : "Signupform/deletedata",
        dataType : "JSON",  
        data : {id:id},
        success: function(data){
            $("#"+empId).remove();
            $('#deleteid').val("");
            $('#deleteUserModal').modal('hide');
            listEmployee();
        }
    });
    return false;
});