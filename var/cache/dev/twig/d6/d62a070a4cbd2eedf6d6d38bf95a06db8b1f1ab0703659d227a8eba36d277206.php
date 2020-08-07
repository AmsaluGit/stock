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

/* stock/_form.html.twig */
class __TwigTemplate_b4cd5d78d9ca9d8bd781f27cec7037c8eea71db8522bfc50ed40a1aed97a3b20 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["role" => "form"]]);
        echo "


      
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "product", [], "any", false, false, false, 7), 'label');
        echo "</label>
                             ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "product", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
          </div>
                           
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "store", [], "any", false, false, false, 13), 'label');
        echo "</label>
                             ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "store", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
          </div>
                           



    <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "quantity", [], "any", false, false, false, 22), 'label');
        echo "</label>
                             ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "quantity", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
     </div>

       
         
                
       
    ";
        // line 31
        if ( !(isset($context["button_label"]) || array_key_exists("button_label", $context))) {
            // line 32
            echo "\t\t\t<button class=\"btn btn-info\">";
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 32, $this->source); })()), "Save")) : ("Save")), "html", null, true);
            echo "</button>
\t\t\t<button class=\"btn  btn-warning \" style=\"margin-right:20px;\" type=\"reset\">Reset</button>

\t\t";
        } else {
            // line 36
            echo "\t\t\t<input type=\"hidden\" name=\"edit\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\">
\t\t\t<a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_index");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCancel
\t\t\t</a>

\t\t\t<button class=\"btn btn-success mr-2\">";
            // line 41
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 41, $this->source); })()), "Save")) : ("Save")), "html", null, true);
            echo "</button>
\t\t";
        }
        // line 43
        echo "
   
";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "stock/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  123 => 43,  118 => 41,  111 => 37,  106 => 36,  98 => 32,  96 => 31,  85 => 23,  81 => 22,  70 => 14,  66 => 13,  58 => 8,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form,{'attr': {'role':'form'}}) }}


      
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.product) }}</label>
                             {{ form_widget(form.product,{'attr':{'class':'form-control'}}) }}
                            <div class=\"help-block with-errors\"></div>
          </div>
                           
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.store) }}</label>
                             {{ form_widget(form.store,{'attr':{'class':'form-control'}}) }}
                            <div class=\"help-block with-errors\"></div>
          </div>
                           



    <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.quantity) }}</label>
                             {{ form_widget(form.quantity,{'attr':{'class':'form-control'}}) }}
                            <div class=\"help-block with-errors\"></div>
     </div>

       
         
                
       
    {% if not button_label is defined  %}
\t\t\t<button class=\"btn btn-info\">{{ button_label|default('Save') }}</button>
\t\t\t<button class=\"btn  btn-warning \" style=\"margin-right:20px;\" type=\"reset\">Reset</button>

\t\t{% else %}
\t\t\t<input type=\"hidden\" name=\"edit\" value=\"{{edit}}\">
\t\t\t<a href=\"{{ path('stock_index') }}\" class=\"btn btn-primary\">
\t\t\t\tCancel
\t\t\t</a>

\t\t\t<button class=\"btn btn-success mr-2\">{{ button_label|default('Save') }}</button>
\t\t{% endif %}

   
{{ form_end(form) }}", "stock/_form.html.twig", "/var/www/inventory/templates/stock/_form.html.twig");
    }
}
