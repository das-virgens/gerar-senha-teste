
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="style/gerar.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Senha Coordenadores</title>
</head>
<body>
    <div class="all-container" style="width: 100%;
    height: 100vh;">
        <img src="images/materials/vemporaqui.svg" alt="" id="vempor">
        <img src="images/materials/circle 1.svg" alt="" id="points">
        <div class="container">
            <header>
                <div class="header-left">
                    <div class="left-one">
                        <img src="images/materials/vem-por-aqui-2.gif" alt="">
                    </div>
                    <div class="left-two">
                        <h1>Coordenação</h1>
                        <span>Clique para gerar sua senha para falar com o seu</span>
                    </div>
                </div>
                <div class="header-right">
                    <button id="verAgenda">
                        <img src="images/materials/eye.svg" alt="">
                        <p id="showAgenda">VER AGENDA</p>
                    </button>
                    <button id="sala">
                        <img src="images/materials/book.svg" alt="">
                        ENCONTRE SUA SALA
                    </button>
                    <button id="painelweb">
                    <img src="images/materials/eye.svg" alt="">
                        ACOMPANHE VIA ONLINE
                    </button>
                </div>
            </header>
            <section>
               <div id="items-container">
               <button class="itemCard" id="anaCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/Ana.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="ana-titulo">Ana Patricia P. Queiroz</h2>
                      <ul><li>FARMÁCIA - PRESENCIAL</li><li>CST EM ESTÉTICA E COSMÉTICOS</li></ul></div>
                  <div class="status"><div class="bolinha"></div><p id="anaCheck-disponibilidade">DISPONÍVEL</p></div>
              </button>
              <button class="itemCard" id="barbaraCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/Barbara.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="barbara-titulo">Barbara Maria Cavalcanti</h2>
                      <ul><li>ARQUITETURA E URBANISMO - PRESENCIAL</li></ul></div>
                  <div class="status"><div class="bolinha"></div><p id="barbaraCheck-disponibilidade">DISPONÍVEL</p></div>
              </button>

              <button class="itemCard" id="danielaCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/Daniela2.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="daniela-titulo">Daniela Simoes</h2>
                      <ul><li>PSICOLOGIA - PRESENCIAL</li><li>JORNALISMO</li><li>SERVIÇO SOCIAL</li></ul></div>
                  <div class="status"><div class="bolinha"></div><p id="danielaCheck-disponibilidade">DISPONÍVEL</p></div>
              </button>

              <button class="itemCard" id="elisauraCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/Elisaura.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="elisaura-titulo">Elisaura C.</h2>
                      <ul><li>ODONTOLOGIA - PRESENCIAL</li></ul></div>
                  <div class="status"><div class="bolinha"></div><p id="elisauraCheck-disponibilidade">DISPONÍVEL</p></div>
              </button>

              <button class="itemCard" id="emiraciCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/emiraci.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="emiraci-titulo">Emiraci B.</h2>
                      <ul><li>ENSINO A DISTÂNCIA</li></ul></div>
                  <div class="status"><div class="bolinha"></div><p id="emiraciCheck-disponibilidade">DISPONÍVEL</p></div>
              </button>

              <button class="itemCard" id="joseEduardoCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/default.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="joseEduardo-titulo">Jose Eduardo Alves</h2>
                      <ul><li>ENGENHARIAS - PRESENCIAL</li><li>ADMINISTRAÇÃO</li><li>CIÊNCIAS CONTÁBEIS</li><li>CST RECURSOS HUMANOS</li></ul></div>
                  <div class="status"><div class="bolinha"></div><p id="joseEduardoCheck-disponibilidade">DISPONÍVEL</p></div>
              </button>

              <button class="itemCard" id="joseVicenteCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/default.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="joseVicente-titulo">Jose Vicente Cardoso</h2>
                      <ul><li>DIREITO - PRESENCIAL</li></ul></div>
                  <div class="status"><div class="bolinha"></div><p id="joseVicenteCheck-disponibilidade">DISPONÍVEL</p></div>
              </button>

              <button class="itemCard" id="kellyCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/Kelly.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="kelly-titulo">Kelly Cruz </h2>
                      <ul><li>ENFERMAGEM - PRESENCIAL</li></ul></div>
                  <div class="status"><div class="bolinha"></div><p id="kellyCheck-disponibilidade">DISPONÍVEL</p></div>
              </button>

              <button class="itemCard" id="maiaraCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/Maiara.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="maiara-titulo">Maiara Goes L.</h2>
                      <ul><li>FISIOTERAPIA - PRESENCIAL</li><li>EDUCAÇÃO FÍSICA - PRESENCIAL</li></ul></div>
                  <div class="status"><div class="bolinha"></div><p id="maiaraCheck-disponibilidade">DISPONÍVEL</p></div>
              </button>

              <button class="itemCard" id="tarcisioCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/Tarcisio.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="tarcisio-titulo">Tarcisio Santana</h2>
                      <ul><li>NUTRIÇÃO - PRESENCIAL</li></ul></div>
                  <div class="status"><div class="bolinha"></div><p id="tarcisioCheck-disponibilidade">DISPONÍVEL</p></div>
              </button>

              <button class="itemCard" id="laisCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/Lais.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="lais-titulo">Lais Santos</h2>
                      <ul><li>TÉCNICO EM ENFERMAGEM - PRESENCIAL</li></ul></div>
                  <div class="status"><div class="bolinha"></div><p id="laisCheck-disponibilidade">DISPONÍVEL</p></div>
              </button>

              <button class="itemCard" id="mateusCheck" style="filter: saturate(100%) opacity(100%); cursor: pointer;">
                  <div class="profileImage"><img class="imagemCoord" src="images/Mateus.png"><div class="mascara"></div></div>
                  <div id='infoCard'><h2 class="mateus-titulo">Mateus Eca</h2></div>
                  <div class="status"><div class="bolinha"></div><p id="mateusCheck-disponibilidade">DISPONÍVEL</p></div>
              </button> 
              </div>
            </section>
            <footer>
                <span id="vemporaqui"></span>
            </footer>
        </div>
    </div>
    <div class="containerSenha" style="display: none;">
        <img id="logotype-recibo" src="images/materials/logo-preta.svg" alt="">
        <h1 id="welcome">BEM-VINDO(A)</h1>
        <h1 id="atendimento">ATENDIMENTO NORMAL</h1>
        <h2 id="nomeDoCoordenador">NOME</h2>
        <h1 id="identificadorSenha">01</h1>
        <h1 id="oriente">Oriente-se pelo Painel</h1>
        <h3 id="dateHours">Data: 11/06/2024 <br> Hora: 18:21:00</h3>
        <img id="footer-recibo" src="images/materials/footer-recibo.svg" alt="">
    </div>
    <div class="containerAgenda" style="display: none;">
        <button id="closeAgenda">Fechar</button>
        <img id="bannerProfs" src="images/bannerProfs.png" alt="">
    </div>
    <div class="containerQrCode" style="display: none;">
        <button id="closeQrCode">Fechar</button>
        <img id="bannerProfs" src="images/encontre.png" alt="">
    </div>
    <div class="containerQrCode2" style="display: none;">
        <button id="closeQrCode2">Fechar</button>
        <img id="bannerProfs" src="images/encontre.png" alt="">
    </div>
