# PEVI — Plataforma Especializada em Vagas Inclusivas

O **PEVI** é um projeto de aplicação web voltado para a inclusão, conectando pessoas com deficiência, neurodivergentes e outros talentos diversos a empresas verdadeiramente comprometidas com a inclusão e a diversidade.

Este projeto foi refatorado e estruturado seguindo o padrão de arquitetura **MVC (Model-View-Controller)** em PHP, focado na escalabilidade, manutenção de código e separação clara de responsabilidades.

## 🚀 O que é o projeto?

O sistema atua como uma ponte entre candidatos e oportunidades acessíveis. Ele foca grandemente na acessibilidade e usabilidade, contando com ferramentas embutidas de **Text-To-Speech (Leitura de Tela)**, **Alto Contraste**, **Modos para Daltonismo e Dislexia**, entre outras adaptações nativas. 

**Características Principais:**
- Interface moderna, responsiva e focada na experiência do usuário.
- Arquitetura MVC puramente implementada em PHP.
- Rotas amigáveis (ex: `/vagas`, `/empresas`) gerenciadas por um *Front Controller*.
- Recursos de acessibilidade robustos em Vanilla JavaScript.

## 📁 Estrutura de Arquivos

```text
/
├── app/
│   ├── Controllers/       # Lógica de recebimento de requisições e roteamento
│   ├── Models/            # Lógica de banco de dados e regras de negócio (Em breve)
│   └── Views/             # Telas e marcação HTML do sistema
│       ├── layouts/       # Header e Footer reutilizáveis por todo o projeto
│       ├── home/          # Página inicial
│       └── vagas/         # E demais pastas por contexto
├── public/                # Diretório raiz para o navegador web
│   ├── assets/
│   │   ├── css/           # Folhas de estilo da aplicação
│   │   └── js/            # Interações e painel de acessibilidade
│   └── index.php          # Arquivo Roteador Principal (Front Controller)
└── README.md              # Este arquivo
```

## ⚙️ Como Rodar o Projeto (Desenvolvimento)

Para testar e rodar o projeto localmente, você precisa ter o **PHP** instalado na sua máquina.

1. Abra o seu terminal.
2. Navegue até a pasta principal do projeto.
3. Inicie o servidor embutido do PHP apontando a raiz pública para a pasta `/public`:

```bash
php -S localhost:8000 -t public
```

4. Abra o seu navegador e acesse a URL: [http://localhost:8000](http://localhost:8000)

> **Importante:** Utilizar o parâmetro `-t public` é obrigatório, pois garante que as rotas amigáveis (como `/sobre`) caiam no `index.php` e que o navegador encontre os arquivos de estilo e scripts em `/assets/`.

## 🔮 Futuras Implementações

Embora a separação estrutural MVC e a interface estejam implementadas, as seguintes features devem ser desenvolvidas para tornar o projeto dinâmico:

1. **Desenvolvimento dos Models**
   - Criação das classes (ex: `Vaga.php`, `Empresa.php` dentro de `app/Models/`) para representar as entidades da plataforma.
2. **Integração com Banco de Dados**
   - Conectar os Models a um banco (ex: MySQL) utilizando PHP PDO. Assim, as vagas exibidas nas *Views* deixarão de ser estáticas e passarão a vir do banco de dados de forma dinâmica.
3. **Sistema de Login e Autenticação**
   - Construir o fluxo de registro e login gerenciando sessões no PHP (diferenciando perfis de candidatos e de recrutadores).
4. **Dashboards**
   - Desenvolver painéis restritos (área logada) para os usuários se candidatarem e empresas publicarem vagas.
5. **Filtros de Busca Funcionais**
   - Integrar a barra de pesquisa ao backend, executando *queries* para filtrar vagas com base nas necessidades de acessibilidade escolhidas.

---
*Projeto reestruturado visando os conceitos da disciplina de Desenvolvimento Web III.*
