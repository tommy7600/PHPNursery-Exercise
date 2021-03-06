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
            include "Role.php";
            include "User.php";
            include "config.php";
            
            $extPdo = new ExtednedPdo(Config::dbhost, Config::dbusr, Config::dbpass);
            
            echo '<div class="container" id="wrapper">';
            echo '<div class="row">';
			
            $extPdo = new ExtednedPdo(Config::dbhost, Config::dbusr, Config::dbpass);
			$roles = userMenager::GetRoles($extPdo);
			$id = $_GET['userId'];
			$user = userMenager::GetUserById($id, $extPdo);

			echo '<div class="span6 offset3">
                        <div class="well">
                        <form action="index.php?action=3&userId='.$id.'" method="POST">
                            <fieldset>
                                <legend>Zaktualizuj uzytkownika</legend>
								
								<label>Imie</label>
                                <input type="text" placeholder="'.$user->getImie().'" name="imie">
                                
                                <label>Nazwisko</label>
                                <input type="text" placeholder="'.$user->getNazwisko().'" name="nazwisko">
                                
                                <label>PESEL</label>
                                <input type="text" placeholder="'.$user->getPesel().'" name="pesel">
                                
                                <label>Adres zamieszkania</label>
                                <input type="text" placeholder="'.$user->getAdres_zamieszkania().'" name="adres">
                                
                                <label>Kod pocztowy</label>
                                <input type="text" placeholder="'.$user->getKod_pocztowy().'" name="kod">
                                
                                <label>Telefon</label>
                                <input type="text" placeholder="'.$user->getTelefon().'" name="telefon">
                               
                                <label>E-mail</label>
                                <input type="text" placeholder="'.$user->getEmail().'" name="email"><br>';
                                
								echo '<div class="control-group">
											<label class="control-label">Rola:</label>
										<div class="controls">
											<select name="rola">';
								foreach($roles as $role)
								{
									echo '<option  value="'.$role->getId().'">'.$role->getNazwa().'</option>';
								}
								echo '</select>
										</div>
										</div>
								<button type="submit" class="btn">Submit</button>
                            </fieldset>
                        </form>
                        </div>
                        </div>';

            echo '</div>';
            echo '</div>';
        ?>
    </body>
</html>
