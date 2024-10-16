
<?php
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $produtos = [];
            $inferior_50 = 0; 
            $entre_50_100 = []; 
            $soma_acima_100 = 0; 
            $cont_acima_100 = 0;

            for ($i = 1; $i <= 5; $i++) {
                if (isset($_POST["nome_$i"]) && isset($_POST["preco_$i"])) {
                    $nome = trim($_POST["nome_$i"]);
                    $preco = floatval($_POST["preco_$i"]);
                    $produtos[] = ["nome" => $nome, "preco" => $preco];

                    if ($preco < 50) {
                        $inferior_50++;
                    } elseif ($preco >= 50 && $preco <= 100) {
                        $entre_50_100[] = $nome;
                    } elseif ($preco > 100) {
                        $soma_acima_100 += $preco;
                        $cont_acima_100++;
                    }
                }
            }

            
            echo "<p>Qtd produtos < R$50: $inferior_50</p>";
            echo "<p>Produtos entre R$50 e R$100: " . implode(", ", $entre_50_100) . "</p>";
            echo "<p>Média dos preços > R$100: R$ " . ($cont_acima_100 > 0 ? number_format($soma_acima_100 / $cont_acima_100, 2) : 0) . "</p>";
        }
        ?>
