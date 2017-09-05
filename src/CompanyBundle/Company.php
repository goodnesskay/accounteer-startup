<?php
/**
 * Created by PhpStorm.
 * User: goodnesskay
 * Date: 9/5/17
 * Time: 3:30 PM
 */

namespace CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="CompanyBundle\Repository\CompanyRepository")
 * @Vich\Uploadable
 */
class Company
{

}
