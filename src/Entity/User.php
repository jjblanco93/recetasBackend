<?php
// src/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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
     * @ORM\Column(type="boolean")
     */
    private $Sex;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getSex(): ?bool
    {
        return $this->Sex;
    }

    public function setSex(bool $Sex): self
    {
        $this->Sex = $Sex;

        return $this;
    }
}