</body>
<script src="javascript/cadastro.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
function executeSpecificFunction(username) {
    var nome = username
    zerarSenha(nome)
}

function checkReset() {
    $.ajax({
        url: 'check_reset.php',
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            if(response.username) {
                executeSpecificFunction(response.username);
            }
        },
        error: function(xhr, status, error) {
            console.error('Erro na solicitação AJAX:', status, error);
            console.log(xhr.responseText); 
        }
    });
}

$(document).ready(function() {
    checkReset();
    setInterval(checkReset, 1000);
});

</script>
<script>
var coord1Disponibilidade;
var coord2Disponibilidade;
var coord3Disponibilidade;
var coord4Disponibilidade;
var coord5Disponibilidade;
var coord6Disponibilidade;
var coord7Disponibilidade;
var coord8Disponibilidade;
var coord9Disponibilidade;
var coord10Disponibilidade;
var coord11Disponibilidade;
var coord12Disponibilidade;

    var disponibilidadesCoordenadores = {};
    var LimiteCoordenadores = {};

    function verificarDisponibilidade() {
        $.ajax({
            url: 'verificar_disponibilidade.php',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $.each(response, function(nome, disponibilidade) {
                    disponibilidadesCoordenadores[nome] = disponibilidade;
                });
                coord1Disponibilidade = disponibilidadesCoordenadores['ana'];
                coord2Disponibilidade = disponibilidadesCoordenadores['barbara'];
                coord3Disponibilidade = disponibilidadesCoordenadores['daniela'];
                coord4Disponibilidade = disponibilidadesCoordenadores['elisaura'];
                coord5Disponibilidade = disponibilidadesCoordenadores['emiraci'];
                coord6Disponibilidade = disponibilidadesCoordenadores['joseeduardo'];
                coord7Disponibilidade = disponibilidadesCoordenadores['josevicente'];
                coord8Disponibilidade = disponibilidadesCoordenadores['kelly'];
                coord9Disponibilidade = disponibilidadesCoordenadores['maiara'];
                coord10Disponibilidade = disponibilidadesCoordenadores['tarcisio'];
                coord11Disponibilidade = disponibilidadesCoordenadores['lais'];
                coord12Disponibilidade = disponibilidadesCoordenadores['mateus'];
            },
            error: function(xhr, status, error) {
                console.error('Erro ao verificar a disponibilidade:', error);
            }

        });
    }
