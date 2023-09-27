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

/* layouts/app.twig */
class __TwigTemplate_7e80670d7c8532d63ccb4419177352f61bfd44d7a293eba6102083e494d4b1ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<meta charset=\"utf-8\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getFunction('config')->getCallable()("meta_description"), "html", null, true);
        echo "\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("images/favicon.light.png"), "html", null, true);
        echo "\">
<link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("app.css"), "html", null, true);
        echo "\">

<link x-data rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("hljs-github.css"), "html", null, true);
        echo "\" :disabled=\"\$store.theme !== 'light'\">
<link x-data rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("hljs-github-dark.css"), "html", null, true);
        echo "\" :disabled=\"\$store.theme !== 'dark'\">

<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("app.js"), "html", null, true);
        echo "\" defer></script>

";
        // line 17
        if ($this->env->getFunction('config')->getCallable()("google_analytics_id", false)) {
            // line 18
            echo "    ";
            $this->loadTemplate("components/analytics/google.twig", "layouts/app.twig", 18)->display($context);
        }
        // line 20
        echo "
";
        // line 21
        if (($this->env->getFunction('config')->getCallable()("matomo_analytics_url", false) && $this->env->getFunction('config')->getCallable()("matomo_analytics_site_id", false))) {
            // line 22
            echo "    ";
            $this->loadTemplate("components/analytics/matomo.twig", "layouts/app.twig", 22)->display($context);
        }
        // line 24
        echo "
<title>";
        // line 25
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " &bull; ";
        echo twig_escape_filter($this->env, $this->env->getFunction('config')->getCallable()("site_title"), "html", null, true);
        echo "</title>

<div class=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo "\" x-data=\"application\" x-effect=\"storeThemeCookie(\$store.theme)\" :class=\"{ 'dark': \$store.theme === 'dark' }\">
    <div class=\"flex flex-col min-h-screen font-sans dark:bg-gray-800\">
        ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "    </div>
</div>
";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  106 => 30,  104 => 29,  99 => 27,  92 => 25,  89 => 24,  85 => 22,  83 => 21,  80 => 20,  76 => 18,  74 => 17,  69 => 15,  64 => 13,  60 => 12,  55 => 10,  49 => 7,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/app.twig", "/var/www/html/app/views/layouts/app.twig");
    }
}
