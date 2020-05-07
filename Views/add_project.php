<?php 
session_start();
if(!isset($_SESSION["Email"])){ header("location:?View=login");}
$Obj_Controller = new Controller();
$Obj_Controller->Add_Project();
include("navbar.php");
?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include("sidebar.php"); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header text-primary">Add New Project Details</h1>
                  <div class="col-md-5 well col-md-offset-3">  
          
     <div class=" alert-danger">
		<?php  
	
	if(isset($Obj_Controller->Error_Mgs)){
			
		echo 	"<h5 style = \"padding:10px;\">".	 $Obj_Controller->Error_Mgs,  "</h5>";	
			
		}
		
		 ?>
		
	</div>
	 
	 <div class=" alert-success">
	 			<?php  
	if(isset($Obj_Controller->Suc_Mgs)){
			
	echo 	"<h5 style = \"padding:10px;\">".	 $Obj_Controller->Suc_Mgs;  "</h5>";
			
		}
		
		 ?>
	 	
	 </div>
          
     <form action="" method="post" role="form"> 
          <div class="form-group">
          	<label> Project Topic :</label>
          	
          	<input type="text" name="topic" class="form-control">
          	
          </div>
           
           
            <div class="form-group">
          	<label> Area Of Knowledge :</label>
          	
          	<input type="text" name="area" class="form-control">
          	
          </div>
          
          
            <div class="form-group">
          	<label> Assign Supervisor :</label>
          	
          	<input type="text" name="supervisor" class="form-control">
          	
          </div>
          
          
            <div class="form-group">
          	<label> Program :</label>
          	
         <select class="form-control" name="program">
          <option value="BSC"> B.Sc </option>
          	<option value="MSC"> M.Sc </option>
          		<option value="PGD"> P.gd </option>
          		
                	</select>
          	
          </div>
          
          
        <div class="form-group">
     <input type="submit" name="Submit_Project" value="Save Project Details" class="btn btn-block btn-success">
          	
	  </div>
         
         </form>
          
          </div>
         
      </div>
    </div>


<div class="row">
<?php include("footer.php");
	?>
</div>