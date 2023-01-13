<?php   
$main = require 'database/main.php';
// print_r($main);
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- jquery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="theme/login/style.css">
<!-- font awesome -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <?
echo @$error;
?>

    <div class="container">
    	<div class="mycard">
    		<div class="row" id="first">
    			<div class="col-md-6">
    				<div class="myleftctn">
    					<form class="myform text-center" id="login"  method="POST">
    						<header>Login User</header>
    						<!-- <div class="form-group">
    							<i class="fa fa-user"></i>
    							<input class="myInput" type="text" placeholder="Name" id="username" required>
    							<div class="invalid-feedback">Please Fill out this field</div>
    															
    						</div > -->

                <input type="hidden" name="status" value="login">

    						<div class="form-group">
    							<i class="fas fa-envelope"></i>
    							<input class="myInput" type="email" placeholder="Username" name="username"  required>
    						</div>

    						<div class="form-group">
    							<i class="fas fa-lock"></i>
    							<input class="myInput" type="password" placeholder="Password" name="password"  required>
    						</div>


    						

    						<button type="submit" class="butt " value="Create Account">Login</button>
                <div class="">
                  <a href="*">Forget password</a>
               
                </div>
                <div><span>Don't have an Account? </span>  <a class="join" href="javascript:void(0)">Create New</a></div>
    						
    					</form>
    					
    				</div>
    				
    			</div>

    			<div class="col-md-6">
    				<div class="myrightctn">
    					<div class="box"><header>Hello World!</header>
    						<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    						
    						</p>
    						<button type="button" class="butt_out" value="Learn More">Learn More</button>
    					</div>
    					
    				</div>
    				
    			</div>
    			
    		</div>
    		<div class="row" id="second" style="display:none">
            <div class="col-md-6">
              <div class="myrightctn">
                <div class="box"><header>Hello World!</header>
                  <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  
                  </p>
                  <button type="button" class="butt_out" value="Learn More">Learn More</button>
                </div>
                
              </div>
            
            </div>
            <div class="col-md-6">
            <div class="myleftctn">
              <form class="myform text-center" id="login" method="POST" >
                <header>Login User</header>
                <!-- <div class="form-group">
                  <i class="fa fa-user"></i>
                  <input class="myInput" type="text" placeholder="Name" id="username" required>
                  <div class="invalid-feedback">Please Fill out this field</div>
                                  
                </div > -->
                <input type="hidden" name="status" value="register">


                <div class="form-group">
                  <i class="fas fa-envelope"></i>
                  <input class="myInput" type="email" placeholder="Email" name="email" required>
                </div>

                
                 <div class="form-group">
                  <i class="fas fa-users"></i>
                  <input class="myInput" type="text" placeholder="Username" name="username"  required>
                </div>
                <div class="form-group">
                  <i class="fas fa-lock"></i>
                  <input class="myInput" type="password" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                  <i class="fas fa-lock"></i>
                  <input class="myInput" type="password" placeholder="Re-Password" name="cpassword" required>
                </div>


                

                <button type="submit" class="butt " value="Create Account">Login</button>
                <div class="">
                  <a href="*">Forget password</a>
               
                </div>
                <div><span>Don't have an Account? </span>  <a class="join" href="javascript:void(0)">Login</a></div>
                
              </form>
              
            </div>
            
          </div>
        </div>



    	</div>
    	
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    
    $(".join").click(function(){
      $("#first").toggle(10000);
      $("#second").toggle(10000);

    })



  $('.loginform').submit(function(r){
    r.preventDefault();
    var data=$(this).serialize();
    msg=$(this).find('.msg');
    $(msg).html();
    $.ajax({
      type:'POST',
      url : 'index.php',
      data : data+'&status=signup',
      
    })
  })
  




  });
</script>