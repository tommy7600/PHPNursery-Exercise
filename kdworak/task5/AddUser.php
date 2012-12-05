<?php

    include 'loader.php';   
    $userService = new \UserService();
    
    if(isSet($_GET['editUser'])
                    && !empty($_GET['editUser']))
            {
                $dbUser = $userService->SelectUserById($_GET['editUser']);

                    $_POST['Role'] = $dbUser->user_Role;
                    $_POST['FirstName'] = $dbUser->user_FirstName;
                    $_POST['LastName'] = $dbUser->user_LastName;
                    $_POST['Pesel'] = $dbUser->user_Pesel;
                    $_POST['Address'] = $dbUser->user_Address;
                    $_POST['PostalCode'] = $dbUser->user_PostalCode;
                    $_POST['Phone'] = $dbUser->user_Phone;
                    $_POST['Email'] = $dbUser->user_Email;
            }
            
    if(isSet($_POST['FirstName'] 
            , $_POST['LastName']
            , $_POST['Role']
            , $_POST['Pesel']
            , $_POST['Address']
            , $_POST['PostalCode']
            , $_POST['Phone']
            , $_POST['Email'])
            
            && !empty($_POST['FirstName'])
            && !empty($_POST['LastName'])
            && !empty($_POST['Role'])
            && !empty($_POST['Pesel'])
            && !empty($_POST['Address'])
            && !empty($_POST['PostalCode'])
            && !empty($_POST['Phone'])
            && !empty($_POST['Email'])
             
            )
    {
        
        // validateEmail
        if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL))
        {
            echo 'wrong email!';
        }
        else if(!filter_var ($_POST['Pesel'], FILTER_VALIDATE_REGEXP,
                array('options' => array('regexp' => '/^[0-9]{11}$/'))))
        {
           echo 'wrong pesel';
        }
        else 
        {
            $params = array
                    (
                        'User_Role' => $_POST['Role'], 
                        'User_FirstName' => $_POST['FirstName'], 
                        'User_LastName' => $_POST['LastName'], 
                        'User_Pesel' => $_POST['Pesel'], 
                        'User_Address' => $_POST['Address'], 
                        'User_PostalCode' => $_POST['PostalCode'],
                        'User_Phone' => $_POST['Phone'], 
                        'User_Email' => $_POST['Email'],
                        'User_CreatedDate' => new DateTime('now')
                    );

                
                if(isSet($_POST['UpdateMode'])
                        && $_POST['UpdateMode'] > -1)
                {
                    array_pop($params);
                    $userService->UpdateUser($params, $_POST['UpdateMode']);
                    header('location:index.php');
                }
                else if(!isSet($_GET['editUser']))
                {
                    $user = new UserWrapper($params);
                    $userService->AddUser($user);
                    header('location:index.php');
                }
                
            }
    }
?>

<html doctype>
    <head>
        <title>Add User</title>
    </head>
    <body>
        <?php
            $rolesService = new RoleService();
            $roles = $rolesService->SelectAll();
        ?>
        <h1>Add new user</h1>
        <form method="post" action="AddUser.php">
            <fieldset>
                <label for="FirstName">First Name:</label>
                <input type="text" name="FirstName" value="<?php if(isSet($_POST['FirstName'])) { echo $_POST['FirstName']; } ?>">
                <br>
                
                <label for="LastName">Last Name:</label>
                <input type="text" name="LastName" value="<?php if(isSet($_POST['LastName'])) { echo $_POST['LastName']; } ?>">
                <br>
                
                <label for="Role">User's Role</label>                
                <select name="Role" itemid="1">
                    <?php
                        foreach($roles as $key => $val)
                        {
                            ?>
                    <option value="<?php echo $val->role_Id; ?>">
                        <?php echo $val->role_Name; ?>
                    </option>
                    <?php
                        }
                    ?>
                </select>
                <br>
                
                <label for="Pesel">Pesel:</label>
                <input type="text" name="Pesel" value="<?php if(isSet($_POST['Pesel'])) { echo $_POST['Pesel']; } ?>">
                <br>
                
                <label for="Address">Address:</label>
                <input type="text" name="Address" value="<?php if(isSet($_POST['Address'])) { echo $_POST['Address']; } ?>">
                <br>
                
                <label for="PostalCode">Postal Code:</label>
                <input type="text" name="PostalCode" value="<?php if(isSet($_POST['PostalCode'])) { echo $_POST['PostalCode']; } ?>">
                <br>
                
                <label for="Phone">Phone:</label>
                <input type="text" name="Phone" value="<?php if(isSet($_POST['Phone'])) { echo $_POST['Phone']; } ?>">
                <br>
                
                <label for="Email">Email:</label>
                <input type="text" name="Email" value="<?php if(isSet($_POST['Email'])) { echo $_POST['Email']; } ?>">
                <br>
                
                <input type="hidden" name="UpdateMode" value="<?php echo (isSet($_GET['editUser'])) ? $_GET['editUser'] : '-1'; ?>">
                
                <button type="submit">Save</button>
                
            </fieldset>
        </form>
    </body>
</html>