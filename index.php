<html>
<head>
<title>MEGA SENA - AZOCOM</title>
</head>
<body>

<?php

$Q1 = array(01,02,3,4,5,11,12,13,14,15,21,22,23,24,25);
$Q2 = array(6,7,8,9,10,16,17,18,19,20,26,27,28,29,30);
$Q3 = array(31,32,33,34,35,41,42,43,44,45,51,52,53,54,55);
$Q4 = array(36,37,38,39,40,46,47,48,49,50,56,57,58,59,60);


echo "<h1>";


for ( $iC = 1; $iC <=10; $iC++)
{
$QQ1 = array_rand($Q1,2); // Sortei Quadrante 1
$QQ2 = array_rand($Q2,2); // Sortei Quadrante 2
$QQ3 = array_rand($Q3,2); // Sortei Quadrante 3
$QQ4 = array_rand($Q4,2); // Sortei Quadrante 4

echo "( ".$Q1[$QQ1[0]]." - ".$Q1[$QQ1[1]]." ) - ";
echo "( ".$Q2[$QQ2[0]]." - ".$Q2[$QQ2[1]]." ) - ";
echo "( ".$Q3[$QQ3[0]]." - ".$Q3[$QQ3[1]]." ) - ";
echo "( ".$Q4[$QQ4[0]]." - ".$Q4[$QQ4[1]]." )";

echo "<hr>";
}

echo "<hr>";
/*
echo "( ".NumPar($Q1[$QQ1[0]])." - ".NumPar($Q1[$QQ1[1]])." ) - ";
echo "( ".NumPar($Q2[$QQ1[0]])." - ".NumPar($Q2[$QQ1[1]])." ) - ";
echo "( ".NumPar($Q3[$QQ1[0]])." - ".NumPar($Q3[$QQ1[1]])." ) - ";
echo "( ".NumPar($Q4[$QQ1[0]])." - ".NumPar($Q4[$QQ1[1]])." )";



echo "( ".$Q1[$QQ1[0]]." ) - ".PosicaoL($Q1[$QQ1[0]])." * ".PosicaoV($Q1[$QQ1[0]]);
echo "<br />";
echo "( ".$Q1[$QQ1[1]]." ) - ".PosicaoL($Q1[$QQ1[1]])." * ".PosicaoV($Q1[$QQ1[1]]);
echo "<br />";
echo "<br />";
echo "( ".$Q2[$QQ2[0]]." ) - ".PosicaoL($Q2[$QQ2[0]])." * ".PosicaoV($Q2[$QQ2[0]]);
echo "<br />";
echo "( ".$Q2[$QQ2[1]]." ) - ".PosicaoL($Q2[$QQ2[1]])." * ".PosicaoV($Q2[$QQ2[1]]);
echo "<br />";
echo "<br />";
echo "( ".$Q3[$QQ3[0]]." ) - ".PosicaoL($Q3[$QQ3[0]])." * ".PosicaoV($Q3[$QQ3[0]]);
echo "<br />";
echo "( ".$Q3[$QQ3[1]]." ) - ".PosicaoL($Q3[$QQ3[1]])." * ".PosicaoV($Q3[$QQ3[1]]);
echo "<br />";
echo "<br />";
echo "( ".$Q4[$QQ4[0]]." ) - ".PosicaoL($Q4[$QQ4[0]])." * ".PosicaoV($Q4[$QQ4[0]]);
echo "<br />";
echo "( ".$Q4[$QQ4[1]]." ) - ".PosicaoL($Q4[$QQ4[1]])." * ".PosicaoV($Q4[$QQ4[1]]);
echo "<br />";
echo "<br />";
*/
//Linhas
echo "</h1>";
echo "<hr>";

 $Linha = array();
 $Linha['L1'] = 0;
 $Linha['L2'] = 0;
 $Linha['L3'] = 0;
 $Linha['L4'] = 0;
 $Linha['L5'] = 0;
 $Linha['L6'] = 0;

 $Linha['V1'] = 0;
 $Linha['V2'] = 0;
 $Linha['V3'] = 0;
 $Linha['V4'] = 0;
 $Linha['V5'] = 0;
 $Linha['V6'] = 0;
 $Linha['V7'] = 0;
 $Linha['V8'] = 0;
 $Linha['V9'] = 0;
 $Linha['V10'] = 0;

 IF ( PosicaoV($Q1[$QQ1[0]]) == "V1" ) $Linha['V1'] += 1;
 IF ( PosicaoV($Q1[$QQ1[0]]) == "V2" ) $Linha['V2'] += 1;
 IF ( PosicaoV($Q1[$QQ1[0]]) == "V3" ) $Linha['V3'] += 1;
 IF ( PosicaoV($Q1[$QQ1[0]]) == "V4" ) $Linha['V4'] += 1;
 IF ( PosicaoV($Q1[$QQ1[0]]) == "V5" ) $Linha['V5'] += 1;
 IF ( PosicaoV($Q1[$QQ1[0]]) == "V6" ) $Linha['V6'] += 1;
 IF ( PosicaoV($Q1[$QQ1[0]]) == "V7" ) $Linha['V7'] += 1;
 IF ( PosicaoV($Q1[$QQ1[0]]) == "V8" ) $Linha['V8'] += 1;
 IF ( PosicaoV($Q1[$QQ1[0]]) == "V9" ) $Linha['V9'] += 1;
