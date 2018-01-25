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
        $this->description = $this->l('Ceci est un module de commentaires présent sur les pages produits');

        $this->confirmUninstall = $this->l('Êtes-vous sûr de vouloir désinstaller ce module ?');

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
            $this->registerHook('maCommentaires') &&
            $this->registerHook('actionFrontControllerSetMedia') &&
            $this->installDb() &&
            Configuration::updateValue('MACOMMENTAIRES_NAME', 'my friend')
            ;
    }

    public function hookMaCommentaires($params)
    {
        /** @var int $productId */
        $productId = $params['product']['id'];

        /** @var object $link */
        $link = new Link();
        /** @var string $url */
        $url = $link->getProductLink($productId);

        $this->context->smarty->assign(
            array(
                'ma_commentaires_name' => Configuration::get('MACOMMENTAIRES_NAME'),
                'ma_commentaires_link' => $this->context->link->getModuleLink('ma_commentaires',
                    'display'),
                'product_id' => $productId,
                'url' => $url
            ));
        return $this->display(__FILE__, 'ma_commentaires.tpl');
    }

    public function installDB()
    {
        /** @var string $table */
        $table = _DB_PREFIX_ . 'macommentaires';
        $return = true;
        $return &= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'.$table.'` (
              `id_comment` int(11) NOT NULL AUTO_INCREMENT,
              `product_id` int(11) NOT NULL,
              `comment` varchar(255) NOT NULL,
              `user` varchar(255) NOT NULL,
              `date_add` datetime NOT NULL,
              PRIMARY KEY (`id_comment`)
            ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
        ');
        return $return;
    }
}