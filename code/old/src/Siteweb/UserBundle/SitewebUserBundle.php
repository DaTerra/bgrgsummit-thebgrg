<?php

namespace Siteweb\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SitewebUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
