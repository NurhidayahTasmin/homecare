<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/style.css">
</head>
<body>
<div class="container">
	<div class="login">
		<div class="header">
			<h1>Daftar</h1>
		</div>
		<div class="main">
            <!-- <?php 
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
            ?> -->
				<input type="text" name="username" placeholder="Username">
				<br>
				<input type="password" name="password" placeholder="password">
				<br><br>
				<button type="submit">Login</button>
				<br><br>
				<p>Sudah punya akun?
				<a href="login.html" class="text-secondary">Masuk Disini.</a>
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