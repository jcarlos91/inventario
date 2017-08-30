<?php

namespace InventarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserPerfil
 *
 * @ORM\Table(name="user_perfil")
 * @ORM\Entity(repositoryClass="InventarioBundle\Repository\UserPerfilRepository")
 */
class UserPerfil
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
     * @var \InventarioBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="InventarioBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="apaterno", type="string", length=250)
     */
    private $apaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="amaterno", type="string", length=250)
     */
    private $amaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=255)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="numIn", type="string", length=45)
     */
    private $numIn;

    /**
     * @var string
     *
     * @ORM\Column(name="numext", type="string", length=45)
     */
    private $numext;

    /**
     * @var string
     *
     * @ORM\Column(name="delegacion", type="string", length=255)
     */
    private $delegacion;

    /**
     * @var string
     *
     * @ORM\Column(name="municipio", type="string", length=255)
     */
    private $municipio;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=255)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="telcel", type="string", length=45)
     */
    private $telcel;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="estadocivil", type="string", length=45)
     */
    private $estadocivil;

    /**
     * @var \InventarioBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="InventarioBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $usuarioAlta;

    /**
     * @var \InventarioBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="InventarioBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $usuarioModificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAlta", type="datetime")
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaModificacion", type="datetime")
     */
    private $fechaModificacion;


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
     * Set userId
     *
     * @param \InventarioBundle\Entity\User $userId
     *
     * @return UserPerfil
     */
    public function setUserId(\InventarioBundle\Entity\User $userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \InventarioBundle\Entity\User
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return UserPerfil
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set apaterno
     *
     * @param string $apaterno
     *
     * @return UserPerfil
     */
    public function setApaterno($apaterno)
    {
        $this->apaterno = $apaterno;

        return $this;
    }

    /**
     * Get apaterno
     *
     * @return string
     */
    public function getApaterno()
    {
        return $this->apaterno;
    }

    /**
     * Set amaterno
     *
     * @param string $amaterno
     *
     * @return UserPerfil
     */
    public function setAmaterno($amaterno)
    {
        $this->amaterno = $amaterno;

        return $this;
    }

    /**
     * Get amaterno
     *
     * @return string
     */
    public function getAmaterno()
    {
        return $this->amaterno;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return UserPerfil
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return UserPerfil
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numIn
     *
     * @param string $numIn
     *
     * @return UserPerfil
     */
    public function setNumIn($numIn)
    {
        $this->numIn = $numIn;

        return $this;
    }

    /**
     * Get numIn
     *
     * @return string
     */
    public function getNumIn()
    {
        return $this->numIn;
    }

    /**
     * Set numext
     *
     * @param string $numext
     *
     * @return UserPerfil
     */
    public function setNumext($numext)
    {
        $this->numext = $numext;

        return $this;
    }

    /**
     * Get numext
     *
     * @return string
     */
    public function getNumext()
    {
        return $this->numext;
    }

    /**
     * Set delegacion
     *
     * @param string $delegacion
     *
     * @return UserPerfil
     */
    public function setDelegacion($delegacion)
    {
        $this->delegacion = $delegacion;

        return $this;
    }

    /**
     * Get delegacion
     *
     * @return string
     */
    public function getDelegacion()
    {
        return $this->delegacion;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     *
     * @return UserPerfil
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return UserPerfil
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return UserPerfil
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set telcel
     *
     * @param string $telcel
     *
     * @return UserPerfil
     */
    public function setTelcel($telcel)
    {
        $this->telcel = $telcel;

        return $this;
    }

    /**
     * Get telcel
     *
     * @return string
     */
    public function getTelcel()
    {
        return $this->telcel;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return UserPerfil
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set estadocivil
     *
     * @param string $estadocivil
     *
     * @return UserPerfil
     */
    public function setEstadocivil($estadocivil)
    {
        $this->estadocivil = $estadocivil;

        return $this;
    }

    /**
     * Get estadocivil
     *
     * @return string
     */
    public function getEstadocivil()
    {
        return $this->estadocivil;
    }

    /**
     * Set usuarioAlta
     *
     * @param \InventarioBundle\Entity\User $usuarioAlta
     *
     * @return UserPerfil
     */
    public function setUsuarioAlta(\InventarioBundle\Entity\User $usuarioAlta)
    {
        $this->usuarioAlta = $usuarioAlta;

        return $this;
    }

    /**
     * Get usuarioAlta
     *
     * @return \InventarioBundle\Entity\User
     */
    public function getUsuarioAlta()
    {
        return $this->usuarioAlta;
    }

    /**
     * Set usuarioModificacion
     *
     * @param \InventarioBundle\Entity\User $usuarioModificacion
     *
     * @return UserPerfil
     */
    public function setUsuarioModificacion(\InventarioBundle\Entity\User $usuarioModificacion)
    {
        $this->usuarioModificacion = $usuarioModificacion;

        return $this;
    }

    /**
     * Get usuarioModificacion
     *
     * @return \InventarioBundle\Entity\User
     */
    public function getUsuarioModificacion()
    {
        return $this->usuarioModificacion;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return UserPerfil
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     *
     * @return UserPerfil
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }
}

