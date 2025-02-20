<?php 
    session_start();
    $tipo_ocorrencia = isset($_SESSION['tipo_ocorrencia']) ? $_SESSION['tipo_ocorrencia'] : 'Ocorrência não definida';
    $resposta_triagem = isset($_SESSION['resposta_triagem'])? $_SESSION['resposta_triagem'] : 'Triagem não computada';
    $data_do_fato = isset($_SESSION['data_do_fato'])? $_SESSION['data_do_fato'] : 'Data não especificado';
    $hora_do_fato = isset($_SESSION['hora_do_fato'])? $_SESSION['hora_do_fato'] : 'Hora não especificado';
    $local_do_fato = isset($_SESSION['local_do_fato'])? $_SESSION['local_do_fato'] : 'Local não especificado';
    $cep_local_do_fato = isset($_SESSION['cep_local_do_fato'])? $_SESSION['cep_local_do_fato'] : 'CEP não informado';
    $nn_local_do_fato = isset($_SESSION['nn_local_do_fato'])? $_SESSION['nn_local_do_fato'] : 'Número não informado';
    $estado_local_do_fato = isset($_SESSION['estado_local_do_fato'])? $_SESSION['estado_local_do_fato'] : 'Estado não informado';
    $mun_local_do_fato = isset($_SESSION['mun_local_do_fato'])? $_SESSION['mun_local_do_fato'] : 'Município não informado';
    $bairro_local_do_fato = isset($_SESSION['bairro_local_do_fato'])? $_SESSION['bairro_local_do_fato'] : 'Bairro não informado';
    $log_local_do_fato = isset($_SESSION['log_local_do_fato'])? $_SESSION['log_local_do_fato'] : 'Logadouro não informado';
    $comp_local_do_fato = isset($_SESSION['comp_local_do_fato'])? $_SESSION['comp_local_do_fato'] : 'Sem Complemento';
    $nome_completo_delatante = isset($_SESSION['nome_completo_delatante']) ? $_SESSION['nome_completo_delatante'] : 'Nome não informado';
    $nome_social_delatante = isset($_SESSION['nome_social_delatante']) ? $_SESSION['nome_social_delatante'] : 'Nome social não informado';
    $sexo_delatante = isset($_SESSION['sexo_delatante']) ? $_SESSION['sexo_delatante'] : 'Não especificado';
    $identidade_genero_delatante = isset($_SESSION['identidade_genero_delatante']) ? $_SESSION['identidade_genero_delatante'] : 'Não informado';
    $orientacao_sexual_delatante = isset($_SESSION['orientacao_sexual_delatante']) ? $_SESSION['orientacao_sexual_delatante'] : 'Não informado';
    $data_nascimento_delatante = isset($_SESSION['data_nascimento_delatante']) ? $_SESSION['data_nascimento_delatante'] : 'Data não informada';
    $naturalidade_delatante = isset($_SESSION['naturalidade_delatante']) ? $_SESSION['naturalidade_delatante'] : 'Naturalidade não informada';
    $nome_mae_delatante = isset($_SESSION['nome_mae_delatante']) ? $_SESSION['nome_mae_delatante'] : 'Nome não informado';
    $nome_pai_delatante = isset($_SESSION['nome_pai_delatante']) ? $_SESSION['nome_pai_delatante'] : 'Nome não informado';
    $cpf_delatante = isset($_SESSION['cpf_delatante']) ? $_SESSION['cpf_delatante'] : 'CPF não informado';
    $uf_rg_relatante = isset($_SESSION['uf_rg_relatante']) ? $_SESSION['uf_rg_relatante'] : 'UF não informada';
    $rg_delatante = isset($_SESSION['rg_delatante']) ? $_SESSION['rg_delatante'] : 'RG não informado';
    $profissao_delatante = isset($_SESSION['profissao_delatante']) ? $_SESSION['profissao_delatante'] : 'Profissão não informada';
    $email_delatante = isset($_SESSION['email_delatante']) ? $_SESSION['email_delatante'] : 'E-mail não informado';
    $tipo_contato_1_delatante = isset($_SESSION['tipo_contato_1_delatante']) ? $_SESSION['tipo_contato_1_delatante'] : 'Não informado';
    $tel_contato_1_delatante = isset($_SESSION['tel_contato_1_delatante']) ? $_SESSION['tel_contato_1_delatante'] : 'Telefone não informado';
    $ramal_contato_1_delatante = isset($_SESSION['ramal_contato_1_delatante']) ? $_SESSION['ramal_contato_1_delatante'] : 'Sem ramal';
    $tipo_contato_2 = isset($_SESSION['tipo_contato_2']) ? $_SESSION['tipo_contato_2'] : 'Não informado';
    $tel_contato_2 = isset($_SESSION['tel_contato_2']) ? $_SESSION['tel_contato_2'] : 'Telefone não informado';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['relato_boletim'] = $_POST['relato_boletim'] ?? 'Não houve relato';
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Boletim de Ocorrência - Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Formulário Boletim de Ocorrência</h1>
        <h2>Boletim Completo:</h2>

        <div class="row w-100">
            <div class="col">
                <?php 
                    echo '<strong>Ocorrência de: </strong>';
                    if (isset($tipo_ocorrencia))
                    {
                        switch ($tipo_ocorrencia)
                        {
                            case '1':
                                echo 'Roubo ou Furto de Veículos';
                            break;
                            case '2':
                                echo 'Roubo de Documentos, Celulares e/ou Objetos';
                            break;
                            case '3':
                                echo 'Furto de Documentos, Celulares e/ou Objetos';
                            break;
                            case '4':
                                echo 'Fraude e Estelionato';
                            break;
                            case '5':
                                echo 'Perda de Documentos, Celulares e/ou Objetos';
                            break;
                            case '6':
                                echo 'Furto de Fios e/ou Cabos em vias públicas';
                            break;
                            case '7':
                                echo 'Desaparecimento de Pessoas';
                            break;
                            case '8':
                                echo 'Acidente de Trânsito sem Vítimas';
                            break;
                            case '9':
                                echo 'Injúria, Calúnia ou Difamação';
                            break;
                            case '10':
                                echo 'Encontro de Pessoas';
                            break;
                            case '11':
                                echo 'Violência Doméstica contra Mulher';
                            break;
                            case '12':
                                echo 'Outras Ocorrências';
                            break;
                        }
                    }
                ?>
            </div>
            <div class="col">
                <?php 
                    if (isset($tipo_ocorrencia))
                    {
                        switch ($tipo_ocorrencia)
                        {
                            case '1':
                                echo '<strong>Você foi ameaçado(a) quando levaram seu veículo?</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                            case '2':
                                echo '<strong>Tipo de documentos e objetos:</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                            case '3':
                                echo '<strong>Tipo de documentos e objetos:</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                            case '4':
                                echo '<strong>Informe o canal em que a fraude foi cometida:</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                            case '5':
                                echo '<strong>Tipo de documentos e objetos:</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                            case '6':
                                echo '<strong>Os itens furtados pertencem a empresa concessionária de serviço público?</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                            case '7':
                                echo '<strong>A pessoa já desapareceu outras vezes?</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                            case '8':
                                echo '<strong>Alguém se feriu no acidente?</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                            case '9':
                                echo '<strong>Trata-se de ocorrência envolvendo?</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                            case '10':
                                echo '<strong>A pessoa desapareceu por que foi vítima de um crime?</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                            case '11':
                                echo '<strong>Esse formulário se destina SOMENTE para vítimas. Deseja prosseguir?</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                            case '12':
                                echo '<strong>Analise se sua ocorrência REALMENTE não está entre as outras?</strong>';
                                echo '<br/><strong>Resposta: </strong>', $resposta_triagem;
                            break;
                        }
                    }
                ?>
            </div>
        </div>
        <h3>Local do Fato:</h3>
        <div class="row w-100">
            <div class="col">
                <?php 
                    echo '<strong>',$local_do_fato,'</strong> - ', $data_do_fato,' - ',$hora_do_fato;
                ?>
            </div>
        </div>

        <div class="row w-100">
            <div class="col">
                <?php 
                    echo '<strong>CEP: </strong>', $cep_local_do_fato;
                ?>
            </div>
        </div>

        <div class="row w-100">
            <div class="col">
                <?php
                    echo '<strong>Estado: </strong>', $estado_local_do_fato;
                ?>
            </div>
            <div class="col">
                <?php
                    echo '<strong>Município: </strong>', $mun_local_do_fato;
                ?>
            </div>
            <div class="col">
                <?php
                    echo '<strong>Bairro: </strong>', $bairro_local_do_fato;
                ?>
            </div>
        </div>
        <div class="row w-100">
            <div class="col">
                <?php
                    echo '<strong>Logadouro: </strong>', $log_local_do_fato;
                ?>
            </div>
            <div class="col">
                <?php
                    echo '<strong>Nº: </strong>', $nn_local_do_fato;
                ?>
            </div>
            <div class="col">
                <?php
                    echo '<strong>Complemento: </strong>', $comp_local_do_fato;
                ?>
            </div>
        </div>
        <h3>Informações do Delatante:</h3>
        <div class="row w-100">
            <div class="col">
                <?php
                    echo '<strong>Nome Completo: </strong>', $nome_completo_delatante;
                ?>
            </div>
            <div class="col">
                <?php
                    echo '<strong>Nome Social: </strong>', $nome_social_delatante;
                ?>
            </div>
        </div>

        <div class="row w-100">
            <div class="col">
                <?php
                    echo '<strong>Sexo: </strong>', $sexo_delatante;
                ?>
            </div>
            <div class="col">
                <?php
                    echo '<strong>Identidade de Gênero: </strong>', $identidade_genero_delatante;
                ?>
            </div>
            <div class="col">
                <?php
                    echo '<strong>Orientação Sexual: </strong>', $orientacao_sexual_delatante;
                ?>
            </div>
        </div>

        <div class="row w-100">
            <div class="col">
                <?php 
                    echo '<strong>Data de Nascimento: </strong>', $data_nascimento_delatante;
                ?>
            </div>
            <div class="col">
                <?php
                    echo '<strong>Naturaldiade: </strong>', $naturalidade_delatante;
                ?>
            </div>
        </div>

        <div class="row w-100">
            <div class="col">
                <?php 
                    echo '<strong>Nome da Mãe: </strong>', $nome_mae_delatante;
                ?>
            </div>
            <div class="col">
                <?php 
                    echo '<strong>Nome do Pai: </strong>', $nome_pai_delatante;
                ?>
            </div>
        </div>

        <div class="row w-100">
            <div class="col">
                <?php 
                    echo '<strong>CPF: </strong>', $cpf_delatante;
                ?>
            </div>
            <div class="col">
                <?php 
                    echo '<strong>RG: </strong>', $rg_delatante, ' ', $uf_rg_relatante;
                ?>
            </div>
        </div>

        <div class="row w-100">
            <div class="col">
                <?php 
                    echo '<strong>Profissão: </strong>', $profissao_delatante;
                ?>
            </div>
        </div>

        <div class="row w-100">
            <div class="col">
                <?php 
                    echo '<strong>Email: </strong>', $email_delatante;
                ?>
            </div>
        </div>

        <div class="row w-100">
            <div class="col">
                <?php
                    echo '<strong>Telefone 1:</strong>';
                ?>
                <div class="row w-100">
                    <?php 
                        echo 'Contato | ';
                        echo $tel_contato_1_delatante, ' | ';
                        echo $ramal_contato_1_delatante;
                    ?>
                </div>
            </div>
            <div class="col">
                <?php
                    echo '<strong>Telefone 2:</strong>';
                ?>
                <div class="row w-100">
                    <?php 
                        echo $tipo_contato_2, ' | ';
                        echo $tel_contato_2;
                    ?>
                </div>
            </div>
        </div>
        <h3>Ocorrência:</h3>
        <div class="row w-100">
            <div class="col">
                <?php
                    echo $_SESSION['relato_boletim'];
                ?>
            </div>
        </div>
        <a href="./formulario_boletim.php" class="btn btn-danger">Voltar ao Início</a>
    </div>
</body>
</html>