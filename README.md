📒 Livro de Visitas Web – Projeto Full Stack Básico

Aplicação web simples desenvolvida para demonstrar fundamentos de desenvolvimento full stack, integrando HTML, CSS, JavaScript e PHP em um fluxo completo de entrada, processamento e exibição de dados.

O sistema permite que visitantes enviem mensagens, que são persistidas no servidor em arquivo e exibidas dinamicamente na interface.

🧩 Visão Geral

Este projeto simula um livro de visitas, com foco em:

Estruturação correta de páginas web

Comunicação cliente–servidor

Persistência simples de dados

Organização de código

Boas práticas básicas de versionamento

Além disso, a interface conta com um efeito visual interativo no título, reforçando atenção à experiência do usuário sem comprometer simplicidade ou desempenho.

🚀 Funcionalidades

Envio de mensagens via formulário HTML

Processamento de dados no servidor com PHP

Armazenamento persistente em arquivo de texto

Exibição imediata das mensagens após envio

Feedback visual ao usuário

Efeito interativo no título (escala e mudança de cor)

Código organizado e legível

🛠️ Tecnologias Utilizadas

HTML5 – estrutura semântica

CSS3 – layout, tipografia e efeitos visuais

JavaScript (Vanilla) – interações e comportamento do cliente

PHP – lógica de backend e persistência de dados

Git / GitHub – versionamento e controle de código

📁 Estrutura do Projeto
/
├── index.php        # Página principal e lógica PHP
├── estilo.css       # Estilos e animações
├── script.js        # Interações JavaScript
├── mensagens.txt    # Armazenamento local (ignorado no repositório)
└── .gitignore

🔒 Versionamento e Segurança

O arquivo mensagens.txt é ignorado no GitHub para evitar versionamento de dados gerados por usuários.

Uso de htmlspecialchars() para evitar injeção de HTML nas mensagens.

Redirecionamento pós-envio para prevenir reenvio duplicado do formulário.

▶️ Como Executar Localmente

Clone o repositório:

git clone https://github.com/seu-usuario/seu-repositorio.git


Execute em um ambiente com suporte a PHP
(XAMPP, WAMP, LAMP ou servidor embutido do PHP)

Acesse no navegador:

http://localhost/seu-projeto

🎯 Objetivo Educacional

Este projeto foi desenvolvido com o objetivo de consolidar conhecimentos fundamentais em:

Desenvolvimento web

Programação backend básica

Integração entre frontend e backend

Organização de projetos versionados

Ideal como primeiro projeto full stack para portfólio.

📈 Possíveis Evoluções

Substituir arquivo por banco de dados (MySQL / SQLite)

Inclusão de data e hora nas mensagens

Paginação ou limite de mensagens

Validação avançada no frontend

Melhorias de acessibilidade

👤 Autor

Fabiano Roots
Desenvolvedor em formação
Interesse em estágio nas áreas de desenvolvimento web e software
