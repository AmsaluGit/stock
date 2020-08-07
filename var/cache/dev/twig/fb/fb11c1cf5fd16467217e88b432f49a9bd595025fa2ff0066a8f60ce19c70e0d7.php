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

/* balance/index.html.twig */
class __TwigTemplate_00434555aa6ccbed125981d599fdde8194cc40db56ebed0ade6acff95b8f63db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'maintitle' => [$this, 'block_maintitle'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balance/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balance/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "balance/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Stock index
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_maintitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "maintitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "maintitle"));

        // line 6
        echo "
\tManage Requests
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 10
        echo "\t<li class=\"breadcrumb-item active\">Stock
\t</li>
\t<li class=\"breadcrumb-item active\">stock</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "\t<div class=\"row\">
\t\t<div class=\"card col-md\">

\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t
                
                \t";
        // line 35
        echo "
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card card \">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t";
        // line 40
        echo "\t\t\t\t\t\t\t\t<div class=\"card-tools\">

\t\t\t\t\t\t\t\t\t<form class=\"form-inline ml-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group \">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" autocomplete=\"off\" name=\"search\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\" input-group-text btn btn-navbar \" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">


\t\t\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t<thead class=\"thead-light\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Product</th>
\t\t\t\t\t\t\t\t\t\t\t<th>quantity</th>
\t\t\t\t\t\t\t\t\t\t\t<th>UOM</th>
\t\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 68
        $context["i"] = 1;
        // line 69
        echo "\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 73
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 73, $this->source); })()) + 1);
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "product", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "quantity", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "unit", [], "any", false, false, false, 77), "html", null, true);
            echo "</td> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 79
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["stock"], "pid", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\" title=\"Show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"\">More</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

                                                    

\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div class=\"float-right\">";
        // line 98
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 98, $this->source); })()));
        echo "</div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<!-- /.card-body -->
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "balance/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 98,  243 => 96,  234 => 92,  219 => 82,  214 => 79,  210 => 77,  206 => 76,  202 => 75,  199 => 74,  197 => 73,  193 => 72,  189 => 70,  183 => 69,  181 => 68,  151 => 40,  145 => 35,  136 => 15,  126 => 14,  113 => 10,  103 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Stock index
{% endblock %}
{% block maintitle %}

\tManage Requests
{% endblock %}
{% block breadcrumb %}
\t<li class=\"breadcrumb-item active\">Stock
\t</li>
\t<li class=\"breadcrumb-item active\">stock</li>
{% endblock %}
{% block body %}
\t<div class=\"row\">
\t\t<div class=\"card col-md\">

\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t
                
                \t{# <div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card card-info {{'collapsed-card'}}\">
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t{{ include('stock/_form.html.twig') }}


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> #}

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card card \">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t{# <h3 class=\"card-title\">Items List</h3> #}
\t\t\t\t\t\t\t\t<div class=\"card-tools\">

\t\t\t\t\t\t\t\t\t<form class=\"form-inline ml-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group \">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" autocomplete=\"off\" name=\"search\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\" input-group-text btn btn-navbar \" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body\">


\t\t\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t<thead class=\"thead-light\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Product</th>
\t\t\t\t\t\t\t\t\t\t\t<th>quantity</th>
\t\t\t\t\t\t\t\t\t\t\t<th>UOM</th>
\t\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% set i = 1 %}
\t\t\t\t\t\t\t\t\t\t{% for stock in stocks %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ i }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set i = i+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ stock.product }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ stock.quantity }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t <td>{{ stock.unit }}</td> 
\t\t\t\t\t\t\t\t\t\t\t\t{# <td>{{ stock.date | date('Y-m-d') }}</td> #}
\t\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_show', {'id': stock.pid}) }}\" class=\"btn btn-info btn-sm\" title=\"Show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"\">More</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

                                                    

\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div class=\"float-right\">{{ knp_pagination_render(stocks) }}</div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<!-- /.card-body -->
\t</div>

{% endblock %}
", "balance/index.html.twig", "/var/www/inventory/templates/balance/index.html.twig");
    }
}
