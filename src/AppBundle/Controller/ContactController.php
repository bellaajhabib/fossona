<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
class ContactController extends Controller
{
    /**
     * @Route("/super", name="super")
     *
     */
    public function superAction(Request $request)
    {
        return $this->render('AppBundle::super.html.twig');

    }

    /**
     * @Route("/admin", name="admin")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function adminAction(Request $request)
    {
        return $this->render('AppBundle::index.html.twig');

    }

    /**
     * @Route("/user", name="user")
     */
    public function userAction(Request $request)
    {
        return $this->render('AppBundle::user.html.twig');

    }
}
