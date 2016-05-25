<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionCode
 *
 * @ORM\Table(name="promotion_code", uniqueConstraints={@ORM\UniqueConstraint(name="code", columns={"code"})})
 * @ORM\Entity
 */
class PromotionCode
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
     * @ORM\Column(name="code", type="string", length=255, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string", length=4, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="condition", type="string", length=255, nullable=true)
     */
    private $condition;

    /**
     * @var integer
     *
     * @ORM\Column(name="counter", type="integer", nullable=true)
     */
    private $counter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiration_date", type="datetime", nullable=false)
     */
    private $expirationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status;


}

