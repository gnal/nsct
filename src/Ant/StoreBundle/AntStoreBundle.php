<?php

namespace Ant\StoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AntStoreBundle extends Bundle
{
    public function getParent()
    {
        return 'MsiStoreBundle';
    }
}
