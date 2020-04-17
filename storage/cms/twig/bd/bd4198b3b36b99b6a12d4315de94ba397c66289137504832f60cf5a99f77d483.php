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

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Films avec October CMS</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == "home")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Accueil</a></li>
      <li class=\"nav-item ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12) == "films")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("films");
        echo "\">Films</a></li>
      <li class=\"nav-item ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13) == "addactors")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("addactors");
        echo "\">Ajouter un acteur</a></li>
      <li class=\"nav-item ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14) == "login")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">
      ";
        // line 15
        if ( !($context["user"] ?? null)) {
            // line 16
            echo "        Connexion
      ";
        } else {
            // line 18
            echo "        Profil
      ";
        }
        // line 20
        echo "      </a></li>
      ";
        // line 21
        if (($context["user"] ?? null)) {
            // line 22
            echo "         <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Déconnexion</a></li>  
      ";
        }
        // line 24
        echo "    </ul>
  </div>
</nav>
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
        return array (  103 => 24,  99 => 22,  97 => 21,  94 => 20,  90 => 18,  86 => 16,  84 => 15,  76 => 14,  68 => 13,  60 => 12,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"main-header\">
\t<div class=\"container clearfix\">

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"{{'home'|page}}\">Films avec October CMS</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item {% if this.page.id == 'home' %} active {% endif %}\"><a href=\"{{'home'|page}}\">Accueil</a></li>
      <li class=\"nav-item {% if this.page.id == 'films' %} active {% endif %}\"><a href=\"{{'films'|page}}\">Films</a></li>
      <li class=\"nav-item {% if this.page.id == 'addactors' %} active {% endif %}\"><a href=\"{{'addactors'|page}}\">Ajouter un acteur</a></li>
      <li class=\"nav-item {% if this.page.id == 'login' %} active {% endif %}\"><a href=\"{{'login'|page}}\">
      {% if not user %}
        Connexion
      {% else %}
        Profil
      {% endif %}
      </a></li>
      {% if user %}
         <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Déconnexion</a></li>  
      {% endif %}
    </ul>
  </div>
</nav>
\t</div>
</header>", "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/partials/header.htm", "");
    }
}
