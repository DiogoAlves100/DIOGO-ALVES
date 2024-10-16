<?php
               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numeros = [];
            $negativos = 0;
            $positivos = 0;
            $pares = 0;
            $impares = 0;

            for ($i = 1; $i <= 10; $i++) {
                if (isset($_POST["numero_$i"])) {
                    $numero = intval($_POST["numero_$i"]);
                    $numeros[] = $numero;

          
                    if ($numero < 0) {
                        $negativos++;
                    } elseif ($numero > 0) {
                        $positivos++;
                    }

                    if ($numero % 2 == 0) {
                        $pares++;
                    } else {
                        $impares++;
                    }
                }
            }

          
            echo "<p>Quantidade de negativos: $negativos</p>";
            echo "<p>Quantidade de positivos: $positivos</p>";
            echo "<p>Quantidade de pares: $pares</p>";
            echo "<p>Quantidade de ímpares: $impares</p>";
        }
        ?>

          
          