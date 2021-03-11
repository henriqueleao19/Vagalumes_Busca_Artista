# Vagalumes_Busca_Artista
<br>Este trabalho foi desenvolvido na Fatec, para a aula de desenvolvimento de servidores.</br>
É um script basico que consome a API do vagalumes, limitado a procura dos artistas. Quando entrar na barra de busca é só pesquisar o nome correto de seu artista, com isso ele irá listar todas as musicas que há na API do vagalumes e listar com links.
Quando clicar no link irá aparecer a letra da musica e (caso seja em outra língua) a tradução.

#Arquivos 
<br>No *index.php* está listado o html inicial com input e variaveis de retorno de pesquisa.</br>
<br>No *music.php* é o direcionamento quando é clicado em uma das musicas do artista, também trazendo retorno das letras (mostrando em tela).</br>
<br>No *pesquisaMusica.php* é o local onde há a consulta da API nele o que foi requisitado no input é pego pelo modo POST e colcado na função para realizar a consulta na API, verificando se há a existência e se realmente existir dar o retorno em JSON.</br>
