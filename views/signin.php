
	<html>
	      <title>
	  </title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
         <style>
	      .me {
  min-height: 75rem;
  padding-top: 4.5rem;
  padding-left: 4.5rem;
  padding-right: 4.5rem;
}
</style>  
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url(' '); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">LOGIN</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<fieldset>
	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Name" name="name" required>
	</br></br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email">
	</br></br>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password">
	</br>
	<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label></br></br>
    <label for="mobile_no"><b>Mobile_no</b></label>
    <input type="mobile_no" placeholder="Mobile_no" name="mobile_no">
	</br></br>
	<label for="dob"><b>Date of birth</b></label>
    <input type="date" placeholder=" " name="dob">
	</br></br>
	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Address" name="address">
	</br></br>
	<label for="profession"><b>Profession</b></label>
    <input type="text" placeholder=" " name="profession">
	</br></br>
	<label for="annual_income"><b>Annual Income</b></label>
    <input type="text" placeholder=" " name="annual_income"></br></br>
	<label for="documents"><b>Documents</b></label>
    <input type="text" placeholder=" " name="documents"></br>
	<label>
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
	</br>
	<a class="btn btn-info" href="<?php echo site_url('My_controller/sign_in_submit/submit'); ?>" >Submit</a>
	  <a class="btn btn-info" href="<?php echo site_url('My_controller/sign_in_cancel/cancel'); ?>" >Cancel</a>
	  
	  </fieldset>
  </div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	</html>