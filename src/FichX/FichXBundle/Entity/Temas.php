<?php

namespace FichX\FichXBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temas
 */
class Temas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \FichX\FichXBundle\Entity\Materias
     */
    private $materiaid;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Temas
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set materiaid
     *
     * @param \FichX\FichXBundle\Entity\Materias $materiaid
     * @return Temas
     */
    public function setMateriaid(\FichX\FichXBundle\Entity\Materias $materiaid = null)
    {
        $this->materiaid = $materiaid;
    
        return $this;
    }

    /**
     * Get materiaid
     *
     * @return \FichX\FichXBundle\Entity\Materias 
     */
    public function getMateriaid()
    {
        return $this->materiaid;
    }
}
