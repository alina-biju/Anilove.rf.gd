<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
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
			<li><a href="stray.html"  class="active" style="color:white";>Help A Stray</a></li>
			<li><a href="contact.html" style="color:white";>Contact</a></li>
		</ul>
	</header>
</body>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
			background-color:  #FF828B;
            margin-top:125px;
		}
		.alb {
			width: 200px;
			min-height: 200px;
            overflow:hidden;
			padding: 5px;
            outline:none;
            
		}
		.alb img {
			width: 100%;
			height: 100%;
            width: 200px;
			min-height: 200px;
            overflow:hidden;
			padding: 5px;
            outline:none;
            
    	}
		a {
			text-decoration: none;
			color: white;

		}
		.choose{
			color: white;
		}
        th {
            color: #0065A2;
            font-size: 40px;
            padding: 30px 30px;
            
        }
	</style>
</head>
<body>
     <a href="form.php" ></a>

    <table>
	    <thead>
            <tr>
                <th>Image</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php
				$sql = "SELECT * FROM images";
				$res = mysqli_query($conn,  $sql);
                
                if (mysqli_num_rows($res) > 0) {
					while ($images = mysqli_fetch_assoc($res)) {  
						//$image = $row['image_url'];
                    	//$comment = $row['image_comments'];
            ?>
                        <tr class="alb">
                            <td><img alt='image' src="uploads/<?=$images['image_url']?>"></td>
                            <td><?php echo $images['image_comments']; ?></td>
                        </tr>
            <?php
					}
                }
            ?>

            </tbody>
        </table>
</body>
</html>