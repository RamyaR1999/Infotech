<?php

// $conn=mysqli_connect("localhost","root","root","infotech","3307");
//
//if($conn){
//        echo "connected";
//    }else{
//     echo "connection failed";
//} 

//error_reporting(0);
//       try{
//           
//           $db - new PDO("mysql:infotech.sql");
//       }
//        catch(PDOException $e)
//        {
//            echo "Connection error: " . $e->getMessage();
//        }

?>

<?php include_once 'Database.php';
    
    include_once 'create_login.php'; 

    $database = new Database();

   $db = $database->getConnection();
    
    $login = new Login($db);

// set page headers
$page_title = "Sign In Into your account";
include_once "layout_header.php";
  
// contents will be here
//echo "<div class='right-button-margin'>
//        <a href='index.php' class='btn btn-default pull-right'>Read Users</a>
//    </div>";
  
?>

<?php

 if(isset($_POST['submit'])){
         
         $login->email=  $_POST['email'];
         $login->password=  $_POST['password'];
         
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
     <br>
      <div class="card-body">    
 <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="login-form" autocomplete="on"> 
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0"> 
<div class="container">
  <div class="card login-card">
    <div class="row no-gutters">   
      <div class="row">
         <div class="col-md-6">
            <div class="form-group row">
               <label class="col-sm-3 col-form-label" for="email">Email</label>
                <div class="col-sm-9">
                <input type="email" name="email" id="rEmail" class="form-control" placeholder="somebody@example.com">
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
                  <input class="btn btn-primary" type="submit" name="submit" value="Login">
           </div>
        </div></center>
      </div> 
     </div>
    </div>
  </main>   
 </form>
</div>

       
<?php

// footer
include_once "layout_footer.php";

?>