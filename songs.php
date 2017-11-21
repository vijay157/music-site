<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MS.RECORDS</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
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
				<li><a href="index.php"><b><u>Home</u></b></a></li>
        			<li><a href="recordingstudio"><b><u>RECORDING STUDIOS</u></b></a></li>

<li><a href="services.html"><b><u>OUR SERVICES</u></b></a></li>

<li><a href="contact.php"><b><U>CONTACT US</u></b></a></li>
<li><a href="songs.php"><b><U>Our Songs</u></b></a></li>
        		</ul>
	
    		</nav>


       	</div>
    </header>
  <div id="body" class="width">
  <?php
  $sql="SELECT * FROM musicsongs";
	   $run=mysqli_query($con,$sql);
  $c=1;
	   while($row=mysqli_fetch_assoc($run)){
  echo"
<table class='w3-table-all notranslate'>
<thead><tr>

<th style='height:15%; width:13%;background-color:black; '><img src='$row[allbum_img]' class='img-responsive' ></th>

<th style='width:20%;background-color:black;'>
<table class='table'>
<thead>
<tr>
<th style='width:30%; background-color:black;font-style:oblique'>allbum Name</th><th style='background-color:black;'>:</th>
<th style='background-color:black;font-style:oblique'>$row[allbum_movie_name]</th>
</tr>
<tr>
<th style='width:30%; background-color:black; font-style:oblique'>song Name</th><th style='background-color:black;'>:</th>
<th style='background-color:black;font-style:oblique'>$row[allbum_name]</th>
</tr> 
<tr>
<th style='width:30%; background-color:black; font-style:oblique'>singers</th><th style='background-color:black;'>:</th>
<th style='background-color:black;font-style:oblique'>$row[allbum_singers]</th>
</tr>
<tr>
<th style='width:30%; background-color:black;font-style:oblique'> Description</th><th style='background-color:black;'>:</th>
<th style='background-color:black;font-style:oblique'>$row[allbum_description]</th>
</tr>
</thead>
</table>
</th>
<th style='width:25%;background-color:black;'>
<audio controls>
  <source src='$row[allbum_audio]' type='audio/mpeg'>
</audio>
<br>
<a href='http://$row[allbum_youtube]' >$row[allbum_youtube]</a>
</th>
</tr>";
$c++;
	   }
 ?>
</thead></table>
<?php
	  $row = mysqli_fetch_row($run);  
        $total_records = $row[0]; 
        $limit=1;		
        $total_pages= ceil($total_records / $limit);  
        $pagLink = "<nav><ul class='pagination'>";  
        for ($i=1; $i<=$total_pages; $i++) {  
                     $pagLink .= "<li><a href='index.php?page=".$i."'>".$i."</a></li>";  
        };  
        echo $pagLink . "</ul></nav>";   
?>
</div>
    <footer>
            <p style="color:white;">&copy;Ms Records</p>
    </footer>
</div>
</body>
</html>