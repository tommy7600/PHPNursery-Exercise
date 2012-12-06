<?php
$id = $_GET['id'];
$userToEdit = new User($db);
$userToEdit->GetUserDataById($id);

$content = '<form id="editForm" class="form-horizontal" method="post" action="index.php?action=add">
    <div class="control-group">
        <div class="controls">
            <input type="hidden" name="u_id" id="inputId" required value="' . $userToEdit->GetId() . '" title="Please input user name. Name have to contain min. 1 letter" x-moz-errormessage="Please input user name. Name have to contain min. 1 letter">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputName">Name</label>

        <div class="controls">
            <input type="text" name="u_name" id="inputName" required pattern="[A-z]{1,}" value="' . $userToEdit->GetName() . '" title="Please input user name. Name have to contain min. 1 letter" x-moz-errormessage="Please input user name. Name have to contain min. 1 letter">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputSurname">Surname</label>

        <div class="controls">
            <input type="text" name="u_surname" id="inputSurname" required pattern="[A-z]{1,}" value="' . $userToEdit->GetSurname() . '" title="Please input user surname. Name have to contain min. 1 letter" x-moz-errormessage="Please input user surnam. Name have to contain min. 1 letter">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputPesel">PESEL</label>

        <div class="controls">
            <input type="text" name="u_pesel" id="inputPesel" required pattern="[0-9]{11}" value="' . $userToEdit->GetPesel() . '" title="Please input valid pesel number" x-moz-errormessage="Please input valid pesel number">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputPhone">Phone</label>

        <div class="controls">
            <input type="text" name="u_phone" id="inputPhone" required [0-9]{1,} value="' . $userToEdit->GetPhone() . '" title="Please input user phone number" x-moz-errormessage="Please input user phone number">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>

        <div class="controls">
            <input type="text" name="u_email" id="inputEmail" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" value="' . $userToEdit->GetEmail() . '" title="Please input user email address" x-moz-errormessage="Please input user edmail address">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputAddress">Address</label>

        <div class="controls">
            <input type="text" name="u_address" id="inputAddress" required value="' . $userToEdit->GetAddress() . '" title="Please input user address" x-moz-errormessage="Please input user address">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputPostCode">Postal Code</label>

        <div class="controls">
            <input type="text" name="u_post_code" id="inputPostCode" required pattern="[0-9]{2}-[0-9]{3}" value="' . $userToEdit->GetPostCode() . '" title="Please input postal code in format xx-xxx" x-moz-errormessage="Please input postal code in format xx-xxx">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Role</label>

        <div class="controls">
            <select name="u_role_id">';

$roles = Role::GetRoles($db);

foreach ($roles As $key => $value) {
    $content .= '<option value="' . $value["r_id"] . '" ';
    if ($value["r_id"] == $userToEdit->GetRole())
        $content .= 'selected="selected"';
    $content .= '>' . $value["r_name"] . '</option>';
}

$content .= '</select>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn">Save user changes</button>
        </div>
    </div>
</form>';
?>
