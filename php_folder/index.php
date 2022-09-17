<?php
include('./partials/header.php')
?>

<?php
    if(isset($_SESSION['accountCreated'])){
        echo $_SESSION['accountCreated'];
        unset($_SESSION['accountCreated']);
    }


   ?>



<?php
if(isset($_SESSION['noAdmin'])){
    echo $_SESSION['noAdmin'];
    unset($_SESSION['noAdmin']);
}
?>


<div class="row w-100 justify-content-center bg-secondary" id="box3" >
    
    <div class="col-md-2 p-4" >
        <!-- login -->





        <h5 class=" text-light ">Log in</h5>


        <!-- form-group,sr-only -->
        <div class="row ">
            <div class="col text-center">

                <div class="form-inline">
                    <form action="" method="POST">
                        <div class="form-group my-2 w-100">
                            <label for="username" class="sr-only">User Name</label>
                            <input class="form-control form-control-lg" type="text" id="username" name="userName"
                                placeholder="Enter User Name" required>
                            <!-- or -->
                            <!-- <div class="valid-tooltip">looks good</div> -->
                            <!-- <div class="valid-feedback">looks good</div> -->
                        </div>
                        <div class="form-group my-2  w-100">
                            <label for="password" class="sr-only">Password</label>
                            <input class="form-control  form-control-lg" type="password" id="password" name="password"
                                placeholder="Enter your password" required>
                            <!-- <div class="invalid-feedback">enter valid password</div> -->
                        </div>
                        <div class="form-group my-2 w-100">
                            <button class="btn btn-info btn-block btn-lg" id="submitBtn" name="submit" value="Login"
                                required>Log in</button>
                            <span class="registerLink text-light">Don't have an account? <a class="text-primary" href="register.php" style="text-decoration:none;color:rgb(1, 177, 252);">Register</a></span>
                        </div>

                    </form>
                </div>

                <!-- sign up link -->

            </div>
        </div>

</div>
</div>


        <?php
include('./partials/footer.php')
?>

        <!-- login to the database -->
        <?php


if(isset($_POST['submit'])){
    // echo 'yes data submitted';

    // let's store username and password

    $userName=$_POST['userName'];
    $passWord=$_POST['password'];

    // query

    $sql="SELECT * FROM admin WHERE usernames='$userName' AND passwords='$passWord'";
    //execute the query
    $result=mysqli_query($conn,$sql);

    //count the no of account with username and password

    $count=mysqli_num_rows($result);
    //put the count results into one associate array
    $row=mysqli_fetch_assoc($result);

    //check if there is at least one account in the database
    if($count==1){
        //msg to wel admin to the dashboard
        $_SESSION['loginMessage']='<span class="success text-light">Welcome '.$userName.'</span>';
        header('location:'.SITEURL.'dashboard.php');
        exit();
    }
    else{
        //msg if the admin/account is not in the database..
        $_SESSION['noAdmin']='<span class="fail">'.$userName.' is not registered</span>';
        header('location:'.SITEURL.'index.php');
        exit();

    }

}

?>