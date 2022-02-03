<?php include "include/head.php"; ?>
<?php $id = $_GET["id"]  ?>
<?php include "include/read-student.php";?> 
<div class="container">
      <h2>weet je zekker dat je de wil verwijden?</h2>
           <form action="include/delete-student.php" method="POST">
           
        

           <input type="hidden" name="id" value="<?php echo $student["id"]; ?>"> 
    
           <input class="btn btn-primary"; type="submit" value="verwijden">

          </div>
          <div class="box3">

          
          </div>
          </div>

        
    
    </form>
    </div>
    
    <?php include "include/footer.php"; ?>