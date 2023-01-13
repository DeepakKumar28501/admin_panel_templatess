<?php 
//include'link.css';
include'header.php';
//print_r($_post)
if(isset($_POST['add'])){
  //print_r(post('firstname'));


 /*$query="INSERT INTO `add_student`(`Reg_id`, `firstname`, `lastname`, `fathername`, `mothername`, `course`, `gender`, `dob`, `email`, `contect`, `address`, `city`, `state`) VALUES (NULL,'".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['fathername']."','".$_POST['mothername']."','".$_POST['course']."','".$_POST['gender']."','".$_POST['dob']."','". $_POST['email']."','".$_POST['contect']."','". $_POST['address']."','".$_POST['city']."','". $_POST['state']."')";
 query($query);
 */
 $query="INSERT INTO `add_student`(`Reg_id`, `firstname`, `lastname`, `fathername`, `mothername`, `course`, `gender`, `dob`, `email`, `contect`, `address`, `city`, `state`) VALUES (NULL,'".post('firstname')."','".post('lastname')."','".post('fathername')."','".post('mothername')."','".post('course')."','".post('gender')."','".post('dob')."','".post('email')."','".post('contect')."','".post('address')."','".post('city')."','".post('state')."')";
    query($query);
//echo "<pre>";
// print_r($x); 
  redirect('loginform');
}


?>

<!--  -->
<div class="container-fluid">
  

 <form  method="POST">
  <div class="panel  border panel-default">
    <div class="page-header bg-primary p-1 ">
      <h3 class="p-4"><i class="menu-icon fa fa-user-plus"></i> Add Student</h3>
    </div>

    <div class="panel-body">
        
      
         
        <div class="input-group mb-3">
            <span class="input-group-addon "><i class="glyphicon glyphicon-user"></i></span>
          <input id="firstname" type="text" class="form-control" name="firstname" placeholder="firstName" required>
          <span class="input-group-addon">Lastname</span>
          <input id="lastname" type="text" class="form-control" name="lastname" placeholder="lastname" required>

        </div>

        <div class="input-group mb-3">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="fathername" type="text" class="form-control" name="fathername" placeholder="Father's Name" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="mothername" type="text" class="form-control" name="mothername" placeholder="mother's Name" required>
        </div>

      <div class="input-group mb-3">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i> Select Course</span>
        <select class="form-control" id="sel1" name="course" required >
          <option>---Select---</option>
          <option value="BCA">BCA</option>
          <option value="BBA">BBA</option>
          <option value="MCA">MCA</option>
          <option value="MBA">MBA</option>
          <option value="B.ed">B.ed</option>
          <option value="M.ed">M.ed</option>

        </select>
      </div>
        

      <div class="input-group mb-3">
        <span class="input-group-addon">Gender</span>
        <select class="form-control" id="sel1" name="gender" required>
          <option>--- Select---</option>
          <option value="M">Male</option>
          <option value="F">Femal</option>
          <option value="O">Other</option>
        
        </select>
      </div> 

       <div class="input-group mb-3">
            <span class="input-group-addon">Date Of birth</span>
          <input id="dob" type="date" class="form-control" name="dob" required>
        </div> 
        <div class="input-group mb-3">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input id="email" type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
          <input id="contect" type="text" class="form-control" name="contect" placeholder="contect" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input id="address" type="text" class="form-control" name="address" placeholder="address" required>

        </div>

       
       <div class="input-group mb-3">
        <span class="input-group-addon">City</span>
          <input id="city" type="text" class="form-control" name="city" placeholder="city" required>
            <span class="input-group-addon">State</span>
          <input id="state" type="text" class="form-control" name="state" placeholder="State" required>

        </div>


       


    </div>



    <div class="panel-footer">
      <div class="container">
        
     

       <button type="reset" class="btn btn-lg btn-primary  rounded float-left "><i class="glyphicon glyphicon-refresh"></i> Reset</button>
       
        <button type="submit" name="add" class="btn btn-lg btn-primary rounded"><i class="menu-icon fa fa-user-plus"></i> Add</button>
         
       </div>
    </div>
  
  </div>
</form>
</div>  



<!--

<div class="page-header">
  <h1>Add Student
          <small>
                  <i class="ace-icon fa fa-angle-double-right"></i>
                  Fill the Student innformation
          </small>
  </h1>
  
</div>

<div>
  <div class="row">
    <div class="col-xl-12">
      <form class="form-horizontal">


        <div class="form-group">
          <label for="firstname" class="col-sm-3 control-label  ">First Name</label>

            <div class="col-sm-9">
              <input type="text" id="form-field-1" placeholder="First Name" class="col-xs-10 col-sm-12 col-xl-12 col-lg-12"/>
            </div>
        </div>

        <div class="form-group">
          <label for="Lastname" class="col-sm-3 control-label  ">Last Name</label>

            <div class="col-sm-9">
              <input type="text" id="form-field-1" placeholder="Last Name" class="col-xs-10 col-sm-12 col-xl-12 col-lg-12"/>
            </div>
        </div>
        <div class="form-group">
          <label for="fathername" class="col-sm-3 control-label  ">mother Name</label>

            <div class="col-sm-9">
              <input type="text" id="form-field-1" placeholder="mother's Name" class="col-xs-10 col-sm-12 col-xl-12 col-lg-12"/>
            </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-3 control-label  ">Email</label>

            <div class="col-sm-9">
              <input type="emil" id="form-field-1" placeholder="Email" class="col-xs-10 col-sm-12 col-xl-12 col-lg-12"/>
            </div>
        </div>

        <div class="form-group">
          <label for="Address" class="col-sm-3 control-label  ">Address</label>

            <div class="col-sm-9">
              <input type="text" id="form-field-1" placeholder="Address" class="col-xs-10 col-sm-12 col-xl-12 col-lg-12"/>
            </div>
        </div>

        <div class="form-group">
          <label for="gender" class="col-sm-3 control-label  ">First Name</label>

            <div class="col-sm-9">
              <input type="text" id="form-field-1" placeholder="First Name" class="col-xs-10 col-sm-12 col-xl-12 col-lg-12"/>
            </div>
        </div>





        <div class="form-group">
          <label for="password" class="col-sm-3 control-label  ">Password</label>

            <div class="col-sm-9">
              <input type="password" id="form-field-1" placeholder="Password" class="col-xs-10 col-sm-12 col-xl-12 col-lg-12"/>
            </div>
        </div>
        <div class="form-group">
          <label for="cpassword" class="col-sm-3 control-label  ">conform password</label>

            <div class="col-sm-9">
              <input type="password" id="form-field-1" placeholder="Conform password"class="col-xs-10 col-sm-12 col-xl-12 col-lg-12"/>

            </div>
        </div>


        <div class="btn ></button>">

          <button type="submit" class="bt btn-primary ">Submit</button>
          
        </div>
              
            
          
        
      </form>
      
    </div>
    
  </div>

-->




<?php 
include'footer.php';
?>