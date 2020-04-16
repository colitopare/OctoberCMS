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
<form class=\"text-center border border-light p-5\" data-request=\"onSave\">

\t<h2 class=\"h4 mb-4\">Ajouter un acteur</h2>

\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control mb-4\" placeholder=\"Prénom de l'acteur\">
\t<input type=\"text\" id=\"lastname\" name=\"lastname\" class=\"form-control mb-4\" placeholder=\"Nom de l'acteur\">

\t<button class=\"btn btn-info btn-block\" type=\"submit\">Enregistrer</button>

\t";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 11
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 12
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
\t";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 14
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
        return array (  57 => 14,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- data-request=\"onSave\" permet de lier ce formulaire à la function onSave() -->
<form class=\"text-center border border-light p-5\" data-request=\"onSave\">

\t<h2 class=\"h4 mb-4\">Ajouter un acteur</h2>

\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control mb-4\" placeholder=\"Prénom de l'acteur\">
\t<input type=\"text\" id=\"lastname\" name=\"lastname\" class=\"form-control mb-4\" placeholder=\"Nom de l'acteur\">

\t<button class=\"btn btn-info btn-block\" type=\"submit\">Enregistrer</button>

\t{% flash success %}
\t\t<p>{{ message }}</p>
\t{% endflash %}

</form>
", "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/movies/components/actorform/default.htm", "");
    }
}
