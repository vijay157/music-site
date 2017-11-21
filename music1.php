<?php include 'db.php'; ?>
<?php
if(isset($_POST['ins_submit']))
{
	$audio_movie_name=mysqli_real_escape_string($con,strip_tags($_POST['audio_movie_name']));
	$audio_name=mysqli_real_escape_string($con,strip_tags($_POST['audio_name']));
	$audio_singers=mysqli_real_escape_string($con,strip_tags($_POST['audio_singers']));
	$audio_description=mysqli_real_escape_string($con,strip_tags($_POST['audio_description']));
	$audio_youtube=mysqli_real_escape_string($con,strip_tags($_POST['audio_youtube']));
	if(isset($_FILES['audio_image']['name'])){
		$file_name=$_FILES['audio_image']['name'];
		$path_address="img/$file_name";
		$path_address_db="img/$file_name";
		$img_confirm=1;
		$file_type=pathinfo($_FILES['audio_image']['name'],PATHINFO_EXTENSION);
		if($_FILES['audio_image']['size']>200000){
			$img_confirm=0;
			echo 'this size is very big';
		}
		if($file_type != 'jpg' && $file_type != 'png' && $file_type != 'gif' )
		{
			$img_confirm=0;
			echo 'this is not matching';
		}
		if($img_confirm==0){
			echo 'this is not matchin';

		}
	else{
		//if(move_uploaded_file($_FILES['audio_image']['tmp_name'],$path_address)){
		 if(isset($_FILES['audio_file']['name'])){
			$file_name = $_FILES['audio_file']['name'];
			$file_type=pathinfo($_FILES['audio_file']['name'],PATHINFO_EXTENSION);
          if ((($file_type == 'mp3')
    || ($file_type == 'mp4')
    || ($file_type == 'wav'))
    && ($file_type < 1000000)){
		
       $new_file_name=$_FILES['audio_file']['name'];

         // Where the file is going to be placed
       $target_path = "audio/$new_file_name";
 
      //target path where u want to store file. 
      // if(move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_path)) {
            
        //insert query if u want to insert file
			
				if(move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_path));
				if(move_uploaded_file($_FILES['audio_image']['tmp_name'],$path_address)){
					
	$sql="INSERT INTO musicsongs(allbum_movie_name,allbum_name,allbum_singers,allbum_description,allbum_img,allbum_audio,allbum_youtube) VALUES('$audio_movie_name','$audio_name','$audio_singers','$audio_description','$path_address_db','$target_path','$audio_youtube')";
			if(mysqli_query($con,$sql))
            { ?>
        <script>window.location="music1.php"</script>
	     <?php }

	}
	else{
		echo 'sorry3';
		} 
		}else{
			echo 'sorry2';
		}
	}
		// }
		else{
			echo 'sorry1';
		}
		}
		
        }
	}
	
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MS.RECORDS</title>
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

<li><button class="btn btn-primary " data-toggle="modal" data-backdrop="static" data-target="#add_upload" >Upload</button>
<div class="modal fade" id="add_upload">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class=" close" data-dismiss="modal">&times;</button>
<h3 style="color:black; font-size:18px">Add Details</h3>
</div>
<div class="modal-body">
<form method="post" enctype="multipart/form-data">
<div class="form-group"> 
<label style="color:black; font-size:18px">Add Audio Img</label>
<input type="file"  name="audio_image" class="form-control">
</div>
<div class="form-group"> 
<label style="color:black; font-size:18px">Add Audio</label>
<input type="file"  name="audio_file" class="form-control">
</div>
<div class="form-group">
<label style="color:black; font-size:18px">Audio movie name</label>
<input type="text" name="audio_movie_name" class="form-control" required>
</div>
<div class="form-group">
<label style="color:black; font-size:18px">Audio name</label>
<input type="text"  name="audio_name" class="form-control" required>
</div>
<div class="form-group">
<label style="color:black; font-size:18px">Singers</label>
<input type="text"  name="audio_singers" class="form-control">
</div>

<div class="form-group">
<label style="color:black; font-size:18px">Decscription</label>
<textarea type="number"  name="audio_description" class="form-control"></textarea>
</div>
<div class="form-group">
<label style="color:black; font-size:18px">Youtube Link</label>
<input type="text"  name="audio_youtube" class="form-control">
</div>
<div class="form-group">
<button class="btn btn-success btn-block" name="ins_submit" class="form-control" >submit</button>
</div>
</form>
</div>
<div class="modal-header">
<div class="text-right">
<button class="btn btn-danger" data-dismiss="modal">close</button>
</div>
</div>
</div>
</div>
</div>
</li>
<li><a href="index.php" class="btn btn-primary "  >Log Out</a></li><br><br>
        		</ul>
	
    		</nav>


       	</div>
    </header>


    <div id="body" class="width">

		
   <aside class="sidebar small-sidebar left-sidebar">
	
            <ul>	
               <li>
                    <h4>Categories</h4>
                    <ul>
                       <li><b>Online Mixing</b></a></li>
