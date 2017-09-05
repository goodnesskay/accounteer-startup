<?php

namespace CompanyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="CompanyBundle\Repository\CompanyRepository")
 * @Vich\Uploadable
 *
 */
class Company
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Many Companies have One User.
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="companies")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="company_logo", type="string", length=255, nullable=true)
     */
    private $companyLogo;

    /**
     * @Vich\UploadableField(mapping="company_logo", fileNameProperty="companyLogo")
     *
     * @var File $company_logo_file
     * @Assert\File(
     *     maxSize="5M",
     *     mimeTypes={"image/png","image/gif", "image/jpeg", "image/png"},
     *     mimeTypesMessage = "Please upload a valid image"
     * )
     */
    protected $company_logo_file;

    /**
     * @var string
     *
     * @ORM\Column(name="company_bg_image", type="string", length=255, nullable=true)
     */
    private $companyBgImage;

    /**
     * @Vich\UploadableField(mapping="company_bg_image", fileNameProperty="companyBgImage")
     *
     * @var File $company_bg_file
     * @Assert\File(
     *     maxSize="5M",
     *     mimeTypes={"image/png","image/gif", "image/jpeg", "image/png"},
     *     mimeTypesMessage = "Please upload a valid background image"
     * )
     */
    protected $company_bg_file;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="company_email", type="string", length=255)
     */
    private $companyEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="company_mobile_number", type="string", length=255)
     */
    private $companyMobileNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="company_address", type="string", length=255)
     */
    private $companyAddress;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set companyLogo
     *
     * @param string $companyLogo
     *
     * @return Company
     */
    public function setCompanyLogo($companyLogo)
    {
        $this->companyLogo = $companyLogo;

        return $this;
    }

    /**
     * Get companyLogo
     *
     * @return string
     */
    public function getCompanyLogo()
    {
        return $this->companyLogo;
    }

    /**
     * Set companyBgImage
     *
     * @param string $companyBgImage
     *
     * @return Company
     */
    public function setCompanyBgImage($companyBgImage)
    {
        $this->companyBgImage = $companyBgImage;

        return $this;
    }

    /**
     * Get companyBgImage
     *
     * @return string
     */
    public function getCompanyBgImage()
    {
        return $this->companyBgImage;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Company
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set companyEmail
     *
     * @param string $companyEmail
     *
     * @return Company
     */
    public function setCompanyEmail($companyEmail)
    {
        $this->companyEmail = $companyEmail;

        return $this;
    }

    /**
     * Get companyEmail
     *
     * @return string
     */
    public function getCompanyEmail()
    {
        return $this->companyEmail;
    }

    /**
     * Set companyMobileNumber
     *
     * @param string $companyMobileNumber
     *
     * @return Company
     */
    public function setCompanyMobileNumber($companyMobileNumber)
    {
        $this->companyMobileNumber = $companyMobileNumber;

        return $this;
    }

    /**
     * Get companyMobileNumber
     *
     * @return string
     */
    public function getCompanyMobileNumber()
    {
        return $this->companyMobileNumber;
    }

    /**
     * Set companyAddress
     *
     * @param string $companyAddress
     *
     * @return Company
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->companyAddress = $companyAddress;

        return $this;
    }

    /**
     * Get companyAddress
     *
     * @return string
     */
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Company
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
