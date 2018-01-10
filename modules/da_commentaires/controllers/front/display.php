<?php

class da_commentairesdisplayModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $sql = new DbQuery();
        $sql->select('*');
        $sql->from('product', 'p');
        $exe = Db::getInstance()->executeS($sql);


        $this->context->smarty->assign(array(
            'test' => 'toto',
            'nbProducts' => array(count($exe)),
            'opt1' => Configuration::get('DA_COMMENTAIRES_OPT1'),
            'opt2' => Configuration::get('DA_COMMENTAIRES_OPT2'),
            'opt3' => Configuration::get('DA_COMMENTAIRES_OPT3'),
        ));
        $this->setTemplate('module:da_commentaires/views/templates/front/display.tpl');
    }

    public function setMedia()
    {
        parent::setMedia();


        $this->context->controller->registerStylesheet(
            'module-da_commentaires-style',
            'modules/'.$this->module->name.'/css/dacommentaires.css',
            [
                'media' => 'all',
                'priority' => 200,
            ]
        );

        $this->context->controller->registerJavascript(
        'module-da_commentaires-chartjs',
        'modules/'.$this->module->name.'/js/chart.js',
        [
            'priority' => 200,
            'position' => 'bottom'
        ]
    );
        $this->context->controller->registerJavascript(
            'module-da_commentaires-monscriptjs',
            'modules/'.$this->module->name.'/js/monscript.js',
            [
                'priority' => 200,
                'position' => 'bottom'
            ]
        );
    }
}