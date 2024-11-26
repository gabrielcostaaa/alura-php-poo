<?php 

class Filme {
    private $nome_filme; // Sem tipos
    private $ano_lancamento_filme;
    private $genero_filme;
    private $notas_filme; // Renomeado para corresponder à declaração

    public function __construct($nome_filme, $ano_lancamento_filme, $genero_filme) {
        $this->nome_filme = $nome_filme;
        $this->ano_lancamento_filme = $ano_lancamento_filme;
        $this->genero_filme = $genero_filme;
        $this->notas_filme = array(); // Inicializar como array
    }

    public function setNota($nota) {
        $this->notas_filme[] = $nota; // Adiciona nota ao array
    }

    public function getNome() {
        return $this->nome_filme; // Corrigido acesso à propriedade
    }

    public function getAnoLancamento() {
        return $this->ano_lancamento_filme;
    }

    public function getGenero() {
        return $this->genero_filme;
    }
}
?>


