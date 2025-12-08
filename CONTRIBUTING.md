<!-- CONTRIBUTING.md -->

# Contribuindo para o Flyback

Obrigado por considerar contribuir para o Flyback — sua ajuda melhora o projeto para toda comunidade! Este documento descreve o fluxo de contribuição, padrões de código, procedimentos de testes e como abrir Pull Requests (PRs) de forma eficiente.

## Sumário

- Sobre
- Como reportar um problema (issue)
- Como propor uma feature
- Preparando o ambiente de desenvolvimento
- Padrões de código e linter
- Testes
- Commit messages
- Fluxo de Pull Request
- Checklist de revisão
- Segurança
- Contato

## Sobre

O Flyback é mantido por um time central de mantenedores. Mantenedores são responsáveis por revisar PRs, aplicar políticas de versão, responder issues e coordenar releases.

## Como reportar um problema (Issue)

1. Procure por issues existentes para evitar duplicação.
2. Abra uma issue nova incluindo:
   - Um título claro e conciso.
   - Descrição do problema/bug ou comportamento esperado para features.
   - Passos para reproduzir (se for bug).
   - Logs, erros, screenshots e versão do ambiente (PHP, Sail/Docker, etc.).

## Como propor uma feature

- Abra uma issue explicando a motivação e um esboço da solução antes de iniciar o desenvolvimento em larga escala.
- Para pequenas melhorias, pode-se abrir diretamente um PR explicando a mudança.

## Preparando o ambiente de desenvolvimento

Recomendamos usar o **Laravel Sail** (Docker). Exemplo básico para iniciar:

```bash
git clone https://github.com/mateusmendes12/Flyback.git
cd Flyback
cp .env.example .env
./vendor/bin/sail up -d --build
./vendor/bin/sail composer install
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate --seed
```

Se preferir não usar o Sail, instale localmente o **Composer**, **PHP**, **MariaDB** e **Node.js** e execute os mesmos comandos sem o prefixo `./vendor/bin/sail`. Lembre-se de ajustar o arquivo `.env` (credenciais de banco, `APP_URL`, etc.) conforme o ambiente local.

Em sistemas Windows, é possível usar uma solução como **XAMPP** ou **Laragon** para ter PHP e MariaDB pré-instalados; nesses casos, adapte os comandos e caminhos conforme a sua configuração (por exemplo, use `php`/`composer` globalmente em vez do binário do Sail).

## Padrões de código e linter

- PHP: siga PSR-12. Recomendamos `phpcs` e `php-cs-fixer` para checagem e formatação.
- JavaScript/CSS: siga padrões do projeto (ESLint / stylelint quando aplicável).
- Tailwind: utilize classes utilitárias para design consistente.

Exemplo para rodar `phpcs`:

```bash
./vendor/bin/phpcs --standard=PSR12 app/ || true
```

E para aplicar correções automáticas com `php-cs-fixer` (se configurado):

```bash
./vendor/bin/php-cs-fixer fix
```

Se desejar, podemos adicionar configuração de linter/formatter e hooks de pre-commit.

## Testes

- Execute testes com:

```bash
./vendor/bin/sail test
# ou sem sail
vendor/bin/phpunit
```

- Adicione testes para novas features e correções de bugs. PRs sem cobertura mínima para lógica complexa podem ser recusados até incluir testes.

## Commit messages

Use mensagens claras e atômicas. Recomendamos seguir o padrão de *Conventional Commits*:

```
<type>(escopo?): <descrição curta>

descrição mais detalhada (opcional)

BREAKING CHANGE: descrição (quando aplicável)
```

Tipos comuns: `feat`, `fix`, `docs`, `chore`, `refactor`, `test`.

## Fluxo de Pull Request (PR)

1. Crie uma branch a partir de `main`: `feat/nome-da-feature` ou `fix/descricao`.
2. Faça commits pequenos e descritivos.
3. Atualize a branch com `main` se houver conflitos antes de solicitar revisão.
4. Abra o PR com descrição contendo:
   - Problema que resolve (link para issue quando houver).
   - Como testar localmente os passos.
   - Screenshots / GIFs quando aplicável.
   - Lista de alterações principais e se há impacto em dados/migrations.

## Checklist de revisão (para autores e revisores)

- Código compila e testes passam.
- Mudanças pequenas e bem comentadas quando necessário.
- Não introduz vulnerabilidades óbvias (SQL injection, XSS, etc.).
- Segue padrões de estilo do projeto.
- Migrations foram adicionadas/alteradas corretamente e testadas.
- Documentação atualizada quando necessário (`README.md`, rotas, etc.).

## Segurança

Se você encontrar uma vulnerabilidade de segurança, por favor, não abra uma issue pública. Contate os mantenedores diretamente (e-mail ou canal privado) com detalhes para que possamos avaliar e remediar antes de divulgar.

## Contato e comunicação

Para discussões rápidas ou dúvidas, use issues ou o canal de comunicação definido pelo projeto (se houver). Mantenedores tentam responder em tempo razoável — agradecemos paciência.

## Agradecimentos

Obrigado por contribuir com o Flyback — mesmo pequenas correções e melhorias fazem grande diferença.


