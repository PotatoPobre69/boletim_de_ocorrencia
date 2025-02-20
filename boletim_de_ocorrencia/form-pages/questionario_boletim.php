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
            <li> Triagem </li>
        </ul>
    </nav>

    <div class="container d-grip mt-4">

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
                                echo '<div class="container d-grip">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Não vi ou Não fui ameaçado">Não vi ou Não fui ameaçado</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Sim, mas não houve agressão física">Sim, mas não houve agressão física</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Sim, e eu fui agredido durante o roubo">Sim, e eu fui agredido durante o roubo</button>';
                                echo '</div>';
                                break;
                        // Questionário: Roubo de Documentos, Celulares e/ou Objetos
                            case '2':
                                echo '<h2>Triagem: Roubo</h2>';
                                echo '<h4>Tipo de documentos e objetos:</h4>';
                                echo '<div class="container d-grip ">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Documento - Somente RG">Documento - Somente RG</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Documentos e/ou Objetos">Documentos e/ou Objetos</button>';
                                echo '</div>';
                                break;
                        // Questionário: Furto de Documentos, Celulares e/ou Objetos
                            case '3':
                                echo '<h2>Triagem: Furto</h2>';
                                echo '<h4>Tipo de documentos e objetos:</h4>';
                                echo '<div class="container d-grip ">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Documento - Somente RG">Documento - Somente RG</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Documentos e/ou Objetos">Documentos e/ou Objetos</button>';
                                echo '</div>';
                                break;
                        // Questionário: Fraude e Estelionato
                            case '4':
                                echo '<h2>Triagem: Fraude e Estelionato</h2>';
                                echo '<h4>Informe o canal em que a fraude foi cometida:</h4>';
                                echo '<div class="container d-grip ">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Foi cometida pela internet">Foi cometida pela internet</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Foi cometida por contato telefônico">Foi cometida por contato telefônico</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Foi cometida presencialmente">Foi cometida presencialmente</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Nenhuma das opções acima">Nenhuma das opções acima</button>';
                                echo '</div>';
                                break;
                        // Questionário: Perda de Documentos, Celulares e/ou Objetos
                            case '5':
                                echo '<h2>Triagem: Perda</h2>';
                                echo '<h4>Tipo de documentos e objetos:</h4>';
                                echo '<div class="container d-grip ">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Documento - Somente RG">Documento - Somente RG</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Documentos e/ou Objetos">Documentos e/ou Objetos</button>';
                                echo '</div>';
                                break;
                        // Questionário: Furto de Fios e/ou Cabos
                            case '6':
                                echo '<h2>Triagem: Fios e/ou Cabos da Empresa</h2>';
                                echo '<h4><strong>ATENÇÃO: A pergunta a seguir refere-se apenas aos casos de furtos de fios/cabos de empresas concessionárias de serviço público: Os itens furtados pertencem a empresa concessionária de serviço público?</strong></h4>';
                                echo '<div class="container d-grip ">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Sim">Sim</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Não">Não</button>';
                                echo '</div>';
                                break;
                        // Questionário: Desaparecimento de Pessoas
                            case '7':
                                echo '<h2>Triagem: Desaparecimentos Anteriores</h2>';
                                echo '<h4>A pessoa já desapareceu outras vezes?</h4>';
                                echo '<div class="container d-grip ">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Sim">Sim</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Não">Não</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Não sei dizer">Não sei dizer</button>';
                                echo '</div>';
                                break;
                        // Questionário: Acidente de Trânsito sem Vítimas
                            case '8':
                                echo '<h2>Triagem: Ferimentos</h2>';
                                echo '<h4>Alguém se feriu no acidente?</h4>';
                                echo '<div class="container d-grip ">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Sim">Sim</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Não">Não</button>';
                                echo '</div>';
                                break;
                        // Questionário: Injúria, Calúnia ou Difamação
                            case '9':
                                echo '<h2>Triagem: Diversidade e Intolerância</h2>';
                                echo '<h4>Trata-se de ocorrência envolvendo?</h4>';
                                echo '<div class="container d-grip ">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Homofobia">Homofobia</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Transfobia">Transfobia</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Racial/Etnia/Cor">Racial/Etnia/Cor</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Origem">Origem</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Religioso">Religioso</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Outro tipo de intolerância ou discriminação">Outro tipo de intolerância ou discriminação</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Não envolveu intolerância ou discriminação">Não envolveu intolerância ou discriminação</button>';
                                echo '</div>';
                                break;
                        // Questionário: Encontro de Pessoas
                            case '10':
                                echo '<h2>Triagem: Motivo do Desaparecimento</h2>';
                                echo '<h4>A pessoa desapareceu por que foi vítima de um crime?</h4>';
                                echo '<div class="container d-grip ">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Sim">Sim</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Não">Não</button>';
                                echo '</div>';
                                break;
                        // Questionário: Violência Doméstica
                            case '11':
                                echo '<h2>Triagem: Vítima</h2>';
                                echo '<h4>Esse formulário se destina SOMENTE para vítimas. Deseja prosseguir?</h4>';
                                echo '<div class="container d-grip ">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Sim">Sim</button>';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Não">Não</button>';
                                echo '</div>';
                                break;
                        // Questionário: Outras Ocorrências
                            case '12':
                                echo '<h2>Triagem: Confirmação</h2>';
                                echo '<h4>Analise se sua ocorrência REALMENTE não está entre as outras?</h4>';
                                echo '<div class="container d-grip ">';
                                echo '<button type="submit" class="btn btn-secondary mb-2 mt-2 w-100" name="resposta_triagem" value="Avançar">Avançar</button>';
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
                <div class="container pt-4">
                    <a href="./formulario_boletim.php" class="btn btn-danger w-100">Voltar</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>