<?php

namespace Mstfkhazaal\NestedList\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mstfkhazaal\NestedList\NestedList
 */
class NestedList extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mstfkhazaal\NestedList\NestedList::class;
    }
}
