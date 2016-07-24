<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentallela Alela! | </title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>	
		

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
		
		
	
          <!--<form  ng-app="myApp"  ng-controller="validateCtrl" name="myForm">
            <h1>Login Form</h1>
            <div class="control-group" ng-class="{true: 'error'}[submitted && myForm.email.$invalid]">
              <input type="email" class="form-control" placeholder="Username" name="email"/>
			  	<span class="help-inline" ng-show="submitted && form.email.$error.required">Required</span>
            	<span class="help-inline" ng-show="submitted && form.email.$error.email">Invalid email</span>
            </div>
			<span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
			<span ng-show="myForm.email.$error.required">Email is required.</span>
			<span ng-show="myForm.email.$error.email">Invalid email address.</span>
			</span>
            <div>
              <input type="password" class="form-control" placeholder="Password"  name="password" />
            </div>
            <div>
              <input type="submit" ng-disabled="myForm.email.$dirty && myForm.email.$invalid">
             
            </div>
			</form>-->
			
			
			<form name="form" ng-app>
			<div class="control-group" ng-class="{true: 'error'}[submitted && form.email.$invalid]">
					<label class="control-label" for="email">Your email address</label>
					<div class="controls">
						<input type="email" name="email" ng-model="email" required />
						<span class="help-inline" ng-show="submitted && form.email.$error.required">Required</span>
						<span class="help-inline" ng-show="submitted && form.email.$error.email">Invalid email</span>
					</div>
				</div>
			   
			   <button type="submit" class="btn btn-primary btn-large" ng-click="submitted=true">Submit</button>
			</form>
			
			
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">New to site?
                <a href="#toregister" class="to_register"> Create Account </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
      <div id="register" class="animate form">
        <section class="login_content">
          <form>
            <h1>Create Account</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Submit</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">Already a member ?
                <a href="#tologin" class="to_register"> Log in </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>

</html>
