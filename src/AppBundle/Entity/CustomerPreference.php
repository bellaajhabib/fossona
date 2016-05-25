<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerPreference
 *
 * @ORM\Table(name="customer_preference", uniqueConstraints={@ORM\UniqueConstraint(name="customer_id", columns={"customer_id"})})
 * @ORM\Entity
 */
class CustomerPreference
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
     * @ORM\Column(name="maintenances", type="string", nullable=false)
     */
    private $maintenances = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="newsletters", type="string", nullable=false)
     */
    private $newsletters = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="promos", type="string", nullable=false)
     */
    private $promos = 'yes';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=false)
     */
    private $updateDate = '0000-00-00 00:00:00';


}

