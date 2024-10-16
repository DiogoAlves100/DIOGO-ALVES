
<?php
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $alunos = [];
            $somaNotas = 0;
            $maiorNota = 0;
            $alunoMaiorNota = '';

            for ($i = 1; $i <= 10; $i++) {
                if (isset($_POST["nome_$i"]) && isset($_POST["nota_$i"])) {
                    $nome = trim($_POST["nome_$i"]);
                    $nota = floatval($_POST["nota_$i"]);
                    $alunos[] = ["nome" => $nome, "nota" => $nota];

                    $somaNotas += $nota;

            
                    if ($nota > $maiorNota) {
                        $maiorNota = $nota;
                        $alunoMaiorNota = $nome;
                    }
                }
            }

            
            $contAlunos = count($alunos);
            if ($contAlunos > 0) {
               
                $media = $somaNotas / $contAlunos;

            
                echo "<p>Média da classe: " . number_format($media, 2) . "</p>";
                echo "<p>Aluno com maior nota: $alunoMaiorNota (Nota: " . number_format($maiorNota, 2) . ")</p>";
            } else {
                echo "<p>Nenhum aluno foi registrado.</p>";
            }
        }
        ?>