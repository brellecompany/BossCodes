<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>1° Tela</title>
</head>
<body>
   <header>
    <button class="ui icon button menu-button"> 
        <i class="bars icon"></i>
    </button>
    <h1 id="calender">Calendário</h1>
    <button id="theme-toggle" class="ui icon button theme-toggle-button">
        <i class="adjust icon"></i>
    </button>
    </button>
   </header>
<table>
 <thead>
      <tr>
            <th>📅 Data</th>
            <th>⏰ Hora</th>
            <th>👩 Nome do cliente</th>
            <th>💇‍♀️ Tipo de procedimento</th>
      </tr>
 </thead>
 <tbody>
      <tr>
            <td>10/04/2025</td>
            <td>09:00</td>
            <td>Ana Souza</td>
            <td>Corte + Escova</td>
      </tr>
      <tr>
            <td>12/04/2025</td>
            <td>14:30</td>
            <td>Bruna Lima</td>
            <td>Manicure + Pedicure</td>
      </tr>
      <tr>
            <td>15/04/2025</td>
            <td>11:00</td>
            <td>Carla Mendes</td>
            <td>Hidratação + Progressiva</td>
      </tr>
      <tr>
            <td>18/04/2025</td>
            <td>16:00</td>
            <td>Daniela Castro</td>
            <td>Coloração + Maquiagem</td>
      </tr>
 </tbody>
</table>
   <script>
       const toggleButton = document.getElementById('theme-toggle');
       toggleButton.addEventListener('click', () => {
           document.body.classList.toggle('dark-mode');
       });
   </script>
</body>
</html>