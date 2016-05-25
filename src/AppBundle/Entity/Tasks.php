<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasks
 *
 * @ORM\Table(name="tasks", indexes={@ORM\Index(name="workflow_id", columns={"workflow_id"}), @ORM\Index(name="product_id", columns={"product_id"}), @ORM\Index(name="resource_id", columns={"resource_id"})})
 * @ORM\Entity
 */
class Tasks
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
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="operation", type="string", length=64, nullable=false)
     */
    private $operation;

    /**
     * @var integer
     *
     * @ORM\Column(name="workflow_id", type="integer", nullable=true)
     */
    private $workflowId;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="resource_id", type="integer", nullable=false)
     */
    private $resourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="resource_type", type="string", length=16, nullable=false)
     */
    private $resourceType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=false)
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="args", type="text", length=65535, nullable=true)
     */
    private $args;

    /**
     * @var string
     *
     * @ORM\Column(name="return", type="text", length=65535, nullable=true)
     */
    private $return;

    /**
     * @var string
     *
     * @ORM\Column(name="synchrone", type="string", nullable=false)
     */
    private $synchrone = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status;


}

