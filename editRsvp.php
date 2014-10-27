<?php
session_start();
if (! isset($_SESSION['user'])) {
    header("location:login.php");
}

$id = $_GET['id'];

include('config.php');
$sql = "SELECT * FROM rsvp WHERE id='$id'";
$rsvpResult = mysqli_query($con, $sql);
?>


<?php include("included/header.php"); ?>
<div class="container">
    <br /><br>
    <?php if (isset($_GET['error']) && $_GET['error'] == '1'): ?>
        <div class="alert alert-danger">
            Make sure all fields are filled in. 
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['error']) && $_GET['error'] == '2'): ?>
        <div class="alert alert-danger">
            Indicate how many people are attending. 
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <legend>
                <a href="admin.php">
                    <button class="pull-right btn btn-default" style="margin-top: -5px;">Admin View</button>
                </a>
                <h3 class="wedding">Edit a RSVP</h3>
            </legend>
            <?php
                foreach ($rsvpResult as $rsvp):
            ?>    
                <form class="form-horizontal" action="process_editRsvp.php" method="POST">
                    <div class="form-group">
                        <label class="col-sm-3 col-md-3 col-lg-3 control-label">Name</label>
                        <div class="col-sm-9 col-md-9 col-lg-9">
                            <input name="name" type="text" class="form-control" value="<?php echo $rsvp['name']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-md-3 col-lg-3 control-label">Phone</label>
                        <div class="col-sm-9 col-md-9 col-lg-9">
                            <input name="phone" type="text" class="form-control" value="<?php echo $rsvp['phone']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-md-3 col-lg-3 control-label">Total Number</label>
                        <div class="col-sm-9 col-md-9 col-lg-9">
                            <input name="number" type="text" class="form-control" value="<?php echo $rsvp['number']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-md-3 col-lg-3 control-label">Response</label>
                        <div class="col-sm-9 col-md-9 col-lg-9">
                            <select name="yes-no" class="form-control">
                                <option value="yes" <?php if($rsvp['response']=='yes'){echo 'selected';} ?>>
                                    Yes
                                </option>
                                <option value="no" <?php if($rsvp['response']=='no'){echo 'selected';} ?>>
                                    No
                                </option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-md-offset-3 col-md-offset-3 col-sm-9 col-md-9 col-lg-9">
                            <button type="submit" class="btn btn-default">Save</button>
                        </div>
                    </div>
                </form>
            <?php
                endforeach;
            ?>
        </div>
    </div>
    <br><br>
    <?php include('included/footer.php'); ?>
</div>
