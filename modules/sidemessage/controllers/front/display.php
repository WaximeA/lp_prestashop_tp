<?php

class sidemessagedisplayModuleFrontController extends  ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $this->context->smarty->assign(array(
            'test'=>'toto',
        ));
        $this->setTemplate('module:sidemessage/views/templates/front/display.tpl');
    }
}