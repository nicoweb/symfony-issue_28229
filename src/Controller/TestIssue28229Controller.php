<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestIssue28229Controller extends Controller
{
    public function test()
    {
//        if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
//            throw new AccessDeniedException();
//        }
        return new Response('you are on the page test');
    }
}