function verificarLimite() {
    $.ajax({
        url: 'verificar_limite.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            const LimiteCoordenadores = {};

            $.each(response, function(nome, limite) {
                LimiteCoordenadores[nome] = limite;
            });

            function inicializarValorLocalStorage(chave, valorPadrao) {
                if (valorPadrao !== undefined && valorPadrao !== null) {
                    if (!localStorage.getItem(chave)) {
                        localStorage.setItem(chave, valorPadrao.toString());
                    }
                }
            }


            function atualizarValor(elemento, nomeCoordenador, novoValor) {
                const valorAtualLocalStorage = localStorage.getItem(nomeCoordenador + 'Limite');
                if (novoValor.toString() !== valorAtualLocalStorage) {
                    elemento.setAttribute('data-value', novoValor);
                    localStorage.setItem(nomeCoordenador + 'Limite', novoValor.toString());
                }
            }

            const coordenadores = {
                ana: 'ana-titulo',
                barbara: 'barbara-titulo',
                daniela: 'daniela-titulo',
                elisaura: 'elisaura-titulo',
                emiraci: 'emiraci-titulo',
                joseEduardo: 'joseEduardo-titulo',
                joseVicente: 'joseVicente-titulo',
                kelly: 'kelly-titulo',
                maiara: 'maiara-titulo',
                tarcisio: 'tarcisio-titulo',
                mateus: 'mateus-titulo',
            };

            Object.keys(coordenadores).forEach(function(nome) {
                const classeTitulo = coordenadores[nome];
                inicializarValorLocalStorage(nome + 'Limite', LimiteCoordenadores[nome]);

                const elementosTitulo = document.querySelectorAll('.' + classeTitulo);

                elementosTitulo.forEach(function(elemento) {
                    const valorLocalStorage = localStorage.getItem(nome + 'Limite');
                    elemento.setAttribute('data-value', valorLocalStorage);
                });

                let novoValorParaArmazenar = LimiteCoordenadores[nome];
                if (!isNaN(novoValorParaArmazenar)) {
                    novoValorParaArmazenar = parseInt(novoValorParaArmazenar); 
                } else {
                    novoValorParaArmazenar = 0; 
                }

                const primeiroElemento = document.querySelector('.' + classeTitulo);
                atualizarValor(primeiroElemento, nome, novoValorParaArmazenar);
                const valorAtualizado = localStorage.getItem(nome + 'Limite');
            });

        },
        error: function(xhr, status, error) {
            console.error("Erro ao obter os limites: ", error);
        }
    });
}

setInterval(verificarLimite, 5000);
setInterval(verificarDisponibilidade, 100);
const containerGeral = document.querySelector('.all-container');
const containerSenha = document.querySelector('.containerSenha');
const containerCommand = document.querySelector('.containerCommand');
const containerExtrato = document.querySelector('.containerExtrato');
const dateHours = document.getElementById('dateHours');
const nomeDoCoordenador = document.getElementById('nomeDoCoordenador');
const identificadorSenha = document.getElementById('identificadorSenha');
const botoesSenha = [
  {
    contador: 1,
    botao: document.querySelector('#anaCheck'),
    coordenador: "ana"
  },
  {
    contador: 1,
    botao: document.querySelector('#barbaraCheck'),
    coordenador: "barbara"
  },
  {
    contador: 1,
    botao: document.querySelector('#danielaCheck'),
    coordenador: "daniela"
  },
  {
    contador: 1,
    botao: document.querySelector('#elisauraCheck'),
    coordenador: "elisaura"
  },
  {
    contador: 1,
    botao: document.querySelector('#emiraciCheck'),
    coordenador: "emiraci"
  },
  {
    contador: 1,
    botao: document.querySelector('#joseEduardoCheck'),
    coordenador: "joseeduardo"
  },
  {
    contador: 1,
    botao: document.querySelector('#joseVicenteCheck'),
    coordenador: "joaovicente"
  },
  {
    contador: 1,
    botao: document.querySelector('#maiaraCheck'),
    coordenador: "maiara"
  },
  {
    contador: 1,
    botao: document.querySelector('#tarcisioCheck'),
    coordenador: "tarcisio"
  },
  {
    contador: 1,
    botao: document.querySelector('#laisCheck'),
    coordenador: "lais"
  },
  {
    contador: 1,
    botao: document.querySelector('#mateusCheck'),
    coordenador: "mateus"
  },
  {
    contador: 1,
    botao: document.querySelector('#kellyCheck'),
    coordenador: "kelly"
  }
];

