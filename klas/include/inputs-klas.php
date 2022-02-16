
           <h2>wat is je code</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["code"])){echo "";}else {echo $student["code"];}?>"  name="code" required>
           <br>
    
           <h2>wat is je vestiging</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["vestiging"])){echo "";}else {echo $student["vestiging"];}?>"name="vestiging" required>
           <br>

           <h2>wat is je sectie</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["sectie"])){echo "";}else {echo $student["sectie"];}?>"name="sectie" required>
              <br>
              <h2>wat is je cohort</h2>
           <input class="form-control" type="number" value="<?php if (empty($student["cohort"])){echo "";}else {echo $student["cohort"];}?>"name="cohort" required>
              <br>

           <br>

           <input type="hidden" name="id" value="<?php echo $student["id"]; ?>"> 
    
           <input class="btn btn-primary"; type="submit" value="verstuur">