IF ( PosicaoL($Q1[$QQ1[0]]) == "V10" ) $Linha['V10'] += 1;

 IF ( PosicaoV($Q1[$QQ1[1]]) == "V1" ) $Linha['V1'] += 1;
 IF ( PosicaoV($Q1[$QQ1[1]]) == "V2" ) $Linha['V2'] += 1;
 IF ( PosicaoV($Q1[$QQ1[1]]) == "V3" ) $Linha['V3'] += 1;
 IF ( PosicaoV($Q1[$QQ1[1]]) == "V4" ) $Linha['V4'] += 1;
 IF ( PosicaoV($Q1[$QQ1[1]]) == "V5" ) $Linha['V5'] += 1;
 IF ( PosicaoV($Q1[$QQ1[1]]) == "V6" ) $Linha['V6'] += 1;
 IF ( PosicaoV($Q1[$QQ1[1]]) == "V7" ) $Linha['V7'] += 1;
 IF ( PosicaoV($Q1[$QQ1[1]]) == "V8" ) $Linha['V8'] += 1;
 IF ( PosicaoV($Q1[$QQ1[1]]) == "V9" ) $Linha['V9'] += 1;
IF ( PosicaoV($Q1[$QQ1[1]]) == "V10" ) $Linha['V10'] += 1;

 IF ( PosicaoV($Q2[$QQ2[0]]) == "V1" ) $Linha['V1'] += 1;
 IF ( PosicaoV($Q2[$QQ2[0]]) == "V2" ) $Linha['V2'] += 1;
 IF ( PosicaoV($Q2[$QQ2[0]]) == "V3" ) $Linha['V3'] += 1;
 IF ( PosicaoV($Q2[$QQ2[0]]) == "V4" ) $Linha['V4'] += 1;
 IF ( PosicaoV($Q2[$QQ2[0]]) == "V5" ) $Linha['V5'] += 1;
 IF ( PosicaoV($Q2[$QQ2[0]]) == "V6" ) $Linha['V6'] += 1;
 IF ( PosicaoV($Q2[$QQ2[0]]) == "V7" ) $Linha['V7'] += 1;
 IF ( PosicaoV($Q2[$QQ2[0]]) == "V8" ) $Linha['V8'] += 1;
 IF ( PosicaoV($Q2[$QQ2[0]]) == "V9" ) $Linha['V9'] += 1;
