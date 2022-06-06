<?php

namespace Reddatasrd\Send;

use illumante\Support\Facades\Facade;
use SebastianBergmann\FileIterator\Facade;

class SendFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Send';
    }
}