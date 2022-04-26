<?php

namespace Alura\Doctrine\Entity;

/**
 * @Entity
 */
class Aluno {
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    private $nome;
    

    /**
     * @Column(type="string", nullable=false)
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}

