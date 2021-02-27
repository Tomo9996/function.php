
<!-- step1:定義元を作る -->



<?php
    function hello(){
        echo 'Hello!' . '<br>';
    }

    hello();

    hello();

    hello();

    hello();

    function hello2(){
        echo 'こんにちは' . '<br>';
    }

    hello2();

    // function hello2(){
    //     if(時間を取得する関数で場合分けした場合)　{
    //         echo 'こんにちは' . '<br>';   
    //     } else {
    //         echo 'こんばんは' . '<br>';
    //     }
       
    // }

    // hello2();


    
    // //引数
    function aisatsu($name) {
        echo '初めまして、' . $name . 'さん' . '<br>';
    }

    aisatsu('むらた');
    aisatsu('ちひろ');

    function suuji($i) {
        echo $i * 3 . '<br>';
    }

    suuji(10);

    // //3の倍数の時　fizz  5の倍数の時　buzz それ以外は　　見つかりません

    function number($i) {
        if ( $i % 3 ===0) {
            echo 'FIZZ';
        }elseif ($i % 5 ===0){
                echo 'buzz';
        } else {
                echo '見つかりません';
            }

        }
    
        
    number(90);

    function test($i,$n,$u) {
        echo $i;
        echo $n;
        echo $u;

        //実行する式

    }
    test(10, 20,3);

    function sum($i,$n) {
        return $i + $n;   
    }

    echo '合計は' . sum(20, 11) . 'でした！';

    function plus($num1 , $num2) {
        $result = $num1 + $num2 ;
        if($result > 10) {
            return $result;
        }
        return 'ここは処理されません';
    }
        echo plus(5 , 2);

//問１


    function multiplication ( $a , $b ) {
        return 'result=' .  $a * $b;
    }

    echo multiplication(10,30);


//問２

    function average($x , $y) {
        $result = ($x + $y) / 2 ;
        if( $result >=10) {
            return $result;
        } else {
            return $result = 0;
        }
        
    }
//問３
        echo average( 5, 3);

    function shopping( $m , $s) {
        $result = $m - $s;
        return $result;
    }    
        echo shopping ( 500 , 300) . '<br>';

//問４
    function namber( $num1 , $num2) {
        $result = 0;
        if( $num1 >= $num2) {
            return $num1;
        } else {
            return $num2;

        }
    }

        echo namber( 3 , 9 ) ;

        function maximum($num1, $num2) {
            if ($num1 >= $num2) {
                return $num1;
            } else {
              return $num2;
            }
        }
      
        echo maximum(3, 9);

    
    $num1 = 3;
    $num2 = 9;
    $result = 0;

    
    if ($num1 >= $num2) {
    $result = $num1;
    } else {
    $result = $num2;
    }

    echo $result;

    $num1 = 3;
    $num2 = 9;
    $result = 0;

    if ($num1 >= $num2) {
    $result = $num1;
    }    else {
    $result = $num2;
    }

    echo $result;





    ?>