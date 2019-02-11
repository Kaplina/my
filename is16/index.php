<!DOCTYPE html>
<html>
<head>

<body>
    <?php
    //все что пишем тут это PHP

    echo "Это печатает PHP";
    $my=15;
    $my2=60;
    $rez=$my+$my2;
    echo "<br>". $rez;
   
 /* && and логическое и два варианта
|| or логически или два варианта*/

if ($my>$my2){ 
    echo "<br><h1>первая больше</h1>"; 
    } 
    else{ 
    echo "<br><h1>вторая больше</h1>"; 
    } 
    
    $den_ned=7; 
    if ($den_ned>=1 && $den_ned<6){ 
    echo "работаем"; 
    } 
    elseif ($den_ned==6){ 
    echo "почти не работаем"; 
    } 
    elseif($den_ned==7){ 
    echo "отдыхаем"; 
    } 
    else{ 
    echo "Err"; 
    }


    //циклы такие же как и в javascript

    for ($i=1;$i<10;$i++){
        echo "<br>".$i ;
    }

    $mass=array("1"=>1,"2"=>2);
    $mass["asdf"]="asdfghj";


    print_r($mass);//функция печати массива на экран

    foreach($mass as $i){
        echo "<br>". $i;
    }

    echo '<br> не видит переменную $my';
    echo "<br> видит переменную $my";
 ?>

<a href="bd.php">Работа с БД</a>

</body>
</html>