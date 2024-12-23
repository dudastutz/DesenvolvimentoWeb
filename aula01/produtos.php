<?php 
    // Array de produtos
    $dadosProdutos = array(
        array('nome' => 'Nescau', 'preco' => 20, 'fabricante' => 'Nestlé'),
        array('nome' => 'Leite', 'preco' => 10, 'fabricante' => 'Macuco'),
        array('nome' => 'Café', 'preco' => 30, 'fabricante' => 'Pilão')
    );

    // Função que gera as linhas da tabela
    $dados = function($dadosProdutos) {
        $retorno = "";
        foreach ($dadosProdutos as $valor) {
            $retorno .= "<tr>";
            $retorno .= "<td>" . ($valor['nome']) . "</td>";
            $retorno .= "<td>" . ($valor['preco']) . "</td>";
            $retorno .= "<td>" . ($valor['fabricante']) . "</td>";
            $retorno .= "</tr>";
        }
        return $retorno;
    };

    // Função que monta a tabela, juntando as linhas 
    $montaTabela = function($dadosProdutos) use ($dados) {
        $linhas = $dados($dadosProdutos);
        $retorno = "<table border='1'>";
        $retorno .= "<tr><th>Nome</th><th>Preco</th><th>Fabricante</th></tr>";
        $retorno .= $linhas;
        $retorno .= "</table>";
        return $retorno;
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Produtos</title>
</head>
<body>
    <?php
        // Exibindo a tabela gerada
        echo $montaTabela($dadosProdutos);
    ?>
</body>
</html>
