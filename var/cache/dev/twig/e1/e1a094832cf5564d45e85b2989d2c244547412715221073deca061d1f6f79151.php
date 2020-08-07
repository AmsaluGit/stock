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

/* department/_form.html.twig */
class __TwigTemplate_bc08041812e39edfbe292bbc13cdea5b393b7bafe7af6e9cbf38b26517ecf8fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "department/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "department/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["role" => "form"]]);
        echo "


      
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "college", [], "any", false, false, false, 7), 'label');
        echo "</label>
                             ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "college", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
          </div>
                           



    <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'label');
        echo "</label>
                             ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
     </div>

       
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'label');
        echo "</label>
                             ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"help-block with-errors\"></div>
          </div>
                
       
    ";
        // line 29
        if ( !(isset($context["button_label"]) || array_key_exists("button_label", $context))) {
            // line 30
            echo "\t\t\t<button class=\"btn btn-info\">";
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 30, $this->source); })()), "Save")) : ("Save")), "html", null, true);
            echo "</button>
\t\t\t<button class=\"btn  btn-warning \" style=\"margin-right:20px;\" type=\"reset\">Reset</button>

\t\t";
        } else {
            // line 34
            echo "\t\t\t<input type=\"hidden\" name=\"edit\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\">
\t\t\t<a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_index");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCancel
\t\t\t</a>

\t\t\t<button class=\"btn btn-success mr-2\">";
            // line 39
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 39, $this->source); })()), "Save")) : ("Save")), "html", null, true);
            echo "</button>
\t\t";
        }
        // line 41
        echo "
   
";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "department/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  121 => 41,  116 => 39,  109 => 35,  104 => 34,  96 => 30,  94 => 29,  86 => 24,  82 => 23,  73 => 17,  69 => 16,  58 => 8,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form,{'attr': {'role':'form'}}) }}


      
        <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.college) }}</label>
                             {{ form_widget(form.college,{'attr':{'class':'form-control'}}) }}
                            <div class=\"help-block with-errors\"></div>
          </div>
                           



    <div class=\"form-group\">
                  <label class=\"col-sm-5 control-label no-padding-right\">{{ form_label(form.name) }}</label>
                             {{ form_widget(form.name,{'attr':{'class':'form-control'}}) }}
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
\t\t\t<a href=\"{{ path('department_index') }}\" class=\"btn btn-primary\">
\t\t\t\tCancel
\t\t\t</a>

\t\t\t<button class=\"btn btn-success mr-2\">{{ button_label|default('Save') }}</button>
\t\t{% endif %}

   
{{ form_end(form) }}", "department/_form.html.twig", "/var/www/inventory/templates/department/_form.html.twig");
    }
}
