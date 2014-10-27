
    <?php include("included/header.php"); ?>
    <div class="container">
        <br /><br>
        <?php if (isset($_GET['success']) == '1'): ?>
            <div class="alert alert-success">
                Thank you for your message! 
            </div>
        <?php endif; ?>
        <legend class="col-lg-12">
            <h3 class="wedding">Contact Us</h3>
        </legend>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
                <center><h4 class="wedding">Send us a message</h4></center>
                <form class="form-horizontal" action="contactComment.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label dark-grey">Name</label>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label dark-grey">Email</label>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label dark-grey">Message</label>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <textarea name="message" class="form-control" id="message" placeholder="Message" rows="4">
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4">
                <center><h4 class="wedding">Contact Info</h4></center>
                <p>
                    <address>
                        <strong class="wedding">Address</strong><br>
                        215 Harbor Dr.<br>
                        Seneca, SC 29672<br>
                    </address>

                    <address>
                        <strong class="wedding">Matthew Ellis</strong><br>
                        <a href="mailto:#">mellis0292@gmail.com</a><br>
                        <abbr title="Matt's Phone">P:</abbr> (864) 247-9619
                    </address>

                    <address>
                        <strong class="wedding">Caitlyn Dickerson</strong><br>
                        <a href="mailto:#">caitdson7851@gmail.com</a><br>
                        <abbr title="Caitlyn's Phone">P:</abbr> (864) 723-0881
                    </address>
                </p>
            </div>
        </div>
        <br><br>
        <?php include('included/footer.php'); ?>
    </div>
