<?php include 'db.php'; ?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body style="background-image:url('img/bg.jpg');">
<div id="container">

    <header>
	<div class="width">
<img class="imgl" src="Ms records logo.PNG" width="130" height="130" alt="">
    		<h1><a href="/">MS.RECORDS MUSIC</a></h1>
                 <b> Training institute under</b> :surtal music academy

	    	<nav>
	
    			<ul>
				<li><a href="music1.php"><b><u>HOME</u></b></a></li>
        			<li><a href="admin_recordingstudio.php"><b><u>RECORDING STUDIOS</u></b></a></li>

<li><a href="admin_services.html"><b><u>OUR SERVICES</u></b></a></li>

<li><a href="admin_contact_res.php"><b><U>CONTACT US</u></b></a></li>
<li><a href="admin_songs.php"><b><U>Our Songs</u></b></a></li>

        		</ul>
	
    		</nav>


       	</div>
    </header>


    <div id="body" class="width">
<table class="table table-bordered table-striped">
	<thead style="color:white; font-size:25px;font-family:Arial, Helvetica, sans-serif;">
	<tr class="item-head" > 
	<th>S.no</th>
	<th>con_u_id</th>
	<th>Name</th>
	<th>Email</th>
	<th>message</th>
	</tr>
	</thead>
	<tbody style="color:black; font-size:25px;font-family:Arial, Helvetica, sans-serif;">
	<?php
       $sql="SELECT * FROM contact";
	   $run=mysqli_query($con,$sql);
	   $c=1;
	   while($row=mysqli_fetch_assoc($run)){
	echo "<tr>
	<td>$c</td>
	<td>$row[u_id]</td>
	<td>$row[name]</td>
	<td >$row[email]</td>
	<td>$row[message]</td>
</body>
</html>";
	   
	   $c++;
	   }
?>
    	<div class="clear"></div>
    </div>
    <footer>
            <p style="color:white;">&copy;Ms Records</p>
    </footer>
</div>
</body>
</html>