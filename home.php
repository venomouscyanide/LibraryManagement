
<?php 
include_once('config.php');
include_once('navbar.html');


$sql1 = "SELECT name FROM author";
$result1=mysqli_query($conn,$sql1);

$sql2="SELECT count(id) AS number FROM book";
$result2=mysqli_query($conn,$sql2);
$var2=mysqli_fetch_assoc($result2);

$sql3="SELECT * from book";
$result3=mysqli_query($conn,$sql3);

$flag=0;
?>
<body class="p-3 mb-2 bg-light text-white">
<div class="jumbotron" >
	
	<div class="row">
		<div class="col-md-8" style="color:grey;padding-bottom:30px;">
		BOOKS<span style="float:right;"><?php echo $var2['number'];?> Books</span>	
		</div>
	</div>
<?php while($row=mysqli_fetch_assoc($result3)){ ?>
	<div class="row">
		<div class="col-md-8">
			<div style="background-color:white;">
				<div class="row">			
					<div class="col-md-2">
					<img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/book-icon.png" width=75 height=75></img>			
					</div>
					
					<div class="col-md-10">
						<span style="font-weight:bold;color:black;"><?php echo $row['name']; ?></span><span style="color:grey;float:right;">ISBN-<?php echo $row['isbn']; ?></span>
						<div class="row">
						<div class="col-md-4" style="color:black;">
						<span style="color:grey;">by</span> <span style="font-weight:bold;">
						<?php
						$num=$row['id'];
						$sql4="SELECT name from author WHERE id=$num";
						$result4=mysqli_query($conn,$sql4);
						$var4=mysqli_fetch_assoc($result4);
						echo $var4['name'];
													
						?>
						</span>
						</div>			
						</div>
	
						<div class="row" >
						<div class="col-md-10" style="color:grey;overflow: hidden;white-space:nowrap;">
						<?php echo $row['description'];?> 
						</div>
						<div class="col-md-2" style="color:black;padding-left:0px;">
						.......<a href="#" >more</a>						
						</div>			
						</div>
					</div>	
				</div>
			</div>
		</div>
		 <?php if($flag==0) {?>
		<div class="col-md-4">
		<button type="button" class="btn btn-primary btn-block " style="padding:10px;" href="#" data-toggle="modal" data-target="#exampleModalLong">Add Book</button>		
		</div>
		<?php }$flag=1;?>
	</div>	 
<?php } ?>
	
</div>


<!-- modal code -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">Add Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	
      <div class="modal-body" style="color:black;">
		<div class="form-group">
				<label for="exampleName1" style="color:grey;">Book Name</label>
				<input class="form-control"  id="name" type="text" placeholder="John Doe" >
		</div>
	
		<div>
		<div class="form-group">
 			 <label for="sel1">Select Author:</label>
  			<select class="form-control" id="author">
				<?php while($row=mysqli_fetch_assoc($result1)){ ?>
    			<option><?php echo $row["name"];?></option>
    			
				<?php } ?>
  			</select>
		</div>
		</div>

		<div class="form-group" >
				<label for="exampleName1" style="color:grey;"></label>
				<input class="form-control"  id="isbn" type="text" placeholder="ISBN number" >
		</div>		
		
		<div class="form-group">
   		 	<label for="exampleTextarea">Description of content</label>
   		 	<textarea class="form-control" id="desc" rows="4"></textarea>
  		</div>
      </div>
      <div class="modal-footer">
 
			<div class="col-md-6">        	
			<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cancel</button>
			</div>
			<div class="col-md-6">        	
			<button type="button" class="btn btn-primary btn-block" data-dismiss="modal" id="submit">Save Book</button>
			</div>    	
		  
		</div>
    </div>
  </div>
</div>

<script>
$("#submit").click(function()

{

$.ajax({ 	
       url: 'http://localhost/prasanth/book_input.php',
	   type:'POST',
       dataType: 'text',
	   data:
	   {
		name:$('#name').val(),
		author:$('#author').val(),
		isbn:$('#isbn').val(),
		desc:$('#desc').val(),		
		},	
       success: function(data){
	   console.log(data);
	    window.location.reload();
       
       }
    });

});
</script>
</html>
