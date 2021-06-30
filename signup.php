<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mosque Sign-up</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css\font-awesome.min.css">
</head>

<body>


    <div class="container">
        <!-- <nav>
            <a href="#">
                <i class="fa fa-car fa-5x"></i>
            </a>
        </nav>
     -->

     
    <header class="page-header">
        <h4>Assalam Alaykum Warahmotuhllah, kindly sign-up to become a member</h4>
    </header>
    

        <div class="form-group">
            <form action="includes/login.inc.php" method="post">
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="text" name="email" placeholder="Your email please">
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" name="pwd" placeholder="Your Password please...">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="login">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>