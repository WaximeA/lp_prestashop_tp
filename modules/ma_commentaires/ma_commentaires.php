<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Ma_Commentaires extends Module
{
    public function __construct()
    {
        $this->name = 'ma_commentaires';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Maxime AVELINE';
        $this->need_instance = 0;
        $this->ps_versions_compliancy =
            array(
                'min' => '1.7',
                'max' =>
                    _PS_VERSION_
            );

        $this->bootstrap = true;

        parent::__construct();


        $this->displayName = $this->l('MA Commentaires');
        $this->description = $this->l('Ceci est un module de commentaire présent sur les pages produits');

        $this->confirmUninstall = $this->l('Êtes-vous sûr de vouloir désinstaller le module MA Commentaire ?');

        if (!Configuration::get('MACOMMENTAIRES_NAME')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return parent::install() &&
            $this->registerHook('leftColumn') &&
            $this->registerHook('rightColumn') &&
            $this->registerHook('actionFrontControllerSetMedia') &&
            Configuration::updateValue('MACOMMENTAIRES_NAME', 'my friend') &&
            Configuration::updateValue('MA_COMMENTAIRES_OPT1', true) &&
            Configuration::updateValue('MA_COMMENTAIRES_OPT2', true) &&
            Configuration::updateValue('MA_COMMENTAIRES_OPT3', true)
            ;
    }
}