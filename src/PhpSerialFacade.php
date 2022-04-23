<?php

namespace Rezgui\Phpserial;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rezgui\Phpserial\Skeleton\SkeletonClass
 */
class PhpserialFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'phpserial';
    }
}
