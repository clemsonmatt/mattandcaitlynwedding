<?php include('included/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <br><br>
            <legend><h3 class="wedding">RSVP</h3></legend>
            <form class="form-horizontal" method="post" action="process_rsvp.php">
                <center><h4>
                    We look forward to celebrating with you!<br>
                    Please respond by April 2015.<br><br>
                </h4></center>

                <div class="form-group">
                    <div class="col-sm-3 col-md-3 col-lg-3"></div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <?php 
                            if (isset($_GET['error'])) {
                                if ($_GET['error']=='1') {
                                    echo '<div class="alert alert-danger">* Please fill out all required fields</div>';
                                } elseif ($_GET['error']=='2') {
                                    echo '<div class="alert alert-danger">* Please indicate how many people are attending</div>';
                                }
                            }
                        ?>
                    </div>
                </div>

                <!-- yes/no -->
                <div class="radio form-group">
                    <label>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <input type="radio" name="yes-no" class="pull-right" id="yes-radio" value="yes" style="margin-right: 10px;">
                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-9" style="margin-left: -10px;">
                            Yes, we wouldn't miss it!
                        </div>
                    </label>
                </div>
                <div class="radio form-group">
                    <label>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <input type="radio" name="yes-no" class="pull-right" id="no-radio" value="no" style="margin-right: 10px;">
                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-9" style="margin-left: -10px;">
                            No, we will not be able to attend.
                        </div>
                    </label>
                </div>
                <br><br>

                <div class="form-group">
                    <label class="col-sm-3 col-md-3 col-lg-3 control-label">Name <b style="color:#F00;">*</b></label>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <input name="name" type="text" class="form-control" placeholder="First &amp; Last">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-md-3 col-lg-3 control-label">Phone <b style="color:#F00;">*</b></label>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <input name="phone" type="text" class="form-control" placeholder="123-456-7890">
                    </div>
                </div>

                <!-- toggle guest number -->
                <div class="form-group" id="guest-number" style="display: none;">
                    <label class="col-sm-3 col-md-3 col-lg-3 control-label">Number Attending <b style="color:#F00;">*</b></label>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <input name="number" type="text" class="form-control" placeholder="Total Number">
                    </div>
                </div>
                <!-- <div class="form-group" id="email" style="display: none;">
                    <label class="col-sm-3 col-md-3 col-lg-3 control-label">Email</label>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <input name="email" type="email" class="form-control" placeholder="Optional Email" value="">
                    </div>
                </div> -->

                <div class="form-group">
                    <div class="col-sm-offset-3 col-md-offset-3 col-md-offset-3 col-sm-9 col-md-9 col-lg-9">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br><br>
    <?php include('included/footer.php'); ?>
</div>
