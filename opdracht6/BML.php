<?php
$gewicht = $_REQUEST["gewicht"];
$lengte = $_GET["lengte_cm"];

echo "Uw lengte: " . $lengte . "<br>";
print "Uw gewicht: $gewicht <br>" ;
BMIcalc($gewicht,$lengte);
//BML.php?lengte_cm=189&gewicht=76
function BMIcalc($gewicht,$lengte){
  $lengte = $lengte /100;
  $BMI= $gewicht/$lengte**2;
  echo "Jouw bmi is ". round($BMI,1)  . "<br>";

  switch ($BMI) {

    case $BMI<0:
      echo "error";
            break;

          case $BMI<18.5:
      echo "je bent ondergewicht";
            break;

            case $BMI>=18.5 && $BMI < 25:
      echo "je bent een normaal gewicht";
             break;

             case $BMI >= 25 && $BMI < 27:
       echo "je bent licht overgewicht";
              break;

              case $BMI>=27 && $BMI < 30:
        echo "je bent matig overgewicht";
               break;

               case $BMI>=30 && $BMI < 40:
         echo "je hebt obesitas";
                break;

                     case $BMI > 40:
               echo "je hebt morbide obesitas";
                                 break;

          default:
            # code...
            break;
  }
}
 ?>
