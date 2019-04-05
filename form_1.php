<?php
$gewichtKilo  = $_GET['gewichtKilo'];
$lengteCentimeter   = $_GET['lengteCentimeter'];
$bmiTotaal = "";
$kwadraat = "";
if($gewichtKilo <= 0)
  {
    echo("<b>Gewicht moet groter zijn dan 0!<br/>");
  }
      if($lengteCentimeter <= 0)
        {
          echo("<b>Lengte moet groter zijn dan 0!<br/>");
        }

          else
          {
              $lengteCentimeter = $lengteCentimeter / 100;
              $kwadraat = $lengteCentimeter * $lengteCentimeter;
              $bmiTotaal = $gewichtKilo / $kwadraat;
              $bmiTotaal = round($bmiTotaal);
          }

            if($bmiTotaal < 18){
                        echo("<font color='blue'><b>U lijdt aan ondergewicht!</b></font>");
                    }
                    if($bmiTotaal > 18 AND $bmiTotaal <= 25){
                        echo("<font color='green'><b>U heeft een gezond gewicht!</b></font>");
                    }
                    if($bmiTotaal > 25 AND $bmiTotaal <= 27){
                        echo("<font color='purple'><b>U heeft een licht overgewicht!</b></font>");
                    }
                    if($bmiTotaal > 27 AND $bmiTotaal <= 30){
                        echo("<font color='yellow'><b>U heeft een matig overgewicht!</b></font>");
                    }
                    if($bmiTotaal > 30 AND $bmiTotaal <= 40){
                        echo("<font color='orange'><b>U heeft een ernstig overgewicht!</b></font>");
                    }
                    if($bmiTotaal > 40){
                        echo("<font color='red'><b>U heeft een ziekelijk overgewicht!</b></font>");
                    }
echo "<h4>Uw gewicht is: <strong> $gewichtKilo      </strong> kg </h4>";
echo "<h4>Uw lengte is: <strong>  $lengteCentimeter </strong> cm ";
echo "<h4>Uw bmi is: <strong> $bmiTotaal </strong></h4>";
echo "</h4></ul></h4>";
?>