function obterLimiteMaximo(coordenador) {
  const limiteLocalStorage = localStorage.getItem(coordenador + 'Limite');
  return limiteLocalStorage ? parseInt(limiteLocalStorage) : 10;
}

document.addEventListener('DOMContentLoaded', () => {
  botoesSenha.forEach(botaoInfo => {
    botaoInfo.botao.addEventListener('click', () => {
      const limiteMaximo = obterLimiteMaximo(botaoInfo.coordenador);
      if (botaoInfo.contador <= limiteMaximo) {
        const numeroSenha = botaoInfo.contador;
        nomeDoCoordenador.innerHTML = botaoInfo.coordenador;
        identificadorSenha.innerHTML = numeroSenha < 10 ? "0" + numeroSenha : numeroSenha;
        gerarSenha(botaoInfo.coordenador, numeroSenha);
        containerGeral.style.display = 'none';
        containerSenha.style.display = 'flex';
        window.print();
        setTimeout(() => {
          containerGeral.style.display = 'flex';
          containerSenha.style.display = 'none';
        }, 500);
        botaoInfo.contador++;
      } else {
        alert("Senhas encerradas para o coordenador(a) " + botaoInfo.coordenador + ".");
      }
    });
  });
});

function salvarContador(coordenador, contador) {
  localStorage.setItem(coordenador + "Contador", contador);
}

function carregarContador(coordenador) {
  const contador = localStorage.getItem(coordenador + "Contador");
  return contador ? parseInt(contador) : 1;
}


function gerarSenha(nome, numeroSenha) {
  var senha = numeroSenha;
  var coordenador = nome;

  fetch("salvar_senha.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: "senha=" + senha + "&coordenador=" + coordenador
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Failed to fetch');
    }
    return response.text();
  })
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error('Error:', error);
  });

  salvarContador(nome, numeroSenha + 1);
}


botoesSenha.forEach(botaoInfo => {
  botaoInfo.contador = carregarContador(botaoInfo.coordenador);
});



document.addEventListener("keydown", function(event) {
  if (event.keyCode === 33) {
    zerarSenha();
  }
});
document.addEventListener("keydown", function(event) {
  if (event.keyCode === 33) {
    zerarSenha();
  }
});
function getTimeUntilNextRun() {
    const now = new Date();
    const nextRun = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 21, 40, 0, 0);

    if (now > nextRun) {
        nextRun.setDate(nextRun.getDate() + 1);
    }

    return nextRun - now;
}

function scheduleDailyExecution() {
    const timeUntilNextRun = getTimeUntilNextRun();
    setTimeout(() => {
        zerarSenha();
        setInterval(zerarSenha, 24 * 60 * 60 * 1000); 
    }, timeUntilNextRun);
}

scheduleDailyExecution();
function zerarSenha(nome = null) {
  if (nome) {
    localStorage.removeItem(nome + "Contador");
    const botaoInfo = botoesSenha.find(botao => botao.coordenador === nome);
    if (botaoInfo) {
      botaoInfo.contador = 1;
    }
  } else {
    localStorage.removeItem("numeroSenha");
    botoesSenha.forEach(botaoInfo => {
      botaoInfo.contador = 1;
    });
  }

  var xhr = new XMLHttpRequest();
  xhr.open("GET", "zerar_senha.php", true);
  xhr.send();

  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
}





setInterval(() => {
  const now = new Date();
  const year = now.getFullYear().toString().padStart(4, '0');
  const month = (now.getMonth() + 1).toString().padStart(2, '0');
  const day = now.getDate().toString().padStart(2, '0');
  const hours = now.getHours().toString().padStart(2, '0');
  const minutes = now.getMinutes().toString().padStart(2, '0');
  const seconds = now.getSeconds().toString().padStart(2, '0');
  const milliseconds = now.getMilliseconds().toString().padStart(3, '0');
  const formattedDate = `${day}/${month}/${year}`;
  const formattedTime = `${hours}:${minutes}`;
  dateHours.innerHTML = `Data de Emissâo: ${formattedDate} <br> Hora de Emissão: ${formattedTime}`;
}, 1);


