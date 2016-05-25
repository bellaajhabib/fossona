<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Province
 *
 * @ORM\Table(name="province", indexes={@ORM\Index(name="province_slug", columns={"province_slug"}), @ORM\Index(name="id_region", columns={"id_region"})})
 * @ORM\Entity
 */
class Province
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
     * @ORM\Column(name="id_region", type="integer", nullable=false)
     */
    private $idRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=3, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name_province", type="string", length=250, nullable=false)
     */
    private $nameProvince;

    /**
     * @var string
     *
     * @ORM\Column(name="name_province_uppercase", type="string", length=255, nullable=true)
     */
    private $nameProvinceUppercase;

    /**
     * @var string
     *
     * @ORM\Column(name="province_slug", type="string", length=255, nullable=false)
     */
    private $provinceSlug;


}

