<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Boletim de Ocorrência</title>
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
            <li> Relatar Ocorrência </li>
        </ul>
    </nav>

    <div class="container col d-flex justify-content-center p-4">
<!-- Formulário: Escolha Ocorrência -->
        <form action="./questionario_boletim.php" method="post">
            <div class="row d-flex justify-content-center flex-wrap">
    <!-- Botão 1: Roubo ou Furto de Veículos -->                
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/car-icon.svg" class="card-img-top w-100" alt="Roubo ou Furto de Veículos"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="1">Roubo ou Furto de Veículos</button>
                    </div>
                </div>
    <!-- Botão 2: Roubo de Documentos, Celulares e/ou Objetos -->
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/robbery-icon.svg" class="card-img-top w-100" alt="Roubo de Documentos, Celulares e/ou Objetos"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="2">Roubo de Documentos, Celulares e/ou Objetos</button>
                    </div>
                </div>
    <!-- Botão 3: Furto de Documentos, Celulares e/ou Objetos -->
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/theft-icon.svg" class="card-img-top w-100" alt="Furto de Documentos, Celulares e/ou Objetos"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="3">Furto de Documentos, Celulares e/ou Objetos</button>
                    </div>
                </div>
    <!-- Botão 4: Fraude e Estelionato -->
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/fraud-icon.svg" class="card-img-top w-100" alt="Fraude e Estelionato"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="4">Fraude e Estelionato</button>
                    </div>
                </div>
    <!-- Botão 5: Perda de Documentos, Celulares e/ou Objetos -->
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/lost-documents-icon.svg" class="card-img-top w-100" alt="Perda de Documentos, Celulares e/ou Objetos"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="5">Perda de Documentos, Celulares e/ou Objetos</button>
                    </div>
                </div>
    <!-- Botão 6: Furto de Fios e/ou Cabos em vias públicas -->
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/cable-icon.svg" class="card-img-top w-100" alt="Furto de Fios e/ou Cabos em vias públicas"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="6">Furto de Fios e/ou Cabos em vias públicas</button>
                    </div>
                </div>
    <!-- Botão 7: Desaparecimento de Pessoas -->
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/missing-icon.svg" class="card-img-top w-100" alt="Desaparecimento de Pessoas"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="7">Desaparecimento de Pessoas</button>
                    </div>
                </div>
    <!-- Botão 8: Acidente de Trânsito sem Vítimas -->
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/car-icon.svg" class="card-img-top w-100" alt="Acidente de Trânsito sem Vítimas"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="8">Acidente de Trânsito sem Vítimas</button>
                    </div>
                </div>
    <!-- Botão 9: Injúria, Calúnia ou Difamação -->
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/defamation-icon.svg" class="card-img-top w-100" alt="Injúria, Calúnia ou Difamação"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="9">Injúria, Calúnia ou Difamação</button>
                    </div>
                </div>
    <!-- Botão 10: Encontro de Pessoas -->
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/missing-icon.svg" class="card-img-top w-100" alt="Encontro de Pessoas"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="10">Encontro de Pessoas</button>
                    </div>
                </div>
    <!-- Botão 11: Violência Doméstica contra Mulher -->
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/sad-icon.svg" class="card-img-top w-100" alt="Violência Doméstica contra Mulher"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="11">Violência Doméstica contra Mulher</button>
                    </div>
                </div>
    <!-- Botão 12: Outras Ocorrências -->
                <div class="card" style="width: 13.9rem; height: 21rem">
                    <img src="../assets/icons/others-icon.svg" class="card-img-top w-100" alt="Outras Ocorrências"/>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <button type="submit" class="btn border border-danger text-danger bg-transparent w-100" name="tipo_ocorrencia" value="12">Outras Ocorrências</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>