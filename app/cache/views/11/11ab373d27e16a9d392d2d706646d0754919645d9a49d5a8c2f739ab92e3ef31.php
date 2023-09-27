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

/* components/footer.twig */
class __TwigTemplate_699f262dfdc1842ea35cc43fb8f176e2e0fc9eff0aa644fd1245efed353b2d4c extends Template
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
        echo "<footer class=\"container border-t-2 border-gray-800 text-center mx-auto px-4 py-8 xl:max-w-screen-xl dark:text-white dark:border-white\">
    <div class=\"flex flex-col justify-center items-center\">
        <p class=\"mb-4\">
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getFunction('translate')->getCallable()("powered_by"), "html", null, true);
        echo " <a href=\"https://www.directorylister.com\" class=\"underline hover:text-blue-700 dark:hover:text-purple-700\">Directory Lister</a>
        </p>

        <div class=\"flex\">
            <a href=\"https://github.com/DirectoryLister/DirectoryLister\" title=\"GitHub\" class=\"text-gray-400 mx-2 hover:text-github\">
                <i class=\"fab fa-github fa-lg\"></i>
            </a>

            <a href=\"https://twitter.com/DirectoryLister\" title=\"Twitter\" class=\"text-gray-400 mx-2 hover:text-twitter\">
                <i class=\"fab fa-twitter fa-lg\"></i>
            </a>

            <a href=\"https://github.com/DirectoryLister/DirectoryLister/discussions\" title=\"Discussions\" class=\"text-gray-400 mx-2 hover:text-purple-600\">
                <i class=\"fas fa-comments fa-lg\"></i>
            </a>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "components/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/footer.twig", "/var/www/html/app/views/components/footer.twig");
    }
}
