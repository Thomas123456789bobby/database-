
           <h2>wat is je voornaam</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["voornaam"])){echo "";}else {echo $student["voornaam"];}?>"  name="voornaam">
           <br>
    
           <h2>wat is je achternaam</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["achternaam"])){echo "";}else {echo $student["achternaam"];}?>"name="achternaam">
           <br>

           <h2>wat is je email</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["email"])){echo "";}else {echo $student["email"];}?>"name="email">
              <br>
              <h2>wat is je telefoonnummer</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["telefoonnummer"])){echo "";}else {echo $student["telefoonnummer"];}?>"name="telefoonnummer">
              <br>
           <h2>wat is je straatnaam</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["straatnaam"])){echo "";}else {echo $student["straatnaam"];}?>"name="straatnaam">
                <br>
           <h2>wat is je huisnummer</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["huisnummer"])){echo "";}else {echo $student["huisnummer"];}?>"name="huisnummer">
                <br>
           <h2>wat is je huisnummer toevoeging</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["huisnummertoevoeging"])){echo "";}else {echo $student["huisnummertoevoeging"];}?>"name="huisnummertoevoeging">
                <br>
           <h2>wat is je woonplaats</h2>
           <input class="form-control" type="text" value="<?php if (empty($student["woonplaats"])){echo "";}else {echo $student["woonplaats"];}?>"name="woonplaats">
                <br>
            <h2>wat is je postcode</h2>
            <input class="form-control" type="text" value="<?php if (empty($student["postcode"])){echo "";}else {echo $student["postcode"];}?>"name="postcode">
           <br>

           <input type="hidden" name="id" value="<?php echo $student["id"]; ?>"> 
    
           <input class="btn btn-primary"; type="submit" value="verstuur">