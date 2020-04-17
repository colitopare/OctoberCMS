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

/* /Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/contact/components/contactform/messages.htm */
class __TwigTemplate_811a8e9c6367692b28faeca1c20f9843beaea6c3cae2559dc2c2b9870b32770f extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errorMsgs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "\t<div>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
<script type=\"text/javascript\">
// il faut supprimer les anciens messages 
  \$('.error-msg').remove();
\tvar errors = ";
        // line 8
        echo json_encode(($context["fieldMsgs"] ?? null));
        echo ";
// console.log(errors);
{/* Va permettre d'afficher les erreurs au niveau des inputs */}
  \$.each(errors, (name, msg) => {
    \$('<div class=\"error-msg\">' + msg + '</div>').insertAfter(\$('input[name=' + name + ']'))
  }); 
</script>
";
    }

    public function getTemplateName()
    {
        return "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/contact/components/contactform/messages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  50 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for message in errorMsgs %}
\t<div>{{ message }}</div>
{% endfor %}

<script type=\"text/javascript\">
// il faut supprimer les anciens messages 
  \$('.error-msg').remove();
\tvar errors = {{ fieldMsgs|json_encode()|raw }};
// console.log(errors);
{/* Va permettre d'afficher les erreurs au niveau des inputs */}
  \$.each(errors, (name, msg) => {
    \$('<div class=\"error-msg\">' + msg + '</div>').insertAfter(\$('input[name=' + name + ']'))
  }); 
</script>
", "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/contact/components/contactform/messages.htm", "");
    }
}
