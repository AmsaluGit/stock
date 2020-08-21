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

/* product/index.html.twig */
class __TwigTemplate_372bef8d22a67d628ea41ea876db740124aa0feeeeab3460aeaeeb7ec577f951 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
\tManage products
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
\t<li class=\"breadcrumb-item active\">product</li>
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
        echo twig_include($this->env, $context, "product/_form.html.twig");
        echo "


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card card \">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Product List</h3>
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
\t\t\t\t<th>#</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Product Type</th>
                ";
        // line 80
        echo "                <th>Price</th>
                
             
            
                <th>Category</th>
              
                
                
                <th>actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 92
        $context["i"] = 1;
        // line 93
        echo "\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 93, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 94
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 96, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 97
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 97, $this->source); })()) + 1);
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                                                <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                                                <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "productType", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"edit\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 119), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\" action=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 124)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_token\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 128))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\" title=\"Show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 142
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div class=\"float-right\">";
        // line 148
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 148, $this->source); })()));
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
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 148,  339 => 146,  330 => 142,  317 => 134,  311 => 130,  307 => 128,  300 => 124,  292 => 119,  278 => 108,  270 => 104,  266 => 101,  262 => 100,  258 => 99,  255 => 98,  253 => 97,  249 => 96,  245 => 94,  239 => 93,  237 => 92,  223 => 80,  183 => 42,  180 => 41,  177 => 40,  175 => 39,  165 => 32,  159 => 28,  155 => 26,  150 => 24,  144 => 21,  136 => 15,  126 => 14,  113 => 10,  103 => 9,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Departement index
{% endblock %}
{% block maintitle %}

\tManage products
{% endblock %}
{% block breadcrumb %}
\t<li class=\"breadcrumb-item active\">Stock
\t</li>
\t<li class=\"breadcrumb-item active\">product</li>
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
\t\t\t\t\t\t\t\t{{ include('product/_form.html.twig') }}


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card card \">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Product List</h3>
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
\t\t\t\t<th>#</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Product Type</th>
                {# <th>Model</th>
                <th>Serial</th> #}
                <th>Price</th>
                
             
            
                <th>Category</th>
              
                
                
                <th>actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% set i = 1 %}
\t\t\t\t\t\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ i }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set i = i+1 %}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                <td>{{ product.name }}</td>
                                                <td>{{ product.brand }}</td>
                                                <td>{{ product.productType }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t{# <td>{{ product.model }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ product.serial }}</td> #}
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ product.price }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ product.category }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"edit\" value=\"{{product.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"d-inline\" method=\"post\" action=\"{{ path('product_delete', {'id': product.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ product.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{#  <button type=\"button\" data-type=\"confirm\" class=\"btn btn-danger js-sweetalert\" title=\"Delete\">#}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product_show', {'id': product.id}) }}\" class=\"btn btn-info btn-sm\" title=\"Show\">
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
\t\t\t\t\t\t\t\t<div class=\"float-right\">{{ knp_pagination_render(products) }}</div>


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
", "product/index.html.twig", "/var/www/inventory/templates/product/index.html.twig");
    }
}
