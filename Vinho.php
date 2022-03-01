<?php
    //Classe Vinho.
    class Vinho
    {
        //Atributos.
        private string $nome;
        private string $tipo;
        private float  $preco;
        private int    $safra;

        //setNome.
        public function setNome($nome){
            $this->nome = $nome;
        }

        //getNome.
        public function getNome(){
            return $this->nome;
        }

        //setTipo.
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        //getTipo.
        public function getTipo(){
            return $this->tipo;
        }

        //setPreco.
        public function setPreco($preco){
            $this->preco = $preco;
        }

        //getPreco.
        public function getPreco(){
            return $this->preco;
        }

        //setSafra.
        public function setSafra($safra){
            $this->safra = $safra;
        }

        //getSafra.
        public function getSafra(){
            return $this->safra;
        }

        //Metodo mostrarVinho.
        public function mostrarVinho(){
            return "Nome do vinho: "."<span style='color:blue;'>$this->nome</span>"."<br/><br/> Tipo do vinho: "."<span style='color:blue;'>$this->tipo</span>"."<br/><br/> Preço do vinho: "."<span style='color:blue;'>R$ $this->preco</span>"."<br/><br/> Safra do vinho: "."<span style='color:blue;'>$this->safra";
        }

        //Metodo verificarPreco.
        public function verificarPreco(float $preco){
            $retorno = FALSE;
            if($preco < 25){
                $retorno = TRUE;
                echo "<span style='color:green'><b>PRODUTO EM OFERTA!</b></span><br/><br/>";
            }else{
                $retorno = FALSE;
                echo "<span style='color:green'><b>PRODUTO COM PREÇO NORMAL!</b></span><br/><br/>";
            }
        }
    }




?>