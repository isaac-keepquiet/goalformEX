<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // var_dump($_POST);
       
        for($v=0;$v<12;$v++){
            ${"a".$v} = $_POST["container$v"];
        }
        
        // echo $a0, "<br>", $a1, "<br>", $a2, "<br>", $a3, "<br>", $a4, "<br>", $a5, "<br>", $a6, "<br>", $a7, "<br>", $a8, "<br>", $a9, "<br>", $a10, "<br>", $a11;

        echo '<div class="container mt-3">';
            echo '<h2>Fruit Price Table</h2>';
            echo '<form action="">';
                echo '<table class="table table-bordered table-striped dataTable" id="example1" role="grid" aria-describedby="example1_info">';
                echo '<tr>';
                    echo '<th>Name</th>';
                    echo '<th>Price</th>';
                    echo '<th>QTY</th>';
                    echo '<th>Total price</th>';
                echo '</tr>';
                //     for($i=0;$i<3;$i++){
                //         echo '<tr>';
                //         for($j=0;$j<4;$j++){
                //             echo '<td><input class="input-area pr" type="number" value="">'.(${"a".$i*4+$j}).'</td>';
                //         }
                //         echo '</tr>';
                //     }
                echo '<tbody>';
                    echo '<tr>';
                        echo '<td class="input-area pr">'.($a0).'</td>';
                        echo '<td class="input-area pr">'.($a1).'</td>';
                        echo '<td class="input-area pr">'.($a2).'</td>';
                        echo '<td class="input-area pr">'.($a3).'</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td class="input-area pr">'.($a4).'</td>';
                        echo '<td class="input-area pr">'.($a5).'</td>';
                        echo '<td class="input-area pr">'.($a6).'</td>';
                        echo '<td class="input-area pr">'.($a7).'</td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td class="input-area pr">'.($a8).'</td>';
                        echo '<td class="input-area pr">'.($a9).'</td>';
                        echo '<td class="input-area pr">'.($a10).'</td>';
                        echo '<td class="input-area pr">'.($a11).'</td>';
                    echo '</tr>';
                    // echo '<tr>';
                        // echo '<td><h3>Total</h3></td>';
                        // echo '<td></td>';
                        // echo '<td><td>';
                    // echo '</tr>';
                echo '</tbody>';
                echo '</table>';
            echo '</form>';
        echo '</div>';
        
    ?>
</body>
</html>
