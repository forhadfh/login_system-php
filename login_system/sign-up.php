<?php
include "header.php"; 
include "database.php"; 
?>

<?php
    if(isset($_POST['signup'])){

        $name = $_POST['fname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
    }
?>


<div class="container py-5 my-5">
  <div class="row justify-content-center">
    <div class="col-md-5">

        <form action="<?php echo $_SERVER['php_self']; ?>" method="POST">
          <div class="mb-3">
            <label for="fname" class="form-label">Full Name</label>
            <input type="text" name="fname" class="form-control" id="fname" >            
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number </label>
            <input type="text" name="phone" class="form-control" id="phone" maxlength="11" >            
          </div>
          
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" >            
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">password </label>
            <input type="password" name="password" class="form-control" id="password" >            
          </div>

          <div class="mb-3">
            <label for="username" class="form-label">userbane </label>
            <input type="text" name="username" class="form-control" id="username" >            
          </div>

          <button name="signup" type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
  </div>
</div>


<?php include "footer.php"; ?>

