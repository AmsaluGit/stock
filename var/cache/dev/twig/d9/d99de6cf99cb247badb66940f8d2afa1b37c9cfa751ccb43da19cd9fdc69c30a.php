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

/* department/index.html.twig */
class __TwigTemplate_8d883606a2814c634f1a66baa45b1274ca4b83db1655f61225fdfea91530a823 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "department/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "department/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "department/index.html.twig", 1);
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

        echo " Departement index
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
\tManage departments
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
\t<li class=\"breadcrumb-item active\">department</li>
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
        echo twig_include($this->env, $context, "department/_form.html.twig");
        echo "


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card card \">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Department List</h3>
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
\t\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Desciption</th>
\t\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 81
        $context["i"] = 1;
        // line 82
        echo "\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departments"]) || array_key_exists("departments", $context) ? $context["departments"] : (function () { throw new RuntimeError('Variable "departments" does not exist.', 82, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 85, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 86
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 86, $this->source); })()) + 1);
            // line 87
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "description", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>


\t\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"edit\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\" action=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_token\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 106))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_show", ["id" => twig_get_attribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\" title=\"Show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 120
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div class=\"float-right\">";
        // line 126
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["departments"]) || array_key_exists("departments", $context) ? $context["departments"] : (function () { throw new RuntimeError('Variable "departments" does not exist.', 126, $this->source); })()));
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
        return "department/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 126,  309 => 124,  300 => 120,  287 => 112,  281 => 108,  277 => 106,  270 => 102,  262 => 97,  251 => 89,  247 => 88,  244 => 87,  242 => 86,  238 => 85,  234 => 83,  228 => 82,  226 => 81,  183 => 42,  180 => 41,  177 => 40,  175 => 39,  165 => 32,  159 => 28,  155 => 26,  150 => 24,  144 => 21,  136 => 15,  126 => 14,  113 => 10,  103 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Departement index
{% endblock %}
{% block maintitle %}

\tManage departments
{% endblock %}
{% block breadcrumb %}
\t<li class=\"breadcrumb-item active\">Stock
\t</li>
\t<li class=\"breadcrumb-item active\">department</li>
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
\t\t\t\t\t\t\t\t{{ include('department/_form.html.twig') }}


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card card \">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Department List</h3>
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
\t\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Desciption</th>
\t\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% set i = 1 %}
\t\t\t\t\t\t\t\t\t\t{% for department in departments %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ i }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set i = i+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ department.name }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ department.description }}</td>


\t\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"edit\" value=\"{{department.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\" action=\"{{ path('department_delete', {'id': department.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ department.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{#  <button type=\"button\" data-type=\"confirm\" class=\"btn btn-danger js-sweetalert\" title=\"Delete\">#}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('department_show', {'id': department.id}) }}\" class=\"btn btn-info btn-sm\" title=\"Show\">
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
\t\t\t\t\t\t\t\t<div class=\"float-right\">{{ knp_pagination_render(departments) }}</div>


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
", "department/index.html.twig", "/var/www/inventory/templates/department/index.html.twig");
    }
}
