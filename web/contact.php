<!-- masthead -->
<div id="masthead">
    <span class="head"><span class="orangized">Aitor Ibaceta</span></span><span class="subhead">Contact Information</span>
    <ul class="breadcrumbs">
        <li><a href="index.php">home</a></li>
        <li>/ contact</li>
    </ul>
</div>
<!-- ENDS masthead -->


<!-- page content -->
<div id="page-content">

    <!-- form -->
    <script type="text/javascript" src="js/form-validation.js"></script>
    <form id="contactForm" action="#" method="post">
        <h3 class="heading">Contact me using this form</h3>
        <p>...or you can use one of the Social Networks listed at the left column.</p>
        <fieldset>
            <div>
                <input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
                <label>Name</label>
            </div>
            <div>
                <input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
                <label>Email</label>
            </div>
            <div>

                <input name="web"  id="web" type="text" class="form-poshytip" title="Enter your website" />
                <label>Website</label>
            </div>
            <div>
                <textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
            </div>

            <!-- send mail configuration -->
            <input type="hidden" value="aitor.ibaceta@gmail.com" name="to" id="to" />
            <input type="hidden" value="Contact from aritoru.com" name="subject" id="subject" />
            <input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
            <!-- ENDS send mail configuration -->

            <p><input type="button" value="Send" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
        </fieldset>

    </form>
    <p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
    <!-- ENDS form -->

    
    
</div>
<!-- ENDS content -->

<!-- sidebar -->
<aside id="sidebar">
	<div class="block">
		<h4>Other classic methods</h4>
		<ul>
			<li><img src="img/icon-mobile.png" alt="phone">&nbsp;+34 605 386 235</li>
			<li><img src="img/icon-email.png" alt="phone">&nbsp;aitor.ibaceta@gmail.com</li>
		</ul>

	</div>
</aside>
<div class="clearfix"></div>
<!-- ENDS sidebar -->

</div>
<!-- ENDS content -->

<div class="clearfix"></div>
<div class="shadow-main"></div>
