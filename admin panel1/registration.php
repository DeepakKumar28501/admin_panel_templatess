<?php
  include'header.php';
?>

<div class="row justify-content-center mt-4">
  <div class="col-md-8">
    <div class="panel panel-default border" data-aos ="zoom-in">
      <div class="panel-heading bg-primary">
        <h3 class="text-light font-weight-bold">Student Registration </h3>
      </div> <!--panel heading close -->

      <!-- panel body start -->
      <div class="panel-body">
        <form method="POST" enctype = "multipart/form-data">
          <div class="row">
            <div class="col-md-9">

              <div class="input-group mb-3">
                <span class="input-group-addon spanw bg-primary text-light">First Name</span>
                <input type="text" class="form-control" placeholder="firstName" name="firstname">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-addon spanw bg-primary text-light">Last Name</span>
                <input type="text" class="form-control" placeholder="Lastname" name="lastname">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-addon bg-primary spanw text-light">Father's Name</span>
                <input id="fathername" type="text" class="form-control" name="fathername" placeholder="Father's Name" required>
              </div>

              <div class="input-group mb-3">
                <span class="input-group-addon bg-primary  text-light spanw">Mother's Name</span>
                <input id="mothername" type="text" class="form-control" name="mothername" placeholder="mother's Name" required>
              </div>

              <div class="input-group mb-3">
                <span class="input-group-addon bg-primary text-light spanw">Gender</span>
                <select class="form-control" id="sel1" name="gender" required>
                  <option>--- Select---</option>
                  <option value="Male">Male</option>
                  <option value="Female">Femal</option>
                  <option value="Other">Other</option>
                </select>
              </div> 
            </div>

            <div class="col-md-3 bg-primary border pt-4 ">
              <div class="border bg-light col-12 h-75 py-4 text-center "><p class="h1 text-danger ">Choose Photo</p>    <!-- style="width:188px; height:205px;" -->
              </div>
              <div class="input-group my-3">
              <span class="input-group-addon spanw  bg-warning text-light">Photo</span>
              <input type="file" class="form-control spanw"  name="photo">
            </div>
            </div>
          </div><!--  row 1 is close -->

          <div class="row">

            <div class="input-group mb-3 ">
              <span class="input-group-addon bg-primary spanw text-light"> Select Course</span>
              <select class="form-control " name="course" required >
                <option>---Select---</option>
                <option value="BCA">BCA</option>
                <option value="BBA">BBA</option>
                <option value="MCA">MCA</option>
                <option value="MBA">MBA</option>
                <option value="B.ed">B.ed</option>
                <option value="M.ed">M.ed</option>
              </select>
            </div> 

            <div class="input-group mb-3 ">
              <span class="input-group-addon bg-primary spanw text-light">Category</span>
              <select class="form-control " id="sel1" name="Category" required >
                <option>---Select---</option>
                <option value="BCA">GEN</option>
                <option value="BBA">OBC</option>
                <option value="MCA">ST</option>
                <option value="MBA">SC</option>
              </select>
            </div> 

            <div class="input-group mb-3">
              <span class="input-group-addon bg-primary text-light spanw">Date Of birth</span>
              <input id="dob" type="date" class="form-control" name="dob" required>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-addon bg-primary text-light spanw">Email</span>
              <input id="email" type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-addon bg-primary text-light spanw">Contect</span>
              <input id="contect" type="number" class="form-control" name="contect" placeholder="contect" required>
            </div>

            <!-- <div class="input-group mb-3">
              <span class="input-group-addon bg-primary  text-light spanw">Adress</span>
              <input id="address" type="text" class="form-control" name="address" placeholder="address" required>
            </div> -->
            <div class="input-group mb-3">
              <span class="input-group-addon bg-primary  text-light spanw">Aadhar No.</span>
              <input id="address" type="text" class="form-control" name="aadhar" placeholder="Address" required>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-addon bg-primary text-light spanw">Address</span>
              <input id="city" type="text" class="form-control" name="city" placeholder="city" required>
            </div> 

            <div class="input-group mb-3">
              <span class="input-group-addon bg-primary text-light spanw">City</span>
              <input id="city" type="text" class="form-control" name="city" placeholder="city" required>
              <span class="input-group-addon bg-primary text-light spanw">ZipCode</span>
              <input id="state" type="text" class="form-control" name="state" placeholder="ZIP CODE" required>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-addon bg-primary text-light spanw">State</span>
              <input id="city" type="text" class="form-control" name="city" placeholder="city" required>
              <span class="input-group-addon bg-primary spanw text-light">Qualification</span>
              <select class="form-control " id="sel1" name="course" required >
                <option>---Select---</option>
                <option value="BCA">Primary</option>
                <option value="BBA">Junior</option>
                <option value="MCA">High School</option>
                <option value="MBA">Intermediate</option>
                <option value="MBA">Graduation</option>
              </select>
            </div>

         <!--    <div class="form-group">
              <label  class="btn  btn-lg btn-success">
              <input type="file" name="filename" style="position:absolute;z-index: -1;height: 0;">
                Select Profile
              </label>
            </div>       -->                         
            <div class="input-group mb-3">
              <span class="input-group-addon bg-primary text-light spanw">Password</span>
              <input id="city" type="password" class="form-control" name="password" placeholder="Password" required>
              <span class="input-group-addon bg-primary text-light spanw">Conferm Password</span>
              <input id="state" type="password" class="form-control" name="cpassword" placeholder="Conferm Password" required>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-addon spanw  bg-primary text-light">Aadhar</span>
              <input type="file" class="form-control spanw" name="aadhar">
            </div>

            <div class="input-group mb-3 ">
              <span class="input-group-addon spanw  bg-primary text-light">Marksheet</span>
              <input type="file" class="form-control spanw" name="marksheet">
            </div>          

          </div>

        </div><!--  body close -->

        <div class="panel-footer">
          <button class="btn-lg bg-primary" type="reset">Reset</button>
          <button class="btn-lg bg-primary" type="submit">Submit</button>

        </div>

      </form>
      
    </div>

  </div>
</div>
<?php
  include'footer.php';
?>