IF ( PosicaoL($Q2[$QQ2[0]]) == "V10" ) $Linha['V10'] += 1;

 IF ( PosicaoV($Q2[$QQ2[1]]) == "V1" ) $Linha['V1'] += 1;
 IF ( PosicaoV($Q2[$QQ2[1]]) == "V2" ) $Linha['V2'] += 1;
 IF ( PosicaoV($Q2[$QQ2[1]]) == "V3" ) $Linha['V3'] += 1;
 IF ( PosicaoV($Q2[$QQ2[1]]) == "V4" ) $Linha['V4'] += 1;
 IF ( PosicaoV($Q2[$QQ2[1]]) == "V5" ) $Linha['V5'] += 1;
 IF ( PosicaoV($Q2[$QQ2[1]]) == "V6" ) $Linha['V6'] += 1;
 IF ( PosicaoV($Q2[$QQ2[1]]) == "V7" ) $Linha['V7'] += 1;
 IF ( PosicaoV($Q2[$QQ2[1]]) == "V8" ) $Linha['V8'] += 1;
 IF ( PosicaoV($Q2[$QQ2[1]]) == "V9" ) $Linha['V9'] += 1;
IF ( PosicaoV($Q2[$QQ2[1]]) == "V10" ) $Linha['V10'] += 1;


 IF ( PosicaoV($Q3[$QQ3[0]]) == "V1" ) $Linha['V1'] += 1;
 IF ( PosicaoV($Q3[$QQ3[0]]) == "V2" ) $Linha['V2'] += 1;
 IF ( PosicaoV($Q3[$QQ3[0]]) == "V3" ) $Linha['V3'] += 1;
 IF ( PosicaoV($Q3[$QQ3[0]]) == "V4" ) $Linha['V4'] += 1;
 IF ( PosicaoV($Q3[$QQ3[0]]) == "V5" ) $Linha['V5'] += 1;
 IF ( PosicaoV($Q3[$QQ3[0]]) == "V6" ) $Linha['V6'] += 1;
 IF ( PosicaoV($Q3[$QQ3[0]]) == "V7" ) $Linha['V7'] += 1;
 IF ( PosicaoV($Q3[$QQ3[0]]) == "V8" ) $Linha['V8'] += 1;
 IF ( PosicaoV($Q3[$QQ3[0]]) == "V9" ) $Linha['V9'] += 1;
IF ( PosicaoL($Q3[$QQ3[0]]) == "V10" ) $Linha['V10'] += 1;

 IF ( PosicaoV($Q3[$QQ3[1]]) == "V1" ) $Linha['V1'] += 1;
 IF ( PosicaoV($Q3[$QQ3[1]]) == "V2" ) $Linha['V2'] += 1;
 IF ( PosicaoV($Q3[$QQ3[1]]) == "V3" ) $Linha['V3'] += 1;
 IF ( PosicaoV($Q3[$QQ3[1]]) == "V4" ) $Linha['V4'] += 1;
 IF ( PosicaoV($Q3[$QQ3[1]]) == "V5" ) $Linha['V5'] += 1;
 IF ( PosicaoV($Q3[$QQ3[1]]) == "V6" ) $Linha['V6'] += 1;
 IF ( PosicaoV($Q3[$QQ3[1]]) == "V7" ) $Linha['V7'] += 1;
 IF ( PosicaoV($Q3[$QQ3[1]]) == "V8" ) $Linha['V8'] += 1;
 IF ( PosicaoV($Q3[$QQ3[1]]) == "V9" ) $Linha['V9'] += 1;
