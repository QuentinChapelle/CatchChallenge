<?php

namespace GamerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GamerBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
