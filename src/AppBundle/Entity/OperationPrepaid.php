<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperationPrepaid
 *
 * @ORM\Table(name="operation_prepaid")
 * @ORM\Entity
 */
class OperationPrepaid
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
    private $paymentDate;


}