<li><b>Recording Pakages</b></a></li>
<li><b>Audio Production</b></a></li>

<li><b>Studio Gear</b></a></li>
                    </ul>
                </li>
                
                <li class="bg">
                    <h4>About us</h4>
                    <ul>
                        <li class="text">
                        	<p style="margin: 0;">One of the moast famous Training center in now a days.You will be statisfied 100%</p>
                        </li>
                    </ul>
                </li>
                
                <li>
                	<h4>Search site</h4>
                    <ul>
                    	<li class="text">
                            <form method="get" class="searchform" action="#" >
                                <p>
                                    <input type="text" size="32" value="" name="s" class="s" />
                                    
                                </p>
                            </form>	
						</li>
					</ul>
                </li>
                
                <li>
                    <h4>Helpful Links</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/MsRecordsmusic/">Facebook</a></li>
                        <li><a href="https://mobile.twitter.com/MsRecordsindiaMsRecordsindia">Twitter</a></li>
                        <li><a href="Instagram:https://www.instagram.com/ms.records_/">Instagram</a></li>
<li><a href="https://m.soundcloud.com/ms-records-543142715">Sounds Cloud</li>
                    </ul>
                </li>
                
            </ul>
		
        </aside>

		<section id="content" class="three-column">

	    <article>
				
			
			<h3>What is music?</h3>
			
 
            <p>Music is an art form and cultural activity whose medium is sound organized in time. The common elements of music are pitch (which governs melody and harmony), rhythm (and its associated concepts tempo, meter, and articulation), dynamics (loudness and softness), and the sonic qualities of timbre and texture (which are sometimes termed the "color" of a musical sound). Different styles or types of music may emphasize, de-emphasize or omit some of these elements. Music is performed with a vast range of instruments and vocal techniques ranging from singing to rapping; there are solely instrumental pieces, solely vocal pieces (such as songs without instrumental accompaniment) and pieces that combine singing and instruments.

<h3>The facilities we provide you are</h3>


            <ul class="styledlist">
                <li>Music Recordings</li>
                <li>Music Lessons</li>
 		
                 <li>Studio Parties</li>
                <li>Rehearsals</li>
            </ul>

				

			</article>
        </section>
        
      
    	<div class="clear"></div>
    </div>
    <footer>
            <p style="color:white;">&copy;Ms Records</p>
    </footer>
</div>
</body>
</html>
<?php
/*if(isset($_POST['ins_submit']))
{
	$audio_movie_name=mysqli_real_escape_string($con,strip_tags($_POST['audio_movie_name']));
	$audio_name=mysqli_real_escape_string($con,strip_tags($_POST['audio_name']));
	$audio_singers=mysqli_real_escape_string($con,strip_tags($_POST['audio_singers']));
	$audio_description=mysqli_real_escape_string($con,strip_tags($_POST['audio_description']));
	$audio_img=mysqli_real_escape_string($con,strip_tags($_POST['audio_img']));
	$audio=mysqli_real_escape_string($con,strip_tags($_POST['audio']));
	
	
	$ins_sql="INSERT INTO musicallbum(u_id,allbum_movie_name,allbum_name,allbum_singers,allbum_description,allbum_img,allbum_audio) VALUES('1','$audio_movie_name','$audio_name','$audio_singers','$audio_description','$audio_img','$audio')";
	$run=mysqli_query($con,$ins_sql);
}

<?php
if(isset($_POST['Submit']))
{
$file_name = $_FILES['audio_file']['name'];

if($_FILES['audio_file']['type']=='audio/mpeg' || $_FILES['audio_file']['type']=='audio/mpeg3' || $_FILES['audio_file']['type']=='audio/x-mpeg3' || $_FILES['audio_file']['type']=='audio/mp3' || $_FILES['audio_file']['type']=='audio/x-wav' || $_FILES['audio_file']['type']=='audio/wav')
{ 
 $new_file_name=$_FILES['audio_file']['name'];

 // Where the file is going to be placed
 $target_path = "Audios/".$new_file_name;
 
 //target path where u want to store file.

  //following function will move uploaded file to audios folder. 
if(move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_path)) {

  //insert query if u want to insert file
}
}
}

?>

*/
?>