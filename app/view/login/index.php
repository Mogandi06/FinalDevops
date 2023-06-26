<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="icon" href="https://www.unklab.ac.id/wp-content/uploads/2022/08/cropped-cropped-fav-32x32.png" sizes="32x32" />
	<link rel="icon" href="https://www.unklab.ac.id/wp-content/uploads/2022/08/cropped-cropped-fav-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="https://www.unklab.ac.id/wp-content/uploads/2022/08/cropped-cropped-fav-180x180.png" />
	<title>Universitas Klabat &#8211; Pathway to Exellence</title>
	<link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
	<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
	<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
	<!--Custom styles-->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo APP_PATH; ?>/css/login-style.css"> -->

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Belanosima&family=Montserrat:wght@700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
				

		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box
		}

		body {
			background-color: #eee;
			height: 100vh;
			font-family: 'Belanosima', sans-serif;
			background: linear-gradient(to right, #1e1e1e, #F04483, #1e1e1e);
		}

		.wrapper-center {
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		}

		.wrapper {
			max-width: 500px;
			border-radius: 20px;
			margin: 50px auto;
			padding: 30px 40px;
		}

		.logo {
			font-family: 'Belanosima', sans-serif;
			font-size: 1.9rem;
			font-weight: bold;
			color: black;
			max-width: 50%;
		}

		.h4 {
			font-family: 'Belanosima', sans-serif
		}

		.input-field {
			border-radius: 5px;
			padding: 5px;
			display: flex;
			align-items: center;
			cursor: pointer;
			border: 1px solid #F04483;
			color: #1e1e1e
		}

		.input-field:hover {
			color: #F04483;
			border: 1px solid #1e1e1e
		}

		input {
			border: none;
			outline: none;
			box-shadow: none;
			width: 100%;
			height: 40px;
			padding: 0px 2px;
			font-family: 'Belanosima', sans-serif
		}

		select {
			border: none;
			outline: none;
			box-shadow: none;
			width: 100%;
			height: 40px;
			padding: 0px 2px;
			font-family: 'Belanosima', sans-serif
		}
		.fa-eye-slash.btn {
			border: none;
			outline: none;
			box-shadow: none
		}

		a {
			text-decoration: none;
			color: #400485;
			font-weight: 700
		}

		a:hover {
			text-decoration: none;
			color: #7b4ca0
		}

		.option {
			position: relative;
			padding-left: 30px;
			cursor: pointer
		}

		.option label.text-muted {
			display: block;
			cursor: pointer
		}

		.option input {
			display: none
		}

		.checkmark {
			position: absolute;
			top: 3px;
			left: 0;
			height: 20px;
			width: 20px;
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 50%;
			cursor: pointer
		}

		.option input:checked~.checkmark:after {
			display: block
		}

		.option .checkmark:after {
			content: "";
			width: 13px;
			height: 13px;
			display: block;
			background: black;
			position: absolute;
			top: 48%;
			left: 53%;
			border-radius: 50%;
			transform: translate(-50%, -50%) scale(0);
			transition: 300ms ease-in-out 0s
		}

		.option input[type="radio"]:checked~.checkmark {
			background: #fff;
			transition: 300ms ease-in-out 0s;
			border: 1px solid black;
		}

		.option input[type="radio"]:checked~.checkmark:after {
			transform: translate(-50%, -50%) scale(1)
		}

		.btn.btn-block {
			border-radius: 20px;
			background-color: #F04483;
			color: #fff;
			font-size: medium;
		}

		.btn.btn-block:hover {
			background-color: #1e1e1e;
			color: #F04483;
		}

		@media(max-width: 575px) {
			.wrapper {
				margin: 10px
			}
		}

		.made{
			text-align: center;
			margin-top: 25px;
			font-size: small;
			opacity: 70%;
		}

		@media(max-width:424px) {
			.wrapper {
				padding: 30px 10px;
				margin: 5px
			}

			.option {
				position: relative;
				padding-left: 22px
			}

			.option label.text-muted {
				font-size: 0.95rem
			}

			.checkmark {
				position: absolute;
				top: 2px
			}

			.option .checkmark:after {
				top: 50%
			}

			#forgot {
				font-size: 0.95rem
			}
		}
	</style>
</head>

<body oncontextmenu='return false' class='snippet-body'>
<div class="container wrapper-center">
	<div class="wrapper bg-white">
		<h4>Heyyo, Welcome to</h4>
		<img class="logo" src="\final\public\img\Pink.png" alt="zumacare">
		<p id="please">Please Login with your Role, Email, & Password</p>
		<form action="<?= APP_PATH;?>/login/process" method="post" class="pt-3">
			<div class="form-group py-1 pb-2">
				<div class="input-field">
					<select id="select-role" name="select-role" class="select">
						<option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="petshop">Petshop Owner</option>
                    </select>
				</div>
			</div>
			<div class="form-group py-2">
				<div class="input-field"> <span class="far fa-user p-2"></span> 
					<input id="email" name= "email" type="text" placeholder="Your Email" required class=""> 
				</div>
			</div>
			<div class="form-group py-1 pb-2">
				<div class="input-field"> 
					<span class="fas fa-lock p-2"></span> 
					<input id="password" name="password" type="password" placeholder="********" required class=""> 
					<button type="button" class="btn bg-white text-muted"> 
					<span class="far fa-eye-slash"></span> </button> 
				</div>
			</div>
            <?php 
                if(isset($data['error-message'])){
                    echo "<div id='error-mes-login' style='font-size: 12px;color:red'>".$data['error-message']."</div>";
                }; 
            
            ?>
			<button type="submit" class="btn btn-block text-center mt-3">Log in</button>
		</form>
		<div class="made">Made with ❤️ Mogandi | Ade | Zuma Asam</div>
	</div>
</div>
<script src="<?php echo APP_PATH; ?>/js/jquery-3.3.1.slim.min.js"></script>
<script type='text/javascript' src="<?php echo APP_PATH; ?>/js/login-js-handling.js"></script>
</body>
</html>
