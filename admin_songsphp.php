<?php include 'db.php'; ?>
<?php 
if(isset($_REQUEST['u_id'])){
	
	$del_sql="DELETE FROM musicsongs WHERE u_id='$_REQUEST[u_id]'";
	if($run=mysqli_query($con,$del_sql)){
		?> <script>window.location="admin_songs.php"</script><?php
	}
}?>