$(document).ready(function(){
	var mem_id;
	
	DisplayData();
	
	$('#update').hide();
	
	$('#save').on('click', function(){
		if($('#firstname').val() == "")
			{
			error_first_name = 'First Name is required';
			$('#error_first_name').text(error_first_name);
			$('#firstname').css('border-color', '#cc0000');
			}
			else{
				error_first_name = '';
				$('#error_first_name').text(error_first_name);
				$('#firstname').css('border-color', '');
			}
		if($('#lastname').val() == ""){
			error_last_name = 'Last Name is required';
			$('#error_last_name').text(error_last_name);
			$('#lastname').css('border-color', '#cc0000');
			}
			else
			{
				error_last_name = '';
				$('#error_last_name').text(error_last_name);
				$('#lastname').css('border-color', '');
			}
		 
		if($('#address').val() == ""){
				error_address = 'E-mail is required';
				$('#error_address').text(error_address);
				$('#address').css('border-color', '#cc0000');
		}else{	
			error_address = '';
			$('#error_address').text(error_address);
			$('#address').css('border-color', '');
		}
		
		
		
		
		
		if(error_first_name != '' || error_last_name != ''|| error_address != '')
		{
			return false;
		}
		else{
			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var address = $('#address').val();
			
			$.ajax({
				url: 'save_query.php',
				type: 'POST',
				data: {
					firstname: firstname,
					lastname: lastname,
					address: address
				},
				success: function(data){
					 $('#firstname').val('');
					 $('#lastname').val('');
					 $('#address').val('');
					 DisplayData();
				}
			});
		}
		
	});
	
	function DisplayData(){
		$.ajax({
			url: 'data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete', function(){
		var id = $(this).attr('name');
		
		$.ajax({
			url: 'delete_query.php',
			type: 'POST',
			data: {
				id: id
			},
			success: function(data){
				DisplayData();
				$('#update').hide();
				$('#save').show();	
				$('#firstname').val('');
				$('#lastname').val('');
				$('#address').val('');
			}
		});
	})
	
	$(document).on('click', '.edit', function(){
		var id = $(this).attr('name');
		
		$.ajax({
			url: 'edit.php',
			type: 'POST',
			data: {
				id: id
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				mem_id = getArray.mem_id;
				
				$('#firstname').val(getArray.firstname);
				$('#lastname').val(getArray.lastname);
				$('#address').val(getArray.address);
				
				$('#update').show();
				$('#save').hide();	
			}
		})
	});
	
	$('#update').on('click', function(){
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var address = $('#address').val();
		
		
		$.ajax({
			url: 'update_query.php',
			type: 'POST',
			data: {
				id: mem_id,
				firstname: firstname,
				lastname: lastname,
				address: address
			},
			success: function(){
				DisplayData();
				$('#firstname').val('');
				$('#lastname').val('');
				$('#address').val('');
				
				
				
				$('#update').hide();
				$('#save').show();	
				
				mem_id = "";
			}
		});
	});
});