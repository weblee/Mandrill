<?php

namespace Weblee\Mandrill;

use Illuminate\Support\Facades\Facade;

class MandrillFacade extends Facade {

    /**
     * Create Facade Accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'mandrill_mail'; }

} 