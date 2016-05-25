<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles", uniqueConstraints={@ORM\UniqueConstraint(name="role_name", columns={"role_name"})})
 * @ORM\Entity
 */
class Roles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="role_name", type="string", length=64, nullable=false)
     */
    private $roleName;

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="string", nullable=false)
     */
    private $admin = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'active';


}

