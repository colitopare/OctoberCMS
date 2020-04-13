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

/* /Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/pages/home.htm */
class __TwigTemplate_a8a283d7873de995845f15134f44a5e45b9b1a27c9843c427063b9ec73af6e83 extends \Twig\Template
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
        echo "<h1> Hello World !!!!!!! </h1>";
    }

    public function getTemplateName()
    {
        return "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1> Hello World !!!!!!! </h1>", "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/pages/home.htm", "");
    }
}