setInterval(() => {
  function configurarCard(disponibilidade, card, horariosAtendimento) {
    const diaAtual = new Date().getDay();

    if (diaAtual < horariosAtendimento.length) {
      const horarioDiaAtual = horariosAtendimento[diaAtual];

      if (horarioDiaAtual !== null) {
        const { inicio, fim } = horarioDiaAtual;

        const horaAtual = new Date().getHours();
        const minutosAtual = new Date().getMinutes();

        const [inicioHora, inicioMinutos] = inicio.split(":");
        const [fimHora, fimMinutos] = fim.split(":");

        const horarioInicioAtendimento = new Date();
        horarioInicioAtendimento.setHours(parseInt(inicioHora));
        horarioInicioAtendimento.setMinutes(parseInt(inicioMinutos));

        const horarioFimAtendimento = new Date();
        horarioFimAtendimento.setHours(parseInt(fimHora));
        horarioFimAtendimento.setMinutes(parseInt(fimMinutos));

        const horarioAtual = new Date();
        horarioAtual.setHours(horaAtual);
        horarioAtual.setMinutes(minutosAtual);

        if (disponibilidade == 1 || disponibilidade == null) {
          if (horarioAtual >= horarioInicioAtendimento && horarioAtual <= horarioFimAtendimento) {
            card.style.opacity = '1';
            card.style.filter = "saturate(100%) opacity(100%)";
            card.style.pointerEvents = 'auto';
            card.style.background = '#FF2800';
          } else {
            card.style.filter = "saturate(0%) opacity(30%)";
            card.style.transition = "0.3s ease-in-out";
            card.style.opacity = '0.5';
            card.style.pointerEvents = 'none';
          }
        } else {
          card.style.filter = "saturate(0%) opacity(30%)";
            card.style.transition = "0.3s ease-in-out";
            card.style.opacity = '0.5';
            card.style.pointerEvents = 'none';
        }
      }
    }
  }

  const cardCoord1 = document.querySelector('#anaCheck');
  obterHorarios('ana').then((horariosCoord1) => {
  const horariosAtendimentoCoord1 = [
      null, 
      { inicio: horariosCoord1.segunda_inicio, fim: horariosCoord1.segunda_fim }, 
      { inicio: horariosCoord1.terca_inicio, fim: horariosCoord1.terca_fim }, 
      { inicio: horariosCoord1.quarta_inicio, fim: horariosCoord1.quarta_fim }, 
      { inicio: horariosCoord1.quinta_inicio, fim: horariosCoord1.quinta_fim }, 
      { inicio: horariosCoord1.sexta_inicio, fim: horariosCoord1.sexta_fim }, 
      null 
  ];
  configurarCard(coord1Disponibilidade, cardCoord1, horariosAtendimentoCoord1);
  });
   const cardCoord2 = document.querySelector('#barbaraCheck');
  obterHorarios('barbara').then((horariosCoord2) => {
  const horariosAtendimentoCoord2 = [
      null, 
      { inicio: horariosCoord2.segunda_inicio, fim: horariosCoord2.segunda_fim }, 
      { inicio: horariosCoord2.terca_inicio, fim: horariosCoord2.terca_fim }, 
      { inicio: horariosCoord2.quarta_inicio, fim: horariosCoord2.quarta_fim }, 
      { inicio: horariosCoord2.quinta_inicio, fim: horariosCoord2.quinta_fim }, 
      { inicio: horariosCoord2.sexta_inicio, fim: horariosCoord2.sexta_fim }, 
      null 
  ];
  configurarCard(coord2Disponibilidade, cardCoord2, horariosAtendimentoCoord2);
  });
  const cardCoord3 = document.querySelector('#danielaCheck');
  obterHorarios('daniela').then((horariosCoord3) => {
  const horariosAtendimentoCoord3 = [
      null, 
      { inicio: horariosCoord3.segunda_inicio, fim: horariosCoord3.segunda_fim }, 
      { inicio: horariosCoord3.terca_inicio, fim: horariosCoord3.terca_fim }, 
      { inicio: horariosCoord3.quarta_inicio, fim: horariosCoord3.quarta_fim }, 
      { inicio: horariosCoord3.quinta_inicio, fim: horariosCoord3.quinta_fim }, 
      { inicio: horariosCoord3.sexta_inicio, fim: horariosCoord3.sexta_fim }, 
      null 
  ];
  configurarCard(coord3Disponibilidade, cardCoord3 , horariosAtendimentoCoord3);
  });
  const cardCoord4 = document.querySelector('#elisauraCheck');
  obterHorarios('elisaura').then((horariosCoord4) => {
  const horariosAtendimentoCoord4 = [
      null, 
      { inicio: horariosCoord4.segunda_inicio, fim: horariosCoord4.segunda_fim }, 
      { inicio: horariosCoord4.terca_inicio, fim: horariosCoord4.terca_fim }, 
      { inicio: horariosCoord4.quarta_inicio, fim: horariosCoord4.quarta_fim }, 
      { inicio: horariosCoord4.quinta_inicio, fim: horariosCoord4.quinta_fim }, 
      { inicio: horariosCoord4.sexta_inicio, fim: horariosCoord4.sexta_fim }, 
      null 
  ];
  configurarCard(coord4Disponibilidade, cardCoord4 , horariosAtendimentoCoord4);
  });
  const cardCoord5 = document.querySelector('#emiraciCheck');
  obterHorarios('emiraci').then((horariosCoord5) => {
  const horariosAtendimentoCoord5 = [
      null, 
      { inicio: horariosCoord5.segunda_inicio, fim: horariosCoord5.segunda_fim }, 
      { inicio: horariosCoord5.terca_inicio, fim: horariosCoord5.terca_fim }, 
      { inicio: horariosCoord5.quarta_inicio, fim: horariosCoord5.quarta_fim }, 
      { inicio: horariosCoord5.quinta_inicio, fim: horariosCoord5.quinta_fim }, 
      { inicio: horariosCoord5.sexta_inicio, fim: horariosCoord5.sexta_fim }, 
      null 
  ];
  configurarCard(coord5Disponibilidade, cardCoord5 , horariosAtendimentoCoord5);
  });
  const cardCoord6 = document.querySelector('#joseEduardoCheck');
  obterHorarios('joseeduardo').then((horariosCoord6) => {
  const horariosAtendimentoCoord6 = [
      null, 
      { inicio: horariosCoord6.segunda_inicio, fim: horariosCoord6.segunda_fim }, 
      { inicio: horariosCoord6.terca_inicio, fim: horariosCoord6.terca_fim }, 
      { inicio: horariosCoord6.quarta_inicio, fim: horariosCoord6.quarta_fim }, 
      { inicio: horariosCoord6.quinta_inicio, fim: horariosCoord6.quinta_fim }, 
      { inicio: horariosCoord6.sexta_inicio, fim: horariosCoord6.sexta_fim }, 
      null 
  ];
  configurarCard(coord6Disponibilidade, cardCoord6 , horariosAtendimentoCoord6);
  });
  const cardCoord7 = document.querySelector('#joseVicenteCheck');
  obterHorarios('josevicente').then((horariosCoord7) => {
  const horariosAtendimentoCoord7 = [
      null, 
      { inicio: horariosCoord7.segunda_inicio, fim: horariosCoord7.segunda_fim }, 
      { inicio: horariosCoord7.terca_inicio, fim: horariosCoord7.terca_fim }, 
      { inicio: horariosCoord7.quarta_inicio, fim: horariosCoord7.quarta_fim }, 
      { inicio: horariosCoord7.quinta_inicio, fim: horariosCoord7.quinta_fim }, 
      { inicio: horariosCoord7.sexta_inicio, fim: horariosCoord7.sexta_fim }, 
      null 
  ];
  configurarCard(coord7Disponibilidade, cardCoord7 , horariosAtendimentoCoord7);
  });
  const cardCoord8 = document.querySelector('#kellyCheck');
  obterHorarios('kelly').then((horariosCoord8) => {
  const horariosAtendimentoCoord8 = [
      null, 
      { inicio: horariosCoord8.segunda_inicio, fim: horariosCoord8.segunda_fim }, 
      { inicio: horariosCoord8.terca_inicio, fim: horariosCoord8.terca_fim }, 
      { inicio: horariosCoord8.quarta_inicio, fim: horariosCoord8.quarta_fim }, 
      { inicio: horariosCoord8.quinta_inicio, fim: horariosCoord8.quinta_fim }, 
      { inicio: horariosCoord8.sexta_inicio, fim: horariosCoord8.sexta_fim }, 
      null 
  ];
  configurarCard(coord8Disponibilidade, cardCoord8 , horariosAtendimentoCoord8);
  });
  const cardCoord9 = document.querySelector('#maiaraCheck');
  obterHorarios('maiara').then((horariosCoord9) => {
  const horariosAtendimentoCoord9 = [
      null, 
      { inicio: horariosCoord9.segunda_inicio, fim: horariosCoord9.segunda_fim }, 
      { inicio: horariosCoord9.terca_inicio, fim: horariosCoord9.terca_fim }, 
      { inicio: horariosCoord9.quarta_inicio, fim: horariosCoord9.quarta_fim }, 
      { inicio: horariosCoord9.quinta_inicio, fim: horariosCoord9.quinta_fim }, 
      { inicio: horariosCoord9.sexta_inicio, fim: horariosCoord9.sexta_fim }, 
      null 
  ];
  configurarCard(coord9Disponibilidade, cardCoord9 , horariosAtendimentoCoord9);
  });
  const cardCoord10 = document.querySelector('#tarcisioCheck');
  obterHorarios('tarcisio').then((horariosCoord10) => {
  const horariosAtendimentoCoord10 = [
      null, 
      { inicio: horariosCoord10.segunda_inicio, fim: horariosCoord10.segunda_fim }, 
      { inicio: horariosCoord10.terca_inicio, fim: horariosCoord10.terca_fim }, 
      { inicio: horariosCoord10.quarta_inicio, fim: horariosCoord10.quarta_fim }, 
      { inicio: horariosCoord10.quinta_inicio, fim: horariosCoord10.quinta_fim }, 
      { inicio: horariosCoord10.sexta_inicio, fim: horariosCoord10.sexta_fim }, 
      null 
  ];
  configurarCard(coord10Disponibilidade, cardCoord10 , horariosAtendimentoCoord10);
  });
  const cardCoord11 = document.querySelector('#laisCheck');
  obterHorarios('lais').then((horariosCoord11) => {
  const horariosAtendimentoCoord11 = [
      null, 
      { inicio: horariosCoord11.segunda_inicio, fim: horariosCoord11.segunda_fim }, 
      { inicio: horariosCoord11.terca_inicio, fim: horariosCoord11.terca_fim }, 
      { inicio: horariosCoord11.quarta_inicio, fim: horariosCoord11.quarta_fim }, 
      { inicio: horariosCoord11.quinta_inicio, fim: horariosCoord11.quinta_fim }, 
      { inicio: horariosCoord11.sexta_inicio, fim: horariosCoord11.sexta_fim }, 
      null 
  ];
  configurarCard(coord11Disponibilidade, cardCoord11 , horariosAtendimentoCoord11);
  });
  const cardCoord12 = document.querySelector('#mateusCheck');
  obterHorarios('mateus').then((horariosCoord12) => {
  const horariosAtendimentoCoord12 = [
      null, 
      { inicio: horariosCoord12.segunda_inicio, fim: horariosCoord12.segunda_fim }, 
      { inicio: horariosCoord12.terca_inicio, fim: horariosCoord12.terca_fim }, 
      { inicio: horariosCoord12.quarta_inicio, fim: horariosCoord12.quarta_fim }, 
      { inicio: horariosCoord12.quinta_inicio, fim: horariosCoord12.quinta_fim }, 
      { inicio: horariosCoord12.sexta_inicio, fim: horariosCoord12.sexta_fim }, 
      null 
  ];
  configurarCard(coord12Disponibilidade, cardCoord12, horariosAtendimentoCoord12);
  });
}, 300);

