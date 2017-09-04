<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * One User has Many Companies.
     * @ORM\OneToMany(targetEntity="", mappedBy="product")
     */
    private $features;
    // ...

    public function __construct() {
        $this->features = new ArrayCollection();
    }

    public function __construct()
    {
        parent::__construct();
    }
}
