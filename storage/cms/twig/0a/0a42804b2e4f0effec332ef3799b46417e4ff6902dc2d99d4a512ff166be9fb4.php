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
<form class=\"text-center border border-light p-5\" data-request=\"contactform::onSend\">

\t<h2 class=\"h4 mb-4\">Nous contacter</h2>

\t<!-- Name -->
\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control mb-4\" placeholder=\"Nom\">
\t";
        // line 9
        echo "\t";
        // line 10
        echo "\t<!-- Email -->
\t<input type=\"email\" id=\"email\" name=\"email\" class=\"form-control mb-4\" placeholder=\"E-mail\"> ";
        // line 12
        echo "\t";
        // line 13
        echo "
\t<!-- Subject -->
\t<input
\ttype=\"text\" id=\"subject\" name=\"subject\" class=\"form-control mb-4\" placeholder=\"Sujet\"> <!-- Message -->
\t<div class=\"form-group\">
\t\t<textarea class=\"form-control rounded-0\" id=\"message\" name=\"content\" rows=\"3\" placeholder=\"Veuillez taper votre message ici\"></textarea>
\t</div>

\t<!-- Copy 
\t\t\t\t\t\t\t\t\t\t    <div class=\"custom-control custom-checkbox mb-4\">
\t\t\t\t\t\t\t\t\t\t        <input type=\"checkbox\" class=\"custom-control-input\" id=\"contactFormCopy\">
\t\t\t\t\t\t\t\t\t\t        <label class=\"custom-control-label\" for=\"contactFormCopy\">Envoyer moi une copy du message</label>
\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t-->
\t<!-- Send button -->
\t<button class=\"btn btn-info btn-block\" type=\"submit\">Envoyer</button>

\t";
        // line 31
        echo "\t";
        // line 36
        echo "
</form>

<div id=\"result\"></div>
";
    }

    public function getTemplateName()
    {
        return "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/contact/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  72 => 31,  53 => 13,  51 => 12,  48 => 10,  46 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- data-request=\"onSend\" permet de lier ce formulaire à la function onSend() -->
<form class=\"text-center border border-light p-5\" data-request=\"contactform::onSend\">

\t<h2 class=\"h4 mb-4\">Nous contacter</h2>

\t<!-- Name -->
\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control mb-4\" placeholder=\"Nom\">
\t{# Pour affichier les messages d'erreur sans l'Ajax #}
\t{# {{errors.first('name')}} #}
\t<!-- Email -->
\t<input type=\"email\" id=\"email\" name=\"email\" class=\"form-control mb-4\" placeholder=\"E-mail\"> {# Pour affichier les messages d'erreur sans l'Ajax #}
\t{# {{errors.first('email')}} #}

\t<!-- Subject -->
\t<input
\ttype=\"text\" id=\"subject\" name=\"subject\" class=\"form-control mb-4\" placeholder=\"Sujet\"> <!-- Message -->
\t<div class=\"form-group\">
\t\t<textarea class=\"form-control rounded-0\" id=\"message\" name=\"content\" rows=\"3\" placeholder=\"Veuillez taper votre message ici\"></textarea>
\t</div>

\t<!-- Copy 
\t\t\t\t\t\t\t\t\t\t    <div class=\"custom-control custom-checkbox mb-4\">
\t\t\t\t\t\t\t\t\t\t        <input type=\"checkbox\" class=\"custom-control-input\" id=\"contactFormCopy\">
\t\t\t\t\t\t\t\t\t\t        <label class=\"custom-control-label\" for=\"contactFormCopy\">Envoyer moi une copy du message</label>
\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t-->
\t<!-- Send button -->
\t<button class=\"btn btn-info btn-block\" type=\"submit\">Envoyer</button>

\t{# Pour affichier les messages d'erreur sans l'Ajax #}
\t{# <ul>
\t\t\t\t\t\t\t{% for error in errors.all() %}
\t\t\t\t\t\t\t\t<li>{{ error }}</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul> #}

</form>

<div id=\"result\"></div>
", "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/contact/components/contactform/default.htm", "");
    }
}
