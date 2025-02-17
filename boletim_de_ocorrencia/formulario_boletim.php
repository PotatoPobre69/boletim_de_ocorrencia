<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Boletim de Ocorrência</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Formulário Boletim de Ocorrência</h1>
        <form action="./questionario_boletim.php" method="post">
            <div class="mb-3">
                <select class="form-select" name="tipo_ocorrencia" id="tipo_ocorrencia" required>
                    <option selected disabled>Selecione Uma Opção</option>
                    <option value="1">Roubo ou Furto de Veículos</option>
                    <option value="2">Roubo de Documentos, Celulares e/ou Objetos</option>
                    <option value="3">Furto de Documentos, Celulares e/ou Objetos</option>
                    <option value="4">Fraude e Estelionato</option>
                    <option value="5">Perda de Documentos, Celulares e/ou Objetos</option>
                    <option value="6">Furto de Fios e/ou Cabos em vias públicas</option>
                    <option value="7">Desaparecimento de Pessoas</option>
                    <option value="8">Acidente de Trânsito sem Vítimas</option>
                    <option value="9">Injúria, Calunia ou Difamação</option>
                    <option value="10">Encontro de Pessoas</option>
                    <option value="11">Violência Doméstica contra Mulher</option>
                    <option value="12">Outras Ocorrências</option>
                </select>
            </div>

            <a href="./questionario_boletim.php" class="btn btn-primary">Próximo</a>
        </form>    
    </div>
    <?php
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_SESSION['tipo_ocorrencia'] = $_POST['tipo_ocorrencia'];
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>