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

/* components/breadcrumbs.twig */
class __TwigTemplate_097d1a6e7f47d5c1103f9c6b77adfc8c85f786197fb8f47c588b97ceb5da37ba extends Template
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
        echo "<div class=\"flex-1 font-mono text-white text-sm tracking-tight overflow-x-auto whitespace-nowrap py-1\">
    <a href=\".\" class=\"inline-block hover:underline\">
        ";
        // line 3
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getFunction('config')->getCallable()("home_text"), $this->env->getFunction('translate')->getCallable()("home")), "html", null, true);
        echo "
    </a>

    ";
        // line 6
        if ( !(null === ($context["path"] ?? null))) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getFunction('breadcrumbs')->getCallable()($context["path"]));
            foreach ($context['_seq'] as $context["name"] => $context["path"]) {
                // line 8
                echo "            / <a href=\"";
                echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                echo "\" class=\"inline-block hover:underline\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['path'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    ";
        }
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "components/breadcrumbs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  65 => 10,  54 => 8,  49 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/breadcrumbs.twig", "/var/www/html/app/views/components/breadcrumbs.twig");
    }
}
