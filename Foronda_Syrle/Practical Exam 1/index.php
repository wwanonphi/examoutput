<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   
    //even numbers are numbers that remainder is 0

    function sumEven(){ 
          $max = 10;
          $min = 0;
          $setofevennum = array();
          while($min <= $max){ 
                  if($min % 2 !== 0){
                      echo "</br> Odd" . $min;  
                  }
                  else{
                      echo "</br> Even" . $min;
                      array_push($setofevennum,$min);
                  }    
                  $min++;
          }
          //check values of array for my reference
        // print_r( array_values($setofevennum));
        echo "</br> sum of all Even array:" .array_sum($setofevennum);
    }

    function sumOdd(){
        $max = 10;
        $min = 0;
        $setofoddnum = array();
        do{
            if($min % 2 !== 0){
                echo "</br> Odd" . $min;  
                array_push($setofoddnum,$min);
            }
            else{
                echo "</br> Even" . $min;
              
            }    
            $min++;

        }
        while($min <=$max);
        echo "</br> sum of all Odd array:" .array_sum($setofoddnum);

    }

    function displayFibonacci($iteraton){
        //fibonacci sequence 0 1 1 2 3 5 8 13 21 34
        // attack like
        // initial value = 0
        // first sequence = 1
        // add initial value to first sequence
        // set the initial value with the value of first sequnce before
        // add the first sequence to the initial value
        // then go back to setting the initial value with the value of first sequence
        //sample proc
        // $initialValue =0
        // $firstSequence =1
        // echo $initialValue + $firstSequence == 1
        // $tempVal =$initialValue + $firstSequence

        // $firstSequence = $tempVal
        // $initialvalue = $initailvalue+$firstSequence
        // echo $initialValue + $firstSequence == 2 
        // $tempVal =$initialValue + $firstSequence
        
        // $firstSequence = $tempVal
        // $initialValue = $initailvalue + $firstSequence
        // echo $initailvalue + $firstSequence == 3
        // $tempVal =$initialValue + $firstSequence
        $initialSequence = 0;
        $firstValue = 1; 
        for( $iterationCount=1; $iterationCount <= $iteraton; $iterationCount++){ 
            echo "</br> Iteration #".$iterationCount . ' ' . $firstValue;
            $tempVal = $firstValue + $initialSequence;
            $initialSequence = $firstValue;
            $firstValue = $tempVal; 
        }   
    }

    function displayArray(){
        $tempArr = array('Marvin','Marco','Marvin','Marco','Marco','Marvin','Christian');
        $countPerElement=  array_count_values($tempArr);
        echo "<script> console.log(".$countPerElement["Marvin"].");</script>"; 
        if($countPerElement["Marvin"] == $countPerElement["Marco"]){
                //Marco Count is greater than or equal to Marvin Count;
                sort($tempArr);
        }
        foreach($tempArr as $e){
            echo "</br>". $e;
        }
        
    }

    function displaySortArray(){
        $tempvar = array(9863, 7127, 2020, 80, 131, 55, 100);
        
        // foreach($tempvar as $e){
        //     echo "</br>".$e;
        // }
        sort($tempvar);
        foreach($tempvar as $i => $e){
               //if value is odd number (%2 != 0) then round it off to nearest 10   

               //First Step devide the value of Element by 10 to get the float value 1.xx
               $divElementVal = $e /10;
               //Round off the Divided Value 1
               $ceilElementVal= ceil($divElementVal);
               
               //Multiply by 10 the Rounded off result
               $newValueElement = $ceilElementVal *10;
               $tempvar[$i] =$newValueElement;
        }

         foreach($tempvar as $e){
             echo "</br>".$e;
         }
    }

    function displayNonRepititive(){
        $tempVar = array('red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold');
        $arrCountVal = array_count_values($tempVar);
        foreach($arrCountVal as $i => $e){ 
            if($e==1){
                echo "</br>".$i;
            }
        }
    }
    //displayNonRepititive();
    //displaySortArray();
    // displayArray();
    // sumOdd();
    // sumEven();
    // displayFibonacci(10);
    ?>
</body>
</html>