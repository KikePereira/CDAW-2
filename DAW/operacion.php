<?php
if (isset($_GET['op']) && isset($_GET['op1']) && isset($_GET['op2'])) {
   $op = $_GET["op"];
   $op1 = $_GET["op1"];
   $op2 = $_GET["op2"];
   $r = 0;
 
   if ($op == "suma")
   $r = $op1 + $op2;
   else if ($op == "resta")
   $r = $op1 - $op2;
   else if ($op == "multiplica")
   $r = $op1 * $op2;
   else if ($op == "divide")
   $r = $op1 / $op2;
 
   echo "op = " . $op . "<br>";
   echo "op1 = " . $op1 . " ";
   echo "op2 = " . $op2 . " ";
   echo "Resultado  = " . $r;
}
?>
