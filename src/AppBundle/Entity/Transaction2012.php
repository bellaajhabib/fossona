<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction2012
 *
 * @ORM\Table(name="transaction_2012")
 * @ORM\Entity
 */
class Transaction2012
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
     * @ORM\Column(name="order_id", type="string", length=9, nullable=true)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_date", type="datetime", nullable=false)
     */
    private $paymentDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="payment_mean", type="string", nullable=true)
     */
    private $paymentMean;

    /**
     * @var string
     *
     * @ORM\Column(name="pointed", type="string", nullable=false)
     */
    private $pointed = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;


}

