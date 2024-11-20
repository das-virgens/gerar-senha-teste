const coordenadores = [
    { nome: 'Ana Patricia P. Queiroz', valor: 'ana' },
    { nome: 'Barbara Maria Cavalcanti', valor: 'barbara' },
    { nome: 'Daniela Simoes Menezes', valor: 'daniela' },
    { nome: 'Elisaura Cristina Macedo', valor: 'elisaura' },
    { nome: 'Emiraci Barbosa Alcantara', valor: 'emiraci' },
    { nome: 'José Eduardo Alves Dos Santos', valor: 'joseeduardo' },
    { nome: 'José Vicente Cardoso Santos', valor: 'josevicente' },
    { nome: 'Kelly Cruz Pimentel', valor: 'kelly' },
    { nome: 'Maiara Goes L. de Oliveira', valor: 'maiara' },
    { nome: 'Tarcisio Santana Gomes', valor: 'tarcisio' },
    { nome: 'Lais Santos do Nascimento', valor: 'lais' },
    { nome: 'Mateus Eca Souza', valor: 'mateus' },
];

function preencherSelect() {
    const select = document.getElementById('coordenadores');
    coordenadores.forEach(coordenador => {
        const option = document.createElement('option');
        option.value = coordenador.valor;
        option.textContent = coordenador.nome;
        select.appendChild(option);
    });
}

function mostrarInformacoes() {
    const select = document.getElementById('coordenadores');
    const coordenadorSelecionado = select.value;
    const tabela = document.getElementById('tabela-info');
    const tbody = document.getElementById('info-coordenador');
    tbody.innerHTML = '';

    if (coordenadorSelecionado) {
        fetch('consultar.php')
            .then(response => response.json())
            .then(data => {
                const info = data.find(coordenador => coordenador.coordenador === coordenadorSelecionado);

                if (info) {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${info.coordenador}</td>
                        <td>${info.atendimentoGeral}</td>
                        <td>${info.AtendimentosSemana}</td>
                        <td>${info.AtendimentosHoje}</td>
                        <td>${info['Media de Atendimento']}</td>
                        <td>${info['Atendimento mais rapido']}</td>
                        <td>${info['Atendimento Mais demorado']}</td>
                    `;
                    tbody.appendChild(row);
                    tabela.style.display = 'table';
                }
            })
            .catch(error => console.error('Erro ao buscar dados:', error));
    } else {
        tabela.style.display = 'none';
    }
}

// Executa a função para preencher o select quando o documento estiver carregado
document.addEventListener('DOMContentLoaded', preencherSelect);
