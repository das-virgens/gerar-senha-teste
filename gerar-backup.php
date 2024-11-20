<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="images/icone.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Senha Coordenadores</title>
</head>
<body>
    <div class="containerGeral" >
        <div class="container-left">
            <div class="gridTexts">
                <div class="groupText1">
                    <h1>Coordenação</h1>
                    <span>Clique para gerar sua senha para falar com o seu <br>Coordenador.</span>
                </div>
                <button id="showAgenda"><img src="images/olho.svg" alt=""> VER AGENDA</button>
            </div>
            
            <section class="gridCards">
                <div class="card-coordenador" id="brunoCheck">
                    <img src="images/bruno.png" alt="">
                    <div class="groupText">
                        <h1>Bruno S.</h1>
                        <h2>ARQUITETURA - Presencial <br> AGRONOMIA - Presencial<br> ENGENHARIAS - Presencial</h2>
                    </div>
                </div>
                
                <div class="card-coordenador" id="joseCheck">
                    <img src="images/dani.png" style="border-radius: 50%;" alt="">
                    <div class="groupText">
                        <h1>Daniela de Melo</h1>
                        <h2>EDUCAÇÃO FÍSICA - PRESENCIAL <br> FISIOTERAPIA   - PRESENCIAL <br> PSICOLOGIA   - PRESENCIAL</h2>
                    </div>
                </div>

                 <div class="card-coordenador" id="jackCheck">
                    <img src="images/jack.png" alt="">
                    <div class="groupText">
                        <h1>Jackeline P.</h1>
                        <h2>ENFERMAGEM - PRESENCIAL <br> FARMÁCIA  - PRESENCIAL </h2>
                    </div>
                </div>

                <div class="card-coordenador"  id="joseCheckCoord">
                    <img width="130px" src="images/jose.png" alt="">
                    <div class="groupText">
                        <h1>José Gustavo</h1>
                        <h2>COORDENADOR ACADEMICO</h2>
                    </div>
                </div>
            
               <div class="card-coordenador" id="LucasCheck">
                    <img src="images/lucas.png" alt="">
                    <div class="groupText">
                        <h1>Lucas Cruz</h1>
                        <h2>NUTRIÇÃO  - PRESENCIAL</h2>
                    </div>
                </div>

                <div class="card-coordenador" id="osmundoCheck">
                    <img src="images/osmundo.png" alt="">
                    <div class="groupText">
                        <h1>Osmundo G.</h1>
                        <h2>ADMINISTRAÇÃO  - PRESENCIAL <br> C COMPUTAÇÃO  - PRESENCIAL <br> DIREITO   - PRESENCIAL</h2>
                    </div>
                </div>

                <div class="card-coordenador" id="pyCheck">
                    <img src="images/thamyris.png" alt="">
                    <div class="groupText">
                        <h1>Thamyris Py</h1>
                        <h2>ODONTOLOGIA  - PRESENCIAL</h2>
                    </div>
                </div>


                <div class="card-coordenador" id="eadCheck">
                    <img src="images/victor.png" alt="">
                    <div class="groupText">
                        <h1>Victor</h1>
                        <h2>EAD - 100% ONLINE <br> EAD - SEMIPRESENCIAL</h2>
                    </div>
                </div>
                
                
                <div class="footer">
                    <h1>Faculdade Anhanguera - Unidade Teixeira de Freitas - Av. Juscelino Kubitschek, BR 101 Km 879,4 3000 - Monte Castelo, Teixeira de Freitas - BA, 45990-039</h1>
                </div>
            </section>
        </div>
        <div class="container-right">
            <img src="images/logo-branco.png" alt="">

            <h1>Seja BemVindo(a) a <span id="textAnhanguera">Anhanguera,</span></h1>
            <h2><span id="atencaoSempre">Atenção</span><br>
                Ícones destacados sinalizam que os coordenadores já estão em atendimento, enquanto ícones em cinza indicam que você deve consultar a <span id="showAgenda2">agenda</span>.
        
                <div class="qrcode">
                    <h1>
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_339_730" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="25">
                        <rect x="0.5" y="0.0791016" width="24" height="24" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_339_730)">
                        <path d="M15.95 15.1291L17.05 14.0791L14.95 11.9791C15.1333 11.6958 15.2708 11.3958 15.3625 11.0791C15.4542 10.7624 15.5 10.4291 15.5 10.0791C15.5 9.09577 15.1542 8.2666 14.4625 7.5916C13.7708 6.9166 12.95 6.5791 12 6.5791C11.05 6.5791 10.2292 6.9166 9.5375 7.5916C8.84583 8.2666 8.5 9.09577 8.5 10.0791C8.5 11.0624 8.84583 11.8916 9.5375 12.5666C10.2292 13.2416 11.05 13.5791 12 13.5791C12.35 13.5791 12.6792 13.5333 12.9875 13.4416C13.2958 13.3499 13.6 13.2124 13.9 13.0291L15.95 15.1291ZM12 12.0791C11.45 12.0791 10.9792 11.8833 10.5875 11.4916C10.1958 11.0999 10 10.6291 10 10.0791C10 9.5291 10.1958 9.05827 10.5875 8.6666C10.9792 8.27493 11.45 8.0791 12 8.0791C12.5333 8.0791 13 8.27493 13.4 8.6666C13.8 9.05827 14 9.5291 14 10.0791C14 10.6291 13.8042 11.0999 13.4125 11.4916C13.0208 11.8833 12.55 12.0791 12 12.0791ZM4.5 18.0791C3.95 18.0791 3.47917 17.8833 3.0875 17.4916C2.69583 17.0999 2.5 16.6291 2.5 16.0791V5.0791C2.5 4.5291 2.69583 4.05827 3.0875 3.6666C3.47917 3.27493 3.95 3.0791 4.5 3.0791H20.5C21.05 3.0791 21.5208 3.27493 21.9125 3.6666C22.3042 4.05827 22.5 4.5291 22.5 5.0791V16.0791C22.5 16.6291 22.3042 17.0999 21.9125 17.4916C21.5208 17.8833 21.05 18.0791 20.5 18.0791H4.5ZM1.5 21.0791V19.0791H23.5V21.0791H1.5Z" fill="white" fill-opacity="0.9"/>
                        </g>
                        </svg>
                        ENCONTRE SUA SALA</h1>
                    <img src="images/qrcode.svg" alt="">
                </div>

            </div>

    </div>
    <div class="containerSenha" style="display: none;">
        <h1 id="identificadorSenha">01</h1>
        <h2 id="nomeDoCoordenador">Nome do Coordenador</h2>
        <h3 id="dateHours"></h3>
        <img id="footer-recibo" src="images/footer-recibo.png" alt="">
    </div>
    <div class="containerCommand" style="display: none;">
        <label for="">Comando:</label>
        <input id="inputValue" type="text" placeholder="Escreva o seu comando">
        <button id="upCommand">Enviar</button>
        <button id="closeCommand">Fechar</button>
    </div>
    <div class="containerExtrato"style="display: none;" >
        <h1 id="titulo">Extrato De Senhas Geradas</h1>
        <h2 id="dataHora"></h2>
        ____________________________________
        <h1 class="numerosDosCoords" id="brunoExtrato"></h1>
        <h1 class="numerosDosCoords" id="jackExtrato"></h1>
        <h1 class="numerosDosCoords" id="joseExtrato"></h1>
        <h1 class="numerosDosCoords" id="osmundoExtrato"></h1>
        <h1 class="numerosDosCoords" id="pyExtrato"></h1>
        <h1 class="numerosDosCoords" id="eadExtrato"></h1>
        ____________________________________
        <span>Lembrando que esse e o total de senhas geradas <br> não o de total atendidos...</span>
    </div>
    <div class="containerAgenda" style="display: none;">
        <button id="closeAgenda"><img src="images/close.svg" alt="">Fechar</button>
        <img id="bannerProfs" src="images/bannerProfs.png" alt="">
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
<script>
  var victorDisponibilidade ;
  var brunoDisponibilidade;
  var pyDisponibilidade;
  var jackDisponibilidade;
  var direitoDisponibilidade;
  var coordGeralDisponibilidade;
  var LucasDisponibilidade;
    // Objeto para armazenar as disponibilidades de todos os coordenadores
    var disponibilidadesCoordenadores = {};

    // Função para verificar a disponibilidade de todos os coordenadores
    function verificarDisponibilidade() {
        // Fazer uma solicitação AJAX para o arquivo PHP
        $.ajax({
            url: 'verificar_disponibilidade.php',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Iterar sobre o objeto de resposta
                $.each(response, function(nome, disponibilidade) {
                    // Armazenar as disponibilidades no objeto
                    disponibilidadesCoordenadores[nome] = disponibilidade;
                });
                victorDisponibilidade = disponibilidadesCoordenadores['victor'];
                brunoDisponibilidade = disponibilidadesCoordenadores['bruno'];
                pyDisponibilidade = disponibilidadesCoordenadores['thamyris'];
                jackDisponibilidade = disponibilidadesCoordenadores['jackeline'];
                direitoDisponibilidade = disponibilidadesCoordenadores['osmundo'];
                coordGeralDisponibilidade = disponibilidadesCoordenadores['daniela'];
                LucasDisponibilidade = disponibilidadesCoordenadores['lucas'];
                console.log('Disponibilidade do coordenador Victor:', victorDisponibilidade);
            },
            error: function(xhr, status, error) {
                console.error('Erro ao verificar a disponibilidade:', error);
                console.log('Resposta completa:', xhr.responseText);
            }

        });
    }

    // Verificar a disponibilidade a cada 100 milissegundos
    setInterval(verificarDisponibilidade, 100);
