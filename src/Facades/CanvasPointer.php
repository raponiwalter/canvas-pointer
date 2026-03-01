<?php

namespace Wraps\CanvasPointer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wraps\CanvasPointer\CanvasPointer
 */
class CanvasPointer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Wraps\CanvasPointer\CanvasPointer::class;
    }
}
