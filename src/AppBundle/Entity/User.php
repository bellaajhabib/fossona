<?php
/**
 * Created by PhpStorm.
 * User: habib bellaaj
 * Date: 07/05/2016
 * Time: 23:31
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 *
 * Class User
 * @package AppBundle\Entity
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var
     */
    protected $id;


}