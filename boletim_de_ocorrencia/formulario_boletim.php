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
<!-- Formulário: Escolha Ocorrência -->
        <form action="./questionario_boletim.php" method="post">
            <div class="row d-flex justify-content-center flex-wrap">
    <!-- Botão 1: Roubo ou Furto de Veículos -->                
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Roubo ou Furto de Veículos"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="1">Roubo ou Furto de Veículos</button>
                    </div>
                </div>
    <!-- Botão 2: Roubo de Documentos, Celulares e/ou Objetos -->
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Roubo de Documentos, Celulares e/ou Objetos"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="2">Roubo de Documentos, Celulares e/ou Objetos</button>
                    </div>
                </div>
    <!-- Botão 3: Furto de Documentos, Celulares e/ou Objetos -->
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Furto de Documentos, Celulares e/ou Objetos"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="3">Furto de Documentos, Celulares e/ou Objetos</button>
                    </div>
                </div>
    <!-- Botão 4: Fraude e Estelionato -->
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Fraude e Estelionato"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="4">Fraude e Estelionato</button>
                    </div>
                </div>
    <!-- Botão 5: Perda de Documentos, Celulares e/ou Objetos -->
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Perda de Documentos, Celulares e/ou Objetos"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="5">Perda de Documentos, Celulares e/ou Objetos</button>
                    </div>
                </div>
    <!-- Botão 6: Furto de Fios e/ou Cabos em vias públicas -->
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Furto de Fios e/ou Cabos em vias públicas"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="6">Furto de Fios e/ou Cabos em vias públicas</button>
                    </div>
                </div>
    <!-- Botão 7: Desaparecimento de Pessoas -->
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Desaparecimento de Pessoas"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="7">Desaparecimento de Pessoas</button>
                    </div>
                </div>
    <!-- Botão 8: Acidente de Trânsito sem Vítimas -->
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Acidente de Trânsito sem Vítimas"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="8">Acidente de Trânsito sem Vítimas</button>
                    </div>
                </div>
    <!-- Botão 9: Injúria, Calúnia ou Difamação -->
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Injúria, Calúnia ou Difamação"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="9">Injúria, Calúnia ou Difamação</button>
                    </div>
                </div>
    <!-- Botão 10: Encontro de Pessoas -->
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Encontro de Pessoas"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="10">Encontro de Pessoas</button>
                    </div>
                </div>
    <!-- Botão 11: Violência Doméstica contra Mulher -->
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Violência Doméstica contra Mulher"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="11">Violência Doméstica contra Mulher</button>
                    </div>
                </div>
    <!-- Botão 12: Outras Ocorrências -->
                <div class="card" style="width: 15rem; height: 18rem">
                    <img src="car-icon.png" class="card-img-top" alt="Outras Ocorrências"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="12">Outras Ocorrências</button>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Próximo</button>
        </form>    
    </div>
    <?php
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tipo_ocorrencia'])) {
            $_SESSION['tipo_ocorrencia'] = $_POST['tipo_ocorrencia'];
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>