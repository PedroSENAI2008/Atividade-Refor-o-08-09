<?php
class Usuario {
    public $name;
    public $email;
    public $jogo;
    public $filme;
    public $livro;

    public function __construct($name, $email, $jogo, $filme, $livro) {
        $this->name = $name;
        $this->email = $email;
        $this->jogo = $jogo;
        $this->filme = $filme;
        $this->livro = $livro;
    }   
    public function Disponibilidade($livros, $filmes, $jogos){
        $msg = "<h3>Disponibilidade no Catálogo:</h3>";

        return $msg;
    }
     public function exibirDados() {
        return "<h2>Bem-vindo ao Mundo Geek, {$this->name}!</h2>
                <p>Você é fã de <strong>{$this->jogo}</strong>, 
                <strong>{$this->filme}</strong> e 
                <strong>{$this->livro}</strong>.</p>";
    }

    // Verificar disponibilidade
    public function Disponibilidade($livros, $filmes, $jogos) {
        $msg = "<h3>Disponibilidade no Catálogo:</h3>";

        // Livro
        $msg .= "<p>Livro: {$this->livro} - " .
            (in_array(strtolower($this->livro), array_map('strtolower', $livros)) 
            ? "✅ Disponível" : "❌ Não disponível") . "</p>";

        // Filme
        $msg .= "<p>Filme: {$this->filme} - " .
            (in_array(strtolower($this->filme), array_map('strtolower', $filmes)) 
            ? "✅ Disponível" : "❌ Não disponível") . "</p>";

        // Jogo
        $msg .= "<p>Jogo: {$this->jogo} - " .
            (in_array(strtolower($this->jogo), array_map('strtolower', $jogos)) 
            ? "✅ Disponível" : "❌ Não disponível") . "</p>";

        return $msg;
    }
}
?>