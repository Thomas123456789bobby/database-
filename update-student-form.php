<?php include "include/head.php"; ?>
<?php include "include/read-student.php";?> 
<div class="container">
    
           <form action="include/update-student.php" method="POST">
           
          <div class="form-group">
           <h2>wat is je voornaam</h2>
           <input class="form-control" type="text" name="voornaam">
           <br>
    
           <h2>wat is je achternaam</h2>
           <input class="form-control" type="text" name="achternaam",>
           <br>

           <input type="hidden" name="id" value="<?php echo $student["id"]; ?>"> 
    
           <input class="btn btn-primary"; type="submit" value="verstuur">

          </div>
          <div class="box3">

          
          </div>
          </div>

        
    
    </form>
    </div>
    
    <?php include "include/footer.php"; ?>

