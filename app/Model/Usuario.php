<?php

class Usuario{

    private int $id;
    private string $email;
    private string $senha;
    private string $data_nascimento;

    public function __construct(string $data_nascimento, string $email, string $senha){
        $this->data_nascimento = $data_nascimento;
        $this->email = $email;
        $this->senha = $senha;
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


}

?>