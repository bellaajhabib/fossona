<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workflow
 *
 * @ORM\Table(name="workflow", indexes={@ORM\Index(name="superworkflow_id", columns={"superworkflow_id"})})
 * @ORM\Entity
 */
class Workflow
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
     * @ORM\Column(name="superworkflow_id", type="integer", nullable=true)
     */
    private $superworkflowId;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority = '1';

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
     * @ORM\Column(name="resource_type", type="string", length=255, nullable=false)
     */
    private $resourceType;

    /**
     * @var string
     *
     * @ORM\Column(name="operation", type="string", length=255, nullable=false)
     */
    private $operation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'pending';


}

