// === MENU E LOGOUT (Simulação de funcionalidade) ===
document.querySelectorAll('[aria-label="Menu"]').forEach(menuBtn => {
  menuBtn.addEventListener('click', () => {
    alert("Menu clicado (simulação)");
  });
});

document.querySelectorAll('[aria-label="Logout"]').forEach(logoutBtn => {
  logoutBtn.addEventListener('click', () => {
    alert("Logout clicado (simulação)");
  });
});

// === BARRA DE PESQUISA FUNCIONAL ===
const searchInput = document.querySelector('#search');
if (searchInput) {
  searchInput.addEventListener('input', () => {
    const termo = searchInput.value.toLowerCase();
    document.querySelectorAll("tbody tr").forEach(row => {
      const texto = row.innerText.toLowerCase();
      row.style.display = texto.includes(termo) ? "" : "none";
    });
  });
}

// === BOTÕES DE AÇÃO (OLHO, LÁPIS, LIXEIRA) ===
document.querySelectorAll('[aria-label="Visualizar"]').forEach(btn => {
  btn.addEventListener('click', () => {
    alert("Visualizar item (simulação)");
  });
});

document.querySelectorAll('[aria-label="Editar"]').forEach(btn => {
  btn.addEventListener('click', () => {
    alert("Editar item (simulação)");
  });
});

document.querySelectorAll('[aria-label="Excluir"]').forEach(btn => {
  btn.addEventListener('click', () => {
    const confirmar = confirm("Tem certeza que deseja excluir?");
    if (confirmar) alert("Item excluído (simulação)");
  });
});

// === BOTÃO DE CHAT ===
document.querySelectorAll('[aria-label="Chat"]').forEach(btn => {
  btn.addEventListener('click', () => {
    alert("Abrir chat (simulação)");
  });
});

// === REDIRECIONAR PARA FORMULÁRIO ===
const irFormBtn = document.querySelector('[data-ir-formulario]');
if (irFormBtn) {
  irFormBtn.addEventListener('click', () => {
    window.location.href = "formulario.html";
  });
}

// === PREENCHER SELECTS DO FORMULÁRIO AUTOMATICAMENTE ===
const profissionais = ["Larissa", "Rafaela", "Luana", "Bruna"];
const procedimentos = ["Manicure", "Cabeleireira", "Pedicure", "Maquiadora"];

function preencherSelect(id, valores) {
  const select = document.querySelector(id);
  if (select) {
    select.innerHTML = '<option value="">Selecione</option>';
    valores.forEach(valor => {
      const option = document.createElement("option");
      option.value = valor;
      option.textContent = valor;
      select.appendChild(option);
    });
  }
}

preencherSelect('[aria-label="Profissional"]', profissionais);
preencherSelect('[aria-label="Procedimento"]', procedimentos);
