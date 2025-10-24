🇧🇷 [Português](README.md) | 🇺🇸 [English](README.en.md)
<h1 align="center">Flyback</h1>

<p align="center">
  <img src="public/flybacklogo.png" width="400" alt="Flyback Logo">
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://www.gnu.org/licenses/gpl-3.0.html">
  <img src="https://img.shields.io/badge/license-GPLv3-blue.svg" alt="License: GPL v3">
</a>
</p>

---

##  Sobre o projeto

**Flyback** é uma plataforma colaborativa criada para os estudantes e professores do IFPR. A proposta é simples, mas poderosa: permitir que qualquer usuário possa publicar uma **"Fly"**, ou seja, uma sugestão de melhoria, ideia que possa contribuir para tornar o ambiente da instituição mais eficiente, acolhedor e produtivo.

A ideia é que essas sugestões possam ser avaliadas e encaminhadas aos setores responsáveis pela gestão, criando um canal real de escuta e ação.

---

##  Tecnologias utilizadas

- **PHP 8.x**
- **Laravel 10**
- **Mariadb**
- **HTML/CSS/Blade**
- **JavaScript e Alpine Js**
- **TailwindCss**

---

##  Funcionalidades

-  Cadastro e login de usuários
-  Criação e publicação de "Flys"
-  Comentários em sugestões
-  Sistema de filtragem e busca
-  Avaliação e encaminhamento para os departamentos
-  Área administrativa para gestão das sugestões

---

##  Requisitos de instalação

Antes de começar, você vai precisar ter instalado em sua máquina:

- PHP 8.x
- Composer
- Mariadb 
- Node.js 
Pacotes necessários para utilizar:
- Laravel Sail
- Laravel telescope

```bash
# Clonar o repositório
git clone https://github.com/seu-usuario/flyback.git

# Instalar dependências
composer install
npm install && npm run dev

# Configurar variáveis de ambiente
cp .env.example .env
php artisan key:generate

# Rodar migrations
php artisan migrate

# Iniciar servidor
php artisan serve
```
Se optar por rodar comandos artisan através do laravel Sail
e já tiver instalado através 
```bash
composer require laravel/sail --dev
```
execute 
```bash
php artisan sail:install
```
escolha quais serviços serão adicionados e seu compose.yaml,e quando terminar a instalação execute:
```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
```
# Como Contribuir
Contribuições são sempre bem-vindas! 💡
Se você deseja ajudar a melhorar este projeto, siga os passos abaixo:

1.Faça um fork do repositório
Crie uma cópia deste projeto na sua conta GitHub clicando no botão “Fork”.
Clone seu fork para o seu ambiente local
```bash
git clone https://github.com/seu-usuario/flyback.git
```
2.Crie uma branch para suas alterações
```bash
git checkout -b minha-nova-feature
```
3.Implemente suas melhorias e faça um commit das mudanças
```bash
git -m commit "Adiciona ou modifica sua feature"
```
4.Envie suas alterações para o GitHub
```bash
git push origin minha-nova-feature

```
5.Abra um novo Pull Request
Vá até o seu repositório no GitHub e clique em “New Pull Request” para propor suas alterações ao projeto principal.

Descreva de forma clara o que foi alterado e o motivo da mudança. Isso facilita a revisão e aumenta as chances de aprovação!
# Licença 
O Flyback é um projeto de código aberto e está licenciado  sob a [Licença GNU](https://www.gnu.org/licenses/gpl-3.0.html).


