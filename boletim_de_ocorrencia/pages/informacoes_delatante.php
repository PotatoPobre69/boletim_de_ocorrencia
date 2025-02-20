<?php
    session_start();
    $tipo_ocorrencia = isset($_SESSION['tipo_ocorrencia']) ? $_SESSION['tipo_ocorrencia'] : 'Ocorrência não definida';
    $resposta_triagem = isset($_SESSION['resposta_triagem'])? $_SESSION['resposta_triagem'] : 'Triagem não computada';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['data_do_fato'] = $_POST['data_do_fato'] ?? 'Data não especificado';
        $_SESSION['hora_do_fato'] = $_POST['hora_do_fato'] ?? 'Hora não especificado';
        $_SESSION['local_do_fato'] = $_POST['local_do_fato'] ?? 'Local não especificado';
        $_SESSION['cep_local_do_fato'] = $_POST['cep_local_do_fato'] ?? 'CEP não informado';
        $_SESSION['nn_local_do_fato'] = $_POST['nn_local_do_fato'] ?? 'Número não informado';
        $_SESSION['estado_local_do_fato'] = $_POST['estado_local_do_fato'] ?? 'Estado não informado';        
        $_SESSION['mun_local_do_fato'] = $_POST['mun_local_do_fato'] ?? 'Município não informado';
        $_SESSION['bairro_local_do_fato'] = $_POST['bairro_local_do_fato'] ?? 'Bairro não informado';
        $_SESSION['log_local_do_fato'] = $_POST['log_local_do_fato'] ?? 'Logradouro não informado';
        $_SESSION['comp_local_do_fato'] = $_POST['comp_local_do_fato'] ?? 'Sem Complemento';
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Boletim de Ocorrência - Etapa 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Formulário Boletim de Ocorrência</h1>
        <h2>Informações do Delatante</h2>

        <form action="./relato_boletim.php" method="post">
            <h4>Informações Básicas:</h4>
                <div class="row w-100">
                    <label for="nome_completo_delatante" class="form-label">Nome Completo:*</label>
                    <input type="text" class="form-control w-100" name="nome_completo_delatante" required>
                    <label for="nome_social_delatante" class="form-label">Nome Social:</label>
                    <input type="text" class="form-control w-100" name="nome_social_delatante">
                </div>
                <div class="row w-100">
                    <label for="sexo">Sexo:*</label>
                    <div class="col sexo">
                        <div class="form-check">
                            <label for="check-feminino" class="form-label">Feminino</label>
                            <input class="form-check-input" id="check-feminino" type="radio" name="sexo_delatante" value="Feminino" required>
                        </div>
                        <div class="form-check">
                            <label for="check-masculino" class="form-label">Masculino</label>
                            <input class="form-check-input" id="check-masculino" type="radio" name="sexo_delatante" value="Masculino" required>
                        </div>
                    </div>
                    <div class="col">
                        <label for="identidade_genero_delatante" class="form-label">Identidade de Gênero:*</label>
                        <select name="identidade_genero_delatante" class="form-select" required>
                            <option selected disabled>Selecione</option>
                            <option value="Ignorado">Ignorado</option>
                            <option value="Mulher">Mulher</option>
                            <option value="Homem">Homem</option>
                            <option value="Mulher Transgênero">Mulher Transgênero</option>
                            <option value="Homem Transgênero">Homem Transgênero</option>
                            <option value="Travesti">Travesti</option>
                            <option value="Gênero neutro">Gênero neutro</option>
                            <option value="Prefiro não me classificar">Prefiro não me classificar</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="orientacao_sexual_delatante" class="form-label">Orientação Sexual:*</label>
                        <select name="orientacao_sexual_delatante" class="form-select" required>
                            <option selected disabled>Selecione</option>
                            <option value="Ignorado">Ignorado</option>
                            <option value="Heterossexual">Heterossexual</option>
                            <option value="Homossexual">Homossexual</option>
                            <option value="Bissexual">Bissexual</option>
                            <option value="Assexual">Assexual</option>
                            <option value="Prefiro não me classificar: negativa de autodeclaração">Prefiro não me classificar: negativa de autodeclaração</option>
                        </select>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col">
                        <label for="data_nascimento_delatante" class="form-label">Data de Nascimento:*</label>
                        <input type="date" name="data_nascimento_delatante" class="form-control w-100" required>
                    </div>
                    <div class="col">
                        <label for="naturalidade_delatante" class="form-label">Naturalidade:*</label>
                        <input type="text" name="naturalidade_delatante" class="form-control w-100" placeholder="Formato: Cidade - UF" required>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col">
                        <label for="nome_mae_delatante" class="form-label">Nome da Mãe:*</label>
                        <input type="text" name="nome_mae_delatante" class="form-control w-100" required>
                    </div>
                    <div class="col">
                        <label for="nome_pai_delatante" class="form-label">Nome do Pai:*</label>
                        <input type="text" name="nome_pai_delatante" class="form-control w-100" required>
                    </div>
                </div>
                <div class="row w-100">
                <h4>Documentos:</h4>
                    <div class="col">
                        <label for="cpf_delatante" class="form-label">CPF:*</label>
                        <input type="tel" name="cpf_delatante" class="form-control w-100" pattern="[0-9]{9}/[0-9]{2}" placeholder="Formato: 123456789/12" required>
                    </div>
                    <div class="col">
                        <label for="uf_rg_relatante" class="form-label">UF do R.G.:*<br/></label>
                        <select name="uf_rg_relatante" class="form-select" required>
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
                        <label for="rg_delatante" class="form-label">Número do RG:*</label>
                        <input type="tel" name="rg_delatante" class="form-control w-100" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}-[0-9]{1}" placeholder="Formato: 12.345.678-1" required>
                    </div>
                </div>
                <h4>Profissão e Informações de Contato:</h4>
                <div class="row w-100">
                    <div class="col">
                        <label for="profissao_delatante" class="form-label">Profissão:*</label>
                        <input type="text" name="profissao_delatante" class="form-control w-100" required>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col">
                        <label for="email_delatante" class="form-label">Email:*</label>
                        <input type="email" name="email_delatante" class="form-control w-100" required>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col">
                        <label for="tipo_contato_1_delatante" class="form-label">Tipo:</label>
                        <span name="tipo_contato_1_delatante" value="1.0"><strong><br/>Contato</strong></span>
                    </div>
                    <div class="col">
                        <label for="tel_contato_1_delatante" class="form-label">Telefone:*</label>
                        <input type="tel" name="tel_contato_1_delatante" class="form-control w-100" pattern="([0-9]{0-2}) [0-9]{4-5}-[0-9]{4}" placeholder="Formato: (14) 991234-1234 ou (14) 1234-1234" required>
                    </div>
                    <div class="col">
                        <label for="ramal_contato_1_delatante" class="form-label">Ramal/Pessoa de Contato:*</label>
                        <input type="text" name="ramal_contato_1_delatante" class="form-control w-100" required>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col">
                        <label for="tipo_contato_2" class="form-label">Contato Adicional Tipo:*</label>
                        <select name="tipo_contato_2" class="form-select" required>
                            <option selected disabled>Selecione</option>
                            <option value="Residencial">Residencial</option>
                            <option value="Celular">Celular</option>
                            <option value="Comercial">Comercial</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="tel_contato_2" class="form-label">Telefone:*</label>
                        <input type="tel" name="tel_contato_2" class="form-control w-100" pattern="([0-9]{0-2}) [0-9]{4-5}-[0-9]{4}" placeholder="Formato: (14) 991234-1234 ou (14) 1234-1234" required>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <a href="./local_e_hora_boletim.php" class="btn btn-danger">Voltar</a>                
                <button type="submit" class="btn btn-primary">Próximo</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>