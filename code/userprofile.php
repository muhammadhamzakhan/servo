<?php
	include 'connect.php';
	$userID = $_SESSION['userid'];
	$friendID = 1;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	  
  </head>
  <body style="padding-top: 70px">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
	
  <div class="container-fluid">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a class="navbar-brand" href="home.php">Servo</a></div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="topFixedNavbar1">
          <form class="navbar-form navbar-left" role="search" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" name="searchInput">
            </div>
            <button type="submit" class="btn btn-default" name="searchButton">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="home.php" title="Home Page Link">Home</a></li>
            <li><a href="messages.php">Messages</a></li>
            <li><a href="settingsadmin.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
		
	  	<div class="col-sm-5" id = "middlecolumn">
	  	
	  		<div class="row" style="margin-top:20px;">
				<?php
				// Print Username
				
				?>
			</div>
  		
	  		<div class="row" style="margin-top:20px;">
				<form class="form-inline col-md-5 col-md-offset-4" method="post">
					<button type="submit" class="btn btn-primary" name="blockUserButton">Block User</button>
				</form>
			</div>
			
			<div class="row" style="margin-top:20px;">
				<form class="form-inline col-md-6 col-md-offset-4" method="post">
					<button type="submit" class="btn btn-primary" name="messageUserButton">Message User</button>
				</form>
			</div>
			
			<div class="row" style="margin-top:20px;">
				<form class="form-inline col-md-7 col-md-offset-4" method="post">
					<button type="submit" class="btn btn-primary" name="followUserButton">Follow User</button>
				</form>
			</div>
			
			<div class="row" style="margin-top:20px;">
				<form class="form-inline col-md-5 col-md-offset-4" method="post">
					<button type="submit" class="btn btn-primary" name="unfollowUserButton">Unfollow User</button>
				</form>
			</div>
			
			<div class="row" style="margin-top:20px;">
				<form class="form-inline col-md-5 col-md-offset-4" method="post">
					<button type="submit" class="btn btn-primary" name="reportUserButton">Report User</button>
				</form>
			</div>
		</div>
     	
      	<div class="col-sm-5" id="rightcolumn">
			<h3>Friend's Topics:</h3>
			<ul class="list-group">
				<?php 

				$userID = $friendID; 
				$usertopicsql = "SELECT ID, content FROM Topic WHERE userID = '$userID'";
				$usertopicsresult = mysqli_query($conn, $usertopicsql);

				if(mysqli_num_rows($usertopicsresult) > 0)
				{
					while($row = mysqli_fetch_array($usertopicsresult,MYSQLI_ASSOC)) 
					{
						$topicid = $row["ID"];
						echo "<a href='topic.php?varname=$topicid' class='list-group-item list-group-item-action'>".$row["content"]."</a>";				
					}
				}
				else
					echo "<li class='list-group-item'> Your Friend Have Not Posted Any Topics";

				?>
			</ul>
		</div>		
  </body>
</html>