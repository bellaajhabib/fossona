<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer", uniqueConstraints={@ORM\UniqueConstraint(name="customer_id", columns={"customer_id"}), @ORM\UniqueConstraint(name="contact_id", columns={"contact_id"})})
 * @ORM\Entity
 */
class Customer
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
    private $customerId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contact_id", type="string", length=8, nullable=false)
     */
    private $contactId = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=128, nullable=true)
     */
    private $host = '%';

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", nullable=false)
     */
    private $level = 'customer';

    /**
     * @var string
     *
     * @ORM\Column(name="group", type="string", length=255, nullable=true)
     */
    private $group;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="password_encryption", type="string", nullable=false)
     */
    private $passwordEncryption;

    /**
     * @var integer
     *
     * @ORM\Column(name="merchant_id", type="smallint", nullable=false)
     */
    private $merchantId = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="reseller_id", type="string", length=6, nullable=true)
     */
    private $resellerId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=48, nullable=true)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="hostname", type="string", length=255, nullable=true)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(name="referrer", type="text", nullable=true)
     */
    private $referrer;

    /**
     * @var string
     *
     * @ORM\Column(name="trust", type="string", nullable=false)
     */
    private $trust = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="trust_sms", type="string", length=32, nullable=true)
     */
    private $trustSms;

    /**
     * @var float
     *
     * @ORM\Column(name="balance", type="float", precision=10, scale=0, nullable=true)
     */
    private $balance;

    /**
     * @var float
     *
     * @ORM\Column(name="account", type="float", precision=10, scale=0, nullable=true)
     */
    private $account;

    /**
     * @var integer
     *
     * @ORM\Column(name="intervention_duration", type="integer", nullable=false)
     */
    private $interventionDuration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="v3_migrated", type="string", nullable=false)
     */
    private $v3Migrated = 'no';

    /**
     * @var integer
     *
     * @ORM\Column(name="lb_id", type="integer", nullable=true)
     */
    private $lbId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'active';


}

