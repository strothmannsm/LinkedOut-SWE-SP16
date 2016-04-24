<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Connections </title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="page1.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans">
       <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>



    <style>
        .row{
        	margin-bottom: 30px;
        }

       #name_row{
		   border: 1px solid grey;
		   background-color:#FFFFFF;
           margin-bottom: 15px;
           margin-top: 15px;
	   }
	   #profile_pic{
		   border: 1px solid grey;
		   background-color:#FFFFFF;
	   }

	   body{
		   background-color:#f2f2f2;
	   }
	   h4, h5, p{
		   padding-left: 10px;
	   }
        #button{
            float:right;
            display:inline;
        }
        
    .dropdown{
        display:inline;
    }
    #search_row{
            margin-bottom: 15px;
           margin-top: 15px;
    }
    #search_bar{
        float:right;
        display:inline;
    
    }
        
        
    </style>
    
    
    </head>
    
    
    <body>
    
          <div class="row" id="row0">
            <div class="col-sm-12">
                <nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
                    	<!-- Brand and toggle get grouped for better mobile display -->
	                    <div class="navbar-header">
	                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                      </button>
	                      <a class="navbar-brand" id="Icon" href="index.php">LinkedOut</a>
	                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	                    <form class="navbar-form navbar-left" role="search">
	                    	<div class="form-group">
	          					<input type="text" class="form-control" placeholder="People, jobs, Etc.">
	        				</div>
	        				<button type="submit" class="btn btn-default">Search</button>
	      				</form>

	                	<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
				              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
					              <ul class="dropdown-menu">
					                <li><a href="ViewProfile.php?user_id=<?php echo $_SESSION['user_id'];?>">View Profile</a></li>
					                <li><a href="editprofile.php">Edit Profile</a></li>
									<li><a href="#">Who are you stalking?</a></li>
					                <li><a href="logout.php">Logout</a></li>
					                <li role="separator" class="divider"></li>
					                <!--<li class="dropdown-header">Nav header</li>-->
					                <li><a href="Top10.php">Top 10 Users</a></li>
					                <li><a href="#">One more separated link</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
        
        <br>
        <br>
        <br>
        
        
        <div class="row" id="row1">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" id ="space_row">
            
	 	</div>
	 	<div class="col-sm-4"></div>
	</div>
        
        
        <div class="row" id="row2">
		<div class="col-sm-4"></div>  
		<div class="col-sm-8" id ="button_toolbar">
            
            <h1>Who Are You Stalking?</h1>
            
            
            
	 	</div>
	 	<div class="col-sm-4"></div>
	</div>
        
        
        <div class="row" id = "search_row">
            
          <div class="col-sm-1"></div>
          <div class="col-sm-1"></div>
            
            <div class="col-sm-8">
        
        
                <div class="dropdown" id = "Filter">
                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Filter By
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">All Contacts</a></li>
                        <li><a href="#">Tag</a></li>
                        <li><a href="#">Source</a></li>
                    </ul>
                </div>

                         <div class="dropdown" id = "Sort">
                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Sort By
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Recently Added</a></li>
                        <li><a href="#">First Name</a></li>
                        <li><a href="#">Last Name</a></li>
                    </ul>
                </div>
                
                
                

                
            </div>
            
            <div class="col-sm-1"></div>
          <div class="col-sm-1"></div>
          
        </div>
        
        
        
        
        <div class="row" id="row3">
		<div class="col-sm-1"></div>
        <div class="col-sm-1"></div>    
            
		<div class="col-sm-8" id ="name_row">
            
            <h4 id="name"> Fname Lname</h4>
                <div id="button">
                    <button type="button" class="w3-btn w3-hover-green" value="view_button">View</button>
                </div>
            <h6 id="job">Current employment</h6>
            
            <h6 id="location">Location, state</h6>
            
            
            
	 	</div>
	 	<div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
	</div>
        
        
        <div class="row" id="row4">
		  <div class="col-sm-1"></div>
          <div class="col-sm-1"></div>    
            
		      <div class="col-sm-8" id ="name_row">
            
                <h4 id="name"> Fname Lname</h4>
                  <div id="button">
                    <button type="button" class="w3-btn w3-hover-green" value="view_button">View</button>
                </div>
                <h6 id="job">Current employment</h6>
            
                <h6 id="location">Location, state</h6>
            
            
            
	 	</div>
	 	     <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
	</div>
        
        <div class="row" id="row5">
		  <div class="col-sm-1"></div>
          <div class="col-sm-1"></div>    
            
		      <div class="col-sm-8" id ="name_row">
            
                <h4 id="name"> Fname Lname</h4>
                  <div id="button">
                    <button type="button" class="w3-btn w3-hover-green" value="view_button">View</button>
                </div>
                <h6 id="job">Current employment</h6>
            
                <h6 id="location">Location, state</h6>
            
            
            
	 	</div>
	 	     <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
	</div>
        
        <div class="row" id="row6">
		  <div class="col-sm-1"></div>
          <div class="col-sm-1"></div>    
            
		      <div class="col-sm-8" id ="name_row">
            
                <h4 id="name"> Fname Lname</h4>
                  <div id="button">
                    <button type="button" class="w3-btn w3-hover-green" value="view_button">View</button>
                </div>
                <h6 id="job">Current employment</h6>
            
                <h6 id="location">Location, state</h6>
            
            
            
	 	</div>
	 	     <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
	</div>
        
                <div class="row" id="row7">
		  <div class="col-sm-1"></div>
          <div class="col-sm-1"></div>    
            
		      <div class="col-sm-8" id ="name_row">
            
                <h4 id="name"> Fname Lname</h4>
                  <div id="button">
                    <button type="button" class="w3-btn w3-hover-green" value="view_button">View</button>
                </div>
                <h6 id="job">Current employment</h6>
            
                <h6 id="location">Location, state</h6>
            
            
            
	 	</div>
	 	     <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
	</div>
        
          <div class="row" id="row8">
		  <div class="col-sm-1"></div>
          <div class="col-sm-1"></div>    
            
		      <div class="col-sm-8" id ="name_row">
            
                <h4 id="name"> Fname Lname</h4>
                  <div id="button">
                    <button type="button" class="w3-btn w3-hover-green" value="view_button">View</button>
                </div>
                <h6 id="job">Current employment</h6>
            
                <h6 id="location">Location, state</h6>
            
            
            
	 	</div>
	 	     <div class="col-sm-1"></div>
            <div class="col-sm-1"></div>
	</div>
        
        
        
        
        
    
    
    </body>


</html>