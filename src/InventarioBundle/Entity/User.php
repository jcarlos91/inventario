<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 18/07/17
 * Time: 02:05 PM
 */

namespace InventarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUSer{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var \InventarioBundle\Entity\UserPerfil
     *
     * @ORM\OneToOne(targetEntity="InventarioBundle\Entity\UserPerfil", mappedBy="userId", cascade={"persist"},orphanRemoval=true)
     */
    protected $userPerfil;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}