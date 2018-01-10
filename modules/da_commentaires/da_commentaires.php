<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Da_Commentaires extends Module
{
    public function __construct()
    {
        $this->name = 'da_commentaires';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'David Annebicque';
        $this->need_instance = 0;
        $this->ps_versions_compliancy =
            array(
                'min' => '1.7',
                'max' =>
                    _PS_VERSION_
            );

        $this->bootstrap = true;

        parent::__construct();


        $this->displayName = $this->l('DA Commentaires');
        $this->description = $this->l('Description de mon premier module.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('DACOMMENTAIRES_NAME')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function getContent()
    {
        $output = null;

        if (Tools::isSubmit('submit' . $this->name)) {
            $myopt1 = Tools::getValue('DA_COMMENTAIRES_OPT1');
            $myopt2 = Tools::getValue('DA_COMMENTAIRES_OPT2');
            $myopt3 = Tools::getValue('DA_COMMENTAIRES_OPT3');

           /* if (false) {
                $output .= $this->displayError($this->getTranslator()->trans('Invalid Configuration value', array(),
                    'Modules.Da_Commentaires'));
            } else {*/
                Configuration::updateValue('DA_COMMENTAIRES_OPT1', $myopt1);
                Configuration::updateValue('DA_COMMENTAIRES_OPT2', $myopt2);
                Configuration::updateValue('DA_COMMENTAIRES_OPT3', $myopt3);
                $output .= $this->displayConfirmation($this->getTranslator()->trans('Settings updated', array(),
                    'Modules.Da_Commentaires'));
            //}
        }

        return $output . $this->displayForm();
    }

    public function displayForm()
    {
        // Get default language
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        // Init Fields form array
        $fields_form[0]['form'] = array(
            'legend' => array('title' => $this->l('Settings'),),
            'input'  => array(
                array(
                    'type' => 'switch',
                    'label' => $this->trans('Display statistics of products', array(), 'Modules.da_commentaires'),
                    'name' => 'DA_COMMENTAIRES_OPT1',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => true,
                            'label' => $this->trans('Enabled', array(), 'Admin.Global'),
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => false,
                            'label' => $this->trans('Disabled', array(), 'Admin.Global'),
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->trans('Display statistics of customers', array(), 'Modules.da_commentaires'),
                    'name' => 'DA_COMMENTAIRES_OPT2',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => true,
                            'label' => $this->trans('Enabled', array(), 'Admin.Global'),
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => false,
                            'label' => $this->trans('Disabled', array(), 'Admin.Global'),
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->trans('Display statistics of manufacturers', array(), 'Modules.da_commentaires'),
                    'name' => 'DA_COMMENTAIRES_OPT3',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => true,
                            'label' => $this->trans('Enabled', array(), 'Admin.Global'),
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => false,
                            'label' => $this->trans('Disabled', array(), 'Admin.Global'),
                        )
                    ),
                )
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'btn btn-default pull-right'
            )
        );

        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;


        // Title and toolbar
        $helper->title = $this->displayName;
        $helper->show_toolbar = true; // false -> remove toolbar
        $helper->toolbar_scroll = true; // yes - > Toolbar is always visible on the top of the screen.
        $helper->submit_action = 'submit' . $this->name;
        $helper->toolbar_btn = array(
            'save' =>
                array(
                    'desc' => $this->l('Save'),
                    'href' =>
                        AdminController::$currentIndex . '&configure=' . $this->name . '&save' . $this->name .
                        '&token=' . Tools::getAdminTokenLite('AdminModules'),
                )
        );

        // Load current value
        $helper->fields_value['DA_COMMENTAIRES_OPT1'] = Configuration::get('DA_COMMENTAIRES_OPT1');
        $helper->fields_value['DA_COMMENTAIRES_OPT2'] = Configuration::get('DA_COMMENTAIRES_OPT2');
        $helper->fields_value['DA_COMMENTAIRES_OPT3'] = Configuration::get('DA_COMMENTAIRES_OPT3');

        return $helper->generateForm($fields_form);
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
            Configuration::updateValue('DACOMMENTAIRES_NAME', 'my friend') &&
            Configuration::updateValue('DA_COMMENTAIRES_OPT1', true) &&
            Configuration::updateValue('DA_COMMENTAIRES_OPT2', true) &&
            Configuration::updateValue('DA_COMMENTAIRES_OPT3', true)
            ;
    }

    public function hookDisplayLeftColumn($params)
    {
        $this->context->smarty->assign(
            array(
                'da_commentaires_name' => Configuration::get('DACOMMENTAIRES_NAME'),
                'da_commentaires_link' => $this->context->link->getModuleLink('da_commentaires',
                    'display')
            ));

        return $this->display(__FILE__, 'da_commentaires.tpl');
    }

    public function hookDisplayRightColumn($params)
    {
        return $this->hookDisplayLeftColumn($params);
    }

    public function hookActionFrontControllerSetMedia($params)
    {
        $this->context->controller->registerStylesheet(
            'module-da_commentaires-style',
            'modules/' . $this->name . '/css/dacommentaires.css',
            [
                'media'    => 'all',
                'priority' => 200,
            ]
        );

        $this->context->controller->registerJavascript(
            'module-da_commentaires-chartjs',
            'modules/' . $this->name . '/js/chart.js',
            [
                'priority'  => 200,
                'attribute' => 'async',
            ]
        );
    }
}