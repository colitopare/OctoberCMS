<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/partials/header.htm */
class __TwigTemplate_bf0bd1005897a22e8b47d6500dca35d5b061ac8a4e2828fea15ea7f07a188e83 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"main-header\">
\t<div class=\"container clearfix\">
\t\t<h1 class=\"logo\">Films avec October CMS</h1>
\t\t<nav class=\"main-nav\">
\t\t\t<ul>
\t\t\t\t<li class=\"";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6) == "home")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Accueil</a></li>
\t\t\t\t<li class=\"";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7) == "films")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("films");
        echo "\">Films</a></li>

\t\t\t</ul>
\t\t</nav>

\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"main-header\">
\t<div class=\"container clearfix\">
\t\t<h1 class=\"logo\">Films avec October CMS</h1>
\t\t<nav class=\"main-nav\">
\t\t\t<ul>
\t\t\t\t<li class=\"{% if this.page.id == 'home' %} active {% endif %}\"><a href=\"{{'home'|page}}\">Accueil</a></li>
\t\t\t\t<li class=\"{% if this.page.id == 'films' %} active {% endif %}\"><a href=\"{{'films'|page}}\">Films</a></li>

\t\t\t</ul>
\t\t</nav>

\t</div>
</header>", "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/partials/header.htm", "");
    }
}
