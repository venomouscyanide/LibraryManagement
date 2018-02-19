
<?php 
include_once('config.php');
include_once('navbar1.html');
?>

</body>
<div class="jumbotron" >
	
<?php 
$sql = "SELECT count(id) AS number FROM author";
//echo $sql;
$result1=mysqli_query($conn,$sql);

$var1=mysqli_fetch_assoc($result1);
 
 
$sql2 = "SELECT * FROM author";
//echo $sql2;
//$result2=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$flag=0;
?>
 
	<div class='row'>
		<div class='col-md-8' style='color:grey;padding-bottom:30px;'>
		AUTHORS<span style='float:right;'><?php echo $var1['number'] ?>	Authors</span>	
		</div>
	</div> 

	<div class='row'>

<?php while($row=mysqli_fetch_assoc($result2)){ ?>
	
		<div class='col-md-8'>
			<a href="http://localhost/prasanth/auth_details.php?id=<?php echo $row['id']; ?>">
			<div style='background-color:white;'>
				<div class='row'>			
					<div class='col-md-2'>
						<img src='static/pic/pen.ico' width=75 height=75></img>			
					</div>
					
					<div class='col-md-10'>
						<span style='font-weight:bold;color:black;'><?php echo $row['name'] ?></span><span style='color:grey;float:right;'>Born in <?php echo $row['born_in']?></span>
						<div class='row'>
						<div class='col-md-4' style='color:black;'>
						<span style='color:grey;'>age <?php echo $row['age']?> /<?php if($row['gender']==0){echo "Female";}else{echo "Male";}?></span>
						</div>			
						</div>
					</div>	
				</div>
			</div>
			</a>
		</div>
	
		<?php if($flag==0) {?>
		<div class='col-md-4'>
		<button type='button' class='btn btn-primary btn-block ' style='padding:10px;' href='#' data-toggle='modal' data-target='#exampleModalLong'>Add Author</button>		
		</div>
		<?php }$flag=1;?>
<?php } ?>
	</div>
</div>


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
				<label for="exampleName1" style="color:grey;">Author Name</label>
				<input class="form-control"  id="name" type="text" placeholder="John Doe" >
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				<label for="exampleName1" style="color:grey;"></label>
				<input class="form-control"  id="age" type="number" placeholder="Age" >
				</div>			
			</div>

			<div class="col-md-6">
				<label for="sel1"></label>
	  			<select class="form-control" id="sel1">
					<option >Male</option>
					<option >Female</option>
	  			</select>			
			</div>
		</div>

		<div class="form-group">
				<label for="exampleName1" style="color:grey;">Born In</label>
				<input class="form-control"  id="bornin" type="text" placeholder="America" >
		</div>
		
		<div>
	
		
		<div class="form-group">
   		 	<label for="exampleTextarea">About Author</label>
   		 	<textarea class="form-control" id="about" rows="4"></textarea>
  		</div>
      </div>
      <div class="modal-footer">
 
			<div class="col-md-6">        	
			<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cancel</button>
			</div>
			<div class="col-md-6">        	
			<button type="button" class="btn btn-primary btn-block" data-dismiss="modal" id="submit">Save Author</button>
			</div>    	
		  
		</div>
    </div>
  </div>
</div>
<script>
$("#submit").click(function()

{

$.ajax({ 	
       url: 'http://localhost/prasanth/auth_input.php',
	   type:'POST',
       dataType: 'text',
	   data:
	   {name:$('#name').val(),
		age:$('#age').val(),
		gender:$('#sel1').val(),
		bornin:$('#bornin').val(),
		about:$('#about').val(),
		
		},	
       success: function(data){
	   console.log(data);
	    
       window.location.reload();

		
         
       }
    });

});
</script>
</html>

