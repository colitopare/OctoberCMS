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

/* /Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/movies/components/actorform/default.htm */
class __TwigTemplate_904935c843d4597355a50e2f74fd0a90a8d69613fc428464b1e486cacb1f1fbe extends \Twig\Template
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
        echo "<!-- data-request=\"onSave\" permet de lier ce formulaire à la function onSave() -->

<!-- Structure de la balie form pour un formulaire en AJAX -->
<!--  <form class=\"text-center border border-light p-5\" data-request=\"onSave\"> -->

<!-- Structure de la balie form pour un formulaire simple -->
<form class=\"text-center border border-light p-5\" method=\"POST\" action=\"";
        // line 7
        echo url("addactors");
        echo "\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\"> 
\t<h2 class=\"h4 mb-4\">Ajouter un acteur</h2>

\t<input type=\"hidden\" name=\"_handler\" value=\"onSave\">
\t<!-- Jeton de Formulaire, spécifique à October -->
\t";
        // line 12
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
\t<!-- Clé de session de Formulaire, spécifique à October -->
\t";
        // line 14
        echo call_user_func_array($this->env->getFunction('form_sessionkey')->getCallable(), ["sessionkey"]);
        echo "


\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control mb-4\" placeholder=\"Prénom de l'acteur\">
\t<input type=\"text\" id=\"lastname\" name=\"lastname\" class=\"form-control mb-4\" placeholder=\"Nom de l'acteur\">

\t<label>Photo de l acteur</label>
\t<input type=\"file\" name=\"actorimage\">

\t<button class=\"btn btn-info btn-block\" type=\"submit\">Enregistrer</button>

\t";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 25
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 26
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
\t";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 28
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/movies/components/actorform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  74 => 26,  72 => 25,  58 => 14,  53 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- data-request=\"onSave\" permet de lier ce formulaire à la function onSave() -->

<!-- Structure de la balie form pour un formulaire en AJAX -->
<!--  <form class=\"text-center border border-light p-5\" data-request=\"onSave\"> -->

<!-- Structure de la balie form pour un formulaire simple -->
<form class=\"text-center border border-light p-5\" method=\"POST\" action=\"{{ url('addactors') }}\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\"> 
\t<h2 class=\"h4 mb-4\">Ajouter un acteur</h2>

\t<input type=\"hidden\" name=\"_handler\" value=\"onSave\">
\t<!-- Jeton de Formulaire, spécifique à October -->
\t{{ form_token() }}
\t<!-- Clé de session de Formulaire, spécifique à October -->
\t{{ form_sessionkey() }}


\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control mb-4\" placeholder=\"Prénom de l'acteur\">
\t<input type=\"text\" id=\"lastname\" name=\"lastname\" class=\"form-control mb-4\" placeholder=\"Nom de l'acteur\">

\t<label>Photo de l acteur</label>
\t<input type=\"file\" name=\"actorimage\">

\t<button class=\"btn btn-info btn-block\" type=\"submit\">Enregistrer</button>

\t{% flash success %}
\t\t<p>{{ message }}</p>
\t{% endflash %}

</form>
", "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/movies/components/actorform/default.htm", "");
    }
}
