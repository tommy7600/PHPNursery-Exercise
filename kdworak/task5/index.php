<?php

    include 'loader.php';

    $userService = new \UserService();
    
    if(isSet($_GET['deleteUser']) 
            && !empty($_GET['deleteUser']))
    {
        $userService->RemoveUser($_GET['deleteUser']);
    }
    
    try 
    {   
        if(isSet($_GET['searchText'])
                && !empty($_GET['searchText']))
        {
            $users = $userService->SelectAllBySearch($_GET['searchText']);
        }
        else
        {
            $users = $userService->SelectAll();
        }
    }catch(PDOException $e){
        echo "cannot connect to the database";
    } 
?>

<html doctype>
    <head>
        <title>Manage Users</title>
        
        <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/core.js"></script>
        
    </head>
    <body>
        <h1>Manage Users</h1>
        <form method="get" action="">
            
            <label for="searchText">Search:</label>
            <input type="search" name="searchText" value="<?php if(isSet($_GET['searchText'])){ echo $_GET['searchText']; } ?>" >
            <a href="index.php">
                <button type="submit">
                    <i class="icon-search"></i>
                </button>
            </a>
        </form>
        <table class="table table-striped table-hover">
            <tr>
                <th>Actions</th>
                <th>ID</th>
                <th>Role</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Pesel</th>
                <th>Address</th>
                <th>PostalCode</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Created Date</th>
            </tr>
            
           <?php
                  foreach($users as $key => $row)
                  {
            ?>
            
            <tr>
                <td>
                    
                    <a href="<?php echo 'AddUser.php?editUser=' . $row->user_Id; ?>">
                        <button class="btn" formaction="#" >
                            <p>update<i class="icon-refresh"></i></p>
                        </button>
                    </a>
                    
                    <a href="<?php echo 'index.php?deleteUser=' . $row->user_Id; ?>" >
                        <button class="btn" formaction="#" >
                            <p>delete<i class="icon-remove"></i></p>
                        </button>
                    </a>
                    
                </td>
                              
                <td><?php echo $row->user_Id ?> </td>
                <td><?php echo $row->user_Role ?></td>
                <td><?php echo $row->user_FirstName ?> </td>
                <td><?php echo $row->user_LastName ?> </td>
                <td><?php echo $row->user_Pesel ?> </td>
                <td><?php echo $row->user_Address ?> </td>
                <td><?php echo $row->user_PostalCode ?> </td>
                <td><?php echo $row->user_Phone ?> </td>
                <td><?php echo $row->user_Email; ?> </td>
                <td><?php echo $row->user_CreatedDate ?> </td>
            </tr>

            <?php
                    } // foreach
            ?>
        </table>
        
        <a href="AddUser.php">
            <button class="btn">
                Add New User<i class="icon-plus"></i>
            </button>
        </a>
        
    </body>
</html>
