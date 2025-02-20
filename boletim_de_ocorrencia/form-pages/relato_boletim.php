<!-- POST METHOD: Variáveis de Outras Páginas -->
<?php
    session_start();
    $tipo_ocorrencia = isset($_SESSION['tipo_ocorrencia']) ? $_SESSION['tipo_ocorrencia'] : 'Ocorrência não definida';
    $resposta_triagem = isset($_SESSION['resposta_triagem'])? $_SESSION['resposta_triagem'] : 'Triagem não computada';
    $data_do_fato = isset($_SESSION['data_do_fato'])? $_SESSION['data_do_fato'] : 'Data não especificado';
    $hora_do_fato = isset($_SESSION['hora_do_fato'])? $_SESSION['hora_do_fato'] : 'Hora não especificado';
    $local_do_fato = isset($_SESSION['local_do_fato'])? $_SESSION['local_do_fato'] : 'Local não especificado';
    $cep_local_do_fato = isset($_SESSION['cep_local_do_fato'])? $_SESSION['cep_local_do_fato'] : 'CEP não informado';
    $nn_local_do_fato = isset($_SESSION['nn_local_do_fato'])? $_SESSION['nn_local_do_fato'] : 'Número não informado';
    $estado_local_do_fato = isset($_SESSION['estado_local_do_fato']) ? $_SESSION['estado_local_do_fato'] : 'Estado não informado';        
    $mun_local_do_fato = isset($_SESSION['mun_local_do_fato'])? $_SESSION['mun_local_do_fato'] : 'Município não informado';
    $bairro_local_do_fato = isset($_SESSION['bairro_local_do_fato'])? $_SESSION['bairro_local_do_fato'] : 'Bairro não informado';
    $log_local_do_fato = isset($_SESSION['log_local_do_fato'])? $_SESSION['log_local_do_fato'] : 'Logadouro não informado';
    $comp_local_do_fato = isset($_SESSION['comp_local_do_fato'])? $_SESSION['comp_local_do_fato'] : 'Sem Complemento';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['nome_completo_delatante'] = $_POST['nome_completo_delatante'] ?? 'Nome não informado';
        $_SESSION['nome_social_delatante'] = $_POST['nome_social_delatante'] ?? 'Nome social não informado';
        $_SESSION['sexo_delatante'] = $_POST['sexo_delatante'] ?? 'Não especificado';
        $_SESSION['identidade_genero_delatante'] = $_POST['identidade_genero_delatante'] ?? 'Não informado';
        $_SESSION['orientacao_sexual_delatante'] = $_POST['orientacao_sexual_delatante'] ?? 'Não informado';
        $_SESSION['data_nascimento_delatante'] = $_POST['data_nascimento_delatante'] ?? 'Data não informada';
        $_SESSION['naturalidade_delatante'] = $_POST['naturalidade_delatante'] ?? 'Naturalidade não informada';
        $_SESSION['nome_mae_delatante'] = $_POST['nome_mae_delatante'] ?? 'Nome não informado';
        $_SESSION['nome_pai_delatante'] = $_POST['nome_pai_delatante'] ?? 'Nome não informado';
        $_SESSION['cpf_delatante'] = $_POST['cpf_delatante'] ?? 'CPF não informado';
        $_SESSION['uf_rg_relatante'] = $_POST['uf_rg_relatante'] ?? 'UF não informada';
        $_SESSION['rg_delatante'] = $_POST['rg_delatante'] ?? 'RG não informado';
        $_SESSION['profissao_delatante'] = $_POST['profissao_delatante'] ?? 'Profissão não informada';
        $_SESSION['email_delatante'] = $_POST['email_delatante'] ?? 'E-mail não informado';
        $_SESSION['tipo_contato_1_delatante'] = $_POST['tipo_contato_1_delatante'] ?? 'Não informado';
        $_SESSION['tel_contato_1_delatante'] = $_POST['tel_contato_1_delatante'] ?? 'Telefone não informado';
        $_SESSION['ramal_contato_1_delatante'] = $_POST['ramal_contato_1_delatante'] ?? 'Sem ramal';
        $_SESSION['tipo_contato_2'] = $_POST['tipo_contato_2'] ?? 'Não informado';
        $_SESSION['tel_contato_2'] = $_POST['tel_contato_2'] ?? 'Telefone não informado';
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Boletim de Ocorrência - Etapa 4</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="top-bar-left">
            <img src="../assets/images/logo.png" alt="Logo GOV">
        </div>
        <div class="top-bar-right">
            <!-- Ícones de redes sociais -->
            <a href="https://www.facebook.com/PoliciaCivildeSP/#"><img src="https://img.icons8.com/?size=100&id=118497&format=png&color=000000" alt="Logo Facebook"></a>
            <a href="https://x.com/policia_civil?mx=2"><img src="https://img.icons8.com/?size=100&id=phOKFKYpe00C&format=png&color=FFFFFF" alt="Logo Twitter"></a>
            <a href="https://www.instagram.com/policiacivil_sp/"><img src="https://img.icons8.com/?size=100&id=Xy10Jcu1L2Su&format=png&color=000000" alt="Logo Instagram"></a>
            <a href="https://www.youtube.com/channel/UCI1wXTz-JNToCxKyl2PbLBg"><img src="https://img.icons8.com/?size=100&id=19318&format=png&color=000000" alt="Logo YouTube"></a>
        </div>
    </header>

    <section class="header-banner">
        <div class="logo-policia">
            <img src="../assets/images/brasao.png" alt="Brasão Polícia Civil">
        </div>
        <div class="titulo-policia">
            <h1>Polícia Civil</h1>
            <h2>Secretaria de Segurança Pública</h2>
        </div>
    </section>

    <nav class="main-nav">
        <ul>
            <li><a href="../index.html">Início </a></li>
            <span>/</span>
            <li><a href="./formulario_boletim.php"> Relatar Ocorrência </a></li>
            <span>/</span>
            <li><a href="./questionario_boletim.php"> Triagem </a></li>
            <span>/</span>
            <li><a href="./local_e_hora_boletim.php"> Local e Hora </a></li>
            <span>/</span>
            <li><a href="./informacoes_delatante.php"> Informações do Delatante </a></li>
            <span>/</span>
            <li> Relato do Boletim </li>
        </ul>
    </nav>

    <div class="container mt-4">
        <h2>Relato do Boletim</h2>

        <form action="./boletim.php" method="post">
            <?php 
                if (isset($tipo_ocorrencia))
                {
                    switch ($tipo_ocorrencia) 
                    {
                    //Informações sobre: Roubo ou Furto de Veículos
                        case '1':
                            echo '<h4>Escreva um relato sobre o Roubo/Furto do Veículo, exemplo: Você avistou o acontecimento? Como era o transgressor? Como era veículo?</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    //Informações sobre: Roubo de Documentos, Celulares e/ou Objetos
                        case '2':
                            echo '<h4>Descreva o roubo dos documentos, celular ou objetos. O criminoso estava armado? Houve ameaça ou violência? Onde ocorreu o fato?</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    //Informações sobre: Furto de Documentos, Celulares e/ou Objetos
                        case '3':
                            echo '<h4>Relate o furto dos documentos, celular ou objetos. Você percebeu o momento do furto? Onde os itens estavam guardados?</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    //Informações sobre: Fraude e Estelionato
                        case '4':
                            echo '<h4>Explique a situação de fraude ou estelionato. Como foi enganado? Qual o prejuízo sofrido? Houve contato direto com o golpista?</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    //Informações sobre: Perda de Documentos, Celulares e/ou Objetos
                        case '5':
                            echo '<h4>Detalhe a perda dos documentos, celular ou objetos. Onde e quando você percebeu que havia perdido? Tentou recuperar?</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    //Informações sobre: Furto de Fios e/ou Cabos em vias públicas
                        case '6':
                            echo '<h4>Descreva o furto de fios ou cabos. Você presenciou o crime? Houve impacto na energia ou serviços? Informe o local exato.</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    //Informações sobre: Desaparecimento de Pessoas
                        case '7':
                            echo '<h4>Relate o desaparecimento da pessoa. Quando foi vista pela última vez? Como estava vestida? Alguma suspeita sobre o paradeiro?</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    //Informações sobre: Acidente de Trânsito sem Vítimas
                        case '8':
                            echo '<h4>Descreva o acidente de trânsito. Houve danos materiais? Quem estava envolvido? Como ocorreu a colisão?</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    //Informações sobre: Injúria, Calúnia ou Difamação
                        case '9':
                            echo '<h4>Explique a situação de injúria, calúnia ou difamação. O que foi dito ou escrito? Há testemunhas ou provas do ocorrido?</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    //Informações sobre: Encontro de Pessoas
                        case '10':
                            echo '<h4>Descreva o encontro da pessoa desaparecida. Como ela foi encontrada? Qual era o estado dela? Alguma outra observação?</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    //Informações sobre: Violência Doméstica contra Mulher
                        case '11':
                            echo '<h4>Relate a violência doméstica. Quem foi o agressor? Houve agressões físicas, verbais ou psicológicas? Já houve outros episódios?</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    //Informações sobre: Outras Ocorrências
                        case '12':
                            echo '<h4>Descreva a ocorrência. O que aconteceu? Onde e quando ocorreu? Há informações adicionais relevantes?</h4>';
                            echo '<div class="row w-100 d-flex justify-content-center">';
                            echo '<div class="col-md-10">';
                            echo '  <textarea name="relato_boletim" class="form-control w-100 mx-auto" rows="10" placeholder="Escreva Aqui" required></textarea>';
                            echo '</div>';
                            echo '</div>';
                        break;
                    }
                }
            ?>
            <div class="container pt-4">
                <button type="submit" class="btn btn-primary w-100 mb-2">Finalizar</button>
                <a href="./formulario_boletim.php" class="btn btn-danger w-100 mb-2">Voltar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>