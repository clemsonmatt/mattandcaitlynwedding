<?php include('included/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <br><br>
            <?php if (isset($_GET['error']) == 1): ?>
                <div class="alert alert-danger">Wrong username or password</div>
            <?php endif; ?>
            <legend><h3 class="wedding">Login</h3></legend>
            <form class="form-horizontal" method="post" action="process_login.php">
                <div class="form-group">
                    <label class="col-sm-3 col-md-3 col-lg-3 control-label">Username</label>
                    <div class="col-sm-9 col-md-9 col-lg-9">
                        <input name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-md-3 col-lg-3 control-label">Password</label>
                    <div class="col-sm-9 col-md-9 col-lg-9">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-md-offset-3 col-md-offset-3 col-sm-9 col-md-9 col-lg-9">
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br><br>
    <?php include('included/footer.php'); ?>
</div>