IF ( PosicaoV($Q3[$QQ3[1]]) == "V10" ) $Linha['V10'] += 1;

 IF ( PosicaoV($Q4[$QQ4[0]]) == "V1" ) $Linha['V1'] += 1;
 IF ( PosicaoV($Q4[$QQ4[0]]) == "V2" ) $Linha['V2'] += 1;
 IF ( PosicaoV($Q4[$QQ4[0]]) == "V3" ) $Linha['V3'] += 1;
 IF ( PosicaoV($Q4[$QQ4[0]]) == "V4" ) $Linha['V4'] += 1;
 IF ( PosicaoV($Q4[$QQ4[0]]) == "V5" ) $Linha['V5'] += 1;
 IF ( PosicaoV($Q4[$QQ4[0]]) == "V6" ) $Linha['V6'] += 1;
 IF ( PosicaoV($Q4[$QQ4[0]]) == "V7" ) $Linha['V7'] += 1;
 IF ( PosicaoV($Q4[$QQ4[0]]) == "V8" ) $Linha['V8'] += 1;
 IF ( PosicaoV($Q4[$QQ4[0]]) == "V9" ) $Linha['V9'] += 1;
IF ( PosicaoL($Q4[$QQ4[0]]) == "V10" ) $Linha['V10'] += 1;

 IF ( PosicaoV($Q4[$QQ4[1]]) == "V1" ) $Linha['V1'] += 1;
 IF ( PosicaoV($Q4[$QQ4[1]]) == "V2" ) $Linha['V2'] += 1;
 IF ( PosicaoV($Q4[$QQ4[1]]) == "V3" ) $Linha['V3'] += 1;
 IF ( PosicaoV($Q4[$QQ4[1]]) == "V4" ) $Linha['V4'] += 1;
 IF ( PosicaoV($Q4[$QQ4[1]]) == "V5" ) $Linha['V5'] += 1;
 IF ( PosicaoV($Q4[$QQ4[1]]) == "V6" ) $Linha['V6'] += 1;
 IF ( PosicaoV($Q4[$QQ4[1]]) == "V7" ) $Linha['V7'] += 1;
 IF ( PosicaoV($Q4[$QQ4[1]]) == "V8" ) $Linha['V8'] += 1;
 IF ( PosicaoV($Q4[$QQ4[1]]) == "V9" ) $Linha['V9'] += 1;
