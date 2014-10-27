<?php
include('config.php');

$sql = "SELECT * FROM honeymoon ORDER BY id DESC";
$result = mysqli_query($con, $sql);
?>

    <?php include("included/header.php"); ?>
    <div class="container">
        <div class="modal fade" id="my-modal">
          <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="wedding">Honeymoon Destination Suggestion</h3>
            </div>    
            <div class="modal-body">
                <h4 class="wedding col-lg-offset-2 col-md-offset-2 col-sm-offset-2">Where should we go?</h4>
                <br>
                <form class="form-horizontal" method="post" action="honeymoonComment.php">
                    <div class="form-group">
                        <label class="col-sm-2 control-label dark-grey">Name</label>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label dark-grey">Message</label>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <textarea name="message" class="form-control" id="message" placeholder="Message" rows="4"></textarea>
                            <!-- <button type="button" class="btn btn-sm pull-right" id="add-link">
                                <span class="glyphicon glyphicon-link"></span> Add a link
                            </button> -->
                            <div id="show-link" style="display:none;">
                                <br><br>
                                <div class="well">
                                    <button type="button" class="pull-right" id="close-link">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </button>
                                    <br>
                                    Text to show: <input class="form-control col-lg-8 col-md-8 col-sm-8" id="link-text">
                                    <br>
                                    Link: <input class="form-control col-lg-8 col-md-8 col-sm-8" id="link-href">
                                    <br><br><br>
                                    <button type="button" class="btn" id="add-text-link">Add Link</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
          </div>
        </div>

        <br /><br>
        <?php if (isset($_GET['success']) == '1'): ?>
            <div class="alert alert-success">
                Thank you for your recomendation! 
            </div>
        <?php endif; ?>
        <?php if (isset($_GET['error']) == '1'): ?>
            <div class="alert alert-danger">
                Please fill out all fields.
            </div>
        <?php endif; ?>
        <legend class="col-lg-12">
            <h3 class="wedding">Honeymoon</h3>
        </legend>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h4 class="wedding">Recomendations</h4>
                <br>
                <div style="max-height: 300px; overflow: auto;">
                    <table class="table table-striped table-condenced" style="font-size:14px;">
                        <?php foreach ($result as $r): ?>
                            <tr>
                                <td>
                                    <h4>
                                        <?php echo $r['name']; ?>
                                        <span style="font-size:14px; color:#999;" class="pull-right">
                                            <?php echo date('m/d/y', strtotime($r['created_at'])); ?>
                                        </span>
                                    </h4>
                                    <span style="color: #555;"><?php echo $r['message']; ?></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
                <h4 class="wedding">Help Us Decide</h4>
                <p>
                    We haven't decided where we want to go yet! Leave a comment
                    for your suggestion. Make sure to put any links
                    to good deals you find too. Oh! And don't forget to contribute
                    to our funds on the right!
                </p>
                <br>
                <button class="btn btn-default btn-lg col-lg-12 col-md-12 col-sm-12" data-toggle="modal" data-target="#my-modal">
                    Suggest A Destination
                </button>
                <br>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <h4 class="wedding">Help! We're poor!</h4>
                <p>
                    Help us have that dream honeymoon by contributing to our
                    trip fund. See below for ways to contribute.
                </p>
                <br><br>
                <center>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHFgYJKoZIhvcNAQcEoIIHBzCCBwMCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYCfXeGmGrX7lF9Y4IX381IMFvfgck+6r9Y6sKak+HQmmhbG0D/ZXpg+LulKKBFgktnknZ6e/sAqIIdKTb7qySLqqxCbkkaQky8tsDeBP85G5S43CFLyYtRXKjMTvIR5WHFsxRy0t15kPkLAOpIJZbzCkSo8EPV7Ae2Hk9/izuwOPzELMAkGBSsOAwIaBQAwgZMGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQInI0iZIWUscyAcEhZEKHCE4/vO2sqiZ4yzqBBJggB/vDvyZS2lEao34enjaRQ1nuYfP+mBKbANgVZq0SSPv5P8y6CsnErCU52kGFY0wLVAOVofIZaVPeztZmCDVRmrUTfQzDPmvIrePjQJoB31wNNna/zMgaTKTXobRWgggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0xNDA4MjIyMTE1MzBaMCMGCSqGSIb3DQEJBDEWBBQ57zZZOGFnwyqSXipF7iPkowpiIjANBgkqhkiG9w0BAQEFAASBgKwrZXM3NBEhU3YW8pFHcJTcKfCYmj3qA6sRFbzZDKzHzK1OpGebLtRWUe8amLeNciTuHvs12BUCFg8V2PINNpYJsORC8k7a5roy6/5lQBrUlGUIe+RymcrnwMLrf+9f2vAkGQpiNn+wLshsGAeKYJ7xqhQipeuyeIz3ZI5T103H-----END PKCS7-----
                    ">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
                </center>
            </div>
        </div>
        <br><br>
        <?php include('included/footer.php'); ?>
    </div>
