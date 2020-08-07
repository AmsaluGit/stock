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

/* home/index.html.twig */
class __TwigTemplate_1debd08b5df2d2856976e99f2f681793f1ca3055e593fc9c11371578fdeb21be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<!-- Main content -->
       <section class=\"content\">
        <div class=\"container-fluid\">
          <!-- Small boxes (Stat box) -->
          <div class=\"row\">

           <div class=\"col-lg-3 col-6\">
              <!-- small box -->
              <div class=\"small-box bg-success\">
                <div class=\"inner\">
                  ";
        // line 18
        echo "                     <h3>550</h3>
                  <p>Total Users</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-stats-bars\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
              </div>
            </div>

            
            <div class=\"col-lg-3 col-6\">
              <!-- small box -->
              <div class=\"small-box bg-info\">
                <div class=\"inner\">
                  <h3>180</h3>

                  <p>New Products</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-bag\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
              </div>
            </div>
            <!-- ./col -->
           
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
              <!-- small box -->
              <div class=\"small-box bg-warning\">
                <div class=\"inner\">
                  <h3>44</h3>

                  <p>Total Orders</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-person-add\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
              <!-- small box -->
              <div class=\"small-box bg-danger\">
                <div class=\"inner\">
                  <h3>65</h3>

                  <p>Products in Salvage</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-pie-graph\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class=\"row\">
            <!-- Left col -->
            <section class=\"col-lg-7 connectedSortable\">
             
              </div>
              <!-- /.card -->

            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}

<!-- Main content -->
       <section class=\"content\">
        <div class=\"container-fluid\">
          <!-- Small boxes (Stat box) -->
          <div class=\"row\">

           <div class=\"col-lg-3 col-6\">
              <!-- small box -->
              <div class=\"small-box bg-success\">
                <div class=\"inner\">
                  {# <h3>53<sup style=\"font-size: 20px\">%</sup></h3> #}
                     <h3>550</h3>
                  <p>Total Users</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-stats-bars\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
              </div>
            </div>

            
            <div class=\"col-lg-3 col-6\">
              <!-- small box -->
              <div class=\"small-box bg-info\">
                <div class=\"inner\">
                  <h3>180</h3>

                  <p>New Products</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-bag\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
              </div>
            </div>
            <!-- ./col -->
           
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
              <!-- small box -->
              <div class=\"small-box bg-warning\">
                <div class=\"inner\">
                  <h3>44</h3>

                  <p>Total Orders</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-person-add\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3 col-6\">
              <!-- small box -->
              <div class=\"small-box bg-danger\">
                <div class=\"inner\">
                  <h3>65</h3>

                  <p>Products in Salvage</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-pie-graph\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class=\"row\">
            <!-- Left col -->
            <section class=\"col-lg-7 connectedSortable\">
             
              </div>
              <!-- /.card -->

            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
 
{% endblock %}
", "home/index.html.twig", "/var/www/inventory/templates/home/index.html.twig");
    }
}
