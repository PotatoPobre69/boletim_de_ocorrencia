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

        <form action="boletim.php" method="post">
            <div class="mb-3">
                <?php
                    if (isset($_SESSION['tipo_ocorrencia']))
                    {
                        switch ($_SESSION['tipo_ocorrencia']) 
                        {
                            case '1':
                                echo '<h2>Triagem: Agressão Física</h2>';
                                echo '<h3>Você foi ameaçado(a) quando levaram seu veículo?';
                                echo '<select class="form-select" name="tipo_ocorrencia" id="tipo_ocorrencia" required>';
                                echo '<option selected disable>Escolha uma Resposta</option>';
                                echo '<option value="1">Não vi ou Não fui ameaçado</option>';
                                echo '<option value="2">Sim, mas não houve agressão física</option>';
                                echo '<option value="3">Sim, e eu fui agredido durante o roubo</option>';
                                echo '</select>';
                                break;
                            
                            case '2':
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
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>