const containerGeral = document.querySelector('.containerGeral');
const containerSenha = document.querySelector('.containerSenha');
const containerCommand = document.querySelector('.containerCommand');
const containerExtrato = document.querySelector('.containerExtrato');
const dateHours = document.getElementById('dateHours');
const nomeDoCoordenador = document.getElementById('nomeDoCoordenador');
const identificadorSenha = document.getElementById('identificadorSenha');
const containerAgenda = document.querySelector('.containerAgenda');

// Lista de informações dos botões de senha
const botoesSenha = [
  {
    contador: 1,
    botao: document.querySelector('#LucasCheck'),
    coordenador: "Lucas",
    limite: 10
  },
  {
    contador: 1,
    botao: document.querySelector('#joseCheck'),
    coordenador: "Daniela",
    limite: 12
  },
  {
    contador: 1,
    botao: document.querySelector('#jackCheck'),
    coordenador: "Jackeline",
    limite: 10
  },
  {
    contador: 1,
    botao: document.querySelector('#brunoCheck'),
    coordenador: "Bruno",
    limite: 10
  },
  {
    contador: 1,
    botao: document.querySelector('#pyCheck'),
    coordenador: "Thamirys",
    limite: 10
  },
  {
    contador: 1,
    botao: document.querySelector('#osmundoCheck'),
    coordenador: "Osmundo",
    limite: 20
  },
  {
    contador: 1,
    botao: document.querySelector('#eadCheck'),
    coordenador: "Victor",
    limite: 10
  }
];

