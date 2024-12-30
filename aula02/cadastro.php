<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação automática de formulário</title>
    <script type="text/javascript">
        function validaCpf(campo) {
            var cpf = parseInt(campo.value);
            if(campo.value.length>11) {
                alert("CPF incorreto");
                return false;
            }
            return true;
        }
        function validaIdade(campo) {
            var idade = parseInt(campo.value);
            if(idade>110 || idade <0) {
                alert("Idade incorreta");
                return false;
            }
            return true;
        }
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('formCadastro');
            form.addEventListener('submit', (e) => {
                const nomeCampo = document.getElementById('nome');
                const nomeStr = nomeCampo.value;
                if(nomeStr.trim()==""){
                    alert("Você deve preencher o campo 'Nome'");
                    e.preventDefault(); //Não deixa o formulário ser submetido.
                    return false;
                }

                const idadeCampo = document.getElementById('idade');
                const idadeStr = idadeCampo.value;
                if(!validaIdade(idadeCampo)){
                    e.preventDefault();
                    return false;
                }
                else if(idadeStr.trim()==""){
                    alert("Você deve preencher o campo 'Idade'");
                    e.preventDefault();
                    return false;
                }

                const sexoCampo = document.getElementsByName('sexo');
                var validaCamposexo = false;
                for(index in sexoCampo){
                    if(sexoCampo[index].checked){
                        validaCamposexo=true;
                    }
                }
                if(!validaCamposexo) {
                    alert("Você deve preencher o campo 'Sexo'");
                    e.preventDefault();
                    return false;
                }

                const cidade_nascimentoCampo = document.getElementById('cidade_nascimento');
                const cidade_nascimentoStr = cidade_nascimentoCampo.value;
                if(cidade_nascimentoStr.trim()==""){
                    alert("Você deve preencher o campo 'Cidade de Nasc'");
                    e.preventDefault();
                    return false;
                }

                const estado_nascimentoCampo = document.getElementById('estado_nascimento');
                const estado_nascimentoIndex = estado_nascimentoCampo.selectedIndex;
                if(estado_nascimentoIndex==-1){
                    alert("Você deve preencher o campo 'Estado de Nasc'");
                    e.preventDefault();
                    return false;
                }


                const cpfCampo = document.getElementById('cpf');
                const cpfStr = cpfCampo.value;
                if(!validaCpf(cpfCampo)){
                    e.preventDefault();
                    return false;
                }
                else if(cpfStr.trim()==""){
                    alert("Você deve preencher o campo 'CPF'");
                    e.preventDefault();
                    return false;
                }
            });
        });
        
    </script>

    
    <body>
    <form method="POST" action="cadastro.php" id="formCadastro">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Informe seu nome." required>
        </div>
        <div>
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" placeholder="Informe sua idade.">
        </div>
        <div>
            <label>Sexo:</label>
            <input type="radio" id="sexo_M" name="sexo" value="M">
            <label for="sexo_M">Masculino</label>
            <input type="radio" id="sexo_F" name="sexo" value="F">
            <label for="sexo_F">Feminino</label>
            <input type="radio" id="sexo_O" name="sexo" value="O">
            <label for="sexo_O">Outros</label>
        </div>
        <div>
            <label>Esporte Preferido:</label>
            <input type="checkbox" id="esporte_F" name="esporte_preferido[]" value="Futebol">
            <label for="esporte_F">Futebol</label>
            <input type="checkbox" id="esporte_V" name="esporte_preferido[]" value="Vôlei">
            <label for="esporte_V">Vôlei</label>
            <input type="checkbox" id="esporte_N" name="esporte_preferido[]" value="Natação">
            <label for="esporte_N">Natação</label>
            <input type="checkbox" id="esporte_O" name="esporte_preferido[]" value="Outros">
            <label for="esporte_O">Outros</label>
        </div>
        <div>
            <label for="cidade_nascimento">Cidade de Nasc:</label>
            <input type="text" id="cidade_nascimento" name="cidade_nascimento" placeholder="Informe a cidade que você nasceu." required>
        </div>
        <div>
            <label for="estado_nascimento">Estado de Nasc:</label>
            <select id="estado_nascimento" name="estado_nascimento" required>
                <option value="">-</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="SP">São Paulo</option>
                <option value="ES">Espírito Santo</option>
                <option value="MG">Minas Gerais</option>
                <option value="O">Outros</option>
            </select>
        </div>
        <div>
            <label for="cpf">CPF:</label>
            <input type="number" id="cpf" name="cpf" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" placeholder="Faça uma descrição sobre você."></textarea>
        </div>
        <div>
            <button type="submit">Enviar</button>
            <button type="reset">Limpar Formulário</button>
        </div>
    </form>
</head>
<body>
    
</body>
</html>