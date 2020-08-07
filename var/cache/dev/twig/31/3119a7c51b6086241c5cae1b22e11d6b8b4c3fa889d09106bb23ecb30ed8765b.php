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

/* product/_form.html.twig */
class __TwigTemplate_516a9c6a8c39dc89fc4a8e9e461b608d38e855351b8c8919e2c652348d6969db extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["role" => "form"]]);
        echo "


             



    <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "category", [], "any", false, false, false, 10), 'label');
        echo "</label>
                             ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "category", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
     </div>

       
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "brand", [], "any", false, false, false, 17), 'label');
        echo "</label>
                             ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "brand", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
          </div>
                
       
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "productType", [], "any", false, false, false, 24), 'label');
        echo "</label>
                             ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "productType", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
          </div>
                
       
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), 'label');
        echo "</label>
                             ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
          </div>
      
       
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "price", [], "any", false, false, false, 38), 'label');
        echo "</label>
                             ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "price", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
          </div>

                
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "unitOfMeasure", [], "any", false, false, false, 45), 'label');
        echo "</label>
                             ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "unitOfMeasure", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
          </div>
                
       
       
       
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), 'label');
        echo "</label>
                             ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
          </div>
                



 



       
    ";
        // line 67
        if ( !(isset($context["button_label"]) || array_key_exists("button_label", $context))) {
            // line 68
            echo "\t\t\t<button class=\"btn btn-info\">";
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 68, $this->source); })()), "Save")) : ("Save")), "html", null, true);
            echo "</button>
\t\t\t<button class=\"btn  btn-warning \" style=\"margin-right:20px;\" type=\"reset\">Reset</button>

\t\t";
        } else {
            // line 72
            echo "\t\t\t<input type=\"hidden\" name=\"edit\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "\">
\t\t\t<a href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCancel
\t\t\t</a>

\t\t\t<button class=\"btn btn-success mr-2\">";
            // line 77
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 77, $this->source); })()), "Save")) : ("Save")), "html", null, true);
            echo "</button>
\t\t";
        }
        // line 79
        echo "
   
";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 81,  183 => 79,  178 => 77,  171 => 73,  166 => 72,  158 => 68,  156 => 67,  141 => 55,  137 => 54,  126 => 46,  122 => 45,  113 => 39,  109 => 38,  100 => 32,  96 => 31,  87 => 25,  83 => 24,  74 => 18,  70 => 17,  61 => 11,  57 => 10,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form,{'attr': {'role':'form'}}) }}


             



    <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.category) }}</label>
                             {{ form_widget(form.category,{'attr':{'class':'form-control'}}) }}
                            <div class=\"help-block with-errors\"></div>
     </div>

       
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.brand) }}</label>
                             {{ form_widget(form.brand,{'attr':{'class':'form-control'}}) }}
                            <div class=\"help-block with-errors\"></div>
          </div>
                
       
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.productType) }}</label>
                             {{ form_widget(form.productType,{'attr':{'class':'form-control'}}) }}
                            <div class=\"help-block with-errors\"></div>
          </div>
                
       
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.name) }}</label>
                             {{ form_widget(form.name,{'attr':{'class':'form-control'}}) }}
                            <div class=\"help-block with-errors\"></div>
          </div>
      
       
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.price) }}</label>
                             {{ form_widget(form.price,{'attr':{'class':'form-control'}}) }}
                            <div class=\"help-block with-errors\"></div>
          </div>

                
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.unitOfMeasure) }}</label>
                             {{ form_widget(form.unitOfMeasure,{'attr':{'class':'form-control'}}) }}
                            <div class=\"help-block with-errors\"></div>
          </div>
                
       
       
       
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.description) }}</label>
                             {{ form_widget(form.description,{'attr':{'class':'form-control'}}) }}
                            <div class=\"help-block with-errors\"></div>
          </div>
                



 



       
    {% if not button_label is defined  %}
\t\t\t<button class=\"btn btn-info\">{{ button_label|default('Save') }}</button>
\t\t\t<button class=\"btn  btn-warning \" style=\"margin-right:20px;\" type=\"reset\">Reset</button>

\t\t{% else %}
\t\t\t<input type=\"hidden\" name=\"edit\" value=\"{{edit}}\">
\t\t\t<a href=\"{{ path('product_index') }}\" class=\"btn btn-primary\">
\t\t\t\tCancel
\t\t\t</a>

\t\t\t<button class=\"btn btn-success mr-2\">{{ button_label|default('Save') }}</button>
\t\t{% endif %}

   
{{ form_end(form) }}", "product/_form.html.twig", "/var/www/inventory/templates/product/_form.html.twig");
    }
}
