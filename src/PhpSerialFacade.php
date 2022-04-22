<?php

namespace Rezgui\PhpSerial;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RsolutionDz\PhpSerial\Skeleton\SkeletonClass
 */
class PhpSerialFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'php-serial';
    }
}
