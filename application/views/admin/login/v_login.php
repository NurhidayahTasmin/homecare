<!-- <!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/style.css">
</head>
<body>
<div class="container">
	<div class="login">
		<div class="header">
			<h1>Login</h1>
		</div>
		<div class="main">
            <?php 
                echo validation_errors('<div class="alert alert-danger">','</div>');
                if ($this->session->flashdata('warning')) {
                    echo '<div class="alert alert-warning">';
                    echo '<i class="fa fa-warning"></i> ';
                    echo $this->session->flashdata('warning');
                    echo '</div>';
                }

                if ($this->session->flashdata('sukses')) {
                    echo '<div class="alert alert-primary">';
                    echo '<i class="fa fa-check"></i> ';
                    echo $this->session->flashdata('sukses');
                    echo '</div>';
                }

                echo form_open(base_url('login'));
            ?>
				<input type="text" name="username" placeholder="Username">
				<br>
				<input type="password" name="password" placeholder="password">
				<br><br>
				<button type="submit">Login</button>
				<br><br>
				<p>Belum punya akun?
				<a href="daftar.html" class="text-secondary">Daftar Disini.</a>
            <?php echo form_close(); ?>
		</div>
	</div>
	<div class="img">
		<span>
			<h1>WELCOME</h1>
			<h2>DOTTORO'TA HOME CARE MAKASSAR</h2>
		</span>
	</div>
</div>
</body>
</html>

 -->


<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?=base_url()?>assets/admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><h1>Login</h1><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                 <?php 
                echo validation_errors('<div class="alert alert-danger">','</div>');
                if ($this->session->flashdata('warning')) {
                    echo '<div class="alert alert-warning">';
                    echo '<i class="fa fa-warning"></i> ';
                    echo $this->session->flashdata('warning');
                    echo '</div>';
                }

                if ($this->session->flashdata('sukses')) {
                    echo '<div class="alert alert-primary">';
                    echo '<i class="fa fa-check"></i> ';
                    echo $this->session->flashdata('sukses');
                    echo '</div>';
                }

                echo form_open(base_url('login'));
            ?>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" id="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                 <?php echo form_close(); ?>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?=base_url()?>assets/admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>