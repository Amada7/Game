<?php

namespace Game\UtilisateurBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{
     public function loginAction(Request $request) {
       $response = parent::loginAction($request);
        return $response;  
    }
    

   
    
    
    
}
