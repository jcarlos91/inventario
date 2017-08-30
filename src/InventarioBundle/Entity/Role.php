<?php

namespace InventarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="InventarioBundle\Repository\RoleRepository")
 */
class Role
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
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=30)
     */
    private $role;

    /**
     * @var \InventarioBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="InventarioBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $usercreated;

    /**
     * @var \InventarioBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="InventarioBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $usermodified;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreated", type="datetime")
     */
    private $datecreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemodified", type="datetime")
     */
    private $datemodified;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="InventarioBundle\Entity\User", mappedBy="role")
     */
    private $user;


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
     * Set name
     *
     * @param string $name
     *
     * @return Role
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
     * Set role
     *
     * @param string $role
     *
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set usercreated
     *
     * @param \InventarioBundle\Entity\User $usercreated
     *
     * @return Role
     */
    public function setUsercreated(\InventarioBundle\Entity\User $usercreated)
    {
        $this->usercreated = $usercreated;

        return $this;
    }

    /**
     * Get usercreated
     *
     * @return \InventarioBundle\Entity\User
     */
    public function getUsercreated()
    {
        return $this->usercreated;
    }

    /**
     * Set usermodified
     *
     * @param \InventarioBundle\Entity\User $usermodified
     *
     * @return Role
     */
    public function setUsermodified(\InventarioBundle\Entity\User $usermodified)
    {
        $this->usermodified = $usermodified;

        return $this;
    }

    /**
     * Get usermodified
     *
     * @return \InventarioBundle\Entity\User
     */
    public function getUsermodified()
    {
        return $this->usermodified;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     *
     * @return Role
     */
    public function setDatecreated($datecreated)
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    /**
     * Get datecreated
     *
     * @return \DateTime
     */
    public function getDatecreated()
    {
        return $this->datecreated;
    }

    /**
     * Set datemodified
     *
     * @param \DateTime $datemodified
     *
     * @return Role
     */
    public function setDatemodified($datemodified)
    {
        $this->datemodified = $datemodified;

        return $this;
    }

    /**
     * Get datemodified
     *
     * @return \DateTime
     */
    public function getDatemodified()
    {
        return $this->datemodified;
    }

    /**
     * Add user
     *
     * @param \InventarioBundle\Entity\User $user
     * @return Role
     */
    public function addUser(\InventarioBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \InventarioBundle\Entity\User $user
     */
    public function removeUser(\InventarioBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
}

