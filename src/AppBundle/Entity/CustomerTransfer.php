<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerTransfer
 *
 * @ORM\Table(name="customer_transfer")
 * @ORM\Entity
 */
class CustomerTransfer
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
     * @ORM\Column(name="customer_id_from", type="string", length=6, nullable=false)
     */
    private $customerIdFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id_to", type="string", length=6, nullable=false)
     */
    private $customerIdTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status;


}

