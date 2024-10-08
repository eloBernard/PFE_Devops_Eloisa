<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
         body {
            font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background: linear-gradient(to right, #2f87c2e3, #1297a8, #16c3eee5, #3156d1, #590de7); /* Example gradient */
  min-height: 100vh;
        }
      
        .header-container {
            display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  padding-bottom: 30px;
  padding-top: 12px;
  /*background-color: #2f97b1;   #2f97b1, #632fb1, #b12f63, #b1972f;*/
  background: linear-gradient(to right,  #2f97b1, #632fb1, #da5636, #dde02f); 
  overflow: hidden;
        }

        .logo {
            position: absolute;
  left: 4px;
  top: 0;
  padding: 4px 3px 5px;
  padding-top: 3px;
        }

        .header {
            margin: 0;
            padding: 13px 25px;
            color: white;
        }
        
        .login {
            width: 80%;
            max-width: 600px;
            margin: 100px auto;
            text-align: center;
        }

        h1 {
            margin-top: 0;
        }

        p {
            margin-top: 10px;
        }

        a {
            color: #fff;
            text-decoration: none;
            border-bottom: 1px solid #fff;
        }

        a:hover {
            border-bottom: 1px solid transparent;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <img src="devlog.png" alt="Logo" class="logo" width="100" height="100">
            <h1 class="header">Synchrome</h1>
        </div>
    </header>
    <div class="login">
    <?php
    // Start the session
    session_start();

    // Check if the user is logged in
    $isLoggedIn = isset($_SESSION['username']); // Assumes the username is stored in the session when logged in

    // Display login or user information
    if ($isLoggedIn) {
        $username = htmlspecialchars($_SESSION['username']); // Securely output the username
        echo "<h1>Welcome, $username!</h1>";
        echo "<a href='logout.php'>Logout</a>"; // Link to logout script
    } else {
        echo "<h1>Login or Register</h1>";
        echo "<p>Not logged in. Please <a href='login.php'>login</a> or <a href='register.php'>register</a>.</p>";
    }
    ?>
</div>


    ****

    <div class="login">
        <?php
        // Example PHP code to handle login functionality

        // Check if the user is logged in (you can customize this logic)
        //   $isLoggedIn = false; // Set to true if the user is logged in

        // Example user data (replace with your actual user data from the database)
        $loggedInUser = [
            'username' => 'john_doe',
            'email' => 'john@example.com',
        ];

        // Display login or user information
        <!--!  if ($isLoggedIn) {
            echo "<h1>Welcome, {$loggedInUser['username']}!</h1>";
            echo "<p>Email: {$loggedInUser['email']}</p>";
            echo "<a href='logout.php'>Logout</a>";
        } else {
            echo "<h1>Login or Register</h1>";
            echo "<p>Not logged in. Please <a href='login.php'>login</a> or <a href='register.php'>register</a>.</p>";
        }
        ?>
    </div>
  
</body>
</html>
