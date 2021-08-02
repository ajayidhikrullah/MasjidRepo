<!-- TESTING DB CONECTION -->

  
    <?php
        include_once "header.php";

    ?>

    <div class="container">
           
       
        <header class="page-header">
            <h4>Assalam Alaykum Warahmotuhllah, kindly sign-up to become a member</h4>
        </header>
        

            <div class="form-group">
                <form action="includes/signup.inc.php" method="POST">

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
                        <button class="btn btn-primary" type="submit" name="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>


        <!-- footer -->
    <?php
        include_once "footer.php";

    ?>

</div>