<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="/css/forms.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="container">       
            <div class="span10">
                <div class="span5 well">
                    <form action="index.php" name="input" method="post">
                       <div class="span2 span-left">
                           <p class="form-label">Name</p>
                           <p class="form-label">Second name</p>
                           <p class="form-label">Pesel</p>
                           <p class="form-label">Email</p>
                       </div>
                       <div class="span3 span-left">
                           <input type="text" name="firstName">
                           <input type="text" name="secondName" >
                           <input type="text" name="pesel">
                           <input type="email" name="email">                      
                       </div>
                       <div class="span3 offset1">
                           <input type="submit" value="Search" class="btn btn-success">
                           <a href="View/AddUser.php" class="btn btn-success">Add user</a>
                       </div>
                   </form>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>First name</th>
                        <th>Second name</th>
                        <th>Pesel</th>
                        <th>Address</th>
                        <th>Post code</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Birth date</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        include_once 'AutoLoad.php';
                        if(isset($_POST['firstName']))
                        {
                            $firstName = $_POST['firstName'];
                        }
                        else
                        {
                            $firstName='';
                        }
                        if(isset($_POST['secondName']))
                        {
                            $secondName = $_POST['secondName'];
                        }
                        else
                        {
                            $secondName='';
                        }
                        if(isset($_POST['pesel']))
                        {
                            $pesel = $_POST['pesel']; 
                        }
                        else
                        {
                            $pesel='';
                        }
                        if(isset($_POST['email']))
                        {
                            $email = $_POST['email'];
                        }
                        else
                        {
                            $email='';
                        }
                        
                        $users = Common_User::FindUser($firstName, $secondName, $pesel, $email);
                        foreach ($users as $user) 
                        {
                            echo '<tr>';
                            echo '<td>'.$user->GetFirstName().'</td>';
                            echo '<td>'.$user->GetSecondName().'</td>';
                            echo '<td>'.$user->GetPesel().'</td>';
                            echo '<td>'.$user->GetAddress().'</td>';
                            echo '<td>'.$user->GetPostCode().'</td>';
                            echo '<td>'.$user->GetPhone().'</td>';
                            echo '<td>'.$user->GetEmail().'</td>';
                            echo '<td>'.$user->GetBirthDate().'</td>';
                            echo '<td>'.$user->GetRole()->GetName().'</td>';
                            echo '<td>
                                <a href="Controller/DeleteUser.php?id='.$user->GetId().'"><i class="icon-remove"></i></a>
                                <a href="View/AddUser.php?id='.$user->GetId().'"><i class="icon-pencil"></i></a>
                                </td>';
                            echo '</tr>';
                        }
                    ?>
                </table>
            </div>
        </div>
        <script src="/js/jquery-1.8.2.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>