async function obterHorarios(username) {
  const response = await fetch(`getHorarios.php?username=${username}`);
  if (!response.ok) {
    throw new Error('Erro ao buscar horários');
  }
  const data = await response.json();
  return data;
}
function salvarSenha(numeroSenha, coordenador) {
  if (typeof(Storage) !== "undefined") {
    const senha = {
      numero: numeroSenha,
      coordenador: coordenador
    };
    const senhaJSON = JSON.stringify(senha);
    localStorage.setItem("senha", senhaJSON);
  } else {
  }
}

function carregarSenha() {
  if (typeof(Storage) !== "undefined") {
    const senhaJSON = localStorage.getItem("senha");
    if (senhaJSON) {
      const senha = JSON.parse(senhaJSON);
      contadorEad = senha.numero + 1;
      nomeDoCoordenador.innerHTML = senha.coordenador;
      identificadorSenha.innerHTML = senha.numero;
    }
  } else {
    console.log("");
  }
}


window.addEventListener("load", carregarSenha);

function atualizarDataHora() {
  const dataHoraElement = document.getElementById('dateHours');
  const agora = new Date();
  
  const dia = agora.getDate().toString().padStart(2, '0');
  const mes = (agora.getMonth() + 1).toString().padStart(2, '0');
  const ano = agora.getFullYear().toString();
  const horas = agora.getHours().toString().padStart(2, '0');
  const minutos = agora.getMinutes().toString().padStart(2, '0');
  
  const dataHoraTexto = `Data: ${dia}/${mes}/${ano} Hora: ${horas}:${minutos}`;
  
  dataHoraElement.textContent = dataHoraTexto;
}

