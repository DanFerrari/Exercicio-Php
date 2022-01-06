: <html>

<head>
</head>

<body>
    <?php
    $idade = array(19, 18, 60, 50, 40, 30, 34, 35, 37, 45, 66, 23, 33, 45, 34);
    $pos = 0;
    $maior = $idade[0];

    for ($pos = 0; $pos <= 15; $pos++) {

        $soma =  $soma + $idade[$pos];
        $media = $soma / $pos;
        if ($maior > $idade[$pos]) {
            $maior = $maior;
        } else {
            $maior = $idade[$pos];
        }
    }


    echo ("A media de Idades é de :$media <br>");
    echo ("A pessoa com maior idade tem :$maior anos");

    ?>
</body>

</html>