<?php session_start(); ?>
<?php
include_once 'Database.php';
    
    include_once 'create_login.php'; 

    $database = new Database();

    $db = $database->getConnection();
    
    $login = new Login($db);


// set page headers
$page_title = "SignIn Into Your Account";
  
?>

<?php

 if(isset($_POST['submit'])){
         
         $login->rEmail=  $_POST['rEmail'];
         $login->rpassword=  $_POST['rPassword'];
         
         if($login-> create()){
             
             echo "<div class='alert alert-success'>User Login Successfully.</div>";
         }
         else{
             
             echo "<div class='alert alert-danger'>Unable to Login User.</div>";
         }
//      if(!empty($email) && !empty($password)){
//          
//      $password = mysqli_real_escape_string($conn,$_POST['password']);
//      $password = md5($password);      
//     

//        $query = "INSERT INTO login (email,password) ";
//        $query .= "VALUES ({$email}','{$password}') ";
//             
//        $register_user_query = mysqli_query($conn,$query);

//      
//        if(!$register_user_query) {
//            
//            die("Query Failed" . mysqli_error($conn) .' '. mysqli_error($conn));
//        }
//            

       }

?>
 
<!-- <h3 class="" style="color:darkgreen"><p class="login-card-description">Sign In Into your account</p></h3> -->
<htlm>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title><?php echo $page_title; ?></title>
  
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
   
    <!-- our custom CSS -->
    <link rel="stylesheet" href="libs/css/custom.css" />

<h3 class="" style="color:darkgreen"><p class="login-card-description">Signin Into your account</p></h3>
     <br>
      <div class="card-body">    
<form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="login-form" autocomplete="on"> 
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0"> 
<div class="container">
  <div class="card login-card">
    <div class="row no-gutters">   
<!--
    <div class="row">
         <div class="col-md-6">
             <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="title">Nickname</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="rNickname">
                </div>
             </div>
         </div>
      </div>
-->
      <br>
      <div class="row">
         <div class="col-md-6">
            <div class="form-group row">
               <label class="col-sm-3 col-form-label" for="email">Email</label>
                <div class="col-sm-9">
                <input type="email" name="rEmail" id="rEmail" class="form-control" placeholder="somebody@example.com">
                </div>
            </div>
         </div> 
      </div>
      <br>
      <div class="row">  
         <div class="col-md-6">
            <div class="form-group row">
               <label class="col-sm-3 col-form-label" for="password">Password</label>
                <div class="col-sm-9">
                <input type="password" name="rPassword" id="password" class="form-control" placeholder="***********">
                </div>
            </div>
         </div>
      </div>
         <br>    
        <center><div class="row">  
         <div class="col-md-7"> 
                  <input class="btn btn-primary" href="login.php" type="submit" name="submit" value="login">
           </div>
        </div></center>
      </div> 
     </div>
    </div>
  </main>   
 </form>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
<!-- bootbox library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
</htlm> 