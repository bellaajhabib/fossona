<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerNotice
 *
 * @ORM\Table(name="customer_notice")
 * @ORM\Entity
 */
class CustomerNotice
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
     * @var integer
     *
     * @ORM\Column(name="merchant_id", type="integer", nullable=false)
     */
    private $merchantId = '3';

    /**
     * @var string
     *
     * @ORM\Column(name="domain_name", type="string", length=128, nullable=true)
     */
    private $domainName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=255, nullable=true)
     */
    private $customerName;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_offer", type="smallint", nullable=false)
     */
    private $scoreOffer = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="score_hardware", type="smallint", nullable=false)
     */
    private $scoreHardware = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="score_support", type="smallint", nullable=false)
     */
    private $scoreSupport = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="publication", type="string", nullable=false)
     */
    private $publication = 'yes';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="activation_date", type="datetime", nullable=false)
     */
    private $activationDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'pending';


}

