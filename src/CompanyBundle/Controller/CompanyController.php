<?php

namespace CompanyBundle\Controller;

use CompanyBundle\Entity\Company;
use CompanyBundle\Form\CompanyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CompanyController extends Controller
{

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

            $this->get('session')->getFlashBag()->add(
                'alert',
                'New Company Added!'
            );

            return $this->redirect($this->generateUrl(
                'company_bundle_list_company'
            ));
        }

        return $this->render('CompanyBundle:Company:create.html.twig',[
            'form' => $form->createView()
        ]);
    }

    public function listAction()
    {
        $userId = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $companies = $em->getRepository('CompanyBundle:Company')->findBy(array('user' => $userId));

        return $this->render('CompanyBundle:Company:list.html.twig',[
            'companies' => $companies
        ]);
    }

    public function editAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository('CompanyBundle:Company')->find($id);

        $form = $this->createForm(CompanyType::class,$company);
        $form->handleRequest($request);

        if (!$company) {
            throw $this->createNotFoundException(
                'No Company found for id '.$id
            );
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'alert',
                'Company Updated!'
            );
            return $this->redirect($this->generateUrl('company_bundle_add_edit',[
                'id' => $id
            ]));
        }

        return $this->render('CompanyBundle:Company:edit.html.twig',[
            'form' => $form->createView(),
            'company' => $company
        ]);

    }

    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository('CompanyBundle:Company')->find($id);

        if (!$company) {
            throw $this->createNotFoundException(
                'No company found for id '.$id
            );
        } else {
            $em->remove($company);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'alert',
                'Company Deleted!'
            );
            return $this->redirect($this->generateUrl('company_bundle_list_company'));
        }
    }
}
