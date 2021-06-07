<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\premiumForm;
use core\Validator;

class premiumCtrl {

    private $form;
    private $records;

       public function action_premium() {
        App::getSmarty()->display('premium.tpl');
        }


}
