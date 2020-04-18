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

/* /Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/pages/films.htm */
class __TwigTemplate_9ab5056b7b78ce942245966ce3df3aee26a465b685813124ef10f4de540fec41 extends \Twig\Template
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
        echo "<ul class=\"record-list\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 3
            echo "    <li>
        <h3>
            <a href=\"/projetTestOctoberCMS/films/film/";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "slug", [], "any", false, false, false, 5), "html", null, true);
            echo "\">
                ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 6), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 6), "html", null, true);
            echo "
            </a>
        </h3>
        ";
            // line 9
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, false, 9), 150]);
            echo "
    </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "    <li class=\"no-data\">Il n'y a pas de films</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>

<div>";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["movies"] ?? null), "render", [], "any", false, false, false, 16);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/pages/films.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  76 => 14,  69 => 12,  61 => 9,  53 => 6,  49 => 5,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"record-list\">
    {% for movie in movies %}
    <li>
        <h3>
            <a href=\"/projetTestOctoberCMS/films/film/{{ movie.slug}}\">
                {{ movie.name}} - {{ movie.year }}
            </a>
        </h3>
        {{ html_limit(movie.description, 150)|raw }}
    </li>
    {% else %}
    <li class=\"no-data\">Il n'y a pas de films</li>
    {% endfor %}
</ul>

<div>{{ movies.render|raw }}</div>", "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/pages/films.htm", "");
    }
}
