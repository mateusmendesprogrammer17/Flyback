
[English](./README.en.md)

# Flyback

O projeto Flyback propõe o desenvolvimento de um sistema web que visa aprimorar a comunicação interna em instituições de ensino, por meio da criação de um canal estruturado para envio de sugestões de melhorias por alunos, pais e professores. Justifica-se pela necessidade de oferecer um espaço seguro e organizado para que a comunidade escolar possa compartilhar ideias, opiniões e apontar problemas que contribuam para um ambiente educacional mais participativo.

## Requisitos

- **Composer:** instalado no sistema ou via Sail.
- **PHP:** versão atualizada (recomendado PHP 8.3+).
- **Docker & Docker Compose:** para executar o ambiente com Laravel Sail.
- **Laravel Sail:** recomendado para desenvolvimento com containers.
- **Node.js & npm:** para gerenciamento e build de ativos (Tailwind/Vite).

## Tecnologias usadas

- **PHP**
- **MariaDB**
- **Tailwind CSS**
- **Alpine.js**
- **Laravel** (framework principal)
- **Docker / Laravel Sail**

## Sobre o desenvolvimento

O sistema foi desenvolvido utilizando o framework **Laravel**, que fornece estrutura MVC, migrations, Eloquent ORM,QueryBuilder,rotas, e ferramentas modernas para desenvolvimento web. O front-end usa **Tailwind CSS** para estilos utilitários e **Alpine.js** para interações leves.

## Como rodar o projeto (recomendado: Laravel Sail)

Siga os passos abaixo para executar o projeto localmente usando o Sail:

1. Clone o repositório:

```bash
git clone https://github.com/mateusmendes12/Flyback.git
cd Flyback
```

2. Copie o arquivo de ambiente e ajuste se necessário:

```bash
cp .env.example .env
# Edite o .env caso precise ajustar variáveis (DB, APP_URL, etc.)
```

3. Subir os containers e instalar dependências:

```bash
# Inicia os containers em background (build se necessário)
./vendor/bin/sail up -d --build

# Instala dependências PHP se não foram instaladas localmente
./vendor/bin/sail composer install

# Gera a chave da aplicação
./vendor/bin/sail artisan key:generate

# Executa migrations 
./vendor/bin/sail artisan migrate 
# Executar migrations com seeds (Opcional)
./vendor;bin/sail artisan migrate --seed

# Instala dependências JS e roda o Vite (modo dev)
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev

# Cria o link de storage (se necessário)
./vendor/bin/sail artisan storage:link
```

4. Acesse a aplicação em `http://localhost` (ou na porta definida em `.env`).

Observações:
- Se preferir não usar containers, instale as dependências localmente (Composer, PHP, MariaDB) e siga os mesmos passos via `composer` e `php artisan`.
- Ajuste `DB_CONNECTION` e credenciais no arquivo `.env` caso utilize MariaDB separadamente.

## Como Contribuir

Agradecemos seu interesse em contribuir com o Flyback! Segue um guia rápido para tornar contribuições mais fáceis de revisar e integrar.

1. Abra uma *issue* antes de iniciar trabalho em mudanças maiores para discutir a proposta.

2. Fork o repositório e crie uma branch a partir de `main` com um nome claro, por exemplo:

```text
feat/nome-da-feature
fix/descricao-curta
```

3. Mantenha o código seguindo os padrões do projeto:
- Siga a convenção PSR-12 para PHP.
- Escreva código limpo, com nomes claros e pequenas funções sempre que possível.

4. Preparar o ambiente local (com Laravel Sail):

```bash
cp .env.example .env
./vendor/bin/sail up -d --build
./vendor/bin/sail composer install
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

5. Rode migrations e seeds se necessário para reproduzir o cenário de desenvolvimento:

```bash
./vendor/bin/sail artisan migrate --seed
```

6. Execute os testes antes de abrir o Pull Request:

```bash
./vendor/bin/sail test
# ou, sem Sail
vendor/bin/phpunit
```

7. Garanta que os testes passem e que o linter/formatador (se aplicável) esteja limpo antes de submeter o PR.

8. Faça commits claros e atômicos. Use um padrão como Conventional Commits, por exemplo:

```text
feat: adicionar validação ao envio de sugestão
fix: corrigir erro de N+1 em lista de reports
docs: atualizar README com instruções do Sail
```

9. Abra um Pull Request contra a branch `main` descrevendo:
- O problema que a PR resolve;
- Como testar as mudanças passo a passo;
- Screenshots ou exemplos, quando aplicável;
- Referência à issue relacionada (use `#numero-da-issue`).

10. Para questões sensíveis de segurança, por favor contate os mantenedores diretamente em vez de abrir uma issue pública.

Se precisar de ajuda em qualquer etapa, abra uma issue descrevendo o problema ou envie uma mensagem para os mantenedores. Obrigado por contribuir!


## Licença

Este projeto está licenciado sob a **GNU General Public License v3.0**. Veja: https://www.gnu.org/licenses/gpl-3.0.html