atualizarDataHora();

setInterval(atualizarDataHora, 1000);

function getNomeDia(dia) {
  const diasSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
  return diasSemana[dia];
}
document.addEventListener("keydown", function(event) {
    if (event.keyCode === 116) {
        event.preventDefault();
        console.log("A tecla F5 está desabilitada.");
    }
});
</script>
<script>
const botaoCloseAgenda = document.querySelector('#closeAgenda');
const containerAgenda = document.querySelector('.containerAgenda');

document.getElementById('showAgenda').addEventListener('click', () => {
  containerAgenda.style.display = 'block';

  let countdown = 20; 
  const botaoCloseAgenda = document.getElementById('closeAgenda'); 
  
  botaoCloseAgenda.innerHTML = `Aba Fechará em ${countdown} segundos`;
  
  const interval = setInterval(() => {
    countdown--;
    botaoCloseAgenda.innerHTML = `Aba Fechará em ${countdown} segundos`;
    
    if (countdown <= 0) {
      clearInterval(interval);
      containerAgenda.style.display = 'none';
    }
  }, 1000); 
  
  setTimeout(() => {
    containerAgenda.style.display = 'none';
  }, 20000);
});

botaoCloseAgenda.addEventListener('click', () => {
  containerAgenda.style.display = 'none';
});

