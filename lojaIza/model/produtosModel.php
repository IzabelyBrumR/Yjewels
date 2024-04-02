<?php

require_once 'ConexaoMysql.php';

class produtosModel{
    protected $id;
    protected $nome;
    protected $descricao;
    protected $quantidade;
    protected $caminho;
    protected $preco_custo;
    protected $preco_venda;
    protected $data_cadastro;

    public function __construct(){
    //vazio
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of caminho
     */
    public function getCaminho()
    {
        return $this->caminho;
    }

    /**
     * Set the value of caminho
     */
    public function setCaminho($caminho): self
    {
        $this->caminho = $caminho;

        return $this;
    }

    /**
     * Get the value of preco_custo
     */
    public function getPrecoCusto()
    {
        return $this->preco_custo;
    }

    /**
     * Set the value of preco_custo
     */
    public function setPrecoCusto($preco_custo): self
    {
        $this->preco_custo = $preco_custo;

        return $this;
    }

    /**
     * Get the value of preco_venda
     */
    public function getPrecoVenda()
    {
        return $this->preco_venda;
    }

    /**
     * Set the value of preco_venda
     */
    public function setPrecoVenda($preco_venda): self
    {
        $this->preco_venda = $preco_venda;

        return $this;
    }

    /**
     * Get the value of data_cadastro
     */
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    /**
     * Set the value of data_cadastro
     */
    public function setDataCadastro($data_cadastro): self
    {
        $this->data_cadastro = $data_cadastro;

        return $this;
    }
        //métodos especialistas

    public function loadAll(){
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM itens';
        $produtosList = $db->Consultar($sql);

        $db->Desconectar();
        return $produtosList;
    }

}
?>