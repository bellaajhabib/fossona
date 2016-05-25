<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permissions
 *
 * @ORM\Table(name="permissions")
 * @ORM\Entity
 */
class Permissions
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
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="resource_id", type="integer", nullable=false)
     */
    private $resourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="permission", type="string", length=64, nullable=false)
     */
    private $permission;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'active';


}

