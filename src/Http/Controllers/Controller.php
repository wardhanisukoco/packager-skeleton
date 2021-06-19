<?php

namespace :uc:vendor\:uc:package\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    protected function view(String $view = null, Array $data = [], Array $mergeData = []) {
        return view(':lc:package::' . $view, $data, $mergeData);
    }
}
