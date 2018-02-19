<?php 
include_once('config.php');
include_once('navbar1.html');

$id=$_GET['id'];
$sql1 = "SELECT count(id) as count FROM book WHERE id=$id";
$result1=mysqli_query($conn,$sql1);
$var1=mysqli_fetch_assoc($result1);


$sql2 = "SELECT * FROM author WHERE id=$id";
$result2=mysqli_query($conn,$sql2);
$var2=mysqli_fetch_assoc($result2);

if(!$var2)
	{
	echo "<script type='text/javascript'>alert('This author does not exist. Redirecting you.');window.location.href='http://localhost/prasanth/author.php';</script>";
	
	}

$sql3 = "SELECT * FROM book WHERE id=$id";
$result3=mysqli_query($conn,$sql3);


?>

<body class="p-3 mb-2 bg-light text-white">
<div class="jumbotron" >
	
	<div class="row">
		<div class="col-md-8" style="color:grey;padding-bottom:30px;">
		<a href="http://localhost/prasanth/author.php">Authors</a> / Details
		</div>
	</div>

	<div class='row'>
		
		<div class="col-md-10" style='background-color:white;'>
		<div style='background-color:white;'>
				<div class='row'>			
					<div class='col-md-1'>
						<img src='static/pic/pen.ico' width=75 height=75></img>			
					</div>
					
					<div class='col-md-11'>
						<span style='font-weight:bold;color:black;'><?php echo $var2['name'];?></span><span style='color:grey;float:right;'>Born in <?php echo $var2['born_in']; ?></span>
						<div class='row'>
							<div class='col-md-4' style='color:black;'>
							<span style='color:grey;'><?php echo $var2['age'];?> / <?php $gender=$var2['gender']; if($gender==1){echo "Male";}else{echo "Female";}?></span>
							</div>			
						</div>
						<div class='row'>
							<div class='col-md-4' style='color:black;'>
							<span style='color:grey;'><?php echo $var2['about'];?></span>
							</div>			
						</div>
					</div>	
				</div>
			</div>
		
		</div>
		<div class="col-md-2">
			<a href="http://localhost/prasanth/auth_details.php?id=<?php echo $var2['id']-1;?>" class="btn btn-outline-secondary btn-lg" ">
			<img src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-left-01-128.png" width=75 height=75 /> 
        	</a>
			<a href="http://localhost/prasanth/auth_details.php?id=<?php echo $var2['id']+1;?>" class="btn btn-outline-secondary btn-lg" >
			<img src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-right-01-128.png" width=75 height=75 /> 
        	</a>
		</div>
	</div>
<div class='row'>
	<div class="col-md-10" style='background-color:white;'>
		<div>
				<div class='row'>			
					<div class='col-md-1'>	
					</div>
					
					<div class='col-md-11'>
							<div class='row'>
								<div class='col-md-4'>

								</div>			
							</div>
					
						<div class='row'>
							<div class='col-md-4' style='color:black;'>
							<span style='color:grey;'>Books written  <?php echo $var1['count']; ?></span>
							</div>			
						</div>
					</div>	
				</div>
			</div>
		
		</div>
	<div class="col-md-2" style="color:grey;">
		<br>
		Navigate to Previous / Next Book 		
	</div>
	</div>

<div class="row">
		<?php while($row=mysqli_fetch_assoc($result3)){?>
		<div class="col-md-10" style='background-color:white;'>	
			<div class="row">
			
				<div class='col-md-1'>	
				</div>
					
				<div class='col-md-11'>
					<div class="row">
						<div class="col-md-12">
							<div style="background-color:white;">
								<div class="row">			
									<div class="col-md-1">
									<img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/book-icon.png" width=75 height=75></img>			
									</div>
									
									<div class="col-md-11">
										<span style="font-weight:bold;color:black;"><?php echo $row['name']; ?></span><span style="color:grey;float:right;">ISBN <?php echo $row['isbn'];?></span>
										<div class="row">
										<div class="col-md-4" style="color:black;">
										<span style="color:grey;">by</span> <span style="font-weight:bold;">
										<?php echo $var2['name'];?>
										</span>
										</div>			
										</div>
		
										<div class="row" >
											<div class="col-md-11" style="color:grey;overflow: hidden;white-space:nowrap;padding-right:0px;">
											<?php echo $row['description'];?>
											</div>
											<div class="col-md-1" style="color:black;padding-left:0px;padding-left:0px">
											.........<a href="http://localhost/prasanth/book_details.php?id=<?php echo $row['book_id'];?>" ><span style="float:right;">more</span></a>						
											</div>			
										</div>
									</div>	
								</div>
							</div>
						</div>			
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	
</div> 	

