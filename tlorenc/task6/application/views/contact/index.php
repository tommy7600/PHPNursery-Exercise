<div class="row">
    <div class="span16">
        <form method="post" action="contact" id="contactform">
            <fieldset>
                <legend>Send Us a Message</legend>

                <?php if (isset($hasError)): ?>
                    <p class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        Please check if you\'ve filled all the fields with valid information and try again. Thank you.
                    </p>
                <?php endif ?>
                <?php if (isset($emailSent) && $emailSent == true): ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <p><strong>Message Successfully Sent!</strong></p>

                        <p>Thank you for using our contact form, <strong><?php echo $name ?></strong>! Your email
                            was
                            successfully sent and we will be in touch with you soon.</p></div>
                <?php endif ?>

                <div class="clearfix">
                    <label for="name">
                        Your Name
                    </label>

                    <div class="input">
                        <input type="text" name="contactname" id="name" value="" class="span6 required" role="input"
                               required pattern="[A-z\s]{1,}" placeholder="Name"/>
                    </div>
                </div>

                <div class="clearfix">
                    <label for="phone">
                        Your Phone Number
                    </label>

                    <div class="input">
                        <input type="text" name="phone" id="phone" value="" class="span6 required" role="input" required
                               pattern="[0-9]{1,}" placeholder="Phone number"/>
                    </div>
                </div>


                <div class="clearfix">
                    <label for="email">
                        Your Email
                    </label>

                    <div class="input">
                        <input type="text" name="email" id="email" value="" class="span6 required email" role="input"
                               required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" placeholder="Email address"/>
                    </div>
                </div>

                <div class="clearfix">
                    <label for="subject">
                        Subject
                    </label>

                    <div class="input">
                        <input type="text" name="subject" id="subject" class="span6 required" role="select" required
                               placeholder="Subject"/>
                    </div>
                </div>

                <div class="clearfix">
                    <label for="message"> Message</label>

                    <div class="input">
                        <textarea rows="8" name="message" id="message" class="span10 required" role="textbox" required
                                  placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="actions">
                    <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn primary"
                           title="Click here to submit your message!"/>
                    <input type="reset" value="Clear Form" class="btn" title="Remove all the data from the form."/>
                </div>
            </fieldset>
        </form>
    </div>
    <!--form -->
</div><!--row -->