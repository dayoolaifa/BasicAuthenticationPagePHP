
<!DOCTYPE html>
<html>
<head>
    <title>Authentication Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
   <body>
       <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="p-5 rounded shadow"
              action="auth.php"   
              method="post">
           <h1 class="text-center pb-5 display-4"> LOGIN </h1> 
          <div class="mb-3">
           <label for="username" 
                  class="form-label">Username
           </label>
           
          <input 

                  type="text" 
                  name="username"
                  class="form-control" 
                  id="username" 
                  aria-describedby="emailHelp" required>
          <div id="emailHelp" 
                  class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
          <label for="exampleInputPassword1" 
                 class="form-label">Password</label>
          <input type="password" 
                 name="password"
                 class="form-control" id="exampleInputPassword1" required>
          </div>
          <div class="mb-3 form-check">
          <input type="checkbox" 
                 class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" 
                 for="exampleCheck1" required>Agree to our terms and service</label>
          </div>
          <button type="submit" 
                 class="btn btn-primary">LOGIN</button>
                 <p>Don't have an account? <a href="register.php">Register here</a>.</p>
                 <p>Forgoten password? <a href="reset.php">click here</a>.</p>
          </form>  
     </div>

   </body>
</html>