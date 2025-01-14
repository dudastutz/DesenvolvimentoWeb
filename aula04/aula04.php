<?php
$cidadesEstados = array(
    "AC" => array("Rio Branco", "Cruzeiro do Sul", "Sena Madureira", "Tarauacá"),
    "AL" => array("Maceió", "Arapiraca", "Palmeira dos Índios", "Rio Largo"),
    "AM" => array("Manaus", "Parintins", "Itacoatiara", "Manacapuru"),
    "AM" => array("Manaus", "Parintins", "Itacoatiara", "Manacapuru"),
    "BA" => array("Salvador", "Feira de Santana", "Vitória da Conquista", "Camaçari"),
    "CE" => array("Fortaleza", "Caucaia", "Juazeiro do Norte", "Sobral"),
    "DF" => array("Brasília"),
    "ES" => array("Vitória", "Vila Velha", "Serra", "Cariacica"),
    "GO" => array("Goiânia", "Aparecida de Goiânia", "Anápolis", "Rio Verde"),
    "MA" => array("São Luís", "Imperatriz", "Timon", "Caxias"),
    "MT" => array("Cuiabá", "Várzea Grande", "Rondonópolis", "Sinop"),
    "MS" => array("Campo Grande", "Dourados", "Três Lagoas", "Corumbá"),
    "MG" => array("Belo Horizonte", "Uberlândia", "Contagem", "Juiz de Fora"),
    "PA" => array("Belém", "Ananindeua", "Santarém", "Marabá"),
    "PB" => array("João Pessoa", "Campina Grande", "Santa Rita", "Patos"),
    "PR" => array("Curitiba", "Londrina", "Maringá", "Ponta Grossa"),
    "PE" => array("Recife", "Jaboatão dos Guararapes", "Olinda", "Caruaru"),
    "PI" => array("Teresina", "Parnaíba", "Picos", "Floriano"),
    "RJ" => array("Rio de Janeiro", "São Gonçalo", "Duque de Caxias", "Nova Iguaçu"),
    "RN" => array("Natal", "Mossoró", "Parnamirim", "Caicó"),
    "RS" => array("Porto Alegre", "Caxias do Sul", "Pelotas", "Santa Maria"),
    "RO" => array("Porto Velho", "Ji-Paraná", "Ariquemes", "Vilhena"),
    "RR" => array("Boa Vista", "Rorainópolis", "Caracaraí", "Alto Alegre"),
    "SC" => array("Florianópolis", "Joinville", "Blumenau", "Chapecó"),
    "SP" => array("São Paulo", "Campinas", "Guarulhos", "Santos"),
    "SE" => array("Aracaju", "Nossa Senhora do Socorro", "Lagarto", "Itabaiana"),
    "TO" => array("Palmas", "Araguaína", "Gurupi", "Porto Nacional")
    );


// Função para exibir as cidades dinamicamente com base no estado
    function CriaOptionsCidade($estadoSelecionado){
        global $cidadesEstados;
        if (isset($cidadesEstados[$estadoSelecionado])) {
            foreach ($cidadesEstados[$estadoSelecionado] as $cidade) {
                echo "<option value='$cidade'>$cidade</option>";
            }
        } else {
            echo "<option value=''>Selecione um estado válido</option>";
        }
   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
    <script src="scriptaula04.js" defer></script>
</head>
<body>
    <form action="destino04.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">


        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade">


        <label for="estado">Estado:</label>
        <select id="estado" name="estado">
            <option value="">Selecione o estado</option>
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


        <label for="cidade">Cidade:</label>
        <select id="cidade" name="cidade">
            <?php
                if (isset($_POST['estado'])) {
                    CriaOptionsCidade($_POST['estado']);
                } else {
                    echo "<option value=''>Selecione um estado primeiro</option>";
                }
            ?>
        </select>


        <button type="submit">Filtrar</button>
    </form>
</body>
</html>

