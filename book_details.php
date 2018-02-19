<?php 
include_once('config.php');
include_once('navbar.html');
$id=$_GET['id'];

$sql1 = "SELECT * FROM book WHERE book_id=$id";
$result1=mysqli_query($conn,$sql1);
$var1=mysqli_fetch_assoc($result1);
if(!$var1)
	{
	echo "<script type='text/javascript'>alert('This book does not exist. Redirecting you.');window.location.href='http://localhost/prasanth/book.php';</script>";
	
	}	

?>


<body class="p-3 mb-2 bg-light text-white">
<div class="jumbotron" >
	
	<div class="row">
		<div class="col-md-8" style="color:grey;padding-bottom:30px;">
		<a href="http://localhost/prasanth/book.php">Books</a> / Details
		</div>
	</div>


	<div >
	<div class="row">
		 
		<div class="col-md-1" style="background-color:white;">
					<img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/book-icon.png" width=75 height=75></img>			
		</div>	
		<div class="col-md-9" style="background-color:white;">
		<span style="font-weight:bold;color:black;"><?php echo $var1['name']; ?> </span><span style="color:grey;float:right;">ISBN-<?php echo $var1['isbn']; ?> </span>		
			<div class="row">
				<div class="col-md-3" style="color:grey;">
				by <span style="color:black;"><?php
						$num=$var1['id'];
						$sql2="SELECT name from author WHERE id=$num";
						$result2=mysqli_query($conn,$sql2);
						$var2=mysqli_fetch_assoc($result2);
						echo $var2['name'];
													
						?></span>		
				</div>
			</div>
		</div>
		
		<div class="col-md-2" >
			<a href="http://localhost/prasanth/book_details.php?id=<?php echo $var1['book_id']-1;?>" class="btn btn-outline-secondary btn-lg" ">
			<img src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-left-01-128.png" width=75 height=75 /> 
        	</a>
			<a href="http://localhost/prasanth/book_details.php?id=<?php echo $var1['book_id']+1;?>" class="btn btn-outline-secondary btn-lg" >
			<img src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-right-01-128.png" width=75 height=75 /> 
        	</a>
		</div>	
		
	</div>
	
	<div class="row">
		<div class="col-md-1" style="background-color:white;">
				
		</div>
		<div class="col-md-9 mx-auto " style="color:black;background-color:white;">
		<?php echo $var1['description'];?>
		</div>
		
		<div class="col-md-2" style="color:grey;">
		<br>
		Navigate to Previous / Next Book 			
		</div>
	</div>
	</div>	
</div>
