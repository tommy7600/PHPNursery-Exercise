<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="boostrap/css/bootstrap.css" rel="stylesheet">
        <link href="boostrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="boostrap/css/moje.css" rel="stylesheet">

        <script src="boostrap/js/jquery-1.8.2.min.js"></script>
        <script src="boostrap/js/bootstrap.js"></script>
        <script src="boostrap/js/core.js"></script>
    </head>
    <body>
        <?php
            include "ExtendedPdo.php";
            include "UserMenager.php";
            include "User.php";
            include "Role.php";
            include "HtmlFormatter.php";
            include "config.php";
            
            $extPdo = new ExtednedPdo(Config::dbhost, Config::dbusr, Config::dbpass);
            
            echo '<div class="container" id="wrapper">';
            echo '<div class="row">';
            
			if(isset($_GET['action']))
			{
				if($_GET['action'] == 1) //delete user
				{
					$userId = $_GET['userId'];
					userMenager::DeleteUserById($userId, $extPdo);
				}
				
				if($_GET['action'] == 2) //add new user
				{
					$user = new User(0, $_POST['rola'], $_POST['imie'], $_POST['nazwisko'], $_POST['pesel'], $_POST['adres'], $_POST['kod'], $_POST['telefon'], $_POST['email'], date('y-m-d'));
					userMenager::AddUser($user, $extPdo);
					echo '<div class="span8 offset2">';
					echo '<div class="alert alert-success"> Udalo sie dodac nowego uzytkownika.';
					echo '<button type="button" class="close" data-dismiss="alert">X</button>';
					echo '</div></div>';
				}
				
				if($_GET['action'] == 3) //update user
				{
					$userId = $_GET['userId'];

					$toUpd = array();
					
					if(!empty($_POST['rola']) && isset($_POST['rola']))
						$toUpd['role_id'] = $_POST['rola'];
					if(!empty($_POST['imie']) && isset($_POST['imie']))
						$toUpd['imie'] = $_POST['imie'];
					if(!empty($_POST['nazwisko']) && isset($_POST['nazwisko']))
						$toUpd['nazwisko'] = $_POST['nazwisko'];
					if(!empty($_POST['pesel']) && isset($_POST['pesel']))
						$toUpd['PESEL'] = $_POST['pesel'];
					if(!empty($_POST['adres']) && isset($_POST['adres']))
						$toUpd['adres_zamieszkania'] = $_POST['adres'];	
					if(!empty($_POST['kod']) && isset($_POST['kod']))
						$toUpd['kod_pocztowy'] = $_POST['kod'];	
					if(!empty($_POST['telefon']) && isset($_POST['telefon']))
						$toUpd['telefon'] = $_POST['telefon'];
					if(!empty($_POST['email']) && isset($_POST['email']))
						$toUpd['email'] = $_POST['email'];
					
					userMenager::UpdateUserById($toUpd, $extPdo, $userId);
				}

				
			}
			
            $users = userMenager::GetUsers($extPdo);
            $roles = userMenager::GetRoles($extPdo);
            echo HtmlFormatter::usersTable($users, $roles);
            echo '</div>';
            echo '</div>';
        ?>
    </body>
</html>
