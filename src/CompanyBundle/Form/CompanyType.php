<?php

namespace CompanyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class CompanyType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('companyLogoFile', VichFileType::class, array(
            'required' => false,
            'label'=>'Company Logo',
        ))
            ->add('companyBgFile', VichFileType::class, array(
                'required' => false,
                'label'=>'Company Background Image',
            ))
            ->add('companyName')
            ->add('companyEmail')
            ->add('companyMobileNumber')
            ->add('companyAddress')
            ->add('submit',SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CompanyBundle\Entity\Company'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'companybundle_company';
    }


}
