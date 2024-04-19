<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Realtime Chat App</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/d7706770d3.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="wrapper">
		<section class="form signup">
			<header>Realtime Chat App</header>
			<form action="#" enctype="multipart/form-data" autocomplete="off">
				<div class="error-txt"></div>
				<div class="name-details">
					<div class="field input">
						<label for="">First Name</label>
						<input type="text" name="fname" placeholder="First Name">
					</div>
					<div class="field input">
						<label for="">Last Name</label>
						<input type="text" name="lname" placeholder="Last Name">
					</div>
				</div>
				<div class="field input"> 
					<label for="">Email Address</label>
					<input type="email" name="email" placeholder="Enter your email address">
				</div>
				<div class="field input">
					<label for="">Password</label>
					<input type="password" name="password" placeholder="Enter new password">
					<i class="fa-solid fa-eye"></i>
				</div>
				<div class="field image">
					<label for="">Insert Image</label>
					<input type="file" name="image">
				</div>
				<div class="field button">
					<input type="submit" value="Continue to Chat">
				</div>
			</form>
			<div class="link">
				Already Signed Up?
				<a href="login.php">Login Now</a>
			</div>
		</section>
	</div>

	<script src="javascript/pass-show-hide.js"></script>
	<script src="javascript/signup.js"></script>
</body>
</html>