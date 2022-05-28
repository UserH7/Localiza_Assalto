<?php

class Usuario{

    private int $id;
    private string $email;
    private string $senha;
    private string $data_nascimento;
    private string $genero;

    public function __construct(string $email, string $senha, string $data_nascimento, string $genero){
        $this->email = $email;
        $this->senha = $senha;
        $this->data_nascimento = $data_nascimento;
        $this->genero = $genero;
    }

    public function get_id() {
        return $this->id;
    }
    
    public function get_data_nascimento() {
        return $this->data_nascimento;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_senha() {
        return $this->senha;
    }

    public function get_genero() {
        return $this->genero;
    }


}

?>