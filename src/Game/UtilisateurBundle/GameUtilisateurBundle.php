<?php

namespace Game\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GameUtilisateurBundle extends Bundle
{
    public function getParent()
  {
    return 'FOSUserBundle';
  }
}
