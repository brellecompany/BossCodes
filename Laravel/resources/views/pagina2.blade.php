<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agendamento</title>
  @vite(['resources/css/pagina2.css', 'resources/js/pagina2.js'])
</head>
<body>
  <header class="header">
    <h1 class="titulo-agendamento">AGENDAMENTO <span>📅</span></h1>
  </header>

  <main class="container">
    <div class="filtros">
      <label for="buscar">Procurar por serviço:</label>
      <select id="buscar">
        <option value="">Selecione...</option>
        <option value="manicure">Manicure</option>
        <option value="depilacao">Depilação</option>
        <option value="cabelo">Cabelo</option>
        <option value="maquiagem">Maquiagem</option>
        <option value="sombrancelha">Sobrancelha</option>
      </select>
    </div>

    <div class="botoes">
      <button class="btn anterior">Anterior</button>
      <button class="btn próximo">Próximo</button>
    </div>

    <table class="agenda">
      <thead>
        <tr>
          <th> </th>
          <th>SEGUNDA</th>
          <th>TERÇA</th>
          <th>QUARTA</th>
          <th>QUINTA</th>
          <th>SEXTA</th>
          <th>SÁBADO</th>
          <th>DOMINGO</th>
        </tr>
      </thead>
      <tbody id="tabela-corpo">
        <!-- JS -->
      </tbody>
    </table>
    <button class="btn concluir">CONCLUÍDO</button>

  </main>

  <script src="script.js"></script>
</body>
</html>