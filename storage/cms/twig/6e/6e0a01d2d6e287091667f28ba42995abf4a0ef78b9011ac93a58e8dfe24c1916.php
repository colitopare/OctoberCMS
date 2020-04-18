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
        if (($context["movie"] ?? null)) {
            // line 2
            echo "<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "poster", [], "any", false, false, false, 2), "thumb", [0 => 200, 1 => ($context["auto"] ?? null)], "method", false, false, false, 2), "html", null, true);
            echo "\" alt=\"Poster film\">



<h2> ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</h2>
";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "year", [], "any", false, false, false, 7), "html", null, true);
            echo "


<h3>Acteurs</h3>
";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "actors", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 12
                echo "<p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "name_actor", [], "any", false, false, false, 12), "html", null, true);
                echo "</p>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "


<h3>Genre</h3>
";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "genres", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 19
                echo "<p>
    <a href=\"/projetTestOctoberCMS/genres/";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 20), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "name_genre", [], "any", false, false, false, 20), "html", null, true);
                echo "</a>
</p>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
<h3>Description</h3>


<p>
    ";
            // line 29
            echo twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "description", [], "any", false, false, false, 29);
            echo "
</p>
<h3>Gallerie d'image</h3>
<ul class=\"gallery clearfix\">
    <li>
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "movie_gallery", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 35
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 80, 1 => ($context["auto"] ?? null)], "method", false, false, false, 35), "html", null, true);
                echo "\" /><br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </li>
</ul>


";
        } else {
            // line 42
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
        return array (  131 => 42,  124 => 37,  115 => 35,  111 => 34,  103 => 29,  96 => 24,  84 => 20,  81 => 19,  77 => 18,  71 => 14,  62 => 12,  58 => 11,  51 => 7,  47 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if movie %}
<img src=\"{{ movie.poster.thumb(200, auto) }}\" alt=\"Poster film\">



<h2> {{ movie.name }}</h2>
{{ movie.year }}


<h3>Acteurs</h3>
{% for actor in movie.actors %}
<p>{{ actor.name_actor }}</p>
{% endfor %}



<h3>Genre</h3>
{% for genre in movie.genres %}
<p>
    <a href=\"/projetTestOctoberCMS/genres/{{genre.slug}}\">{{genre.name_genre}}</a>
</p>

{% endfor %}

<h3>Description</h3>


<p>
    {{ movie.description|raw }}
</p>
<h3>Gallerie d'image</h3>
<ul class=\"gallery clearfix\">
    <li>
        {% for image in movie.movie_gallery %}
        <img src=\"{{ image.thumb(80, auto) }}\" /><br>
        {% endfor %}
    </li>
</ul>


{% else %}
{{ notFoundMessage }}
{% endif %}", "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/pages/film-single.htm", "");
    }
}
