<?php 
if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){
   
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Authentication Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
   <body>
       <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="p-5 rounded shadow"
              action="registerauth.php"   
              method="post">
           <h1 class="text-center pb-5 display-4"> REGISTER </h1> 
           <div class="mb-3">
           <p>
        </p>
           <label for="username" 
                  class="form-label">Username
           </label>
          <input  
       <?php 
       if(isset($_SESSION['username'])){
              echo "value=" . $_SESSION["username"];
       }
       ?>
                  type="text" 
                  name="username"
                  class="form-control" 
                  id="email" 
                  aria-describedby="usernameHelp">
          <div id="emailHelp" 
                  class="form-text">Kindly type in your preferred username.</div>
          </div>
          <div class="mb-3">
           <label for="exampleInputEmail1" 
                  class="form-label">Email address
           </label>
          <input  
          <?php 
       if(isset($_SESSION['email'])){
              echo "value=" . $_SESSION["email"];
       }
       ?>
                 type="email" 
                  name="email"
                  class="form-control" 
                  id="exampleInputEmail1" 
                  aria-describedby="emailHelp">
          <div id="emailHelp" 
                  class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
          <label for="exampleInputPassword1" 
                 class="form-label">Password</label>
                 
          <input type="password" 
                 name="password"
                 class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
          <label for="exampleInputPassword1" 
                 class="form-label">Repeat Password</label>
          <input type="password" 
                 name="password"
                 class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
          <input type="checkbox" 
                 class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" 
                 for="exampleCheck1">Agree to our terms and service</label>
          </div>
          <button type="submit" 
                 class="btn btn-primary">SUBMIT</button>
                 <p>Already have an account? <a href="login.php">Login here</a>.</p>
          </form>  
     </div>



   </body>
</html>