IF ( PosicaoV($Q4[$QQ4[1]]) == "V10" ) $Linha['V10'] += 1;



 IF ( PosicaoL($Q1[$QQ1[0]]) == "L1" ) $Linha['L1'] += 1;
 IF ( PosicaoL($Q1[$QQ1[0]]) == "L2" ) $Linha['L2'] += 1;
 IF ( PosicaoL($Q1[$QQ1[0]]) == "L3" ) $Linha['L3'] += 1;
 IF ( PosicaoL($Q1[$QQ1[0]]) == "L4" ) $Linha['L4'] += 1;
 IF ( PosicaoL($Q1[$QQ1[0]]) == "L5" ) $Linha['L5'] += 1;
 IF ( PosicaoL($Q1[$QQ1[0]]) == "L6" ) $Linha['L6'] += 1;

 IF ( PosicaoL($Q1[$QQ1[1]]) == "L1" ) $Linha['L1'] += 1;
 IF ( PosicaoL($Q1[$QQ1[1]]) == "L2" ) $Linha['L2'] += 1;
 IF ( PosicaoL($Q1[$QQ1[1]]) == "L3" ) $Linha['L3'] += 1;
 IF ( PosicaoL($Q1[$QQ1[1]]) == "L4" ) $Linha['L4'] += 1;
 IF ( PosicaoL($Q1[$QQ1[1]]) == "L5" ) $Linha['L5'] += 1;
 IF ( PosicaoL($Q1[$QQ1[1]]) == "L6" ) $Linha['L6'] += 1;

 IF ( PosicaoL($Q2[$QQ2[0]]) == "L1" ) $Linha['L1'] += 1;
 IF ( PosicaoL($Q2[$QQ2[0]]) == "L2" ) $Linha['L2'] += 1;
 IF ( PosicaoL($Q2[$QQ2[0]]) == "L3" ) $Linha['L3'] += 1;
 IF ( PosicaoL($Q2[$QQ2[0]]) == "L4" ) $Linha['L4'] += 1;
 IF ( PosicaoL($Q2[$QQ2[0]]) == "L5" ) $Linha['L5'] += 1;
 IF ( PosicaoL($Q2[$QQ2[0]]) == "L6" ) $Linha['L6'] += 1;

 IF ( PosicaoL($Q2[$QQ2[1]]) == "L1" ) $Linha['L1'] += 1;
 IF ( PosicaoL($Q2[$QQ2[1]]) == "L2" ) $Linha['L2'] += 1;
 IF ( PosicaoL($Q2[$QQ2[1]]) == "L3" ) $Linha['L3'] += 1;
 IF ( PosicaoL($Q2[$QQ2[1]]) == "L4" ) $Linha['L4'] += 1;
 IF ( PosicaoL($Q2[$QQ2[1]]) == "L5" ) $Linha['L5'] += 1;
 IF ( PosicaoL($Q2[$QQ2[1]]) == "L6" ) $Linha['L6'] += 1;

 IF ( PosicaoL($Q3[$QQ3[0]]) == "L1" ) $Linha['L1'] += 1;
 IF ( PosicaoL($Q3[$QQ3[0]]) == "L2" ) $Linha['L2'] += 1;
 IF ( PosicaoL($Q3[$QQ3[0]]) == "L3" ) $Linha['L3'] += 1;
 IF ( PosicaoL($Q3[$QQ3[0]]) == "L4" ) $Linha['L4'] += 1;
 IF ( PosicaoL($Q3[$QQ3[0]]) == "L5" ) $Linha['L5'] += 1;
 IF ( PosicaoL($Q3[$QQ3[0]]) == "L6" ) $Linha['L6'] += 1;

 IF ( PosicaoL($Q3[$QQ3[1]]) == "L1" ) $Linha['L1'] += 1;
 IF ( PosicaoL($Q3[$QQ3[1]]) == "L2" ) $Linha['L2'] += 1;
 IF ( PosicaoL($Q3[$QQ3[1]]) == "L3" ) $Linha['L3'] += 1;
 IF ( PosicaoL($Q3[$QQ3[1]]) == "L4" ) $Linha['L4'] += 1;
 IF ( PosicaoL($Q3[$QQ3[1]]) == "L5" ) $Linha['L5'] += 1;
 IF ( PosicaoL($Q3[$QQ3[1]]) == "L6" ) $Linha['L6'] += 1;

 IF ( PosicaoL($Q4[$QQ4[0]]) == "L1" ) $Linha['L1'] += 1;
 IF ( PosicaoL($Q4[$QQ4[0]]) == "L2" ) $Linha['L2'] += 1;
 IF ( PosicaoL($Q4[$QQ4[0]]) == "L3" ) $Linha['L3'] += 1;
 IF ( PosicaoL($Q4[$QQ4[0]]) == "L4" ) $Linha['L4'] += 1;
 IF ( PosicaoL($Q4[$QQ4[0]]) == "L5" ) $Linha['L5'] += 1;
 IF ( PosicaoL($Q4[$QQ4[0]]) == "L6" ) $Linha['L6'] += 1;

 IF ( PosicaoL($Q4[$QQ4[1]]) == "L1" ) $Linha['L1'] += 1;
 IF ( PosicaoL($Q4[$QQ4[1]]) == "L2" ) $Linha['L2'] += 1;
 IF ( PosicaoL($Q4[$QQ4[1]]) == "L3" ) $Linha['L3'] += 1;
 IF ( PosicaoL($Q4[$QQ4[1]]) == "L4" ) $Linha['L4'] += 1;
 IF ( PosicaoL($Q4[$QQ4[1]]) == "L5" ) $Linha['L5'] += 1;
 IF ( PosicaoL($Q4[$QQ4[1]]) == "L6" ) $Linha['L6'] += 1;


