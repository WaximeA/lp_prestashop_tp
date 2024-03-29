<?php

/* PrestaShopBundle:Admin/Common/_partials:_header_tab.html.twig */
class __TwigTemplate_da6142eb111e22b8826a910b857ad741917a151d8b96f75d8b46d721ae443cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_421da8bbef0c5b9c4c226c94012206296e5009c1184fd666ab0bd16eebb22c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421da8bbef0c5b9c4c226c94012206296e5009c1184fd666ab0bd16eebb22c1a->enter($__internal_421da8bbef0c5b9c4c226c94012206296e5009c1184fd666ab0bd16eebb22c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Common/_partials:_header_tab.html.twig"));

        // line 25
        echo "<a class=\"tab";
        if ($this->getAttribute(($context["tabData"] ?? $this->getContext($context, "tabData")), "isCurrent", array())) {
            echo " current";
        }
        echo "\"
   href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["tabData"] ?? $this->getContext($context, "tabData")), "route", array()));
        echo "\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["tabData"] ?? $this->getContext($context, "tabData")), "title", array()), array(), "AdminControllersListener"), "html", null, true);
        // line 28
        if ($this->getAttribute(($context["tabData"] ?? null), "notificationsCounter", array(), "any", true, true)) {
            // line 29
            echo "  <div class=\"notification-container\">
    <span class=\"notification-counter\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tabData"] ?? $this->getContext($context, "tabData")), "notificationsCounter", array()), "html", null, true);
            echo "</span>
  </div>
  ";
        }
        // line 33
        echo "</a>
";
        
        $__internal_421da8bbef0c5b9c4c226c94012206296e5009c1184fd666ab0bd16eebb22c1a->leave($__internal_421da8bbef0c5b9c4c226c94012206296e5009c1184fd666ab0bd16eebb22c1a_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Common/_partials:_header_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 33,  39 => 30,  36 => 29,  34 => 28,  32 => 27,  29 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
<a class=\"tab{% if tabData.isCurrent %} current{% endif %}\"
   href=\"{{ path(tabData.route)}}\">
  {{- tabData.title|trans({}, 'AdminControllersListener') -}}
  {% if tabData.notificationsCounter is defined %}
  <div class=\"notification-container\">
    <span class=\"notification-counter\">{{ tabData.notificationsCounter }}</span>
  </div>
  {% endif %}
</a>
", "PrestaShopBundle:Admin/Common/_partials:_header_tab.html.twig", "/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/src/PrestaShopBundle/Resources/views/Admin/Common/_partials/_header_tab.html.twig");
    }
}
