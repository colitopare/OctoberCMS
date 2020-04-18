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

/* /Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/movies/components/actors/default.htm */
class __TwigTemplate_cf7fbda6141f1a6a79cc46f2d0392937d706137fcabea79df49a2da5a43baa14 extends \Twig\Template
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
        $context["actors"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "actors", [], "any", false, false, false, 1);
        // line 2
        echo "
<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 5
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "lastname", [], "any", false, false, false, 6), "html", null, true);
            echo "</li>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/movies/components/actors/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  52 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  set actors=__SELF__.actors  %}

<ul>
\t{% for actor in actors %}
\t\t<li>{{ actor.name }}
\t\t\t{{ actor.lastname }}</li>

\t{% endfor %}

</ul>
", "/Users/Muriel/Sites/projetTestOctoberCMS/plugins/webmaster/movies/components/actors/default.htm", "");
    }
}
