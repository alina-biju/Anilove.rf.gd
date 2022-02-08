<!DOCTYPE html>
<html>
<head>
	<title>Anilove</title>
    <head>
		<title> Anilove </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<header id="header">
		<a href="#" class="logo" style="color:white";>ANILOVE</a>
		<ul>
			<li><a href="index.html" style="color:white";>Home</a></li>
			<li><a href="about.html" style="color:white";>About</a></li>
			<li><a href="find.html" style="color:white";>Find A Friend</a></li>
			<li><a href="stray.html" class="active" style="color:white";>Help A Stray</a></li>
			<li><a href="contact.html" style="color:white";>Contact</a></li>
		</ul>
	</header>
</body>
	<style>
		
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh; 
			background-color: #5F7880;			
		}
		form{
			color: black;
            margin-top: 50px;
		}
        p {
            padding: 10px 30px;
            color: #D3D5D4;
        }
        h1 {
            padding: 10px 30px;
            color: black;
            font-size: 60px;

        }
	</style>
</head>
<body>
<div>
<h1><center> Upload A Picture </center></h1>
<p> If you ever come across a stray or injured animal, you don't have to worry that you won't be able to help since ANILOVE now gives you the opportunity to make a difference.
Upload a picture of a stray that you just took and provide information such as
1. Location
2. Injuries
3. Conditon  
You can also view a table of images and text by clicking on the 'View' button. As a result, pet organizations or non-governmental organizations (NGOs) can check our page and depending on their proximity to the stray's location, can go and help the animal before it's too late.

</p>
</div>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" name="my_image">
		   <textarea name="comments" id="body" placeholder="Enter Details"></textarea>
           <input type="submit" name="submit" value="Upload">
     	
     </form>

</body>
</html>