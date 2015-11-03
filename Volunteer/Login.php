<!DOCTYPE html>
<html>
<head>
	<title>Volunteer Login - Meals On Wheels Dashboard</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet"  />
    <link rel="shortcut icon" href="images/Picture1.png">

	
</head>
<body>
	<!-- Start Header	-->
    <div class="header">
        <h1> Volunteer Login </h1>
    </div>
	<!-- End Header		-->
    <div class="container">
        <form>
            <div class="row-centered">
                <div class="col-xs-12 col-md-6 col-centered">
                    <div class="form-group">
                        <label for=volunteerUsername> <h2>Username</h2> </label>
                        <input type="text" class="form-control" id="volunteerUsername" placeholder="Username">
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-centered">
                    <div class="form-group">
                        <label for=volunteerPassword> <h2>Password</h2> </label>
                        <input type="password" class="form-control" id="volunteerPassword" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="row-centered">
                <button type="submit" class="btn btn-primary btn-lg row-centered btn-block">Submit</button>
            </div>
        </form>
	
        <hr>
        
        <h2>Not a registered volunteer? <a href="#">Register here!</a></h2>
	    <h2>Forgot your password? <a href="#">Click here!</a></h2>	
        
        
        
    </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>	
</body>
</html>
