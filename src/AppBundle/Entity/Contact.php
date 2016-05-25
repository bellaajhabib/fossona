<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact", uniqueConstraints={@ORM\UniqueConstraint(name="prefix", columns={"prefix", "prefix_id"}), @ORM\UniqueConstraint(name="contact_id", columns={"contact_id"})}, indexes={@ORM\Index(name="customer_id", columns={"customer_id"})})
 * @ORM\Entity
 */
class Contact
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
     * @ORM\Column(name="contact_id", type="string", length=8, nullable=false)
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_id", type="string", length=6, nullable=true)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="prefix", type="string", length=2, nullable=false)
     */
    private $prefix;

    /**
     * @var integer
     *
     * @ORM\Column(name="prefix_id", type="smallint", nullable=false)
     */
    private $prefixId = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type = 'individual';

    /**
     * @var string
     *
     * @ORM\Column(name="orgname", type="string", length=128, nullable=true)
     */
    private $orgname;

    /**
     * @var string
     *
     * @ORM\Column(name="siren", type="string", length=16, nullable=true)
     */
    private $siren;

    /**
     * @var string
     *
     * @ORM\Column(name="intra_number", type="string", length=32, nullable=true)
     */
    private $intraNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="civility", type="string", nullable=true)
     */
    private $civility;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=128, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=128, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=128, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="address_more", type="string", length=128, nullable=true)
     */
    private $addressMore;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=16, nullable=false)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=128, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state_province", type="string", length=80, nullable=true)
     */
    private $stateProvince;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=32, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_gsm", type="string", length=32, nullable=true)
     */
    private $phoneGsm;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=32, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="fr_domain", type="integer", nullable=false)
     */
    private $frDomain = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="city_of_birth", type="string", length=255, nullable=true)
     */
    private $cityOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="department_of_birth", type="string", length=3, nullable=true)
     */
    private $departmentOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="country_of_birth", type="string", length=2, nullable=true)
     */
    private $countryOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="passport", type="string", length=128, nullable=true)
     */
    private $passport;

    /**
     * @var string
     *
     * @ORM\Column(name="identity_card", type="string", length=128, nullable=true)
     */
    private $identityCard;

    /**
     * @var string
     *
     * @ORM\Column(name="nexus_purpose", type="string", nullable=true)
     */
    private $nexusPurpose;

    /**
     * @var string
     *
     * @ORM\Column(name="nexus_cat", type="string", nullable=true)
     */
    private $nexusCat;

    /**
     * @var string
     *
     * @ORM\Column(name="nic_id", type="string", length=8, nullable=true)
     */
    private $nicId;

    /**
     * @var string
     *
     * @ORM\Column(name="afnic_id", type="string", length=8, nullable=true)
     */
    private $afnicId;

    /**
     * @var string
     *
     * @ORM\Column(name="benic_id", type="string", length=16, nullable=true)
     */
    private $benicId;

    /**
     * @var string
     *
     * @ORM\Column(name="lb_id", type="string", length=16, nullable=true)
     */
    private $lbId;

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
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'active';


}

