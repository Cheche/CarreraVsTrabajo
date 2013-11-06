<?php

namespace FichX\FichXBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MateriaHasUsuario
 */
class MateriaHasUsuario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \FichX\FichXBundle\Entity\Materias
     */
    private $idMateria;

    /**
     * @var \FichX\FichXBundle\Entity\Usuarios
     */
    private $idUsuario;


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
     * Set idMateria
     *
     * @param \FichX\FichXBundle\Entity\Materias $idMateria
     * @return MateriaHasUsuario
     */
    public function setIdMateria(\FichX\FichXBundle\Entity\Materias $idMateria = null)
    {
        $this->idMateria = $idMateria;
    
        return $this;
    }

    /**
     * Get idMateria
     *
     * @return \FichX\FichXBundle\Entity\Materias 
     */
    public function getIdMateria()
    {
        return $this->idMateria;
    }

    /**
     * Set idUsuario
     *
     * @param \FichX\FichXBundle\Entity\Usuarios $idUsuario
     * @return MateriaHasUsuario
     */
    public function setIdUsuario(\FichX\FichXBundle\Entity\Usuarios $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;
    
        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \FichX\FichXBundle\Entity\Usuarios 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
