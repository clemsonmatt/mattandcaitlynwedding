<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="modal hide fade" id="myModal" aria-hidden="true">
    <div class="modal-header">
        <h3>CAIF Login</h3>
    </div>    
    <div class="modal-body">
        <form method="post" action="<?php echo base_url().'login/index'; ?>">
            <label>Username</label>
            <input type="text" class="span4" name="myusername" id="myusername" /><br />
            <label>Password</label>
            <input type="password" class="span4" name="mypassword" id="mypassword" /><br /><br />
            <button type="submit" class="btn btn-success">Login</button>
            <button type="reset" class="btn">Clear</button>
        </form>
        <input type="checkbox" id="forgotpw" name="forgotpw" /> Forgot Password?
        <br /><br />
        <div id="forgot_show" style="display:none;">
        <form method="post" action="<?php echo base_url().'login/reset_pw'; ?>">
            <small>Type your username and an email will be sent with a new password</small>
            <br /><br />
            <label>Username</label>
            <input type="text" class="span4" name="username" /><br />
            <input type="submit" class="btn btn-success" value="Reset Password" />
        </form>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>

</body>
</html>