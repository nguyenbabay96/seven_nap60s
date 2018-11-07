<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\BaseController;
use App\Helpers\Common;

class SystemController extends BaseController
{
    protected $_common;


    public function __construct()
    {
        $this->_common = new Common();
    }

    public function getSystem()
    {
        $system['auth'] = $this->getAuth();
        return $system;
    }
}