// Adicionando eventos de clique para cada botão de senha
botoesSenha.forEach(botaoInfo => {
  botaoInfo.botao.addEventListener('click', () => {
    if (botaoInfo.contador <= botaoInfo.limite) {
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
      alert("Senhas encerradas para o coordenador " + botaoInfo.coordenador + ".");
    }
  });
});

// Função para salvar o contador no Local Storage
function salvarContador(coordenador, contador) {
  localStorage.setItem(coordenador + "Contador", contador);
}

// Função para carregar o contador do Local Storage
function carregarContador(coordenador) {
  const contador = localStorage.getItem(coordenador + "Contador");
  return contador ? parseInt(contador) : 1; // Se não houver contador no Local Storage, retorna 1
}

// Modificar a função gerarSenha para salvar o contador no Local Storage
function gerarSenha(nome, numeroSenha) {
  // Simulação de gerar uma senha (pode ser qualquer lógica de geração de senha)
  var senha = numeroSenha; // Gera um número aleatório entre 1 e 1000
  var coordenador = nome;

  // Enviar a senha e o nome do coordenador para o PHP via Fetch API
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
    console.log(data); // Pode ser útil para depuração
  })
  .catch(error => {
    console.error('Error:', error);
  });

  // Salvar o próximo contador no Local Storage
  salvarContador(nome, numeroSenha + 1);
}

// Carregar contadores ao iniciar a página
botoesSenha.forEach(botaoInfo => {
  botaoInfo.contador = carregarContador(botaoInfo.coordenador);
});


// Adiciona um event listener para o evento keydown
document.addEventListener("keydown", function(event) {
  // Verifica se a tecla pressionada é a tecla "Page Up" (código 33)
  if (event.keyCode === 33) {
    // Chama a função para zerar a senha
    zerarSenha();
  }
});

// Função para zerar a senha
function zerarSenha() {
  // Limpa o Local Storage removendo o número da senha
  localStorage.removeItem("numeroSenha");

  // Atualiza o contador para 0
  botoesSenha.forEach(botaoInfo => {
    botaoInfo.contador = 1;
  });

  // Exibe uma mensagem ou realiza outras ações, se necessário
  console.log("Senha zerada.");
}






