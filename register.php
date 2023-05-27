<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

            <header>Sign Up</header>
            <form action="includes/signup.inc.php" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username"  required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>

                
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"   required>
                </div>

                <div class="field input">
                    <label for="passwordCon">confirm password</label>
                    <input type="password" name="passwordCon" id="passwordCon"   required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Sign Up" required>
                </div>
                <div class="links">
                    OR <a href="index.php">LogIn</a>
                </div>
            </form>
        </div>
       
      </div>
</body>
</html>