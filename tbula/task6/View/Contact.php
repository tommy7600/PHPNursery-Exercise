<div class="span11 well">
    <form action="/Contact/sendEmail" name="input" method="post">
        <div class="row">
            <div class="span1">
                <p class="form-label">Email</p>
                <p class="form-label">Signature</p>
                <p class="form-label">Subject</p>
            </div>
            <div class="span3">
                <input type="text" name = "address" 
                <?php
                    if(isset($address))
                    {
                        echo 'value='.$address;
                    }
                ?>
                >
                <input type="text" name = "signature" 
                <?php
                    if(isset($signature))
                    {
                        echo 'value='.$signature;
                    }
                ?>
                >
                <input type="text" name = "subject"
                <?php
                    if(isset($subject))
                    {
                        echo 'value='.$subject;
                    }
                ?>
                >
            </div>
            <div class="span">
                Text
            </div>
            <div class="span4">
                <textarea id="emailText" name="emailContent"
                <?php
                    if(isset($emailContent))
                    {
                        echo 'value='.$emailContent;
                    }
                ?>         
                ></textarea>
            </div>
        </div>
        <div class="row">
            
        <?php
            if(isset($message))
            {
                echo '<div class="span10 alert alert-success">'.$message.'</div>';
            }
            else if(isset($error))
            {
                echo '<div class="span10 alert alert-error">'.$error.'</div>';
            }
        ?>
        </div>
        <div class="offset4">
            <input type="submit" value="Send" class="btn">
        </div>
    </form>
</div>