cardAcademico = document.getElementById('joseCheckCoord');
cardAcademico.style.opacity = '0.5';
cardAcademico.style.pointerEvents = 'none';
cardAcademico.style.background = '#C8C8C880';



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
  // Função para configurar o card de acordo com a disponibilidade e horários de atendimento
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
            card.style.pointerEvents = 'auto';
            card.style.background = '#E75D1A';
          } else {
            card.style.opacity = '0.5';
            card.style.pointerEvents = 'none';
            card.style.background = '#C8C8C880';
          }
        } else {
          card.style.opacity = '0.5';
          card.style.pointerEvents = 'none';
          card.style.background = '#C8C8C880';
        }
      }
    }
  }

  // BLOQUEIO NOS DIAS QUE DANIELA NÃO ATENDE
  const cardJose = document.querySelector('#joseCheck');
  const horariosAtendimentoZe = [
    { inicio: "19:00", fim: "21:30" }, // Segunda-feira
    { inicio: "16:00", fim: "20:30" }, // Terça-feira
    { inicio: "18:00", fim: "21:30" }, // Quarta-feira
    { inicio: "23:58", fim: "23:59" }, // Quinta-feira
    { inicio: "23:58", fim: "23:59" }, // Sexta-feira
    { inicio: "23:58", fim: "23:59" } // Sabado-feira
  ];
  configurarCard(coordGeralDisponibilidade, cardJose, horariosAtendimentoZe);

  // BLOQUEIO NOS DIAS QUE THAMYRIS NÃO ATENDE
  const cardPy = document.querySelector('#pyCheck');
  const horariosAtendimentoPy = [
    null, // Domingo
    { inicio: "19:00", fim: "20:30" }, // Segunda-feira
    { inicio: "18:00", fim: "20:30" }, // Terça-feira
    { inicio: "18:00", fim: "20:30" }, // Quarta-feira
    { inicio: "08:00", fim: "11:00" }, // Quinta-feira
    { inicio: "23:58", fim: "23:59" }, // Sexta-feira
    { inicio: "23:58", fim: "23:59" } // Sabado-feira
  ];
  configurarCard(pyDisponibilidade, cardPy, horariosAtendimentoPy);

  // BLOQUEIO NOS DIAS QUE BRUNO NÃO ATENDE
  const cardArquiteture = document.querySelector('#brunoCheck');
  const horariosAtendimentoArquitetura = [
    null, // Domingo
    { inicio: "19:00", fim: "21:00" }, // Segunda-feira
    { inicio: "15:00", fim: "18:00" }, // Terça-feira
    { inicio: "19:00", fim: "21:00" }, // Quarta-feira
    { inicio: "18:00", fim: "22:00" }, // Quinta-feira
    { inicio: "11:00", fim: "21:00" }, // Sexta-feira
    { inicio: "23:58", fim: "23:59" }
  ];
  configurarCard(brunoDisponibilidade, cardArquiteture, horariosAtendimentoArquitetura);

  // COORDENADOR VICTOR
  const cardVictor = document.querySelector('#eadCheck');
  const horariosAtendimentoVictor = [
    null, // Domingo
    { inicio: "08:00", fim: "21:00" }, // Segunda-feira
    { inicio: "18:00", fim: "21:00" }, // Terça-feira
    { inicio: "19:00", fim: "21:00" }, // Quarta-feira
    { inicio: "08:00", fim: "21:00" }, // Quinta-feira
    { inicio: "09:00", fim: "12:00" }, // Sexta-feira
    null // Sábado
  ];
  configurarCard(victorDisponibilidade, cardVictor, horariosAtendimentoVictor);

  // BLOQUEIO NOS DIAS QUE JACK NÃO ATENDE
  const cardOsmundo = document.querySelector('#osmundoCheck');
  const horariosAtendimentoOsmundo = [
    null, // Domingo
    { inicio: "18:00", fim: "20:00" }, // Segunda-feira
    { inicio: "19:00", fim: "20:00" }, // Terça-feira
    { inicio: "23:58", fim: "23:59" }, // Quarta-feira
    { inicio: "18:00", fim: "20:00" }, // Quinta-feira
    { inicio: "23:58", fim: "23:59" }, // Sexta-feira
    { inicio: "23:58", fim: "23:59" } // Sabado-feira
  ];
  configurarCard(direitoDisponibilidade, cardOsmundo, horariosAtendimentoOsmundo);


  // BLOQUEIO NOS DIAS QUE JACK NÃO ATENDE
  const cardJack = document.querySelector('#jackCheck');
  const horariosAtendimentoEnfermagem = [
    null, // Domingo
    { inicio: "19:00", fim: "21:00" }, // Segunda-feira
    { inicio: "19:00", fim: "21:00" }, // Terça-feira
    { inicio: "19:00", fim: "21:00" }, // Quarta-feira
    { inicio: "23:58", fim: "23:59" }, // Quinta-feira
    { inicio: "23:58", fim: "23:59" }, // Sexta-feira
    null // Sábado
  ];
  configurarCard(jackDisponibilidade, cardJack, horariosAtendimentoEnfermagem);

  // BLOQUEIO NOS DIAS QUE LUCAS NÃO ATENDE
  const cardLucas = document.querySelector('#LucasCheck');
  const horariosAtendimentoLucas = [
    null, // Domingo
    { inicio: "23:58", fim: "23:59" }, // Segunda-feira
    { inicio: "23:58", fim: "23:59" }, // Terça-feira
    { inicio: "18:30", fim: "21:50" }, // Quarta-feira
    { inicio: "23:58", fim: "23:59" }, // Quinta-feira
    { inicio: "23:58", fim: "23:59" }, // Sexta-feira
    null // Sábado
  ];
  configurarCard(LucasDisponibilidade, cardLucas, horariosAtendimentoLucas);

}, 1);
// Função para salvar a senha no Local Storage
function salvarSenha(numeroSenha, coordenador) {
  // Verifica se o Local Storage está disponível no navegador
  if (typeof(Storage) !== "undefined") {
    // Cria um objeto para armazenar os dados da senha
    const senha = {
      numero: numeroSenha,
      coordenador: coordenador
    };
    // Converte o objeto em formato JSON
    const senhaJSON = JSON.stringify(senha);
    // Salva a senha no Local Storage
    localStorage.setItem("senha", senhaJSON);
  } else {
    console.log("O Local Storage não está disponível no navegador.");
  }
}

