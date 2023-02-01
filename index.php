<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPNINJA - Day2</title>
</head>
<body>
<h1>Exercise 1 : Factorial Of A Number Using Recursive</h1>
    <?php
        function fact($n)
        {
            if($n <= 1){
                return 1;   
            }
            else{
                return $n * fact($n - 1);
            }
        }
    
        $n = 5; 
        $f = fact($n); 
        echo "La factorielle de $n est $f";
        
        // fonction factoriel
        // function facto($n){
        //     $cpte = 1;
        //     for($i = 1; $i <= $n; $i++)
        //     {
        //         $cpte = $cpte * $i;
        //     }
        //     echo $cpte;
        // }
        // facto(4);
    ?>
</body>
</html>