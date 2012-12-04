<?php
$content = '<div class="alert alert-error"><b>List of errors:</b><br>
    ' . $e->getMessage() . '<br><br>
    <button type="button" class="btn" value="back" onClick="history.go(-1);return true;">Back</button>
</div>';