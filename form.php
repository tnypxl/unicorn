<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Unicorn Edit</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
    
	
	<section class="container">
		<article class="row">
			<div class=".col-xs-6 .col-sm-4">
			</div>
			<div class=".col-xs-6 .col-sm-4">
				<form class="form-horizontal" role="form" method="post" action="processedform.php">
					<div class="form-group form-group-md">
						<h2 class="panel-heading text-center">Hello, Unicorns! Edit</h2>
						<div class="form-group">
							<label for="firstName" class="col-sm-2 control-label">First Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="lastName" class="col-sm-2 control-label">Last Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="phone" class="col-sm-2 control-label">Phone</label>
							<div class="col-sm-10">
								<input type="text" maxlength="10" data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" required="required" data-fv-notempty-message="This field cannot be left blank." class="form-control" id="phone" name="phone" placeholder="Phone Number" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-sm-2 control-label">Notes</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="4" name="notes" placeholder="" value=""></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<!-- Will be used to display an alert to the user -->
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class=".col-xs-6 .col-sm-4">
			</div>
		</article>
	</section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
