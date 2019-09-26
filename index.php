<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=windows-1251" http-equiv="Content-Type">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Test Tabl</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		
		
		<div id="user_dialog" title="Add Data">
			<form method="POST" id="user_form">
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" name="firstname" id="firstname" class="form-control"/>
					<span id="error_first_name" class="text-danger"></span>			
				</div>
								
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" name="lastname" id="lastname" class="form-control"/>
					<span id="error_last_name" class="text-danger"></span>
				</div>		
				<div class="form-group">
					<label>E-mail</label>
					<input type="text" name="email" id="address" class="form-control"/>
					<span id="error_address" class="text-danger"></span>
				</div>
			
		
		
			
			
			
			<br />
			<center><button type="submit" id="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button><button type="submit" id="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button></center>
		</form>
			</div>
		
		
		
		
		
		<br />
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>E-mail</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="data"></tbody>
		</table>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
</html>