//$Linha_L1 .= PosicaoL($Q1[$QQ1[1]]),PosicaoL($Q2[$QQ2[1]]),PosicaoL($Q3[$QQ3[1]]),PosicaoL($Q4[$QQ4[1]]);
echo "<br />";
echo "<br />";
echo "Linha 1 - " .$Linha['L1'];
echo "<br />";
echo "Linha 2 - " .$Linha['L2'];
echo "<br />";
echo "Linha 3 - " .$Linha['L3'];
echo "<br />";
echo "Linha 4 - " .$Linha['L4'];
echo "<br />";
echo "Linha 5 - " .$Linha['L5'];
echo "<br />";
echo "Linha 6 - " .$Linha['L6'];
echo "<br />";
echo "<br />";
echo "<br />";
echo "Coluna 1 - " .$Linha['V1'];
echo "<br />";
echo "Coluna 2 - " .$Linha['V2'];
echo "<br />";
echo "Coluna 3 - " .$Linha['V3'];
echo "<br />";
echo "Coluna 4 - " .$Linha['V4'];
echo "<br />";
echo "Coluna 5 - " .$Linha['V5'];
echo "<br />";
echo "Coluna 6 - " .$Linha['V6'];
echo "<br />";
echo "Coluna 7 - " .$Linha['V7'];
echo "<br />";
echo "Coluna 8 - " .$Linha['V8'];
echo "<br />";
echo "Coluna 9 - " .$Linha['V9'];
echo "<br />";
echo "Coluna 10 - " .$Linha['V10'];
echo "<br />";
echo "<br />";
print_r($Linha);



function PosicaoL( $valorL )
{

$L1 = array(1,2,3,4,5,6,7,8,9,10);
$L2 = array(11,12,13,14,15,16,17,18,19,20);
$L3 = array(21,22,23,24,25,26,27,28,29,30);
$L4 = array(31,32,33,34,35,36,37,38,39,40);
$L5 = array(41,42,43,44,45,46,47,48,49,50);
$L6 = array(51,52,53,54,55,56,57,58,59,60);

if( in_array( $valorL ,$L1 )) $PosL = "L1";  
if( in_array( $valorL ,$L2 )) $PosL = "L2";  
if( in_array( $valorL ,$L3 )) $PosL = "L3";  
if( in_array( $valorL ,$L4 )) $PosL = "L4";  
if( in_array( $valorL ,$L5 )) $PosL = "L5";  
if( in_array( $valorL ,$L6 )) $PosL = "L6"; 

return $PosL; 
}

function PosicaoV( $valorV )
{

  $V1 = array(1,11,21,31,41,51);
  $V2 = array(2,12,22,32,42,52);
  $V3 = array(3,13,23,33,43,53);
  $V4 = array(4,14,24,34,44,54);
  $V5 = array(5,15,25,35,45,55);
  $V6 = array(6,16,26,36,46,56);
  $V7 = array(7,17,27,37,47,57);
  $V8 = array(8,18,28,38,48,58);
  $V9 = array(9,19,29,39,49,59);
 $V10 = array(10,20,30,40,50,60);
 
if( in_array($valorV,$V1)) $PosV = "V1";  
if( in_array($valorV,$V2)) $PosV = "V2";  
if( in_array($valorV,$V3)) $PosV = "V3";  
if( in_array($valorV,$V4)) $PosV = "V4";  
if( in_array($valorV,$V5)) $PosV = "V5";  
if( in_array($valorV,$V6)) $PosV = "V6";  
if( in_array($valorV,$V7)) $PosV = "V7";  
if( in_array($valorV,$V8)) $PosV = "V8";  
if( in_array($valorV,$V9)) $PosV = "V9";  
if( in_array($valorV,$V10)) $PosV = "V10"; 

return $PosV; 
}

function NumPar( $valor )
{
  if($valor % 2 == 0)
  {
  $PARIM = "PAR";
  }
  else
  {
  $PARIM = "IMPAR";
  }
	return $PARIM;
}


?>


</body>
</html>
