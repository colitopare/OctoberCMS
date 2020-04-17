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

/* /Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/partials/user-update.htm */
class __TwigTemplate_01355eaa62367af0ab458c9b3bb5d2672e28be4f99d3f0cdf6c918f1a136d987 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onUpdate"]);
        echo "

    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPasswordConfirm\">Confirm New Password</label>
        <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
    </div>

    <div class=\"form-group\">
        <label >Facebook</label>
        <input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"facebook\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <label >Biographie</label>
      <textarea name=\"bio\" type=\"text\" class=\"form-control\" id=\"bio\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "bio", [], "any", false, false, false, 30), "html", null, true);
        echo "</textarea>
    </div>

    ";
        // line 33
        if (($context["updateRequiresPassword"] ?? null)) {
            // line 34
            echo "        <p>To change these details, please confirm your current password.</p>
        <div class=\"form-group\">
            <label for=\"accountPasswordCurrent\">Current Password <small class=\"text-danger\">* required</small></label>
            <input name=\"password_current\" type=\"password\" class=\"form-control\" id=\"accountPasswordCurrent\">
        </div>
    ";
        }
        // line 40
        echo "
    <button type=\"submit\" class=\"btn btn-default\">Save</button>

";
        // line 43
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/partials/user-update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 43,  94 => 40,  86 => 34,  84 => 33,  78 => 30,  70 => 25,  52 => 10,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onUpdate') }}

    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ user.name }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPasswordConfirm\">Confirm New Password</label>
        <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
    </div>

    <div class=\"form-group\">
        <label >Facebook</label>
        <input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"facebook\" value=\"{{ user.facebook }}\">
    </div>

    <div class=\"form-group\">
      <label >Biographie</label>
      <textarea name=\"bio\" type=\"text\" class=\"form-control\" id=\"bio\">{{ user.bio }}</textarea>
    </div>

    {% if updateRequiresPassword %}
        <p>To change these details, please confirm your current password.</p>
        <div class=\"form-group\">
            <label for=\"accountPasswordCurrent\">Current Password <small class=\"text-danger\">* required</small></label>
            <input name=\"password_current\" type=\"password\" class=\"form-control\" id=\"accountPasswordCurrent\">
        </div>
    {% endif %}

    <button type=\"submit\" class=\"btn btn-default\">Save</button>

{{ form_close() }}", "/Users/Muriel/Sites/projetTestOctoberCMS/themes/olympos/partials/user-update.htm", "");
    }
}
