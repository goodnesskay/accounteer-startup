<?php

namespace CompanyBundle\Controller;

use CompanyBundle\Entity\Company;
use CompanyBundle\Form\CompanyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CompanyController extends Controller
{
    /**
     * @Route("/company", name="add_company")
     */
    public function createAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $company = new Company();

        $form = $this->createForm(CompanyType::class,$company);
        $form->handleRequest($request);

        $company->setUser($user);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();

            return $this->redirect($this->generateUrl(
                'company_list'
            ));
        }

        return $this->render('CompanyBundle:Company:create.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/company/list", name="company_list")
     */
    public function listAction()
    {
        $userId = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $companies = $em->getRepository('CompanyBundle:Company')->findBy(array('user' => $userId));

        return $this->render('CompanyBundle:Company:list.html.twig',[
            'companies' => $companies
        ]);
    }
}
