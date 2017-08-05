<?php

namespace RtecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Biblioteca
 *
 * @ORM\Table(name="biblioteca")
 * @ORM\Entity(repositoryClass="RtecaBundle\Repository\BibliotecaRepository")
 */
class Biblioteca
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="Bibliotecario", type="string", length=255)
     */
    private $bibliotecario;

    /**
     * @var string
     *
     * @ORM\Column(name="CRB_Responsavel", type="string", length=255)
     */
    private $cRBResponsavel;

    /**
     * @var array
     *
     * @ORM\Column(name="Endereco", type="json_array")
     */
    private $endereco;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Biblioteca
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set bibliotecario
     *
     * @param string $bibliotecario
     *
     * @return Biblioteca
     */
    public function setBibliotecario($bibliotecario)
    {
        $this->bibliotecario = $bibliotecario;

        return $this;
    }

    /**
     * Get bibliotecario
     *
     * @return string
     */
    public function getBibliotecario()
    {
        return $this->bibliotecario;
    }

    /**
     * Set cRBResponsavel
     *
     * @param string $cRBResponsavel
     *
     * @return Biblioteca
     */
    public function setCRBResponsavel($cRBResponsavel)
    {
        $this->cRBResponsavel = $cRBResponsavel;

        return $this;
    }

    /**
     * Get cRBResponsavel
     *
     * @return string
     */
    public function getCRBResponsavel()
    {
        return $this->cRBResponsavel;
    }

    /**
     * Set endereco
     *
     * @param array $endereco
     *
     * @return Biblioteca
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return array
     */
    public function getEndereco()
    {
        return $this->endereco;
    }
}

