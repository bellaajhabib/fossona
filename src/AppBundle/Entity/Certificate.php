<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificate
 *
 * @ORM\Table(name="certificate", uniqueConstraints={@ORM\UniqueConstraint(name="certificate_id", columns={"certificate_id"})})
 * @ORM\Entity
 */
class Certificate
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
     * @ORM\Column(name="certificate_id", type="integer", nullable=false)
     */
    private $certificateId;

    /**
     * @var string
     *
     * @ORM\Column(name="approverEmail", type="string", length=255, nullable=true)
     */
    private $approveremail;

    /**
     * @var string
     *
     * @ORM\Column(name="WebServerType", type="string", length=255, nullable=true)
     */
    private $webservertype;

    /**
     * @var string
     *
     * @ORM\Column(name="adminFirstName", type="string", length=255, nullable=true)
     */
    private $adminfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="adminLastName", type="string", length=255, nullable=true)
     */
    private $adminlastname;

    /**
     * @var string
     *
     * @ORM\Column(name="adminAddress", type="string", length=255, nullable=true)
     */
    private $adminaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="adminCity", type="string", length=255, nullable=true)
     */
    private $admincity;

    /**
     * @var string
     *
     * @ORM\Column(name="adminStateProvince", type="string", length=255, nullable=true)
     */
    private $adminstateprovince;

    /**
     * @var string
     *
     * @ORM\Column(name="adminPostalCode", type="string", length=20, nullable=true)
     */
    private $adminpostalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="adminCountry", type="string", length=2, nullable=true)
     */
    private $admincountry;

    /**
     * @var string
     *
     * @ORM\Column(name="adminPhone", type="string", length=255, nullable=true)
     */
    private $adminphone;

    /**
     * @var string
     *
     * @ORM\Column(name="csr", type="text", length=65535, nullable=true)
     */
    private $csr;

    /**
     * @var string
     *
     * @ORM\Column(name="certificate", type="text", length=65535, nullable=true)
     */
    private $certificate;

    /**
     * @var string
     *
     * @ORM\Column(name="intermediate_certificate", type="text", length=65535, nullable=true)
     */
    private $intermediateCertificate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status;


}

