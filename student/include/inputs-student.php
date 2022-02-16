
           <h2>wat is je voornaam</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["voornaam"])){echo "";}else {echo $student["voornaam"];}?>"  name="voornaam" required>
           <br>
    
           <h2>wat is je achternaam</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["achternaam"])){echo "";}else {echo $student["achternaam"];}?>"name="achternaam" required>
           <br>

           <h2>wat is je klas</h2>
           <select name="klasid" class="form-control">

                   <?php include "connectdb.php"; 

                         $sql = "SELECT * FROM klas"; 

                         $sth = $db->prepare($sql); 

                         $sth->execute(); 


                         while($klas = $sth->fetch()) { ?>
                   <option value="<?php echo $klas["id"]; ?>"> <?php echo $klas["id"]; ?></option>
                    <?php } ?>
           </select>
           <h2>wat is je email</h2>
           <input class="form-control" type="email" value="<?php if (empty($student["email"])){echo "";}else {echo $student["email"];}?>"name="email" required>
              <br>
              <h2>wat is je telefoonnummer</h2>
           <input class="form-control" type="tel" value="<?php if (empty($student["telefoonnummer"])){echo "";}else {echo $student["telefoonnummer"];}?>"name="telefoonnummer" required>
              <br>
           <h2>wat is je straatnaam</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["straatnaam"])){echo "";}else {echo $student["straatnaam"];}?>"name="straatnaam" required>
                <br>
           <h2>wat is je huisnummer</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["huisnummer"])){echo "";}else {echo $student["huisnummer"];}?>"name="huisnummer" required>
                <br>
           <h2>wat is je huisnummer toevoeging</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["huisnummertoevoeging"])){echo "";}else {echo $student["huisnummertoevoeging"];}?>"name="huisnummertoevoeging">
                <br>
           <h2>wat is je woonplaats</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["woonplaats"])){echo "";}else {echo $student["woonplaats"];}?>"name="woonplaats" required>
                <br>
            <h2>wat is je postcode</h2>
            <input class="form-control" type="text"value="<?php if (empty($student["postcode"])){echo "";}else {echo $student["postcode"];}?>"name="postcode" pattern="[0-9]{4}+[a-zA-Z]{2}" title="voorbelt 1111gg" required>
           <br>

           <input type="hidden" name="id" value="<?php echo $student["id"]; ?>"> 
    
           <input class="btn btn-primary"; type="submit" value="verstuur">