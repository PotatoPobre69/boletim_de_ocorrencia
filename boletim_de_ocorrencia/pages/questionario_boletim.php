<!-- POST METHOD: Variáveis de Outras Páginas -->
<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['tipo_ocorrencia'] = $_POST['tipo_ocorrencia'];
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
    <div class="container mt-4">
        <h1>Formulário Boletim de Ocorrência</h1>

        <form action="./local_e_hora_boletim.php" method="post">
            <div class="mb-3">
                <?php
                    if (isset($_SESSION['tipo_ocorrencia']))
                    {
                        switch ($_SESSION['tipo_ocorrencia']) 
                        {
                        // Questionário: Roubo ou Furto de Veículos
                            case '1':
                                echo '<h2>Triagem: Agressão Física</h2>';
                                echo '<h4>Você foi ameaçado(a) quando levaram seu veículo?</h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="1.1">Não vi ou Não fui ameaçado</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="1.2">Sim, mas não houve agressão física</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="2.3">Sim, e eu fui agredido durante o roubo</button>';
                                echo '</div>';
                                break;
                        // Questionário: Roubo de Documentos, Celulares e/ou Objetos
                            case '2':
                                echo '<h2>Triagem: Roubo</h2>';
                                echo '<h4>Tipo de documentos e objetos:</h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="2.1">Documento - Somente RG</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="2.2">Documentos e/ou Objetos</button>';
                                echo '</div>';
                                break;
                        // Questionário: Furto de Documentos, Celulares e/ou Objetos
                            case '3':
                                echo '<h2>Triagem: Furto</h2>';
                                echo '<h4>Tipo de documentos e objetos:</h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="3.1">Documento - Somente RG</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="3.2">Documentos e/ou Objetos</button>';
                                echo '</div>';
                                break;
                        // Questionário: Fraude e Estelionato
                            case '4':
                                echo '<h2>Triagem: Fraude e Estelionato</h2>';
                                echo '<h4>Informe o canal em que a fraude foi cometida:</h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="4.1">Foi cometida pela internet</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="4.2">Foi cometida por contato telefônico</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="4.3">Foi cometida presencialmente</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="4.4">Nenhuma das opções acima</button>';
                                echo '</div>';
                                break;
                        // Questionário: Perda de Documentos, Celulares e/ou Objetos
                            case '5':
                                echo '<h2>Triagem: Perda</h2>';
                                echo '<h4>Tipo de documentos e objetos:</h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="5.1">Documento - Somente RG</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="5.2">Documentos e/ou Objetos</button>';
                                echo '</div>';
                                break;
                        // Questionário: Furto de Fios e/ou Cabos
                            case '6':
                                echo '<h2>Triagem: Fios e/ou Cabos da Empresa</h2>';
                                echo '<h4><strong>ATENÇÃO: A pergunta a seguir refere-se apenas aos casos de furtos de fios/cabos de empresas concessionárias de serviço público: Os itens furtados pertencem a empresa concessionária de serviço público?</strong></h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="6.1">Sim</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="6.2">Não</button>';
                                echo '</div>';
                                break;
                        // Questionário: Desaparecimento de Pessoas
                            case '7':
                                echo '<h2>Triagem: Desaparecimentos Anteriores</h2>';
                                echo '<h4>A pessoa já desapareceu outras vezes?</h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="7.1">Sim</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="7.2">Não</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="7.3">Não sei dizer</button>';
                                echo '</div>';
                                break;
                        // Questionário: Acidente de Trânsito sem Vítimas
                            case '8':
                                echo '<h2>Triagem: Ferimentos</h2>';
                                echo '<h4>Alguém se feriu no acidente?</h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="8.1">Sim</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="8.2">Não</button>';
                                echo '</div>';
                                break;
                        // Questionário: Injúria, Calúnia ou Difamação
                            case '9':
                                echo '<h2>Triagem: Diversidade e Intolerância</h2>';
                                echo '<h4>Trata-se de ocorrência envolvendo?</h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="9.1">Homofobia</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="9.2">Transfobia</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="9.3">Racial/Etnia/Cor</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="9.4">Origem</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="9.5">Religioso</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="9.6">Outro tipo de intolerância ou discriminação</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="9.7">Não envolveu intolerância ou discriminação</button>';
                                echo '</div>';
                                break;
                        // Questionário: Encontro de Pessoas
                            case '10':
                                echo '<h2>Triagem: Motivo do Desaparecimento</h2>';
                                echo '<h4>A pessoa desapareceu por que foi vítima de um crime?</h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="10.1">Sim</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="10.2">Não</button>';
                                echo '</div>';
                                break;
                        // Questionário: Violência Doméstica
                            case '11':
                                echo '<h2>Triagem: Vítima</h2>';
                                echo '<h4>Esse formulário se destina SOMENTE para vítimas. Deseja prosseguir?</h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="11.1">Sim</button>';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="11.2">Não</button>';
                                echo '</div>';
                                break;
                        // Questionário: Outras Ocorrências
                            case '12':
                                echo '<h2>Triagem: Confirmação</h2>';
                                echo '<h4>Analise se sua ocorrência REALMENTE não está entre as outras</h4>';
                                echo '<div class="container col-4">';
                                echo '<button type="submit" class="btn btn-primary bg-secondary w-100" name="resposta_triagem" value="12.1">Avançar</button>';
                                echo '</div>';
                                break;

                            default:
                                echo '<h2>Informações Adicionais</h2>';
                                echo '<p>Não há perguntas específicas para este tipo de ocorrência.</p>';
                                break;
                        }
                    }
                    else
                    {
                        echo '<p class="text-danger">Tipo de ocorrência não definido. Volte à página anterior.</p>';
                    }
                ?>

                <a href="./formulario_boletim.php" class="btn btn-danger">Voltar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>