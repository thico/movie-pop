<!--<?php
$num = rand(0, 8);

$links = array
(
0 => "http://www.youtube.com/watch?v=ClLr5W_l82s",
1 => "http://www.youtube.com/watch?v=TW0Jdbfaqx8",
2 => " ",
3 => " ",
4 => " ",
5 => " ",
6 => " ",
7 => " ",
8 => " ",
);

$nomes = array
(
0 => "Laranja Mecanica",
1 => "Poderoso Chefao",
2 => "Um Sonho de Liberdade",
3 => "Pulp Fiction - Tempo de Violência",
4 => "Três Homens em Conflito",
5 => "A Lista de Schindler",
6 => "Batman - O Cavaleiro das Trevas",
7 => "O Senhor dos Anéis: O Retorno do Rei",
8 => "Star Wars: Episódio V - O Império Contra-Ataca",
);

$img = array
(
0 => "http://cinemaedebate.files.wordpress.com/2009/07/laranja-mecanica1.jpg",
1 => "http://s.glbimg.com/jo/g1/f/original/2011/05/04/marlonbrando.jpg",
2 => "http://4.bp.blogspot.com/_OGgU8pBiBkI/S_Ao7VFw8NI/AAAAAAAAA7Y/GX8DFwmKfHQ/s1600/film_11.jpg",
3 => "http://content.internetvideoarchive.com/content/photos/1436/427801_942.jpg"
4 => "http://2.bp.blogspot.com/-I310Xn2FZJQ/TcQ_x0GrpVI/AAAAAAAACyw/iNYdbrm9o8g/s1600/1.jpg"
5 => "http://content9.flixster.com/rtmovie/19/33/19331_gal.jpg"
6 => "http://content7.flixster.com/rtmovie/50/39/50393_gal.jpg"
7 => "http://globoesporte.globo.com/platb/files//1080/2012/07/senhor-dos-aneis-retorno-do-rei.jpg"
8 => "http://1.bp.blogspot.com/_81jObWRXQ18/TVKj7TycCiI/AAAAAAAACYY/XChgr1dakto/s640/empire.jpg"

);

//echo $links[$num] ."=". $nomes[$num] ."=". $nomes[$num];
?>-->
   <!--<?php <p><IMG SRC=$img[$num] ALT="filme"></p>
//<p><IMG SRC="http://1.bp.blogspot.com/-vIS7YpgcNyc/Tng9dScGz_I/AAAAAAAAAGo/KtNoQY-RdZI/s1600/brclub-floor.jpg" ALT="que filme"></p>
    //<p><iframe width="560" height="315" src="http://www.youtube.com/embed/G8vqlhi3QQw?//modestbranding=1&showinfo=0&controls=1&autoplay=0&version=3" frameborder="0" allowfullscreen></iframe></p>
?>-->  
    
<?php
if (isset($_GET["nome"])) {
$nome = $_GET["nome"];
echo "O filme selecionado foi $nome<p>";
if ($nome == "Clube dos 5") {
echo "A resposta está CORRETA!<p>";
	}
else {
echo "A resposta está ERRADA!<p>";
	}
}
else
{
echo "Qual o nome do filme?<p>";
}
?>
<a href="index.php?nome=Batman - Dark Knight Rises">Batman - Dark Knight Rises</a><br>
<a href="index.php?nome=Clube dos 5">Clube dos 5</a><br>
<a href="index.php?nome=Homem Aranha">Homem Aranha</a><br>
<a href="index.php?nome=Curtindo a Vida Adoidado">Curtindo a Vida Adoidado</a><br>
