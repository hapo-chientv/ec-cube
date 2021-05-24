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

/* @CustomerRank/default/Entry/customer_index.twig */
class __TwigTemplate_5508c952fad2df72fb31033e1317304f28ded6134ac7ee72f84819b2753e058b extends \Eccube\Twig\Template
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
        // line 10
        echo "
<div id=\"entry_code\" style=\"display:none;\">
    
    <dl>
        <dt>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "salon_code", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "customerrank.admin.salon.name.label.name"]);
        echo "
        </dt>
        <dd>
            <div class=\"ec-input\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "salon_code", [], "any", false, false, false, 19), 'widget');
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "salon_code", [], "any", false, false, false, 20), 'errors');
        echo "
            </div>
        </dd>
    </dl>
</div>

<script>
    \$(function() {
        \$elem = \$('#entry_code');
        \$('.ec-borderedDefs:eq(0)', this).prepend(\$elem.html());
        \$elem.remove();
        const urlParams = new URLSearchParams(window.location.search);
        const salonid = urlParams.get('salonid');
        \$(\"#entry_salon_code\").removeAttr('value')
        \$(\"#entry_salon_code\").val(salonid)
        \$elemCode = \$('.ec-borderedDefs:eq(0)').find('input');
        if(\$elemCode.val().length == 0){
            \$('.ec-borderedDefs:eq(0)').find('dl:eq(0)').remove();
        }
        
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@CustomerRank/default/Entry/customer_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  51 => 19,  44 => 15,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CustomerRank/default/Entry/customer_index.twig", "C:\\Users\\Hapo\\Desktop\\eccube-4.0.5-p1\\app\\Plugin\\CustomerRank\\Resource\\template\\default\\Entry\\customer_index.twig");
    }
}
