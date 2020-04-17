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
<form class=\"text-center border border-light p-5\" data-request=\"contactform::onSend\" data-request-validate data-request-flash>

\t<h2 class=\"h4 mb-4\">Nous contacter</h2>

\t<!-- Name -->
\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control mb-4\" placeholder=\"Nom\">
\t<span data-validate-for=\"name\">Le nom est obligatoire et doit avoir au moins 5 caractères</span>

\t<!-- Email -->
\t<input type=\"email\" id=\"email\" name=\"email\" class=\"form-control mb-4\" placeholder=\"E-mail\">
\t<span data-validate-for=\"email\"></span> 

\t<!-- Subject -->
\t<input
\ttype=\"text\" id=\"subject\" name=\"subject\" class=\"form-control mb-4\" placeholder=\"Sujet\">
\t<span data-validate-for=\"subjet\"></span>

\t<!-- Message -->
\t<div class=\"form-group\">
\t\t<textarea class=\"form-control rounded-0\" id=\"message\" name=\"content\" rows=\"3\" placeholder=\"Veuillez taper votre message ici\"></textarea>
\t</div>

\t<!-- Send button -->
\t<button data-attach-loading class=\"btn btn-info btn-block\" type=\"submit\">Envoyer</button>

</form>

";
    }

    public function getTemplateName()
    {
        return "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/contact/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- data-request=\"onSend\" permet de lier ce formulaire à la function onSend() -->
<form class=\"text-center border border-light p-5\" data-request=\"contactform::onSend\" data-request-validate data-request-flash>

\t<h2 class=\"h4 mb-4\">Nous contacter</h2>

\t<!-- Name -->
\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control mb-4\" placeholder=\"Nom\">
\t<span data-validate-for=\"name\">Le nom est obligatoire et doit avoir au moins 5 caractères</span>

\t<!-- Email -->
\t<input type=\"email\" id=\"email\" name=\"email\" class=\"form-control mb-4\" placeholder=\"E-mail\">
\t<span data-validate-for=\"email\"></span> 

\t<!-- Subject -->
\t<input
\ttype=\"text\" id=\"subject\" name=\"subject\" class=\"form-control mb-4\" placeholder=\"Sujet\">
\t<span data-validate-for=\"subjet\"></span>

\t<!-- Message -->
\t<div class=\"form-group\">
\t\t<textarea class=\"form-control rounded-0\" id=\"message\" name=\"content\" rows=\"3\" placeholder=\"Veuillez taper votre message ici\"></textarea>
\t</div>

\t<!-- Send button -->
\t<button data-attach-loading class=\"btn btn-info btn-block\" type=\"submit\">Envoyer</button>

</form>

", "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/contact/components/contactform/default.htm", "");
    }
}
