<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/contact-details.css" type="text/css">
    <title></title>
</head>
<body>
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contact Us
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href=".">Home</a>
                </li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Map Column -->
        <div class="col-md-8">
            <!-- Embedded Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3860.357900124287!2d121.03435381484074!3d14.635613989780216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s45+Scout+Madri%C3%B1an+St.%2C+South+Triangle%2C+Quezon+City!5e0!3m2!1sen!2sph!4v1492310263106"
                    width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
            </iframe>

            <!--
            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
              src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed">
            </iframe>-->
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4">
            <h3>Contact Details</h3>

            <p>
                45 Scout Madriñan St.,<br> South Triangle, Quezon City<br>
            </p>
            <p><i class="fa fa-phone"></i>
                <abbr title="Phone">P</abbr>: +634635859</p>
            <p><i class="fa fa-mobile-phone"></i>
                <abbr title="Mobile">P</abbr>: +639279297129</p>
            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email">E</abbr>: <a href="mailto:kaida529@yahoo.com.ph">kaida529@yahoo.com.ph</a>
            </p>
            <!--<p><i class="fa fa-clock-o"></i>
                <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>-->
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="https://www.facebook.com/kaidagallerymanila/"><i class="fa fa-facebook-square fa-2x"></i> kaidagallerymanila</a>
                </li>
                <br>
                <li>
                    <a href="https://www.instagram.com/kaidacontemporarygallery/"><i class="fa fa-instagram fa-2x"></i> kaidacontemporarygallery</a>
                </li>
                <!--
                <li>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>-->
            </ul>
        </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
        <div class="col-md-8">
            <h3>Send us a Message</h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; www.kaidacontemporary.com 2017</p>
                <br>
                <p class="webadmin-footer">Website Dev and Admin:<br> Michael Paolo Cariaso<br>mpcariaso@gmail.com</p>
            </div>
        </div>
    </footer>

</div>
</body>
</html>