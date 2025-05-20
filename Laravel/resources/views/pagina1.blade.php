<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aura's Beauty</title>
    @vite(['resources/css/pagina1.css'])
</head>
<body>
  <header>
    <nav class="menu">
      <a href="#" class="menu-link">
        <img src="{{ asset('storage/img/logo_login.png') }}" alt="Ícone Login" class="icon-menu" />
        LOGIN
      </a>
      <a href="#" class="menu-link">
        <img src="{{ asset('storage/img/logo_cadastro.png') }}" alt="Ícone Cadastro" class="icon-menu" />
        CADASTRO
      </a>
      <a href="#" class="menu-link">SOBRE</a>
    </nav>
  </header>

  <main class="container">
    <section class="logo-area">
      <img src="{{ asset('storage/img/logo.png') }}"  alt="Logo Aura's Beauty" class="logo" />
    </section>
    <h2 class="slogan">
      Experimente o poder da organização na palma da sua mão.
    </h2>
    <form action="/pagina2" method="POST">
        @csrf
        <button class="cta-button">VENHA CONHECER NOSSOS SERVIÇOS</button>
    </form>
  </main>

  <script src="script.js"></script>

</body>
</html>
