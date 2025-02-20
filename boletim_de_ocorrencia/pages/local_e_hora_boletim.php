<!-- POST METHOD: Variáveis de Outras Páginas -->
<?php
    session_start();
    $tipo_ocorrencia = isset($_SESSION['tipo_ocorrencia']) ? $_SESSION['tipo_ocorrencia'] : 'Não definido';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['resposta_triagem'] = $_POST['resposta_triagem'];
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Boletim de Ocorrência - Etapa 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Formulário Boletim de Ocorrência</h1>
        <h2>Local e Hora da Ocorrência</h2>
        <form action="./informacoes_delatante.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="hora_do_fato" class="form-label">Data do Fato:*</label>
                    <input type="date" name="data_do_fato" class="form-control w-100" required>
                </div>
                <div class="col">
                    <label for="hora_do_fato" class="form-label">Hora:*</label>
                    <input type="time" name="hora_do_fato" class="form-control w-100" required>
                </div>
            </div>
            <div class="row">
            
                    <?php
                    if (isset($tipo_ocorrencia))
                        {
                            switch ($tipo_ocorrencia) 
                            {
                            // Escolha Local: Roubo ou Furto de Veículos
                                case '1':
                                    echo '<label for="local_do_fato" class="form-label">Local Fato:*</label>';
                                    echo '<select class="form-select w-100" name="local_do_fato" required>';
                                    echo '  <option selected disabled>Selecione</option>';
                                    echo '  <option value="Via Pública">Via Pública</option>';
                                    echo '  <option value="Garagem coletiva de prédio">Garagem coletiva de prédio</option>';
                                    echo '  <option value="Estacionamento com vigilância">Estacionamento com vigilância</option>';
                                    echo '  <option value="Estacionamento público">Estacionamento público</option>';
                                    echo '  <option value="Estacionamento particular">Estacionamento particular</option>';
                                    echo '  <option value="Garagem ou abrigo de residência">Garagem ou abrigo de residência</option>';
                                    echo '  <option value="Veículo em movimento">Veículo em movimento</option>';
                                    echo '  <option value="Outro Lugar">Outro Lugar</option>';
                                    echo '</select>';
                                // Pesquisar Local: Roubo ou Furto de Veículos
                                    echo '<label for="informacoes-local" class="form-label"><strong>Informações Local do Fato:</strong></label>';
                                    echo '<div class="row" id="informacoes-local">';
                                    echo '  <div class="col">';
                                    echo '      <label for="cep_local_do_fato" class="form-label">CEP:*</label>';
                                    echo '      <input type="tel" name="cep_local_do_fato" class="form-control w-100" pattern="[0-9]{5}-[0-9]{3}" placeholder="Formato: 12345-123" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="nn_local_do_fato" class="form-label">Número:*</label>';
                                    echo '      <input type="num" name="nn_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="estado_local_do_fato" class="form-label">Estado (UF):*</label>';
                                    echo '      <select class="form-select w-100" name="estado_local_do_fato" required>';
                                    echo '          <option selected disabled>Selecione o Estado</option>';
                                    echo '          <option value="Acre">Acre</option>';
                                    echo '          <option value="Alagoas">Alagoas</option>';
                                    echo '          <option value="Amapá">Amapá</option>';
                                    echo '          <option value="Amazonas">Amazonas</option>';
                                    echo '          <option value="Bahia">Bahia</option>';
                                    echo '          <option value="Ceará">Ceará</option>';
                                    echo '          <option value="Distrito Federal">Distrito Federal</option>';
                                    echo '          <option value="Espírito Santo">Espírito Santo</option>';
                                    echo '          <option value="Goiás">Goiás</option>';
                                    echo '          <option value="Maranhão">Maranhão</option>';
                                    echo '          <option value="Mato Grosso">Mato Grosso</option>';
                                    echo '          <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>';
                                    echo '          <option value="Minas Gerais">Minas Gerais</option>';
                                    echo '          <option value="Pará">Pará</option>';
                                    echo '          <option value="Paraíba">Paraíba</option>';
                                    echo '          <option value="Paraná">Paraná</option>';
                                    echo '          <option value="Pernambuco">Pernambuco</option>';
                                    echo '          <option value="Piauí">Piauí</option>';
                                    echo '          <option value="Rio de Janeiro">Rio de Janeiro</option>';
                                    echo '          <option value="Rio Grande do Norte">Rio Grande do Norte</option>';
                                    echo '          <option value="Rio Grande do Sul">Rio Grande do Sul</option>';
                                    echo '          <option value="Rondônia">Rondônia</option>';
                                    echo '          <option value="Roraima">Roraima</option>';
                                    echo '          <option value="Santa Catarina">Santa Catarina</option>';
                                    echo '          <option value="São Paulo">São Paulo</option>';
                                    echo '          <option value="Sergipe">Sergipe</option>';
                                    echo '          <option value="Tocantins">Tocantins</option>';
                                    echo '      </select>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="mun_local_do_fato" class="form-label">Município:*</label>';
                                    echo '      <input type="text" name="mun_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="bairro_local_do_fato" class="form-label">Bairro:*</label>';
                                    echo '      <input type="text" name="bairro_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="log_local_do_fato" class="form-label">Logadouro:*</label>';
                                    echo '      <input type="text" name="log_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="comp_local_do_fato" class="form-label">Complemento:</label>';
                                    echo '      <input type="text" name="comp_local_do_fato" class="form-control w-100">';
                                    echo '  </div>';
                                    echo '</div>';
                                break;
                            // Escolha Local: Roubo de Documentos, Celulares e/ou Objetos
                                case '2':
                                    echo '<label for="local_do_fato" class="form-label">Local Fato:*</label>';
                                    echo '<select class="form-select w-100" name="local_do_fato" required>';
                                    echo '  <option selected disabled>Selecione</option>';
                                    echo '  <option value="Residência">Residência (dentro de casa)</option>';
                                    echo '  <option value="Agência bancária">Agência bancária</option>';
                                    echo '  <option value="Comércio">Comércio (um estabelecimento comercial)</option>';
                                    echo '  <option value="Numa via pública">Numa via pública</option>';
                                    echo '  <option value="Eu estava em meu veículo">Eu estava em meu veículo</option>';
                                    echo '  <option value="Dentro de um transporte coletivo">Dentro de um transporte coletivo (Exemplo: ônibus)</option>';
                                    echo '  <option value="Estação ou Trem do Metro ou CPTM">Estação ou Trem do Metro ou CPTM</option>';
                                    echo '  <option value="Outro Lugar">Outro Lugar</option>';
                                    echo '</select>';
                                // Pesquisar Local: Roubo de Documentos, Celulares e/ou Objetos
                                    echo '<label for="informacoes-local" class="form-label"><strong>Informações Local do Fato:</strong></label>';
                                    echo '<div class="row" id="informacoes-local">';
                                    echo '  <div class="col">';
                                    echo '      <label for="cep_local_do_fato" class="form-label">CEP:*</label>';
                                    echo '      <input type="tel" name="cep_local_do_fato" class="form-control w-100" pattern="[0-9]{5}-[0-9]{3}" placeholder="Formato: 12345-123" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="nn_local_do_fato" class="form-label">Número:*</label>';
                                    echo '      <input type="num" name="nn_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="estado_local_do_fato" class="form-label">Estado (UF):*</label>';
                                    echo '      <select class="form-select w-100" name="estado_local_do_fato" required>';
                                    echo '          <option selected disabled>Selecione o Estado</option>';
                                    echo '          <option value="Acre">Acre</option>';
                                    echo '          <option value="Alagoas">Alagoas</option>';
                                    echo '          <option value="Amapá">Amapá</option>';
                                    echo '          <option value="Amazonas">Amazonas</option>';
                                    echo '          <option value="Bahia">Bahia</option>';
                                    echo '          <option value="Ceará">Ceará</option>';
                                    echo '          <option value="Distrito Federal">Distrito Federal</option>';
                                    echo '          <option value="Espírito Santo">Espírito Santo</option>';
                                    echo '          <option value="Goiás">Goiás</option>';
                                    echo '          <option value="Maranhão">Maranhão</option>';
                                    echo '          <option value="Mato Grosso">Mato Grosso</option>';
                                    echo '          <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>';
                                    echo '          <option value="Minas Gerais">Minas Gerais</option>';
                                    echo '          <option value="Pará">Pará</option>';
                                    echo '          <option value="Paraíba">Paraíba</option>';
                                    echo '          <option value="Paraná">Paraná</option>';
                                    echo '          <option value="Pernambuco">Pernambuco</option>';
                                    echo '          <option value="Piauí">Piauí</option>';
                                    echo '          <option value="Rio de Janeiro">Rio de Janeiro</option>';
                                    echo '          <option value="Rio Grande do Norte">Rio Grande do Norte</option>';
                                    echo '          <option value="Rio Grande do Sul">Rio Grande do Sul</option>';
                                    echo '          <option value="Rondônia">Rondônia</option>';
                                    echo '          <option value="Roraima">Roraima</option>';
                                    echo '          <option value="Santa Catarina">Santa Catarina</option>';
                                    echo '          <option value="São Paulo">São Paulo</option>';
                                    echo '          <option value="Sergipe">Sergipe</option>';
                                    echo '          <option value="Tocantins">Tocantins</option>';
                                    echo '      </select>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="mun_local_do_fato" class="form-label">Município:*</label>';
                                    echo '      <input type="text" name="mun_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="bairro_local_do_fato" class="form-label">Bairro:*</label>';
                                    echo '      <input type="text" name="bairro_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="log_local_do_fato" class="form-label">Logadouro:*</label>';
                                    echo '      <input type="text" name="log_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="comp_local_do_fato" class="form-label">Complemento:</label>';
                                    echo '      <input type="text" name="comp_local_do_fato" class="form-control w-100">';
                                    echo '  </div>';
                                    echo '</div>';
                                break;
                            // Escolha Local: Furto de Documentos, Celulares e/ou Objetos
                                case '3':
                                    echo '<label for="local_do_fato" class="form-label">Local Fato:*</label>';
                                    echo '<select class="form-select w-100" name="local_do_fato" required>';
                                    echo '  <option selected disabled>Selecione</option>';
                                    echo '  <option value="Residência">Residência (dentro de casa)</option>';
                                    echo '  <option value="Agência bancária">Agência bancária</option>';
                                    echo '  <option value="Comércio">Comércio (um estabelecimento comercial)</option>';
                                    echo '  <option value="Numa via pública">Numa via pública</option>';
                                    echo '  <option value="Eu estava em meu veículo">Eu estava em meu veículo</option>';
                                    echo '  <option value="Dentro de um transporte coletivo">Dentro de um transporte coletivo (Exemplo: ônibus)</option>';
                                    echo '  <option value="Estação ou Trem do Metro ou CPTM">Estação ou Trem do Metro ou CPTM</option>';
                                    echo '  <option value="Outro Lugar">Outro Lugar</option>';
                                    echo '</select>';
                                // Pesquisar Local: Furto de Documentos, Celulares e/ou Objetos
                                    echo '<label for="informacoes-local" class="form-label"><strong>Informações Local do Fato:</strong></label>';
                                    echo '<div class="row" id="informacoes-local">';
                                    echo '  <div class="col">';
                                    echo '      <label for="cep_local_do_fato" class="form-label">CEP:*</label>';
                                    echo '      <input type="tel" name="cep_local_do_fato" class="form-control w-100" pattern="[0-9]{5}-[0-9]{3}" placeholder="Formato: 12345-123" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="nn_local_do_fato" class="form-label">Número:*</label>';
                                    echo '      <input type="num" name="nn_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="estado_local_do_fato" class="form-label">Estado (UF):*</label>';
                                    echo '      <select class="form-select w-100" name="estado_local_do_fato" required>';
                                    echo '          <option selected disabled>Selecione o Estado</option>';
                                    echo '          <option value="Acre">Acre</option>';
                                    echo '          <option value="Alagoas">Alagoas</option>';
                                    echo '          <option value="Amapá">Amapá</option>';
                                    echo '          <option value="Amazonas">Amazonas</option>';
                                    echo '          <option value="Bahia">Bahia</option>';
                                    echo '          <option value="Ceará">Ceará</option>';
                                    echo '          <option value="Distrito Federal">Distrito Federal</option>';
                                    echo '          <option value="Espírito Santo">Espírito Santo</option>';
                                    echo '          <option value="Goiás">Goiás</option>';
                                    echo '          <option value="Maranhão">Maranhão</option>';
                                    echo '          <option value="Mato Grosso">Mato Grosso</option>';
                                    echo '          <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>';
                                    echo '          <option value="Minas Gerais">Minas Gerais</option>';
                                    echo '          <option value="Pará">Pará</option>';
                                    echo '          <option value="Paraíba">Paraíba</option>';
                                    echo '          <option value="Paraná">Paraná</option>';
                                    echo '          <option value="Pernambuco">Pernambuco</option>';
                                    echo '          <option value="Piauí">Piauí</option>';
                                    echo '          <option value="Rio de Janeiro">Rio de Janeiro</option>';
                                    echo '          <option value="Rio Grande do Norte">Rio Grande do Norte</option>';
                                    echo '          <option value="Rio Grande do Sul">Rio Grande do Sul</option>';
                                    echo '          <option value="Rondônia">Rondônia</option>';
                                    echo '          <option value="Roraima">Roraima</option>';
                                    echo '          <option value="Santa Catarina">Santa Catarina</option>';
                                    echo '          <option value="São Paulo">São Paulo</option>';
                                    echo '          <option value="Sergipe">Sergipe</option>';
                                    echo '          <option value="Tocantins">Tocantins</option>';
                                    echo '      </select>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="mun_local_do_fato" class="form-label">Município:*</label>';
                                    echo '      <input type="text" name="mun_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="bairro_local_do_fato" class="form-label">Bairro:*</label>';
                                    echo '      <input type="text" name="bairro_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="log_local_do_fato" class="form-label">Logadouro:*</label>';
                                    echo '      <input type="text" name="log_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="comp_local_do_fato" class="form-label">Complemento:</label>';
                                    echo '      <input type="text" name="comp_local_do_fato" class="form-control w-100">';
                                    echo '  </div>';
                                    echo '</div>';
                                break;
                            // Escolha Local: Fraude e Estelionato
                                case '4':
                                    break;
                            // Escolha Local: Perda de Documentos, Celulares e/ou Objetos
                                case '5':
                                    break;
                            // Escolha Local: Furto de Fios e/ou Cabos em vias públicas
                                case '6':
                                // Pesquisar Local: Furto de Fios e/ou Cabos em vias públicas
                                    echo '<label for="informacoes-local" class="form-label"><strong>Informações Local do Fato:</strong></label>';
                                    echo '<div class="row" id="informacoes-local">';
                                    echo '  <div class="col">';
                                    echo '      <label for="cep_local_do_fato" class="form-label">CEP:*</label>';
                                    echo '      <input type="tel" name="cep_local_do_fato" class="form-control w-100" pattern="[0-9]{5}-[0-9]{3}" placeholder="Formato: 12345-123" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="nn_local_do_fato" class="form-label">Número:*</label>';
                                    echo '      <input type="num" name="nn_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="estado_local_do_fato" class="form-label">Estado (UF):*</label>';
                                    echo '      <select class="form-select w-100" name="estado_local_do_fato" required>';
                                    echo '          <option selected disabled>Selecione o Estado</option>';
                                    echo '          <option value="Acre">Acre</option>';
                                    echo '          <option value="Alagoas">Alagoas</option>';
                                    echo '          <option value="Amapá">Amapá</option>';
                                    echo '          <option value="Amazonas">Amazonas</option>';
                                    echo '          <option value="Bahia">Bahia</option>';
                                    echo '          <option value="Ceará">Ceará</option>';
                                    echo '          <option value="Distrito Federal">Distrito Federal</option>';
                                    echo '          <option value="Espírito Santo">Espírito Santo</option>';
                                    echo '          <option value="Goiás">Goiás</option>';
                                    echo '          <option value="Maranhão">Maranhão</option>';
                                    echo '          <option value="Mato Grosso">Mato Grosso</option>';
                                    echo '          <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>';
                                    echo '          <option value="Minas Gerais">Minas Gerais</option>';
                                    echo '          <option value="Pará">Pará</option>';
                                    echo '          <option value="Paraíba">Paraíba</option>';
                                    echo '          <option value="Paraná">Paraná</option>';
                                    echo '          <option value="Pernambuco">Pernambuco</option>';
                                    echo '          <option value="Piauí">Piauí</option>';
                                    echo '          <option value="Rio de Janeiro">Rio de Janeiro</option>';
                                    echo '          <option value="Rio Grande do Norte">Rio Grande do Norte</option>';
                                    echo '          <option value="Rio Grande do Sul">Rio Grande do Sul</option>';
                                    echo '          <option value="Rondônia">Rondônia</option>';
                                    echo '          <option value="Roraima">Roraima</option>';
                                    echo '          <option value="Santa Catarina">Santa Catarina</option>';
                                    echo '          <option value="São Paulo">São Paulo</option>';
                                    echo '          <option value="Sergipe">Sergipe</option>';
                                    echo '          <option value="Tocantins">Tocantins</option>';
                                    echo '      </select>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="mun_local_do_fato" class="form-label">Município:*</label>';
                                    echo '      <input type="text" name="mun_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="bairro_local_do_fato" class="form-label">Bairro:*</label>';
                                    echo '      <input type="text" name="bairro_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="log_local_do_fato" class="form-label">Logadouro:*</label>';
                                    echo '      <input type="text" name="log_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="comp_local_do_fato" class="form-label">Complemento:</label>';
                                    echo '      <input type="text" name="comp_local_do_fato" class="form-control w-100">';
                                    echo '  </div>';
                                    echo '</div>';
                                break;
                            // Escolha Local: Desaparecimento de Pessoas
                                case '7':
                                    break;
                            // Escolha Local: Acidente de Trânsito sem Vítimas
                                case '8':
                                    echo '<label for="local_do_fato" class="form-label">Local Fato:*</label>';
                                    echo '<select class="form-select w-100" name="local_do_fato" required>';
                                    echo '  <option selected disabled>Selecione</option>';
                                    echo '  <option value="Via Pública">Via Pública</option>';
                                    echo '  <option value="Garagem coletiva de prédio">Garagem coletiva de prédio</option>';
                                    echo '  <option value="Estacionamento com vigilância">Estacionamento com vigilância</option>';
                                    echo '  <option value="Estacionamento público">Estacionamento público</option>';
                                    echo '  <option value="Estacionamento particular">Estacionamento particular</option>';
                                    echo '  <option value="Garagem ou abrigo de residência">Garagem ou abrigo de residência</option>';
                                    echo '  <option value="Veículo em movimento">Veículo em movimento</option>';
                                    echo '  <option value="Outro Lugar">Outro Lugar</option>';
                                    echo '</select>';
                                // Pesquisar Local: Acidente de Trânsito sem Vítimas
                                    echo '<label for="informacoes-local" class="form-label"><strong>Informações Local do Fato:</strong></label>';
                                    echo '<div class="row" id="informacoes-local">';
                                    echo '  <div class="col">';
                                    echo '      <label for="cep_local_do_fato" class="form-label">CEP:*</label>';
                                    echo '      <input type="tel" name="cep_local_do_fato" class="form-control w-100" pattern="[0-9]{5}-[0-9]{3}" placeholder="Formato: 12345-123" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="nn_local_do_fato" class="form-label">Número:*</label>';
                                    echo '      <input type="num" name="nn_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="estado_local_do_fato" class="form-label">Estado (UF):*</label>';
                                    echo '      <select class="form-select w-100" name="estado_local_do_fato" required>';
                                    echo '          <option selected disabled>Selecione o Estado</option>';
                                    echo '          <option value="Acre">Acre</option>';
                                    echo '          <option value="Alagoas">Alagoas</option>';
                                    echo '          <option value="Amapá">Amapá</option>';
                                    echo '          <option value="Amazonas">Amazonas</option>';
                                    echo '          <option value="Bahia">Bahia</option>';
                                    echo '          <option value="Ceará">Ceará</option>';
                                    echo '          <option value="Distrito Federal">Distrito Federal</option>';
                                    echo '          <option value="Espírito Santo">Espírito Santo</option>';
                                    echo '          <option value="Goiás">Goiás</option>';
                                    echo '          <option value="Maranhão">Maranhão</option>';
                                    echo '          <option value="Mato Grosso">Mato Grosso</option>';
                                    echo '          <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>';
                                    echo '          <option value="Minas Gerais">Minas Gerais</option>';
                                    echo '          <option value="Pará">Pará</option>';
                                    echo '          <option value="Paraíba">Paraíba</option>';
                                    echo '          <option value="Paraná">Paraná</option>';
                                    echo '          <option value="Pernambuco">Pernambuco</option>';
                                    echo '          <option value="Piauí">Piauí</option>';
                                    echo '          <option value="Rio de Janeiro">Rio de Janeiro</option>';
                                    echo '          <option value="Rio Grande do Norte">Rio Grande do Norte</option>';
                                    echo '          <option value="Rio Grande do Sul">Rio Grande do Sul</option>';
                                    echo '          <option value="Rondônia">Rondônia</option>';
                                    echo '          <option value="Roraima">Roraima</option>';
                                    echo '          <option value="Santa Catarina">Santa Catarina</option>';
                                    echo '          <option value="São Paulo">São Paulo</option>';
                                    echo '          <option value="Sergipe">Sergipe</option>';
                                    echo '          <option value="Tocantins">Tocantins</option>';
                                    echo '      </select>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="mun_local_do_fato" class="form-label">Município:*</label>';
                                    echo '      <input type="text" name="mun_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="bairro_local_do_fato" class="form-label">Bairro:*</label>';
                                    echo '      <input type="text" name="bairro_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="log_local_do_fato" class="form-label">Logadouro:*</label>';
                                    echo '      <input type="text" name="log_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="comp_local_do_fato" class="form-label">Complemento:</label>';
                                    echo '      <input type="text" name="comp_local_do_fato" class="form-control w-100">';
                                    echo '  </div>';
                                    echo '</div>';
                                break;
                            // Escolha Local: Injúria, Calúnia ou Difamação
                                case '9':
                                    break;
                            // Escolha Local: Encontro de Pessoas
                                case '10':
                                    break;
                            // Escolha Local: Violência Doméstica contra Mulher
                                case '11':
                                // Pesquisar Local: Acidente de Trânsito sem Vítimas
                                    echo '<label for="informacoes-local" class="form-label"><strong>Informações Local do Fato:</strong></label>';
                                    echo '<div class="row" id="informacoes-local">';
                                    echo '  <div class="col">';
                                    echo '      <label for="cep_local_do_fato" class="form-label">CEP:*</label>';
                                    echo '      <input type="tel" name="cep_local_do_fato" class="form-control w-100" pattern="[0-9]{5}-[0-9]{3}" placeholder="Formato: 12345-123" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="nn_local_do_fato" class="form-label">Número:*</label>';
                                    echo '      <input type="num" name="nn_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="estado_local_do_fato" class="form-label">Estado (UF):*</label>';
                                    echo '      <select class="form-select w-100" name="estado_local_do_fato" required>';
                                    echo '      <select class="form-select w-100" name="estado_local_do_fato" required>';
                                    echo '          <option selected disabled>Selecione o Estado</option>';
                                    echo '          <option value="Acre">Acre</option>';
                                    echo '          <option value="Alagoas">Alagoas</option>';
                                    echo '          <option value="Amapá">Amapá</option>';
                                    echo '          <option value="Amazonas">Amazonas</option>';
                                    echo '          <option value="Bahia">Bahia</option>';
                                    echo '          <option value="Ceará">Ceará</option>';
                                    echo '          <option value="Distrito Federal">Distrito Federal</option>';
                                    echo '          <option value="Espírito Santo">Espírito Santo</option>';
                                    echo '          <option value="Goiás">Goiás</option>';
                                    echo '          <option value="Maranhão">Maranhão</option>';
                                    echo '          <option value="Mato Grosso">Mato Grosso</option>';
                                    echo '          <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>';
                                    echo '          <option value="Minas Gerais">Minas Gerais</option>';
                                    echo '          <option value="Pará">Pará</option>';
                                    echo '          <option value="Paraíba">Paraíba</option>';
                                    echo '          <option value="Paraná">Paraná</option>';
                                    echo '          <option value="Pernambuco">Pernambuco</option>';
                                    echo '          <option value="Piauí">Piauí</option>';
                                    echo '          <option value="Rio de Janeiro">Rio de Janeiro</option>';
                                    echo '          <option value="Rio Grande do Norte">Rio Grande do Norte</option>';
                                    echo '          <option value="Rio Grande do Sul">Rio Grande do Sul</option>';
                                    echo '          <option value="Rondônia">Rondônia</option>';
                                    echo '          <option value="Roraima">Roraima</option>';
                                    echo '          <option value="Santa Catarina">Santa Catarina</option>';
                                    echo '          <option value="São Paulo">São Paulo</option>';
                                    echo '          <option value="Sergipe">Sergipe</option>';
                                    echo '          <option value="Tocantins">Tocantins</option>';
                                    echo '      </select>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="mun_local_do_fato" class="form-label">Município:*</label>';
                                    echo '      <input type="text" name="mun_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="bairro_local_do_fato" class="form-label">Bairro:*</label>';
                                    echo '      <input type="text" name="bairro_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="log_local_do_fato" class="form-label">Logadouro:*</label>';
                                    echo '      <input type="text" name="log_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="comp_local_do_fato" class="form-label">Complemento:</label>';
                                    echo '      <input type="text" name="comp_local_do_fato" class="form-control w-100">';
                                    echo '  </div>';
                                    echo '</div>';
                                break;
                            // Escolha Local: Outras Ocorrências
                                case '12':
                                // Pesquisar Local: Outras Ocorrências
                                    echo '<label for="informacoes-local" class="form-label"><strong>Informações Local do Fato:</strong></label>';
                                    echo '<div class="row" id="informacoes-local">';
                                    echo '  <div class="col">';
                                    echo '      <label for="cep_local_do_fato" class="form-label">CEP:*</label>';
                                    echo '      <input type="tel" name="cep_local_do_fato" class="form-control w-100" pattern="[0-9]{5}-[0-9]{3}" placeholder="Formato: 12345-123" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="nn_local_do_fato" class="form-label">Número:*</label>';
                                    echo '      <input type="num" name="nn_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="estado_local_do_fato" class="form-label">Estado (UF):*</label>';
                                    echo '      <select class="form-select w-100" name="estado_local_do_fato" required>';
                                    echo '          <option selected disabled>Selecione o Estado</option>';
                                    echo '          <option value="Acre">Acre</option>';
                                    echo '          <option value="Alagoas">Alagoas</option>';
                                    echo '          <option value="Amapá">Amapá</option>';
                                    echo '          <option value="Amazonas">Amazonas</option>';
                                    echo '          <option value="Bahia">Bahia</option>';
                                    echo '          <option value="Ceará">Ceará</option>';
                                    echo '          <option value="Distrito Federal">Distrito Federal</option>';
                                    echo '          <option value="Espírito Santo">Espírito Santo</option>';
                                    echo '          <option value="Goiás">Goiás</option>';
                                    echo '          <option value="Maranhão">Maranhão</option>';
                                    echo '          <option value="Mato Grosso">Mato Grosso</option>';
                                    echo '          <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>';
                                    echo '          <option value="Minas Gerais">Minas Gerais</option>';
                                    echo '          <option value="Pará">Pará</option>';
                                    echo '          <option value="Paraíba">Paraíba</option>';
                                    echo '          <option value="Paraná">Paraná</option>';
                                    echo '          <option value="Pernambuco">Pernambuco</option>';
                                    echo '          <option value="Piauí">Piauí</option>';
                                    echo '          <option value="Rio de Janeiro">Rio de Janeiro</option>';
                                    echo '          <option value="Rio Grande do Norte">Rio Grande do Norte</option>';
                                    echo '          <option value="Rio Grande do Sul">Rio Grande do Sul</option>';
                                    echo '          <option value="Rondônia">Rondônia</option>';
                                    echo '          <option value="Roraima">Roraima</option>';
                                    echo '          <option value="Santa Catarina">Santa Catarina</option>';
                                    echo '          <option value="São Paulo">São Paulo</option>';
                                    echo '          <option value="Sergipe">Sergipe</option>';
                                    echo '          <option value="Tocantins">Tocantins</option>';
                                    echo '      </select>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="mun_local_do_fato" class="form-label">Município:*</label>';
                                    echo '      <input type="text" name="mun_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="bairro_local_do_fato" class="form-label">Bairro:*</label>';
                                    echo '      <input type="text" name="bairro_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '</div>';
                                    echo '<div class="row">';
                                    echo '  <div class="col">';
                                    echo '      <label for="log_local_do_fato" class="form-label">Logadouro:*</label>';
                                    echo '      <input type="text" name="log_local_do_fato" class="form-control w-100" required>';
                                    echo '  </div>';
                                    echo '  <div class="col">';
                                    echo '      <label for="comp_local_do_fato" class="form-label">Complemento:</label>';
                                    echo '      <input type="text" name="comp_local_do_fato" class="form-control w-100">';
                                    echo '  </div>';
                                    echo '</div>';
                                break;
                            }
                        }
                    ?>
            </div>
            <a href="./questionario_boletim.php" class="btn btn-danger">Voltar</a>
            <button type="submit" class="btn btn-primary">Próximo</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>