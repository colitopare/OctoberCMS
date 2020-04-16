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

/* /Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/contact/components/contactform/default.htm */
class __TwigTemplate_ff239dbfc14bfe689b9d73025620c8ab43a6569a9cb454b1773390fa76af502c extends \Twig\Template
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
        echo "<!-- data-request=\"onSend\" permet de lier ce formulaire à la function onSend() -->
<form class=\"text-center border border-light p-5\" data-request=\"onSend\">

\t<h2 class=\"h4 mb-4\">Nous contacter</h2>

\t<!-- Name -->
\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control mb-4\" placeholder=\"Nom\">
\t";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "name"], "method", false, false, false, 8), "html", null, true);
        echo "
\t<!-- Email -->
\t<input type=\"email\" id=\"email\" name=\"email\" class=\"form-control mb-4\" placeholder=\"E-mail\">
\t";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [0 => "email"], "method", false, false, false, 11), "html", null, true);
        echo "

\t<!-- Subject -->
\t<input
\ttype=\"text\" id=\"subject\" name=\"subject\" class=\"form-control mb-4\" placeholder=\"Sujet\">

\t<!-- Message -->
\t<div class=\"form-group\">
\t\t<textarea class=\"form-control rounded-0\" id=\"message\" name=\"content\" rows=\"3\" placeholder=\"Veuillez taper votre message ici\"></textarea>
\t</div>

\t<!-- Copy 
\t\t\t    <div class=\"custom-control custom-checkbox mb-4\">
\t\t\t        <input type=\"checkbox\" class=\"custom-control-input\" id=\"contactFormCopy\">
\t\t\t        <label class=\"custom-control-label\" for=\"contactFormCopy\">Envoyer moi une copy du message</label>
\t\t\t    </div>
\t\t\t-->
\t<!-- Send button -->
\t<button class=\"btn btn-info btn-block\" type=\"submit\">Envoyer</button>

\t<ul>
\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", [], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 33
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t</ul>

</form>
";
    }

    public function getTemplateName()
    {
        return "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/contact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  80 => 33,  76 => 32,  52 => 11,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- data-request=\"onSend\" permet de lier ce formulaire à la function onSend() -->
<form class=\"text-center border border-light p-5\" data-request=\"onSend\">

\t<h2 class=\"h4 mb-4\">Nous contacter</h2>

\t<!-- Name -->
\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control mb-4\" placeholder=\"Nom\">
\t{{errors.first('name')}}
\t<!-- Email -->
\t<input type=\"email\" id=\"email\" name=\"email\" class=\"form-control mb-4\" placeholder=\"E-mail\">
\t{{errors.first('email')}}

\t<!-- Subject -->
\t<input
\ttype=\"text\" id=\"subject\" name=\"subject\" class=\"form-control mb-4\" placeholder=\"Sujet\">

\t<!-- Message -->
\t<div class=\"form-group\">
\t\t<textarea class=\"form-control rounded-0\" id=\"message\" name=\"content\" rows=\"3\" placeholder=\"Veuillez taper votre message ici\"></textarea>
\t</div>

\t<!-- Copy 
\t\t\t    <div class=\"custom-control custom-checkbox mb-4\">
\t\t\t        <input type=\"checkbox\" class=\"custom-control-input\" id=\"contactFormCopy\">
\t\t\t        <label class=\"custom-control-label\" for=\"contactFormCopy\">Envoyer moi une copy du message</label>
\t\t\t    </div>
\t\t\t-->
\t<!-- Send button -->
\t<button class=\"btn btn-info btn-block\" type=\"submit\">Envoyer</button>

\t<ul>
\t\t{% for error in errors.all() %}
\t\t\t<li>{{ error }}</li>
\t\t{% endfor %}
\t</ul>

</form>
", "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/contact/components/contactform/default.htm", "");
    }
}
