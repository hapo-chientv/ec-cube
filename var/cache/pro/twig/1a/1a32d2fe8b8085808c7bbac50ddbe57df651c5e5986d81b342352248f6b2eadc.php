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

/* Block/header.twig */
class __TwigTemplate_c061a10ea1ee5f12549fc7ada9e37f73e88edaea3d191a6ec9d9014e51255599 extends \Eccube\Twig\Template
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
        // line 11
        echo "<div class=\"ec-headerNaviRole\">
    <div class=\"ec-headerNaviRole__left\">
        <div class=\"ec-headerNaviRole__search\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("block_search_product"));
        echo "
        </div>
        <div class=\"ec-headerRole__navSP\">
            ";
        // line 17
        echo twig_include($this->env, $context, "Block/nav_sp.twig");
        echo "
        </div>
    </div>
    <div class=\"ec-headerNaviRole__right\">
        <div class=\"ec-headerNaviRole__nav\">
            ";
        // line 22
        echo twig_include($this->env, $context, "Block/login.twig");
        echo "
        </div>
        <div class=\"ec-headerRole__cart\">
            ";
        // line 25
        echo twig_include($this->env, $context, "Block/cart.twig");
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Block/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  56 => 22,  48 => 17,  42 => 14,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/header.twig", "C:\\Users\\Hapo\\Desktop\\eccube-4.0.5-p1\\src\\Eccube\\Resource\\template\\default\\Block\\header.twig");
    }
}
