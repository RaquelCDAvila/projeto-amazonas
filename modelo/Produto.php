<?php

class Produto{
    
    private $id;
    private $nome;
    private $precoNormal;
    private $precoVenda;
    private $detalhe;
    private $displayDestaque;
    private $displayOferta;
    private $displayHome;
    private $displayStatus;
    private $displayLancamento;
    private $subCatId;
    private $marcaId;
    private $peso;
    private $freteGratis;

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

    public function getPrecoNormal()
    {
    return $this->precoNormal;
    }

    public function setPrecoNormal($precoNormal)
    {
    $this->precoNormal = $precoNormal;
    }

    public function getPrecoVenda()
    {
    return $this->precoVenda;
    }

    public function setPrecoVenda($precoVenda)
    {
    $this->precoVenda = $precoVenda;
    }

    public function getDetalhe()
    {
    return $this->detalhe;
    }

    public function setDetalhe($detalhe)
    {
    $this->detalhe = $detalhe;
    }

    public function getDisplayDestaque()
    {
    return $this->displayDestaque;
    }

    public function setDisplayDestaque($displayDestaque)
    {
    $this->displayDestaque = $displayDestaque;
    }

    public function getDisplayOferta()
    {
    return $this->displayOferta;
    }

    public function setDisplayOferta($displayOferta)
    {
    $this->displayOferta = $displayOferta;
    }

    public function getDisplayHome()
    {
    return $this->displayHome;
    }

    public function setDisplayHome($displayHome)
    {
    $this->displayHome = $displayHome;
    }
   
    public function getDisplayStatus()
    {
    return $this->displayStatus;
    }

    public function setDisplayStatus($displayStatus)
    {
    $this->displayStatus = $displayStatus;
    }

    public function getDisplayLancamento()
    {
    return $this->displayLancamento;
    }

    public function setDisplayLancamento($displayLancamento)
    {
    $this->displayLancamento = $displayLancamento;
    }

    public function getSubCatId()
    {
    return $this->subCatId;
    }

    public function setSubCatId($subCatId)
    {
    $this->subCatId = $subCatId;
    }

    public function getMarcaId()
    {
    return $this->marcaId;
    }

    public function setMarcaId($marcaId)
    {
    $this->marcaId = $marcaId;
    }

    public function getPeso()
    {
    return $this->peso;
    }

    public function setPeso($peso)
    {
    $this->peso = $peso;
    }

    public function getFretegratis()
    {
    return $this->freteGratis;
    }

    public function setFreteGratis($freteGratis)
    {
    $this->mfretegratis = $freteGratis;
    }
}

?>

