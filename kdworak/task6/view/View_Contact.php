<?php
    if(isSet($_POST['email'],
            $_POST['topic'],
            $_POST['signature'],
            $_POST['message'])
            
            && !empty($_POST['email'])
            && !empty($_POST['topic'])
            && !empty($_POST['signature'])
            && !empty($_POST['message'])
            )
    {           
        $message = 'Email from ' . $_POST['signature'] . ' (' . $_POST['email'] . ') <br>';
        $message .= $_POST['message'];
        mail('admin@gmail.com', $_POST['topic'], $message);
?>
    <h3>Email has been sent!</h3>
    <a href="/task6/contact/contact/">
        <button>Back to contact form</button>
    </a>
<?php
    } else {
            
?>

<h2>Contact Us!</h2>
<form action="" method="post">
    <fieldset class="span6">
        <legend>
            Contact Us!
        </legend>
        
        <label for="email">Your email:</label>
        <input type="email" name="email" required>
        
        <label for="topic">Subject:</label>
        <input type="text" name="topic" required>
        <br>
        
        <textarea name="message" required></textarea>
        
        <label for="signature">Signature:</label>
        <input type="text" name="signature" required>
        
        <button type="submit">Send!</button>
            
    </fieldset>
</form>
<?php
    }
?>