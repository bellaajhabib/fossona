<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerComment
 *
 * @ORM\Table(name="customer_comment", uniqueConstraints={@ORM\UniqueConstraint(name="customer_id", columns={"customer_id"})})
 * @ORM\Entity
 */
class CustomerComment
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
     * @ORM\Column(name="customer_id", type="string", length=6, nullable=false)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="hotliner_id", type="string", length=6, nullable=true)
     */
    private $hotlinerId;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=false)
     */
    private $updateDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'active';


}

