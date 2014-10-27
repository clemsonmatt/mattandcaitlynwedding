<?php
session_start();
if (! isset($_SESSION['user'])) {
    header("location:login.php");
}

$id = $_GET['id'];

include('config.php');
$sql = "SELECT * FROM honeymoon WHERE id='$id'";
$honeymoonResult = mysqli_query($con, $sql);
?>


<?php include("included/header.php"); ?>
<div class="container">
    <br /><br>
    <?php if (isset($_GET['error']) == '1'): ?>
        <div class="alert alert-danger">
            Make sure all fields are correctly filled in.
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
                <h3 class="wedding">Edit a Honeymoon Response</h3>
            </legend>
            <?php
                foreach ($honeymoonResult as $honeymoon):
            ?>    
                <form class="form-horizontal" action="process_editHoneymoon.php" method="POST">
                    <div class="form-group">
                        <label class="col-sm-3 col-md-3 col-lg-3 control-label">Name</label>
                        <div class="col-sm-9 col-md-9 col-lg-9">
                            <input name="name" type="text" class="form-control" value="<?php echo $honeymoon['name']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 col-md-3 col-lg-3 control-label">Message</label>
                        <div class="col-sm-9 col-md-9 col-lg-9">
                            <textarea name="message" rows="6" class="form-control col-lg-12 col-md-12 col-sm-12"><?php echo $honeymoon['message']; ?></textarea>
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
