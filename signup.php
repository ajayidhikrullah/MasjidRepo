<!-- TESTING DB CONECTION -->

  
    <?php
        include_once "header.php";

        include_once 'includes/dbh.inc.php';
    ?>




<!-- TESTING DB CONECTION -->



    <div class="container">
           

<!-- showind queries from  DB to website -->
 <?php
    $sql = "SELECT * FROM posts;"; //query the table posts
    $result = mysqli_query($conn, $sql); //conect them together
    // get the result stored here below
    $resultCheck = mysqli_num_rows($result); //any result above 0?

    if ($resultCheck > 0) { //lets see if result is above 0 then do the folowing below
        while ($row = mysqli_fetch_assoc($result)) { //keep loping while data is >0 and is in result
            echo $row . "<h1>" . ['content'] . "<br>" . "</h1>"; //name of d column

        }
    }



?>


    
<!-- showind queries from  DB to website -->

        
        <header class="page-header">
            <h4>Assalam Alaykum Warahmotuhllah, kindly sign-up to become a member</h4>
        </header>
        

            <div class="form-group">
                <form action="includes/login.inc.php" method="post">

                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstName" placeholder="Your first name here">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Your last name please">
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Your email please">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="pwd" placeholder="Your Password please...">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Re-Enter Password</label>
                        <input class="form-control" type="password" name="pwd" placeholder="Re-enter your Password please...">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>


        <!-- footer -->
    <?php
        include_once "footer.php";

    ?>

</div>