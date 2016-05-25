<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="product_id", columns={"product_id"}), @ORM\Index(name="catalog_id", columns={"catalog_id"}), @ORM\Index(name="resource_id", columns={"resource_id"}), @ORM\Index(name="resource_catalog_id", columns={"resource_catalog_id"}), @ORM\Index(name="order_id", columns={"order_id"})})
 * @ORM\Entity
 */
class Article
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
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

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
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=true)
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="catalog_id", type="integer", nullable=true)
     */
    private $catalogId;

    /**
     * @var string
     *
     * @ORM\Column(name="resource_type", type="string", length=255, nullable=true)
     */
    private $resourceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="resource_id", type="integer", nullable=true)
     */
    private $resourceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="resource_catalog_id", type="integer", nullable=true)
     */
    private $resourceCatalogId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="operation_type", type="string", length=255, nullable=false)
     */
    private $operationType;

    /**
     * @var string
     *
     * @ORM\Column(name="period", type="string", length=255, nullable=true)
     */
    private $period;

    /**
     * @var string
     *
     * @ORM\Column(name="order_id", type="string", length=9, nullable=true)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'active';


}

