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

function inputDate($datefrom,$dateto){
    // $datefromparse = explode("-",$datefrom);
    // $datetoparse = explode("-",$dateto);

    // $yearVal = $datefromparse[0] - $datetoparse[0];
    // $monthVal = $datefromparse[1] - $datetoparse[1];
    // $dayVal = $datefromparse[2] - $datetoparse[2];
    
    // echo $yearVal." year, ".$monthVal." month, ".$dayVal." days";

    $datefromtodate = date_create($datefrom);
    $datetotodate=date_create($dateto);
    $diff=date_diff($datefromtodate,$datetotodate);
     echo $diff->{"y"}." year, ".$diff->{"m"}." month, ".$diff->{"d"}." days.";
    
}

inputDate("1996-08-04","2021-02-19");
?>
    
</body>
</html>