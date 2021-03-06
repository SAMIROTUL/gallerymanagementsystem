<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Title here -->
	<title>Gallery Management System</title>

	<!-- CSS linkup -->
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<link rel="stylesheet" href="css/regular.min.css">
	<link rel="stylesheet" href="css/solid.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="signin.css">


	<!-- Google fonts link -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

</head>
<body>

    <?php 

        if(isset($_GET['result'])){

            if($_GET['result'] == 'success'){

                echo "<h2 style='text-align:center; margin-top:20px; color:green;'> Congratulation </h2>";
    
            }elseif($_GET['result'] == 'failed'){
    
                echo "<h2 style='text-align:center; margin-top:20px; color:red;'> Failed </h2>";
    
            }

        }

    ?>

    <!-- Registration form -->
    <section class="form">
        <div class="form-details">
            <h1>Registration</h1>
            <form action="registration.php" method="POST">
                <label for="name">Enter your name</label>
                <input name="name" id="name" type="text" placeholder="Your name">
                <label for="email">Enter your email</label>
                <input name="email" id="email" type="email" placeholder="example@email.com">
                <label for="password">Enter your password</label>
                <input name="password" id="password" type="password" placeholder="Password">
                <input type="submit" value="Registration">
            </form>
            <p>Want to sign in? <a href="signin.php">Sign in here</a></p>
        </div>

        <p><a href="index.php">Back to home</a></p>
    </section>
    
</body>
</html>