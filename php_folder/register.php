<?php

include('partials/header.php');

?>
<!-- signin -->


<div class="container-fluid bg-secondary">
    <div class="row  justify-content-center">
        <div class="col-md-3">
            <h5 class=" text-light m-3">Sign up</h5>
            <div class="col">
                <small class="form-text text-light">
                    It's free and only takes a minute.
                </small>

            </div>

        </div>

    </div>






    <div class="row justify-content-center ">
        <div class="col-md-6">
            <form action="../php_folder/register.php" method="POST">
                <div class="form-group ">
                    <label class="text-light" for="username">User
                        Name</label>
                    <input class="form-control" type="text" id="username" name="userName" placeholder="Enter User Name"
                        required>
                </div>
                <div class="form-group ">
                    <label for="email" class="text-light">email</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Enter User Email"
                        required>
                </div>
                <div class="form-group ">
                    <label for="phone" class="text-light">Phone
                        Number</label>
                    <input class="form-control" type="text" id="phone" name="phone" placeholder="Enter your phone no"
                        required>
                </div>


                <div class="form-group ">
                    <label for="password" class="text-light">Password</label>
                    <input class=" form-control" type="password" id="password" name="password"
                        placeholder="Enter your password" required>
                    <small class="form-text text-muted">
                        your password must be 8-20 chars long.
                    </small>
                </div>
                <div class="form-group my-2 w-100">
                    <button class="btn btn-info btn-block btn-lg" id="submitBtn" name="submit" value="Login"
                        required>Register</button>
                    <span class="registerLink text-light">Have an account already? <a href="index.php" class="text-primary" style="text-decoration:none;color:blue">Login</a></span>
                </div>

            </form>
        </div>







    </div>
</div>

<?php


include('partials/footer.php');

?>

<!--let us register a new account to the database and later with the same account

<?php
if(isset($_POST['submit'])){

    //variables
    $userName=$_POST['userName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    
    // state out query
    $sql="INSERT INTO admin SET
          usernames='$userName',
          email='$email',
          passwords='$password',
          phone='$phone'
          ";
        //execute our sql query

        $res=mysqli_query($conn,$sql);
        //check if query is executed successfully

        if($res==true){
            //msg to show account created successfully...
            $_SESSION['accountCreated']='<span class="addedAccount">Account'.$userName.'created!</span>';
            header('location:'.SITEURL.'index.php');
            exit();

        }
        else{
            //msg to show account failed to be created 
            $_SESSION['unSuccessful']='<span class="fail">Account'.$userName.'failed!</span>';
            header('location:'.SITEURL.'register.php');
            exit();

        }
    
    
    
    
}
?>