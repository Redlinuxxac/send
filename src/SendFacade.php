<?php

namespace Reddatasrd\Send;

use illumante\Support\Facades\Facade;

class SendFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Send';
    }
}