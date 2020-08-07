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

/* stock/index.html.twig */
class __TwigTemplate_6709a9cc2f4bab58f84958d94850953c3645924fc644b29d6c5aed326a632dbc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock/index.html.twig", 1);
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
\tManage stocks
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
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card card-info ";
        // line 21
        echo (((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 21, $this->source); })())) ? ("") : ("collapsed-card"));
        echo "\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t";
        // line 24
        if ((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 24, $this->source); })())) {
            echo "Edit
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t\tAdd New
\t\t\t\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas ";
        // line 32
        echo (((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 32, $this->source); })())) ? ("fa-minus") : ("fa-plus"));
        echo "\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card-tools -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
        // line 39
        if ((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "\t\t\t\t\t\t\t\t\t";
            $context["button_label"] = "Update";
            // line 41
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t\t\t";
        echo twig_include($this->env, $context, "stock/_form.html.twig");
        echo "


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card card \">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Items List</h3>
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
\t\t\t\t\t\t\t\t\t\t\t<th>store</th>
\t\t\t\t\t\t\t\t\t\t\t<th>date</th>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 84
        $context["i"] = 1;
        // line 85
        echo "\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 85, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 86
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 88, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 89
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 89, $this->source); })()) + 1);
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "product", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "quantity", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "store", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 94
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "date", [], "any", false, false, false, 94), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"edit\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 100), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\" action=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_token\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 109))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 111
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_show", ["id" => twig_get_attribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\" title=\"Show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 123
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div class=\"float-right\">";
        // line 129
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 129, $this->source); })()));
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
        return "stock/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 129,  318 => 127,  309 => 123,  296 => 115,  290 => 111,  286 => 109,  279 => 105,  271 => 100,  262 => 94,  258 => 93,  254 => 92,  250 => 91,  247 => 90,  245 => 89,  241 => 88,  237 => 86,  231 => 85,  229 => 84,  183 => 42,  180 => 41,  177 => 40,  175 => 39,  165 => 32,  159 => 28,  155 => 26,  150 => 24,  144 => 21,  136 => 15,  126 => 14,  113 => 10,  103 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Stock index
{% endblock %}
{% block maintitle %}

\tManage stocks
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
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card card-info {{edit?'':'collapsed-card'}}\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t{% if edit  %}Edit
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tAdd New
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t\t<div class=\"card-tools\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas {{edit?'fa-minus':'fa-plus'}}\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.card-tools -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.card-header -->
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t{% if edit  %}
\t\t\t\t\t\t\t\t\t{% set button_label = 'Update' %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{{ include('stock/_form.html.twig') }}


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card card \">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Items List</h3>
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
\t\t\t\t\t\t\t\t\t\t\t<th>store</th>
\t\t\t\t\t\t\t\t\t\t\t<th>date</th>
\t\t\t\t\t\t\t\t\t\t\t
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
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ stock.store }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ stock.date | date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"edit\" value=\"{{stock.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\" action=\"{{ path('stock_delete', {'id': stock.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ stock.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{#  <button type=\"button\" data-type=\"confirm\" class=\"btn btn-danger js-sweetalert\" title=\"Delete\">#}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('stock_show', {'id': stock.id}) }}\" class=\"btn btn-info btn-sm\" title=\"Show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
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
", "stock/index.html.twig", "/var/www/inventory/templates/stock/index.html.twig");
    }
}
