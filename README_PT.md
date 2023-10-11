# User List App
[Ler em Inglês](README.md)

Esse projeto permite consumir a API [https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0](https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0) utilizando o framework Laravel e exibir os dados dos usuários em uma tabela paginada. A conclusão deste desafio demonstra a capacidade de configurar o Laravel, consumir APIs e criar interfaces de usuário de forma eficaz.

## Requisitos

Antes de iniciar o projeto, verifique se o seguinte software está instalado em seu ambiente de desenvolvimento:

-  **Laravel**: O Laravel foi instalado no ambiente de desenvolvimento.
-  **Composer**: O Composer está instalado. Você pode verificar a instalação executando o comando `composer --version` no terminal.
-  **Node.js**: O Node.js está instalado. Você pode verificar a instalação executando o comando `node -v` no terminal. Se não estiver instalado, você pode baixá-lo em [https://nodejs.org/](https://nodejs.org/).
-  O ambiente está configurado corretamente para executar o Laravel.

# Iniciar o Projeto

Siga as etapas abaixo para iniciar o projeto em seu ambiente de desenvolvimento:

1. Clone o repositório do projeto do GitHub para seu ambiente local:
```
git clone https://github.com/Mizaeldouglas/technical_test_laravel_user_list.git
```

2. Navegue até o diretório do projeto:
```
cd technical_test_laravel_user_list
```

3. Instale as dependências PHP usando o Composer:
```
composer install
```

4. Instale as dependências JavaScript usando o npm:
```
npm install
```
5. Renomei o `.env.example` para:
```
.env
```

6. Compile os ativos JavaScript e CSS usando o npm:
```
npm run dev
```

7. Inicie o servidor de desenvolvimento do Laravel:
```
php artisan serve
```



Após seguir essas etapas, você poderá acessar o projeto em seu navegador em `http://localhost:8000/users-list`. Certifique-se de que o ambiente esteja configurado corretamente e que os requisitos (Laravel, Composer, Node.js) estejam instalados.

Lembre-se de que você pode precisar configurar o arquivo `.env` do Laravel com as configurações apropriadas, como a conexão com o banco de dados, se for necessário para o seu projeto. Certifique-se de ler a documentação do Laravel para obter informações detalhadas sobre o ambiente e as configurações.

## Tarefas Realizadas

Para a realização deste projeto, as seguintes tarefas foram concluídas:

- [x] **Configuração do Laravel**: Configuração inicial do ambiente de desenvolvimento com Laravel.

- [x] **Consumo da API**: Implementação da rota para consumir os dados da API externa usando as funcionalidades do Laravel para fazer solicitações HTTP.

- [x] **Tabela de Usuários Paginada**: Criação de uma rota para acessar a página de usuários. Desenvolvimento de um controlador que consome a API, recupera os dados dos usuários e implementa a lógica de paginação.

- [x] **Visualização da Tabela**: Criação de uma visualização que exibe os dados dos usuários em uma tabela paginada.

- [x] **Estilização**: Estilização da tabela e da página do usuário utilizando CSS (eu utilizei CSS puro e tailwind).

## Tarefas Adicionais
- [x] **Ordenação da Lista de Usuários em Ordem Alfabética**: A lista de usuários foi ordenada em ordem alfabética.

- [x] **Loading durante o Carregamento da API**: Foi adicionado um loading para indicar o carregamento da API externa.

- [x] **Responsividade**: O site foi projetado para ser responsivo e funcionar bem em telas de celular e tablets.

- [x] **Deploy**: O projeto foi feito o Deploy e está acessível [aqui](https://user-list.mizaeldouglas.com.br/users-list).

<br>
<hr>
<br>
