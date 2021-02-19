<?php 
  $retData = new \stdClass();
  $retData = json_decode($_GET['data']);
  $inputted = $retData ->{"item"};

  //Original Convertion of string to array
  $toinitialArray = str_split($inputted,1);
  

  //need to invert to sequence of array
  $toInvertedArray = array_reverse($toinitialArray);
$toreturn = "";
  foreach($toinitialArray as $i => $e){
      if($e != $toInvertedArray[$i]){
        $toreturn = "Not Palindrome";
      }
      else{
        $toreturn= "Palindrome";
      }
        
  }
  echo $toreturn;
  ?>