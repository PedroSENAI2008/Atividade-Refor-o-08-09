<?php
require_once ('usa.php');

$nome = $_POST['name'];
$email = $_POST['email'];
$jogo = $_POST['jogo'];
$filme = $_POST['filme'];
$livro = $_POST['livro'];

$usuario = new Usuario($nome, $email, $jogo, $filme, $livro);

$livros = [
    "O Senhor dos Anéis",
    "Harry Potter e a Pedra Filosofal",
    "1984",
    "Dom Quixote",
    "O Hobbit",
    "Jogos Vorazes",
    "Percy Jackson e o Ladrão de Raios",
    "A Menina que Roubava Livros",
    "As Crônicas de Nárnia",
    "O Código Da Vinci"
];
$games = [
    "The Legend of Zelda: Breath of the Wild",
    "Super Mario Odyssey",
    "The Witcher 3: Wild Hunt",
    "Minecraft",
    "Fortnite",
    "God of War",
    "League of Legends",
    "Final Fantasy VII",
    "Pokémon Red/Blue",
    "Grand Theft Auto V"
];
$filmes = [
    "O Senhor dos Anéis: A Sociedade do Anel",
    "Harry Potter e o Cálice de Fogo",
    "Matrix",
    "Star Wars: Uma Nova Esperança",
    "Vingadores: Ultimato",
    "Jurassic Park",
    "O Rei Leão",
    "De Volta para o Futuro",
    "O Poderoso Chefão",
    "Pantera Negra"
]; 
echo "<div style='font-family: Arial; background:rgb(59, 51, 83);; color:#pub; padding:20px; border-radius:10px; width:500px; margin:50px auto;'>";
echo $usuario->exibirDados(); // mensagem de boas-vindas
echo $usuario->Disponibilidade($livros, $filmes, $games); // disponibilidade no catálogo
echo "</div>";
?>