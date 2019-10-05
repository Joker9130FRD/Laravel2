<?php
    $name = "Rinto";
    if ($name == "Rinto") {
        echo "私は".$name."です。";
        echo "    ";
    } else {
        echo "私は".$name."ではありません。";
        echo "    ";
    }

    $num = 0;
    for ($i=1; $i<=10000; $i++) {
        $num += $i;
    }
    echo $num."    ";

    $fruits_array = ["りんご","オレンジ","バナナ","ぶどう","メロン"];
    foreach ($fruits_array as $fruit) {
        echo $fruit."  ";
    }


/*
    for文の始めの値を定義する /
    $start = 1;
    for文の終わりの値を定義する
    $end = 100;

    for($i = $start; $i <= $end; $i++){  //結果に100が含まれるように変更
    
    // 5で割り切れたら{}内を実行する
    if($i % 5 == 0) {
        echo $i;                         //セミコロンが文末から欠落していたので追加
        echo "¥n";                       //分かりやすくするため改行
    }
}
*/
?>
