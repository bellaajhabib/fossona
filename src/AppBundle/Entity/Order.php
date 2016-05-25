<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order", uniqueConstraints={@ORM\UniqueConstraint(name="order_id", columns={"order_id"}), @ORM\UniqueConstraint(name="invoice_id", columns={"invoice_id"})})
 * @ORM\Entity
 */
class Order
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
     * @ORM\Column(name="order_id", type="string", length=9, nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_id", type="string", length=9, nullable=true)
     */
    private $invoiceId;

    /**
     * @var string
     *
     * @ORM\Column(name="billing_contact_id", type="string", length=8, nullable=false)
     */
    private $billingContactId;

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
     * @var \DateTime
     *
     * @ORM\Column(name="validity_date", type="datetime", nullable=false)
     */
    private $validityDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'waiting';

    /**
     * @var string
     *
     * @ORM\Column(name="paid", type="string", nullable=false)
     */
    private $paid;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_mean", type="string", nullable=true)
     */
    private $paymentMean;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_date", type="datetime", nullable=true)
     */
    private $paymentDate;

    /**
     * @var float
     *
     * @ORM\Column(name="vat", type="float", precision=10, scale=0, nullable=true)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="vat_intra_number", type="string", length=255, nullable=true)
     */
    private $vatIntraNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="authkey", type="string", length=255, nullable=false)
     */
    private $authkey;


}

