<h1>Kontakt</h1>
<?php if($sent): ?>
<div class="well">
    Wiadomość została wysłana.
</div>
<?php else: ?>
<form method="post" class="well">
    <?php
        echo Helper::generateInput('mail', $mail, 'E-mail', $mail_error);
        echo Helper::generateInput('signature', $signature, 'Podpis', $signature_error);
        echo Helper::generateInput('subject', $subject, 'Temat', $subject_error);
        echo Helper::generateTextarea('body', $body, $body_error);
    ?>

    <input type="submit" name="submit" class="btn">
</form>
<?php endif; ?>