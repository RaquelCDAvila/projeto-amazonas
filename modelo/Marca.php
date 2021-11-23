<?php

class Marca{
    
    private $id;
    private $nome;
    private $site;
    private $status;

    public function getId() 
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSite()
    {
        return $this->site;
    }
    public function setSite($site)
    {
        $this->site = $site;
    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
}

?>

