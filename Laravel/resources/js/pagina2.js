const horarios = ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00"];
const dias = ["segunda", "terca", "quarta", "quinta", "sexta", "sabado", "domingo"];
const tabela = document.getElementById("tabela-corpo");

const disponibilidade = {
  manicure: {
    nome: "Bruna",
    diasDisponiveis: ["segunda", "quarta", "sexta"],
    horarios: ["11:00", "14:00", "15:00"]
  },
  depilacao: {
    nome: "Maria",
    diasDisponiveis: ["terça", "quinta"],
    horarios: ["12:00", "13:00"]
  },
  cabelo: {
    nome: "João",
    diasDisponiveis: ["segunda", "terça", "quarta", "quinta", "sexta"],
    horarios: ["13:00", "14:00", "15:00"]
  },
  maquiagem: {
    nome: "Vitória",
    diasDisponiveis: ["sexta", "sabado"],
    horarios: ["12:00", "16:00"]
  },
  sombrancelha: {
    nome: "Pedro",
    diasDisponiveis: ["sabado", "domingo"],
    horarios: ["11:00", "13:00", "16:00"]
  }
};

function gerarTabela() {
  tabela.innerHTML = "";
  for (let hora of horarios) {
    const tr = document.createElement("tr");
    const tdHora = document.createElement("td");
    tdHora.textContent = hora;
    tr.appendChild(tdHora);
    for (let dia of dias) {
      const td = document.createElement("td");
      td.id = `celula-${hora}-${dia}`;
      tr.appendChild(td);
    }
    tabela.appendChild(tr);
  }
}

function atualizarAgenda(servico) {
  gerarTabela();
  const dados = disponibilidade[servico];
  if (!dados) return;
  for (let hora of horarios) {
    for (let dia of dias) {
      const cel = document.getElementById(`celula-${hora}-${dia}`);
      cel.className = "";
      cel.innerHTML = "";
      if (dados.diasDisponiveis.includes(dia) && dados.horarios.includes(hora)) {
        cel.classList.add("disponivel");
        const btn = document.createElement("button");
        btn.className = "slot-btn";
        btn.textContent = dados.nome;
        cel.appendChild(btn);
      } else {
        cel.classList.add("indisponivel");
      }
    }
  }
}

document.addEventListener("DOMContentLoaded", () => {
  gerarTabela();
  document.getElementById("buscar").addEventListener("change", e => {
    atualizarAgenda(e.target.value);
  });
  tabela.addEventListener("click", e => {
    if (!e.target.classList.contains("slot-btn")) return;
    tabela.querySelectorAll(".slot-btn.selecionado").forEach(b => {
      b.classList.remove("selecionado");
    });
    e.target.classList.add("selecionado");
  });
  document.querySelector(".concluir").addEventListener("click", () => {
    const sel = tabela.querySelector(".slot-btn.selecionado");
    if (sel) {
      alert(`✅ Agendamento com ${sel.textContent} concluído!`);
    } else {
      alert("⚠️ Por favor, clique em um nome para selecionar.");
    }
  });
});
