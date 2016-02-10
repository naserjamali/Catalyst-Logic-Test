<?php

for($x = 1; $x <= 100; $x++) {
   echo "$x " ;
   
   if(($x % 3) === 0) {
  	echo "triple";
  }
  
   if(($x % 5) === 0) {
  	echo "fiver";
  }
  
  //if the number is divisible by both 3 & 5, "triple" and "fiver" are printed in one line without space and make it "triplefiver".
  echo "<br>";
}

?>
