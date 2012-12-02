<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
         <link href="/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
         <link href="/css/forms.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="container">
            <div class="span5 offset3 well">
                <?php
                    include_once 'Config.php';
                    include_once 'PdoExtension.php';
                    include_once 'Role.php';
                    include_once 'RoleCommon.php';
                    include_once 'User.php';
                    include_once 'UserCommon.php';
                    if(isset($_GET['id']))
                    {
                        $user = UserCommon::GetUserById($_GET['id']);
                        echo '<form action="Controller_AddUser.php?id='.$user->GetId().'" name="input" method="post">';
                    }
                    else
                    {
                        $user = new User();
                        echo '<form action="Controller_AddUser.php" name="input" method="post">';
                    }
                ?>
                    <div class="span2 span-left">
                        <p class="form-label">Name</p>
                        <p class="form-label">Second name</p>
                        <p class="form-label">Pesel</p>
                        <p class="form-label">Address</p>
                        <p class="form-label">Post code</p>
                        <p class="form-label">Phone</p>
                        <p class="form-label">Email</p>
                        <p class="form-label">Birth date</p>
                        <p class="form-label">Role</p>
                    </div>
                    <div class="span3 span-left">                       
                        <?php
                            echo  '<input type="text" name="firstName" value="'.$user->GetFirstName().'">';
                            echo  '<input type="text" name="secondName" value="'.$user->GetSecondName().'">';
                            echo  '<input type="text" name="pesel" value="'.$user->GetPesel().'">';
                            echo  '<input type="text" name="address" value="'.$user->GetAddress().'">';
                            echo  '<input type="text" name="postCode" value="'.$user->GetPostCode().'">';
                            echo  '<input type="tel" name="phone" value="'.$user->GetPhone().'">';
                            echo  '<input type="email" name="email" value="'.$user->GetEmail().'">';
                            echo  '<input type="date" name="birthDate" value="'.$user->GetBirthDate().'">';  
                           
                            $roles = RoleCommon::GetRoles();
                            echo '<select name="roleId">';
                            foreach ($roles as $role) 
                            {
                                echo '<option value="'.$role->GetId();
                                if($user->GetId() != 0 )
                                {
                                    echo 'selected';
                                }
                                echo '">'.$role->GetName().'</option>';
                            }
                            echo '</select>';
                            if(isset($_GET['error']) && $_GET['error']!='')
                            {
                                 echo '<div class="alert alert-error">'.$_GET['error'].' </div>';
                            }
                        ?>
                    </div>
                    <div class="span3 offset1">
                        <?php
                        if($user->GetId() != 0 )
                        {
                            echo '<input type="submit" value="Edit user" class="btn btn-success">';;
                        }
                        else
                        {
                            echo  '<input type="submit" value="Add user" class="btn btn-success">';
                        }
                        ?>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        <script src="js/jquery-1.8.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
