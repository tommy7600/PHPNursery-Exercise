<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta name="robots" content="noindex,nofollow">
		<meta name="description" content="Your own library">
		<meta name="keywords" content="key, key, key">
		
		<title> Users Manager </title>
		
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link href="css/extra.css" rel="stylesheet">
		
	</head>
	
	<body>
		<div class="container" id="wrapper">
			<div id="header">
				<h1>Add a user</h1>
			</div>
			<div class="well" id="addForm">
				<form class="navbar-form" action = 'index.php' method = "POST" enctype = "multipart/form-data">
					<div class="row">
						<div class="span2 offset3"><label>Name</label></div>
						<div class="span6"><input type="text" value="" name="name"/></div>
					</div>
					<div class="row">
						<div class="span2 offset3"><label>Surname</label></div>
						<div class="span6"><input type="text" value="" name="surname"/></div>
					</div>
					<div class="row">
						<div class="span2 offset3"><label>PESEL</label></div>
						<div class="span6"><input type="text" value="" name="pesel"/></div>
					</div>
					<div class="row">
						<div class="span2 offset3"><label>Adress</label></div>
						<div class="span6"><input type="text" value="" name="road" placeholder="road"/></div>
					</div>
					<div class="row">
						<div class="span6 offset5"><input type="text" value="" name="postCode" placeholder="post code"/></div>
					</div>
					<div class="row">
						<div class="span6 offset5"><input type="text" value="" name="city" placeholder="city"/></div>
					</div>
					<div class="row">
						<div class="span2 offset3"><label>Phone</label></div>
						<div class="span6"><input type="text" value="" name="phone"/></div>
					</div>
					<div class="row">
						<div class="span2 offset3"><label>E-mail</label></div>
						<div class="span6"><input type="text" value="" name="email"/></div>
					</div>
					<div class="row">
						<div class="span2 offset5">
							<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									Role
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a tabindex="-1" href="#">Action</a></li>
									<li><a tabindex="-1" href="#">Another action</a></li>
								</ul>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="span2 offset7">
						<button class="btn btn-success pull-right" type="submit" name="addUser"/>
							Add
						</button>
						</div>
					</div>
					
					
				</form>
			</div>
		</div>
		
	
	
		<script src="js/jquery-1.8.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>