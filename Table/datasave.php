<?php
    var_dump($_POST);
    // $select1 = $_POST['select1'];
    // var_dump($select1);

    // $a0 = $_POST['select1'];
    // $a1 = $_POST['price1'];
    // $a2 = $_POST['qyt1'];
    // $a3 = $_POST['total1'];
    // $a4 = $_POST['select2'];
    // $a5 = $_POST['price2'];
    // $a6 = $_POST['qyt2'];
    // $a7 = $_POST['total2'];
    // $a8 = $_POST['select3'];
    // $a9 = $_POST['price3'];
    // $a10 = $_POST['qyt3'];
    // $a11 = $_POST['total3'];

    for($v=0;$v<12;$v++){
        ${"a".$v} = $_POST["container$v"];
    }
    

    echo $a0, "<br>", $a1, "<br>", $a2, "<br>", $a3, "<br>", $a4, "<br>", $a5, "<br>", $a6, "<br>", $a7, "<br>", $a8, "<br>", $a9, "<br>", $a10, "<br>", $a11;

    // $i = 3;
    // $j = 7;
    echo '<table border="1" cellpadding="5" width="500">';
        for($i=0;$i<3;$i++){
            echo '<tr>';
            for($j=0;$j<4;$j++){
                echo '<td>'.(${"a".$i*4+$j}).'</td>';
            }
            echo '</tr>';
        }
    echo '</table>';
?>