const botaoShowQrCode = document.querySelector('#sala');
const botaoShowQrCode2 = document.querySelector('#painelweb');
const botaoCloseQrCode = document.querySelector('#closeQrCode');
const botaoCloseQrCode2 = document.querySelector('#closeQrCode2');
const containerQrCode = document.querySelector('.containerQrCode');
const containerQrCode2 = document.querySelector('.containerQrCode2');

botaoShowQrCode2.addEventListener('click', () => {
  containerQrCode2.style.display = 'block';

  setTimeout(() => {
    containerQrCode2.style.display = 'none';
  }, 20000);
});

botaoCloseQrCode2.addEventListener('click', () => {
  containerQrCode2.style.display = 'none';
});

botaoShowQrCode.addEventListener('click', () => {
  containerQrCode.style.display = 'block';

  setTimeout(() => {
    containerQrCode.style.display = 'none';
  }, 20000);
});

botaoCloseQrCode.addEventListener('click', () => {
  containerQrCode.style.display = 'none';
});

function textoFooter() {
    var vemporaqui = document.getElementById('vemporaqui');
    var randowResult = Math.floor(Math.random() * 5) + 1; 
    if(randowResult == 1){
        vemporaqui.innerHTML = "Deseja falar com o seu coordenador, <span class='strong'>vem por aqui...</span>"; 
    }else if(randowResult == 2){
        vemporaqui.innerHTML = "Tem dúvidas? <span class='strong'>Vem por aqui...</span>"; 
    }else if(randowResult == 3){
        vemporaqui.innerHTML = "Deseja suporte acadêmico? <span class='strong'>Vem por aqui...</span>"; 
    }else if(randowResult == 4){
        vemporaqui.innerHTML = "Precisa de ajuda? <span class='strong'>Vem por aqui...</span>"; 
    }else if(randowResult == 5){
        vemporaqui.innerHTML = "Quer falar com a coordenação? <span class='strong'>Vem por aqui...</span>"; 
    }
}
textoFooter();
setInterval(textoFooter, 20000);


</script>
</html>

<style>
.itemCard {
    background-color: var(--cor-principal);
    border-radius: 12px;
    border: none !important;
    width: 600px;
    overflow: hidden;
    height: 22%;
    margin: 10px;
    display: flex;
    align-items: center;
    position: relative;
    cursor: pointer;
    transition: 0.2s ease-in-out;
}
.mascara {
    position: absolute;
    top: 0px;
    left: 12%;
    width: 80px;
    height: 100%;
    background: linear-gradient(to right, rgba(255, 255, 255, 0),#ff260058, var(--cor-principal)); /* gradiente transparente para opaco */
}

</style>