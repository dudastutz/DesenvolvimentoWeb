<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


?>

    <form action = "destino.php" method = "POST">
        <label for = "nome"> Nome: </label>
        <input type = "text" id = "nome" name = "nome">

        <label for = "idade"> Idade: </label>
        <input type = "number" id ="idade" name = "idade">

        <label for = "cidade"> Cidade: </label>
        <input type = "text" id = "cidade" name = "cidade">

        <label for = "estado"> Estado: </label>
        <select id = "estado" name = "estado">
            <option value = ""></option>
            <option value = "SP">São Paulo</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="DF">Distrito Federal</option>
            <option value="MG">Minas Gerais</option>
            <option value="AL">Alagoas</option>
            <option value="AC">Acre</option>
            <option value="TO">Tocantins</option>
            <option value="ES">Espírito Santo</option>
            <option value="PA">Pará</option>
            <option value="AP">Amapá</option>
            <option value="MT">Mato Grosso</option>
            <option value="GO">Goiás</option>
            <option value="PR">Paraná</option>
            <option value="SC">Santa Catarina</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RR">Roraima</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="SE">Sergipe</option>
            <option value="AL">Alagoas</option>
            <option value="PB">Paraíba</option>
            <option value="PI">Piauí</option>
            <option value="CE">Ceará</option>
            <option value="AM">Amazonas</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MA">Maranhão</option>
            <option value="PE">Pernambuco</option>
            <option value="RO">Rondônia</option>
    </select>

        <button type = "submit">Filtrar</button>
    </form>
</body>
</html>