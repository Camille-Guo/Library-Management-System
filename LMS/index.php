<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <h1>LIBRARY MANAGEMENT SYSTEM</h1>
    
    <div class="container" style="width: 100%;">
        <div class="login">
            <h2>Sign In</h2>
            <form action="index.php">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required= "" >
                
                <button>Sign In</button>
            </form>
        </div>
        <div class="signup">
            <h2>Sign Up</h2>
            <form action="index.php">
                <input type="text" name="fname" placeholder="First Name" required>
                <input type="text" name="lname" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Repeat Password" required>
                
                <input type="submit" name="signup" value="Sign Up">
            </form>
        </div>
        <div class="formatting" style="clear: both;"></div>
    </div>
</body>
</html>