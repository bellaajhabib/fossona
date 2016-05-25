<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city", indexes={@ORM\Index(name="city_slug", columns={"city_slug"}), @ORM\Index(name="cp", columns={"cp"}), @ORM\Index(name="id_province", columns={"id_province"})})
 * @ORM\Entity
 */
class City
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
     * @ORM\Column(name="id_province", type="string", length=5, nullable=false)
     */
    private $idProvince;

    /**
     * @var string
     *
     * @ORM\Column(name="name_city", type="string", length=255, nullable=false)
     */
    private $nameCity;

    /**
     * @var string
     *
     * @ORM\Column(name="name_city_uppercase", type="string", length=255, nullable=true)
     */
    private $nameCityUppercase;

    /**
     * @var string
     *
     * @ORM\Column(name="city_slug", type="string", length=255, nullable=false)
     */
    private $citySlug;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=255, nullable=false)
     */
    private $cp;


}

