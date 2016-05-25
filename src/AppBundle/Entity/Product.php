<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
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
     * @ORM\Column(name="catalog_id", type="integer", nullable=false)
     */
    private $catalogId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insert_date", type="datetime", nullable=true)
     */
    private $insertDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=false)
     */
    private $updateDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiration_date", type="datetime", nullable=false)
     */
    private $expirationDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'active';

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="auto_renew", type="string", nullable=false)
     */
    private $autoRenew = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="admin_contact_id", type="string", length=6, nullable=false)
     */
    private $adminContactId;

    /**
     * @var string
     *
     * @ORM\Column(name="tech_contact_id", type="string", length=6, nullable=false)
     */
    private $techContactId;

    /**
     * @var string
     *
     * @ORM\Column(name="billing_contact_id", type="string", length=6, nullable=false)
     */
    private $billingContactId;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_contact_id", type="string", length=6, nullable=false)
     */
    private $ownerContactId;

    /**
     * @var string
     *
     * @ORM\Column(name="billing_mode", type="string", nullable=false)
     */
    private $billingMode = 'prepaid';

    /**
     * @var string
     *
     * @ORM\Column(name="period", type="string", nullable=false)
     */
    private $period = '12m';

    /**
     * @var string
     *
     * @ORM\Column(name="period_debit", type="string", nullable=true)
     */
    private $periodDebit;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_domains", type="integer", nullable=true)
     */
    private $maxDomains;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_sqldb", type="integer", nullable=true)
     */
    private $maxSqldb;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_mail_alias", type="integer", nullable=true)
     */
    private $maxMailAlias;

    /**
     * @var string
     *
     * @ORM\Column(name="hotliner_id", type="string", length=6, nullable=true)
     */
    private $hotlinerId;

    /**
     * @var string
     *
     * @ORM\Column(name="relance", type="string", nullable=false)
     */
    private $relance = '100';

    /**
     * @var string
     *
     * @ORM\Column(name="authkey", type="string", length=255, nullable=false)
     */
    private $authkey;


}

