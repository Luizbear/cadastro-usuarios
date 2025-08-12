# Sistema de Cadastro de Usuários (CRUD)
Um projeto simples de um sistema de cadastro de usuários, demonstrando as operações CRUD (Create, Read, Update, Delete). O sistema permite a inserção e visualização de usuários em um banco de dados MySQL, servindo como uma base sólida para a criação de aplicações web mais complexas com PHP.

## Funcionalidades

-   **Cadastro de Usuários:** Formulário para inserir novos usuários com nome e e-mail.
-   **Listagem de Usuários:** Exibe todos os usuários cadastrados em uma tabela organizada.
-   **Conexão Segura:** Utiliza `prepared statements` para prevenir ataques de SQL Injection na inserção de dados.
-   **Lógica CRUD:** Implementa as operações básicas de Create (criar) e Read (ler).
-   **(Em breve):** Funcionalidades de Edição (Update) e Exclusão (Delete) serão adicionadas em futuras atualizações.

## Tecnologias Utilizadas

-   **PHP:** Para toda a lógica de backend e interação com o banco de dados.
-   **MySQL:** Sistema de gerenciamento de banco de dados para armazenar as informações dos usuários.
-   **HTML5:** Para a estrutura e o formulário de cadastro.
-   **CSS3:** Para a estilização e o design da interface.
-   **XAMPP:** Ambiente de desenvolvimento local que fornece o servidor Apache e o banco de dados MySQL.

## Como Executar o Projeto

Para rodar este projeto em sua máquina local, siga estes passos:

1.  **Instale o XAMPP:** Certifique-se de ter o XAMPP instalado e com os módulos Apache e MySQL em execução.
2.  **Clone o Repositório:** Clone este repositório para a pasta `htdocs` do seu XAMPP (`/opt/lampp/htdocs/` no Linux, `C:\xampp\htdocs\` no Windows).
3.  **Crie o Banco de Dados:**
    * Acesse o `phpMyAdmin` em `http://localhost/phpmyadmin`.
    * Crie um novo banco de dados chamado `cadastro_usuarios`.
4.  **Crie a Tabela:**
    * Com o banco de dados `cadastro_usuarios` selecionado, execute a seguinte instrução SQL na aba `SQL`:
      ```sql
      CREATE TABLE usuarios (
          id INT(11) PRIMARY KEY AUTO_INCREMENT,
          nome VARCHAR(255) NOT NULL,
          email VARCHAR(255) NOT NULL
      );
      ```
