<?php include 'header.php'; ?>
    <!-- Page Content
    ================================================== --> 
    <div class="row"><!--Container row-->
        <div class="span8 contact"><!--Begin page content column-->
            <h2>Contact Us</h2>
            <p>If you have some question or any doubt, please don't hesitate on send us an email. Thank you.</p>
            <form action="#" id="contact-form">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Name">
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Email Address">
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-globe"></i></span>
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Website URL">
                </div>
                <textarea class="span6"placeholder="Your message..."></textarea>
                <div class="row">
                    <div class="span2">
                        <input type="submit" class="btn btn-inverse" value="Send Message">
                    </div>
                </div>
            </form>
        </div> <!--End page content column-->
    </div><!-- End container row -->
<?php include 'footer.php'; ?>