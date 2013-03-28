<?php

namespace Pion\DbBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PapersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('paperid')
            ->add('journal')
            ->add('volume')
            ->add('year')
            ->add('issue')
            ->add('title')
            ->add('received')
            ->add('abstract')
            ->add('startPage')
            ->add('endPage')
            ->add('ptype')
            ->add('misc')
            ->add('changed')
            ->add('sameAs')
            ->add('pagePrefix')
            ->add('miscPreamble')
            ->add('miscPostamble')
            ->add('online')
            ->add('virtualTheme')
            ->add('talkId')
            ->add('tlkStartp')
            ->add('tlkEndpg')
            ->add('virtualIssueOrder')
            ->add('virtualOnly')
            ->add('paperchain')
            ->add('paperchainId')
            ->add('openAccess')
            ->add('internalOnly')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pion\DbBundle\Entity\Papers'
        ));
    }

    public function getName()
    {
        return 'pion_dbbundle_paperstype';
    }
}
