<h1>PHP+MySQL</h1>
<p><strong>Tarefa:</strong> Criar um CRUD com o padrão DAO (Data Access Object) e conexão com BD com o padrão Factory</p>

<p>A tarefa consiste em criar um CRUD utilizando o padrão DAO (Data Access Object) e estabelecer uma conexão com o banco de dados utilizando o padrão Factory. Segue abaixo a estrutura do projeto:</p>

<h2>Classe Pessoa</h2>
<p>A classe Pessoa deve possuir os atributos nome e idade.</p>

<p><strong>Métodos:</strong> constructor, getters e setters</p>

<h2>Interface PessoaDAO</h2>
<p>A interface PessoaDAO deve definir os seguintes métodos:</p>

<ul>
  <li><code>ler()</code>: Retorna uma lista contendo todas as entradas no BD</li>
  <li><code>criar($nome, $idade)</code>: Cria um registro no BD</li>
  <li><code>atualizar($nome, $novaIdade)</code>: Atualiza a idade de todos registros iguais a <code><nome></code></li>
  <li><code>remover($nome)</code>: Apaga todos os registros com <code><nome></code></li>
</ul>

<h2>Classe PessoaDAO</h2>
<p>A classe PessoaDAO deve implementar a interface PessoaDAO.</p>

<p><strong>Construtor:</strong> recebe uma conexão</p>

<h2>Classe ConnectionFactory</h2>
<p>A classe ConnectionFactory deve possuir o seguinte método:</p>

<ul>
  <li><code>getConnection($host, $database, $user, $password)</code>: Retorna uma conexão de acordo com os parâmetros</li>
</ul>

<h2>Teste</h2>
<p>Realize os seguintes passos para testar o projeto:</p>

<ol>
  <li>Crie uma conexão</li>
  <li>Crie uma PessoaDAO passando a conexão como parâmetro</li>
  <li>Simule as seguintes ações:
    <ul>
      <li>Criar 4 registros distintos</li>
      <li>Listar todos os registros</li>
      <li>Remover dois registros</li>
      <li>Listar todos os registros</li>
      <li>Atualizar um registro</li>
      <li>Listar todos os registros</li>
    </ul>
  </li>
</ol>
