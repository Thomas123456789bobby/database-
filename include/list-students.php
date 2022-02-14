
<?php 

include "connectdb.php"; 

$sql = "SELECT * FROM student"; 

$sth = $db->prepare($sql); 

$sth->execute(); 

?> 

 

<table class="table"> 

    <thead> 

    <tr> 

        <th>Id</th> 

        <th>Voornaam</th> 

        <th>Achternaam</th>

        <th>straatnaam</th>

        <th>huisnummer</th>

        <th>woonplaats</th>
        
    </tr> 

    </thead> 

    <tbody> 

    <?php while($row = $sth->fetch()) { ?> 

        <tr> 

            <td class="studentNummer"><?php echo $row["id"]; ?></td> 

            <td><?php echo $row["voornaam"]; ?></td> 

            <td><?php echo $row["achternaam"]; ?></td> 

            <td><?php echo $row["straatnaam"]; ?></td>

            <td><?php echo $row["woonplaats"]; ?></td>

            <td><?php echo $row["achternaam"]; ?></td>
            <td><a class="btn btn-warning" href="update-student-form.php?id=<?php echo $row["id"]?>">Wijzig</a></td>
            <td><a class="btn btn-danger delete-knop" onclick="confirmDelete()">verwijder</a></td>
        </tr> 

    <?php } ?> 

    </tbody> 

</table> 
<script>

function confirmDelete(studentId) {

// Zoek met jquery het form met id “modal-confirm” en open het form

$("#modal-confirm").modal('show');

}

</script>


<div id="modal-confirm" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button"  onclick="relode()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>weet je zekker dat je wilt verwijder</p>
      </div>
      <div class="modal-footer">
        <a  href="#" id="btn-delete-confirmed" class="btn btn-primary">Verwijder</a>
        <button onclick="relode()" id="btn-delete-dismiss" class="btn btn-secondary" data-dismiss="modal">Annuleer</button>
      </div>
    </div>
  </div>
</div>


<script>

  function relode() {
    location.reload();
  }

  </script> 



