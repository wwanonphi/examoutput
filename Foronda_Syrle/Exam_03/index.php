 
    <?php

    function checkifSquared($num){

        //i have to check if the number is squared
        $tempVar = (int)(sqrt($num));
        return ($tempVar * $tempVar==$num);
    }
    

    function checkFibonaccis($maxNum)
    {
        return checkifSquared(5*$maxNum * $maxNum +4) || 
        checkifSquared(5*$maxNum*$maxNum -4);
    }

    function dovalidateInput($num){
        for($i =1; $i <= $num; $i++){
            if(checkFibonaccis($i)){
                echo "</br>". $i." is a Fibonacci Number";
            }
            else{
                echo "</br>". $i." is a not Fibonacci Number";
            }
        }
    }
    dovalidateInput(100);
    
    ?> 