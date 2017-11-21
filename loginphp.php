<?php include 'db.php'; ?>
<?php
$name=$_POST['name'];
$password=$_POST['password'];
$sql="SELECT * FROM musiclogin WHERE name='$name' AND password='$password'";
$run= mysqli_query($con,$sql);
if(($row=mysqli_fetch_assoc($run)))
{
$u_id=$row['u_id'];	
?><script>window.location='music1.php?u_id=<?php echo $u_id; ?>'</script>
	<?php

}
    else {?>
		<script>alert('please check you password');</script>
		<script>window.location='music.php';</script>
		<?php
	}
	  
 ?>