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

/* /Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/pages/film-single.htm */
class __TwigTemplate_de1326a5bc04c176cbbf57658f11881e0aee654bdeb4c72f2648c05512281457 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, false, 6), "thumb", [0 => 200, 1 => ($context["auto"] ?? null)], "method", false, false, false, 6), "html", null, true);
            echo "\" alt=\"Poster film\">



  <h2>  ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</h2>
     ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "year", [], "any", false, false, false, 11), "html", null, true);
            echo "
     <h3>Description</h3>


     <p>
      ";
            // line 16
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 16);
            echo " 
      </p>
<h3>Gallerie d'image</h3>
<ul class=\"gallery clearfix\">
\t<li>
\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "movie_gallery", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 22
                echo "\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 80, 1 => ($context["auto"] ?? null)], "method", false, false, false, 22), "html", null, true);
                echo "\"/><br>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t</li>
</ul>


";
        } else {
            // line 29
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/pages/film-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  89 => 24,  80 => 22,  76 => 21,  68 => 16,  60 => 11,  56 => 10,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
<img src=\"{{ record.poster.thumb(200, auto) }}\" alt=\"Poster film\">



  <h2>  {{ record.name }}</h2>
     {{ record.year }}
     <h3>Description</h3>


     <p>
      {{ record.description|raw }} 
      </p>
<h3>Gallerie d'image</h3>
<ul class=\"gallery clearfix\">
\t<li>
\t\t{% for image in record.movie_gallery %}
\t\t\t<img src=\"{{ image.thumb(80, auto) }}\"/><br>
\t\t{% endfor %}
\t</li>
</ul>


{% else %}
    {{ notFoundMessage }}
{% endif %}", "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/pages/film-single.htm", "");
    }
}
