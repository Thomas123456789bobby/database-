//array met alle delete knoppen
deleteKnoppen = $(".delete-knop1");
//stel een onclick event in voor elke knop in deleteknoppen
$(deleteKnoppen).on("click",function(){
    //pak de tr door in de parents te kijken en zoek het studentennummer via de class
    klasnummer = $($(this).parent().parent()).find(".klasnummer")[0].innerText;
    console.log (klasnummer);
    //pak de verwijder knop van de modal en pas de href aan zodat de id altijd hetzelfde is als de huidige tr studentnummer
    document.getElementById("btn-delete-confirmed").setAttribute("href","include/delete-klas.php?id=" + klasnummer);
});
//}