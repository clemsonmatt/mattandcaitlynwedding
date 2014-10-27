<?php
session_start();
if (! isset($_SESSION['user'])) {
    header("location:login.php");
}

include('config.php');
/* check the database */
$sql = "SELECT * FROM rsvp";
$rsvpResult = mysqli_query($con, $sql);

$sql = "SELECT * FROM email ORDER BY id DESC";
$emailResult = mysqli_query($con, $sql);

$sql = "SELECT * FROM honeymoon ORDER BY id DESC";
$honeymoonResult = mysqli_query($con, $sql);

/* count the total number of guests */
$guestCounter = 0;
$totalCounter = 0;
$yesCounter = 0;
foreach ($rsvpResult as $rsvp) {
    if ($rsvp['response'] == 'yes') {
        $yesCounter++;
        $guestCounter += $rsvp['number'];
    }
    $totalCounter++;
}
?>

<?php include("included/header.php"); ?>
<div class="container">
    <br /><br>
    <?php 
    if (isset($_GET['success'])):
        if ($_GET['success'] == 'edit') {
    ?>
            <div class="alert alert-success">
                The RSVP was successfully edited! 
            </div>
    <?php 
        }
        if ($_GET['success'] == 'delete') {
    ?>
            <div class="alert alert-success">
                The RSVP was successfully deleted! 
            </div>
    <?php
        }
    endif;
    ?>

    <legend class="col-lg-12">
        <button class="pull-right btn btn-success" style="margin-top: -5px;">Add RSVP</button>
        <span class="pull-right"  style="margin-right: 50px;"><?php echo 'Yes Responses: '.$yesCounter.'/'.$totalCounter; ?></span>
        <span class="pull-right" style="margin-right: 50px;"><?php echo 'Total Guests: '.$guestCounter; ?></span>
        <h3 class="wedding">Responses</h3>
    </legend>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="max-height: 400px; overflow: auto;">
            <table class="table table-striped table-hover table-condensed">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th># Attending</th>
                    <th>Response</th>
                    <th>Time</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php $i=1; foreach ($rsvpResult as $rsvp): ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $rsvp['name']; ?></td>
                            <td><?php echo $rsvp['phone']; ?></td>
                            <td><?php echo $rsvp['number']; ?></td>
                            <td><?php echo $rsvp['response']; ?></td>
                            <td><?php echo date('m/d/y - h:ia', strtotime($rsvp['created_at'])); ?></td>
                            <td>
                                <a href="editRsvp.php?id=<?php echo $rsvp['id']; ?>">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="glyphicon glyphicon-edit"> Edit</span>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="deleteRsvp.php?id=<?php echo $rsvp['id']; ?>">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="glyphicon glyphicon-remove"> Remove</span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php $i++; endforeach; ?>
                </tbody>
            </table>
        </div>
        <br><br>
        <div class="col-lg-6 col-md-6 col-sm-6" style="max-height: 400px; overflow: auto;">
            <legend><h4 class="wedding">Recieved Messages</h4></legend>
            <table class="table table-striped table-hover table-condensed">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Message</th>
                    <th>Date</th>
                </thead>
                <?php $i=1; foreach ($emailResult as $email): ?>
                    <tr style="cursor:pointer;" class="message-response" id="<?php echo $email['id']; ?>">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $email['name']; ?></td>
                        <td><?php echo substr($email['message'], 0, 30).'...'; ?></td>
                        <td><?php echo date('m/d/y h:ia', strtotime($email['created_at'])); ?></td>
                    </tr>
                <?php $i++; endforeach; ?>
            </table>
            <br>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="max-height: 400px; overflow: auto;">
            <legend><h4 class="wedding">Honeymoon Recomendations</h4></legend>
            <table class="table table-striped table-hover table-condensed">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Message</th>
                    <th>Date</th>
                </thead>
                <?php $i=1; foreach ($honeymoonResult as $honeymoon): ?>
                    <tr style="cursor:pointer;" class="honeymoon-response" id="<?php echo $honeymoon['id']; ?>">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $honeymoon['name']; ?></td>
                        <td><?php echo substr($honeymoon['message'], 0, 30).'...'; ?></td>
                        <td><?php echo date('m/d/y h:ia', strtotime($honeymoon['created_at'])); ?></td>
                    </tr>
                <?php $i++; endforeach; ?>
            </table>
            <br>
        </div>
    </div>
    <br><br>
    <?php include('included/footer.php'); ?>
</div>
