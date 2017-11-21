<?php
$server="localhost";
$username="msrecords";
$password="";
$db ="msrecords";
 $con=mysqli_connect($server, $username, $password, $db);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
        
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/jquery.js"></script>

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<script type="text/javascript">
            $(document).ready(function(){
            $('.pagination').pagination({
                    items: <?php echo $total_records;?>,
                    itemsOnPage: <?php echo $limit;?>,
                    cssStyle: 'light-theme',
                    currentPage : <?php echo $page;?>,
                    hrefTextPrefix : 'songs.php?page='
                });
                });
            </script>
			
		<style>
		.container1{
			background-image:url("img/rr.jpg");
			max-width: 100%;
    height: auto
	border:5px solid white;
		}
		 .fa {
  padding: 10px;
  font-size: 40px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 3px 5px;
}


.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
		</style>
</head>
<body style="background-image:url('img/bg.jpg');">
<div id="container">

    <header>
	<div class="width" >
<img class="imgl" src="Ms records logo.PNG" width="130" height="130" alt="">
    		<h1><a href="/">MS.RECORDS MUSIC</a></h1>
                 <b> Training institute under</b> :surtal music academy

	    	<nav>
	
    			<ul>
				<li><a href="index.php"><b><u>Home</u></b></a></li>
        			<li><a href="recordingstudio.php"><b><u>RECORDING STUDIOS</u></b></a></li>

<li><a href="services.html"><b><u>OUR SERVICES</u></b></a></li>

<li><a href="contact.php"><b><U>CONTACT US</u></b></a></li>
<li><a href="songs.php"><b><U>Our Songs</u></b></a></li>
        		</ul>
	
    		</nav>


       	</div>
    </header>
	<center>
  <div class="container1" style="background-image:url('img/bg.jpg');width:86%; border:3px solid white; border-radius:6px 6px 6px 6px;">
    <table class="table">
       
            <tr>
        
        
                <td>      <div id="contact" class="container2">
        <h1 style="color:white; font-size:25px;font-family:Arial, Helvetica, sans-serif;"><b>CONTACT US</b></h1>
        <form id="contact_form" method="post" enctype="multipart/form-data">
	<p class="pg"><label><b>Name</b></label></p>
        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="name" type="text" class="form-control" name="name" value="" placeholder="enter the name">                                        
                        </div>
						
						<p class="pg"><label><b>Username</b></label></p>
        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">                                        
                        </div>
           <br>
                        <p class="pg"><label for="message">Your message:</label></p>
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input id="submit_button" name="con_submit" type="submit" value="Submit" />
        </form>
        
                   </td>
    
            <td><div class="container">
                    <h1 style="color:black; font-size:25px;font-family:Arial, Helvetica, sans-serif;"><b>Social Sites<b></h1><br>
					<div style="width:50px;">
  <a href="https://www.facebook.com/" class="fa fa-facebook" ></a>
<a href="https://twitter.com/" class="fa fa-twitter" ></a>
<a href="#" class="fa fa-google"></a></div>
<br><br><br><br><br>
    <p style="color:blue; font-size:25px;font-family:Arial, Helvetica, sans-serif;"> Contact US we response to you <ul></p><a href="#">Terms & Privacy</a></ul>

</div></td>
            </tr>

    </table>
    </div>
</center>
    <footer>
            <p style="color:white;">&copy;Ms Records</p>
    </footer>
</body>
</html>
<?php
if(isset($_REQUEST['con_submit']))
{
	$name=mysqli_real_escape_string($con,strip_tags($_POST['name']));
	$email=mysqli_real_escape_string($con,strip_tags($_POST['email']));
	$message=mysqli_real_escape_string($con,strip_tags($_POST['message']));
	$sql="INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
	$run=mysqli_query($con,$sql);
}
?>