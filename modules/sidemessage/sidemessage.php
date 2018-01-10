<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Sidemessage extends Module
{

    public function __construct()
    {
        $this->name = 'sidemessage';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Maxime AVELINE';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);

        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Sidemessage');
        $this->description = $this->l('Sidemessage est un module qui affiche un message dans la side bar.');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('SIDEMESSAGE')) $this->warning = $this->l('No name provided');
    }

    /**
     * Module installation.
     *
     * @return bool Success of the installation
     */
     public function install()
     {
         if (Shop::isFeatureActive()) {
             Shop::setContext(Shop::CONTEXT_ALL);
         }

         return parent::install()
            && $this->registerHook('leftColumn')
            && Configuration::updateValue('SIDEMESSAGE','This is a tiny module');
     }

    public function hookDisplayLeftColumn($params)
    {
        $this->context->smarty->assign(
            array(
                'sidemessage' =>
                    Configuration::get('SIDEMESSAGE'), 'my_module_link'
                        => $this->context->link->getModuleLink('sidemessage', 'display')
            )
        );

        return $this->display(__FILE__, 'sidemessage.tpl');
    }

    public function hookDisplayRightColumn($params)
    {
        return $this->hookDisplayLeftColumn($params);
    }

    public function hookDisplayHeader()
    {
        $this->context->controller->addCSS(
            $this->_path.'css/sidemessage.css', 'all'
        );
    }

}