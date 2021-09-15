<p align="center"><a href="https://einov.com" target="_blank"><img src="https://einov.com/wp-content/uploads/2020/09/e-inov-logo.svg" width="400"></a></p>


## Sobre o desafio

Prezado candidato(a), muito obrigado por participar deste processo seletivo e aceitar fazer o teste. Podemos garantir que sua entrega será analisada e te retornaremos sobre o resultado do teste.

Antes de iniciar, gostaríamos de ressaltar que acreditamos que na área de desenvolvimento de software há várias maneiras de desenvolver uma solução, a ideia aqui não é dizer que essa é a certa e aquela é a errada pois acreditamos que tudo na vida passa por um período de aprendizado e amadurecimento.

Informamos que sua entrega não será compartilhada com ninguém fora do comitê de avaliação e após a nota ela será apagada, mantendo assim todo sigilo do participante.

O que vamos avaliar é o raciocínio lógico para resolver os problemas, o conhecimento nos frameworks utilizados, os cuidados que teve e o tempo de entrega.

Após a avaliação do comitê, os candidatos serão entrevistados sobre a solução e para avaliar a sua história, seus objetivos, seu estilo comportamental.

##Objetivo do Teste

O objetivo é realizar um teste bem simples para entender o nível de conhecimento do candidato em PHP, framework Laravel, CSS, HTML, Javascript e Banco de dados.

Serão observados o nível de conhecimento em cada uma dessas tecnologias e o uso das melhores práticas que elas dispõem atualmente.

##Requisitos da Solução

Para o desenvolvimento é imprescindível que se utilize o Framework Laravel 8. (https://laravel.com/docs/8.x) . A aplicação já utiliza um framework de javascript e css, mas o candidato pode trocar a vontade, o banco pode ser qualquer um desde que suportado pelo Laravel.

A solução deve ser entregue por meio do versionamento GIT no bitbucket, ao qual será necessário compartilhar o projeto com contato@einov.com.

##Descrição do Desafio

A E-inov está desenvolvendo uma aplicação para recrutamento e seleção. A ideia é manter um histórico de vagas e candidatos em uma aplicação simples e poder dessa forma gerenciar suas vagas.

A aplicação já começou a ser desenvolvida e está presente neste versionamento, porém ela está incopleta.

Obs: Há um migrate e seed.

Dessa forma seu desafio será completar os seguintes requisitos:

- Na página inicial da aplicação, colocar uma mensagem de que não há vagas no momento, quando não encontrar nenhuma no banco de dados.

- Quando alguém acessar uma url de vaga que não existe mais, deve voltar para a lista de vaga e exibir uma mensagem informando que a vaga não está mais disponível.

- Salvar o formulário de se candidatar a uma vaga no banco de dados (tabela job_applies) e enviar um e-mail para o administrador da aplicação (usar o e-mail da variavel da aplicação MAIL_FROM_ADDRESS)

- Colocar uma máscara em javascript R$ X.XXX,XX na pretenção salarial na candidatura da vaga.

- Caso o mesmo candidato se candidate na mesma vaga, apague a antiga candidatura e mantenha apenas a nova.

- Agradecer o candidato por meio de uma mensagem e que em breve iremos entrar em contato.

##Sugestões e Ideias para o futuro

Aqui na E-inov todo mundo participa da criação e roadmap dos produtos, tecnicamente ou dando ideias.

Dessa forma, caso tenha é claro.

- Você mudaria tecnicamente alguma coisa nessa aplicação?
  Sim, a database esta dando erro de "Out of range value for a column" por conta do tamanho do float ser (8,2) recomendo colocar (16,2) exemplo:$table->float('salary_claim',16,2);
assim posso colocar valores maiors que 8 digitos!

- Na sua opinião qual seria a próxima melhoria para esta aplicação?
  A questão do float ser (8,2) como expliquei na questão passada. 
