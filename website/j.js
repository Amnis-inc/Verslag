var acc = document.getElementsByClassName("accordion");
//maakt een variable die de class accordion aan neemt.
    var i;
    //maakt een variable met de naam i aan
    for (i = 0; i < acc.length; i++) {
    //als i gelijk is aan 0, i lager is dan de accordion lengte dan voert hij de eerste volgende functie uit.
      acc[i].addEventListener("click", function() {
      //detecteerd dat er wordt geklicked 
        this.classList.toggle("active");
        //kijkt of de "block" actief is
        var panel = this.nextElementSibling;
        //maakt een variable die de panel informatie leest
        if (panel.style.display === "block") {
        //als de panel style een block toont dan klopt deze if statement
          panel.style.display = "none";
          //als de vorige if statement klopt dan verwijdert deze lijn de block
        } else {
        //als de vorige niet voldoet aan de eisen neemt die de volgend functie en voert hem uit
          panel.style.display = "block";
          //zorgt er voor dat er een block in de scherm wordt getoond
        }
      });
    }//het einde