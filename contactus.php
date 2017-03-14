<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    
    <body>
        <div id="body-bg">
        
        <div class="container1 no-padding border-bottom" style="">
        
            
            <?php include("header.php"); ?>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            
            
            
            <!-- Portfolio -->
               <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Column -->
                        <div class="col-md-9">
                            <!-- Main Content -->
                            <div class="headline">
                                <h2>Contact Form</h2>
                            </div>
                            <p>Thank you for your interest in our architecture and interior design services, please feel free to reach us using any of the contact information listed below.</p>
                            <br>
                            <!-- Contact Form -->
                           <form name="form" method="post" action="app/action/sendmail.php">
                                <label>Name</label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-6 col-md-offset-0">
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                <label>Email
                                    <span class="color-red">*</span>
                                </label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-6 col-md-offset-0">
                                        <input class="form-control" type="email" name="email">
                                    </div>
                                </div>
                                <label>Mobile
                                    <span class="color-red">*</span>
                                </label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-6 col-md-offset-0">
                                        <input class="form-control" type="tel" name="mobile">
                                    </div>
                                </div>
                                
                                <label>Message</label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-8 col-md-offset-0">
                                        <textarea rows="8" class="form-control" name="message"></textarea>
                                    </div>
                                </div>
                                <p>
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </p>
                            </form>
                            <!-- End Contact Form -->
                            <!-- End Main Content -->
                        </div>
                        <!-- End Main Column -->
                        <!-- Side Column -->
                        <div class="col-md-3">
                            <!-- Recent Posts -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Contact Info</h3>
                                </div>
                                <div class="panel-body">
                                    
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="fa-phone color-primary"></i>+91-7428632187</li>
                                        <li>
                                            <i class="fa-envelope color-primary"></i>info@daksinerma.com
</li>
                                        <li>
                                            <i class="fa-home color-primary"></i>http://www.daksinerma.com</li>
                                    </ul>
                                    <ul class="list-unstyled">
                                        <li>
                                            <strong class="color-primary">Monday-Friday:</strong>9am to 6pm</li>
                                        <li>
                                            <strong class="color-primary">Saturday:</strong>10am to 3pm</li>
                                        <li>
                                            <strong class="color-primary">Sunday:</strong>Closed</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End recent Posts -->
                            <!-- About -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">About</h3>
                                </div>
                                <div class="panel-body">
                                    Daksinerma is an architectural organization established in 2016 provides architectural services in architecture, engineering, interior, town planning, vastu and other related services and actively engaged in the creation of contextually appropriate solutions within an increasingly changing world
                                </div>
                            </div>
                            <!-- End About -->
                        </div>
                        <!-- End Side Column -->
                    </div>
                </div>
            </div>
            <!-- End Portfolio -->
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            
            <!-- Footer -->
           <?php include("footer.php");?>
         </div>
</div>
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->