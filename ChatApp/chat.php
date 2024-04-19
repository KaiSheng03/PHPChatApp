<?php 
	session_start();
	if(!isset($_SESSION['unique_id'])){
		header("location: login.php");
	}
?>
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
		<section class="chat-area">
            <header>
				<?php 
					include_once "php/config.php";
					$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
					$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
					if(mysqli_num_rows($sql) > 0){
						$row = mysqli_fetch_assoc($sql);
					}
				?>
				<a href="#" class="back-icon">
					<i class="fa-solid fa-arrow-left"></i>
				</a>
                <img src="img.jpg" alt="">
                <div class="details">
                    <span>
						<?php
							echo $row['fname'] . " ". $row['lname'];
						?>
					</span>
                    <p>
						<?php
							echo $row['status'];
						?>
					</p>
                </div>
            </header>
			<div class="chat-box">
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="chat incoming">
					<img src="" alt="">
					<div class="details">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="chat incoming">
					<img src="" alt="">
					<div class="details">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>lorem</p>
					</div>
				</div>
				<div class="chat incoming">
					<img src="" alt="">
					<div class="details">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, libero iure. Nobis nostrum nisi architecto iure non consectetur inventore nihil ab vitae ut delectus unde blanditiis placeat reiciendis, impedit magni.</p>
					</div>
				</div>
			</div>
			<form action="#" class="typing-area">
				<input type="text" name="" id="" placeholder="Type a message here...">
				<button><i class="fa-brands fa-telegram"></i></button>
			</form>
		</section>
	</div>
</body>
</html>