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


     <h3>Acteurs</h3>     
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "actors", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 16
                echo "            <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "name_actor", [], "any", false, false, false, 16), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "


<h3>Genre</h3>
";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "genres", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 23
                echo "<p>
\t<a href=\"/projetTestOctoberCMS/genres/";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 24), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "name_genre", [], "any", false, false, false, 24), "html", null, true);
                echo "</a>
</p>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
     <h3>Description</h3>


     <p>
      ";
            // line 33
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 33);
            echo " 
      </p>
<h3>Gallerie d'image</h3>
<ul class=\"gallery clearfix\">
\t<li>
\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "movie_gallery", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 39
                echo "\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 80, 1 => ($context["auto"] ?? null)], "method", false, false, false, 39), "html", null, true);
                echo "\"/><br>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t</li>
</ul>


";
        } else {
            // line 46
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
        return array (  140 => 46,  133 => 41,  124 => 39,  120 => 38,  112 => 33,  105 => 28,  93 => 24,  90 => 23,  86 => 22,  80 => 18,  71 => 16,  67 => 15,  60 => 11,  56 => 10,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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


     <h3>Acteurs</h3>     
        {% for actor in record.actors %}
            <p>{{ actor.name_actor }}</p>
        {% endfor %}



<h3>Genre</h3>
{% for genre in record.genres %}
<p>
\t<a href=\"/projetTestOctoberCMS/genres/{{genre.slug}}\">{{genre.name_genre}}</a>
</p>

{% endfor %}

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
