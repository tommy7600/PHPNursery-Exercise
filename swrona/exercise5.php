<h3>Exercise 5</h3>

<div class="bs-docs-example">

    <?php
    
    require_once("modules/autoloader.php");
    
    $e5c = new Exercise5controller();

    // Check if operation requested.
    if ((!empty($_POST)) && (isset($_POST['op']))) {
        if ($_POST['op'] == 'add') User::addUser($_POST);
        if ($_POST['op'] == 'delete') User::deleteUserById($_POST['id']);
        if ($_POST['op'] == 'edit') User::editUser($_POST);
        header('location:index.php?page=exercise5');
    }
    //var_dump($_POST);
    echo '<form class="form-search" action="index.php?page=exercise5" method="post" name="searchForm" style="float:right;">
    <input type="text" name="searchText" class="input-medium search-query">
    <button type="submit" class="btn">Search</button>
    </form>';
    
    // Table header row.
    echo '<table class="table table-striped"><tr>';
    foreach($e5c->userHeaders As $id => $header)
        echo '<th>' . $header . '</th>';
    echo '</tr>';

    // User rows.
    foreach(User::getUsers((isset($_POST['searchText']) && !empty($_POST['searchText'])) ? $_POST['searchText'] : null) As $id => $user) {
        echo '<tr>';
        $userParams = $user->getAllParams();
        foreach($e5c->userParams As $id => $param) {
            echo '<td>' . $userParams[$param] . '</td>';
        }
        echo '<td>
            <form action="index.php?page=exercise5" method="post" name="deleteForm' . $userParams['id'] . '" style="padding: 0px; margin: 0px; float:left;">
            <a href="index.php?page=exercise5" onclick="document.forms[\'deleteForm' . $userParams['id'] . '\'].submit();"><i class="icon-remove"></i></a>
            <input type="hidden" value="delete" name="op" />
            <input type="hidden" value="' . $userParams['id'] . '" name="id" />
            </form> 
            <a href="#" onclick="editUser(\'' . 
                $userParams['id'] . '\', \'' . 
                $userParams['role_id'] . '\', \'' . 
                $userParams['name'] . '\', \'' . 
                $userParams['surname'] . '\', \'' . 
                $userParams['pesel'] . '\', \'' . 
                $userParams['address'] . '\', \'' . 
                $userParams['zipcode'] . '\', \'' . 
                $userParams['email'] . '\', \'' . 
                $userParams['mobile'] . '\');"><i class="icon-pencil"></i></a>
            </td></tr>';
    }

    // Add new user row.
    $select = '<select name="role_id" id="role_id" style="width:120px;">';
    foreach($e5c->userRoles As $id => $name) $select .= '<option value="' . $id . '">' . $name . '</option>';
    $select .= '</select>';
    echo '<form action="index.php?page=exercise5" method="post"><tr>
        <td> </td> 
        <td>' . $select . '</td>
        <td><input type="text" name="name" id="name" style="width:60px;" /></td>
        <td><input type="text" name="surname" id="surname" style="width:60px;" /></td>
        <td><input type="text" name="pesel" id="pesel" style="width:90px;" /></td>
        <td><input type="text" name="address" id="address" style="width:80px;" /></td>
        <td><input type="text" name="zipcode" id="zipcode" style="width:45px;" /></td>
        <td><input type="text" name="email" id="email" style="width:115px;" /></td>
        <td><input type="text" name="mobile" id="mobile" style="width:80px;" /></td>
        <td></td>
        <td style="text-align: left;">
        <button type="submit" class="btn" id="addButton" style="width: 90px;">Add user</button>
        <button type="reset" class="btn" id="cancelButton" onclick="cancelEditUser()" style="display: none; width: 90px;">Cancel</button>
        <input type="hidden" value="add" name="op" id="op" />
        <input type="hidden" value="0" name="id" id="id1" /></form>
        </td>
        </tr></table>';

    ?>

</div>

<pre class="prettyprint">
    Too much code, div has overblown (booom).
</pre>

<script>
function editUser(id, role_id, name, surname, pesel, address, zipcode, email, mobile)
{
$("#addButton").html('Save');
$("#op").val("edit");
$("#cancelButton").css('display', 'block');

$("#id1").val(id);
$("#role_id").val(role_id);
$("#name").val(name);
$("#surname").val(surname);
$("#pesel").val(pesel);
$("#address").val(address);
$("#zipcode").val(zipcode);
$("#email").val(email);
$("#mobile").val(mobile);

}
function cancelEditUser()
{
$("#addButton").html('Add user');
$("#op").val("add");
$("#cancelButton").css('display', 'none');
}
</script>