// Função para carregar a senha do Local Storage
function carregarSenha() {
  // Verifica se o Local Storage está disponível no navegador
  if (typeof(Storage) !== "undefined") {
    // Obtém a senha armazenada no Local Storage
    const senhaJSON = localStorage.getItem("senha");
    // Verifica se a senha existe no Local Storage
    if (senhaJSON) {
      // Converte a senha de formato JSON para objeto
      const senha = JSON.parse(senhaJSON);
      // Atualiza os elementos da página com a senha carregada
      contadorEad = senha.numero + 1;
      nomeDoCoordenador.innerHTML = senha.coordenador;
      identificadorSenha.innerHTML = senha.numero;
    }
  } else {
    console.log("O Local Storage não está disponível no navegador.");
  }
}

// Função para limpar a senha do Local Storage
function limparSenha() {
  // Verifica se o Local Storage está disponível no navegador
  if (typeof(Storage) !== "undefined") {
    // Limpa todas as informações armazenadas no Local Storage
    localStorage.clear();
    localStorage.removeItem("victorDisponibilidade");
    localStorage.removeItem("osmundoDisponibilidade");
    localStorage.removeItem("pyDisponibilidade");
    localStorage.removeItem("brunoDisponibilidade");
    localStorage.removeItem("jackelineDisponibilidade");
    localStorage.removeItem("joseDisponibilidade");
    console.log("Limpando senha...");
  } else {
    console.log("O Local Storage não está disponível no navegador.");
  }
}
window.addEventListener("load", carregarSenha);

// Função para atualizar a data e hora
function atualizarDataHora() {
  const dataHoraElement = document.getElementById('dataHora');
  const agora = new Date();
  
  const dia = agora.getDate().toString().padStart(2, '0');
  const mes = (agora.getMonth() + 1).toString().padStart(2, '0');
  const ano = agora.getFullYear().toString();
  const horas = agora.getHours().toString().padStart(2, '0');
  const minutos = agora.getMinutes().toString().padStart(2, '0');
  
  const dataHoraTexto = `Data: ${dia}/${mes}/${ano} Hora: ${horas}:${minutos}`;
  
  dataHoraElement.textContent = dataHoraTexto;
}

// Chama a função pela primeira vez para exibir a data e hora atual
atualizarDataHora();

// Atualiza a data e hora a cada segundo
setInterval(atualizarDataHora, 1000);


// SHOW AGENDA
const botaoShowAgenda = document.querySelector('#showAgenda');
const botaoShowAgenda2 = document.querySelector('#showAgenda2');
const botaoCloseAgenda = document.querySelector('#closeAgenda');

botaoShowAgenda.addEventListener('click', () => {
  containerAgenda.style.display = 'block';

  setTimeout(() => {
    containerAgenda.style.display = 'none';
  }, 20000);
});

botaoShowAgenda2.addEventListener('click', () => {
  containerAgenda.style.display = 'block';

  setTimeout(() => {
    containerAgenda.style.display = 'none';
  }, 20000);
});
botaoCloseAgenda.addEventListener('click', () => {
  containerAgenda.style.display = 'none';
});
// Função auxiliar para obter o nome do dia da semana
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