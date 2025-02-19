<?php
    session_start();
    $tipo_ocorrencia = isset($_SESSION['tipo_ocorrencia']) ? $_SESSION['tipo_ocorrencia'] : 'Não definido';
    $resposta_triagem = isset($_SESSION['resposta_triagem'])? $_SESSION['resposta_triagem'] : 'Não definida';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['local_do_fato'] = $_POST['local_do_fato'];
        $_SESSION['cep_local_do_fato'] = $_POST['cep_local_do_fato'];
        $_SESSION['nn_local_do_fato'] = $_POST['nn_local_do_fato'];
        $_SESSION['mun_local_do_fato'] = $_POST['mun_local_do_fato'];
        $_SESSION['bairro_local_do_fato'] = $_POST['bairro_local_do_fato'];
        $_SESSION['log_local_do_fato'] = $_POST['log_local_do_fato'];
        $_SESSION['comp_local_do_fato'] = $_POST['comp_local_do_fato'];
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Boletim de Ocorrência - Etapa 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="containte mt-4">
        <h1>Formulário Boletim de Ocorrência</h1>
        <h2>Informações do Delatante</h2>

        <form action="boletim.php" method="post">
            <h4>Informações Básicas:</h4>
                <div class="row w-100">
                    <label for="nome_completo_delatante" class="form-label">Nome Completo:</label>
                    <input type="text" class="form-control w-100" name="nome_completo_delatante">
                    <label for="nome_social_delatante" class="form-label">Nome Social:</label>
                    <input type="text" class="form-control w-100" name="nome_social_delatante">
                </div>
                <div class="row w-100">
                    <label for="sexo">Sexo:</label>
                    <div class="col d-flex sexo w-100">
                        <div class="form-check">
                            <label for="check-feminino" class="form-label">Feminino</label>
                            <input class="form-check-input" id="check-feminino" type="radio" name="sexo_delatante" value="F" required>
                        </div>
                        <div class="form-check">
                            <label for="check-masculino" class="form-label">Masculino</label>
                            <input class="form-check-input" id="check-masculino" type="radio" name="sexo_delatante" value="M" required>
                        </div>
                    </div>
                    <div class="col">
                        <label for="identidade_genero_delatante" class="form-label">Identidade de Gênero:</label>
                        <select name="identidade_genero_delatante" class="form-select form-select-sm" required>
                            <option selected disabled>Selecione</option>
                            <option value="1">Ignorado</option>
                            <option value="2">Mulher</option>
                            <option value="3">Homem</option>
                            <option value="4">Mulher Transgênero</option>
                            <option value="5">Homem Transgênero</option>
                            <option value="6">Travesti</option>
                            <option value="7">Gênero neutro</option>
                            <option value="8">Prefiro não me classificar</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="orientacao_sexual_delatante" class="form-label">Orientação Sexual:</label>
                        <select name="orientacao_sexual_delatante" class="form-select form-select-sm" required>
                            <option selected disabled>Selecione</option>
                            <option value="1">Ignorado</option>
                            <option value="2">Heterossexual</option>
                            <option value="3">Homossexual</option>
                            <option value="4">Bissexual</option>
                            <option value="5">Assexual</option>
                            <option value="6">Prefiro não me classificar: negativa de autodeclaração</option>
                        </select>
                    </div>
                </div>
                <div class="row w-100">
                <h4>Documentos:</h4>
                    <div class="col">
                        <label for="cpf_delatante" class="form-label">CPF:<br/><small>Formato: 123456789/12</small></label>
                        <input type="tel" name="cpf_delatante" class="form-control w-100" pattern="[0-9]{9}/[0-9]{2}" required>
                    </div>
                    <div class="col">
                        <label for="uf_rg_relatante" class="form-label">UF do R.G.<br/></label>
                        <select name="uf_rg_relatante" class="form-select form-select-sm">
                            <option selected disabled>Selecione</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RN">RN</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>
                    <div class="col">   
                        <label for="rg_delatante" class="form-label">Número do RG:<br/><small>Formato: 12.345.678/1</small></label>
                        <input type="tel" name="rg_relatante" class="form-control w-100" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}-[0-9]{1}">
                    </div>
                </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>