<?php
    function double ($x) {
        return $y = $x * 2;
    }

    function sum ($a,$b) {
        return $c = $a + $b;
    }
 
    
    function max_array($arr){
         
        // とりあえず配列の最初の要素を一番大きい値とする
        $max_number = $arr[0];
        foreach($arr as $a){
            if ($max_number < $a) {
                $max_number = $a;
            }
        }
        return $max_number;
    }
    
    
    echo double(11)."  ";
    echo sum(6,5)."  ";
    
    $array = [2,3,5,7];
    echo max_array($array)."      ";
    
    
    $str = "<p>タグの自動除去</p>"."<br>";
    echo strip_tags($str)."      ";
    
    array_push($array, 9, 11);
    echo max_array($array)."  ";
    
    $array2 = [30,100];
    $array3 =  array_merge($array,$array2);
    echo max_array($array3)."      ";
    
    $days = time();
    echo "現在のタイムスタンプ：".$days."      ";
    
    echo date("Y/m/d H:i:s"."      ");
?>