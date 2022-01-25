<?php
    $salary = 10000;
    echo "เงินเดือน".$salary."บาท<br>";
    if($salary<=10000){
        $bonus = $salary*3;
        $money = $salary+$bonus;
        
        echo "โบนัส 300% = ".$bonus."บาท<br>";
        echo "เงินเดือนสุทธิ = ".$money."บาท<br>";
        
        echo "---------------------------------<br>";
    }if($salary<=50000){
        echo "เงินเดือน".$salary."บาท<br>";
        $bonus = $salary*2;
        $money = $money+$bonus;
       
        echo "โบนัส 200% = ".$bonus."บาท<br>";
        echo "เงินสุทธิ = ".$money."บาท<br>";
        
        echo "---------------------------------<br>";
    }if($salary<=100000){
        echo "เงินเดือน".$salary."บาท<br>";
        $bonus = $salary*1;
        $money = $money+$bonus;
       
        echo "โบนัส 100% = ".$bonus."บาท<br>";
        echo "เงินสุทธิ = ".$money."บาท<br>";
      
    
    }
    ?>