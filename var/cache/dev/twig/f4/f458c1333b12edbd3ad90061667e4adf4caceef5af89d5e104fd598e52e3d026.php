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

/* base.html.twig */
class __TwigTemplate_4cf5a60dc7cd247e0004f7cdb861c77a3d4e1863eb3099ebf4017de6a26ab85b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'maintitle' => [$this, 'block_maintitle'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t\t| Inventory Management
\t\t</title>

\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">

\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">

\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"), "html", null, true);
        echo "\">
\t\t";
        // line 27
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/fontface/OpenSans.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "\t\t</head>

\t\t<body class=\"hold-transition sidebar-mini\">
\t\t\t<div
\t\t\t\tclass=\"wrapper\">
\t\t\t\t<!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"index3.html\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-navbar\" type=\"submit\">
            <i class=\"fas fa-search\"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Messages Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-comments\"></i>
          <span class=\"badge badge-danger navbar-badge\">3</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Brad Diesel
                  <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">Call me whenever you can...</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  John Pierce
                  <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">I got your message bro</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Nora Silvester
                  <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">The subject goes here</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-bell\"></i>
          <span class=\"badge badge-warning navbar-badge\">15</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
            <span class=\"float-right text-muted text-sm\">3 mins</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-users mr-2\"></i> 8 friend requests
            <span class=\"float-right text-muted text-sm\">12 hours</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-file mr-2\"></i> 3 new reports
            <span class=\"float-right text-muted text-sm\">2 days</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
          <i class=\"fas fa-th-large\"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
\t\t\t\t<!-- /.navbar -->

\t\t\t\t<!-- Main Sidebar Container -->
\t\t\t\t\t<aside
\t\t\t\t\tclass=\"main-sidebar sidebar-white sidebar-light-blue\"> <!-- Brand Logo -->
\t\t\t\t\t<a href=\"/home\" class=\"brand-link navbar-lightblue\">
\t\t\t\t\t\t<img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/inventory.png"), "html", null, true);
        echo "\" alt=\"bulehora Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t\t\t\t<span class=\"brand-text font-weight-light\">Stock Management</span>
\t\t\t\t\t</a>

\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"sidebar\">

\t\t\t\t\t\t<!-- Sidebar Menu -->
            <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">

          <li class=\"nav-item has-treeview menu-open\">
            <a href=\"#\" class=\"nav-link active\">
              <i class=\"nav-icon fas fa-chart-pie\"></i>
              <p>
                Manage Stock
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">

            <li class=\"nav-item\">
                <a href=\"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link active\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Home</p>
                </a>
              </li>

              <li class=\"nav-item\">
                <a href=\" ";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("college_index");
        echo " \" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>College</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Department</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Store</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Cateories</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brand_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Brand</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_type_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Product type</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 233
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Stock</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transfer_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Transfer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 245
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Reports</p>
                </a>
              </li>
              
            </ul>
          </li>




          <li class=\"nav-item has-treeview menu-open\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-chart-pie\"></i>
              <p>
                User management
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"";
        // line 267
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 273
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Permisssions</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 279
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " \" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Groups</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
\t\t\t\t\t\t<!-- /.sidebar-menu -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.sidebar -->
\t\t\t\t</aside>

\t\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t\t<div
\t\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t\t<section class=\"content-header\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t";
        // line 303
        $this->displayBlock('maintitle', $context, $blocks);
        // line 306
        echo "\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        // line 313
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 318
        echo "\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t\t</section>

\t\t\t\t\t<!-- Main content -->
\t\t\t\t\t<section class=\"content\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t\t\t";
        // line 330
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 330, $this->source); })()), "flashes", [], "any", false, false, false, 330));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 331
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 332
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"row alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mr-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa fa-";
                // line 335
                if (0 === twig_compare($context["label"], "success")) {
                    echo "check ";
                } else {
                    echo "ban ";
                }
                echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tAlert!</h4>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 337
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "

\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t<!-- left column -->
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t";
        // line 352
        $this->displayBlock('body', $context, $blocks);
        // line 355
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/.col (left) -->
\t\t\t\t\t\t\t\t<!-- right column -->
\t\t\t\t\t\t\t\t<div class=\"col-md-6\"></div>
\t\t\t\t\t\t\t\t<!--/.col (right) -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- /.content -->
\t\t\t\t</div>
\t\t\t\t<!-- /.content-wrapper -->
\t\t\t\t<footer class=\"main-footer\">
\t\t\t\t\t<div class=\"float-right d-none d-sm-block\">
\t\t\t\t\t\t<b>Version</b>
\t\t\t\t\t\t1.0
\t\t\t\t\t</div>
\t\t\t\t\t<strong>Copyright &copy; 2020
\t\t\t\t\t\t<a href=\"/\">Inventory Management</a>.</strong>
\t\t\t\t\tAll rights reserved.
\t\t\t\t</footer>


\t\t\t\t<!-- Control Sidebar -->
\t\t\t";
        // line 383
        echo "\t\t\t\t<!-- /.control-sidebar -->
\t\t\t</div>
\t\t\t<!-- ./wrapper -->

\t\t\t<!-- jQuery -->
\t\t\t<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Bootstrap 4 -->
\t\t\t<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- jquery-validation -->
\t\t\t";
        // line 394
        echo "\t\t\t<!-- AdminLTE App --><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"> </script>
\t\t\t<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>


\t\t\t";
        // line 398
        $this->displayBlock('javascripts', $context, $blocks);
        // line 399
        echo "
\t\t</body>

\t</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "\t\t\t\tHome
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 303
    public function block_maintitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "maintitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "maintitle"));

        // line 304
        echo "\t\t\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 313
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 314
        echo "

\t\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Patient</li>
\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 352
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 353
        echo "\t\t\t\t\t\t\t\t\t\t<h1>Body yyyyyyyyyyy</h1>
\t\t\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 398
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  680 => 398,  669 => 353,  659 => 352,  646 => 314,  636 => 313,  625 => 304,  615 => 303,  597 => 27,  586 => 9,  576 => 8,  563 => 399,  561 => 398,  555 => 395,  550 => 394,  545 => 390,  540 => 388,  533 => 383,  506 => 355,  504 => 352,  494 => 344,  488 => 343,  476 => 337,  467 => 335,  460 => 332,  455 => 331,  451 => 330,  437 => 318,  435 => 313,  426 => 306,  424 => 303,  397 => 279,  388 => 273,  379 => 267,  354 => 245,  345 => 239,  336 => 233,  327 => 227,  318 => 221,  309 => 215,  300 => 209,  291 => 203,  282 => 197,  273 => 191,  263 => 184,  237 => 161,  102 => 28,  97 => 27,  93 => 24,  88 => 22,  84 => 21,  80 => 20,  75 => 18,  70 => 16,  66 => 15,  60 => 11,  58 => 8,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>
\t\t\t{% block title %}
\t\t\t\tHome
\t\t\t{% endblock %}
\t\t\t| Inventory Management
\t\t</title>

\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}\">

\t\t<link rel=\"stylesheet\" href=\"{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}\">

\t\t<link rel=\"stylesheet\" href=\"{{asset('assets/dist/css/adminlte.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('assets/plugins/select2/css/select2.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}\">
\t\t<link
\t\trel=\"stylesheet\" href=\"{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}\">
\t\t{#
\t\t\t\t    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\"> #}
\t\t<link href=\"{{asset('assets/plugins/fontface/OpenSans.css')}}\" rel=\"stylesheet\"> {% block stylesheets %}{% endblock %}
\t\t</head>

\t\t<body class=\"hold-transition sidebar-mini\">
\t\t\t<div
\t\t\t\tclass=\"wrapper\">
\t\t\t\t<!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"index3.html\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-navbar\" type=\"submit\">
            <i class=\"fas fa-search\"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Messages Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-comments\"></i>
          <span class=\"badge badge-danger navbar-badge\">3</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Brad Diesel
                  <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">Call me whenever you can...</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  John Pierce
                  <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">I got your message bro</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Nora Silvester
                  <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">The subject goes here</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-bell\"></i>
          <span class=\"badge badge-warning navbar-badge\">15</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
            <span class=\"float-right text-muted text-sm\">3 mins</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-users mr-2\"></i> 8 friend requests
            <span class=\"float-right text-muted text-sm\">12 hours</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-file mr-2\"></i> 3 new reports
            <span class=\"float-right text-muted text-sm\">2 days</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
          <i class=\"fas fa-th-large\"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
\t\t\t\t<!-- /.navbar -->

\t\t\t\t<!-- Main Sidebar Container -->
\t\t\t\t\t<aside
\t\t\t\t\tclass=\"main-sidebar sidebar-white sidebar-light-blue\"> <!-- Brand Logo -->
\t\t\t\t\t<a href=\"/home\" class=\"brand-link navbar-lightblue\">
\t\t\t\t\t\t<img src=\"{{ asset('images/inventory.png')}}\" alt=\"bulehora Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
\t\t\t\t\t\t<span class=\"brand-text font-weight-light\">Stock Management</span>
\t\t\t\t\t</a>

\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"sidebar\">

\t\t\t\t\t\t<!-- Sidebar Menu -->
            <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">

          <li class=\"nav-item has-treeview menu-open\">
            <a href=\"#\" class=\"nav-link active\">
              <i class=\"nav-icon fas fa-chart-pie\"></i>
              <p>
                Manage Stock
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">

            <li class=\"nav-item\">
                <a href=\"{{ path('home') }}\" class=\"nav-link active\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Home</p>
                </a>
              </li>

              <li class=\"nav-item\">
                <a href=\" {{ path('college_index') }} \" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>College</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('department_index') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Department</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('store_index') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Store</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('categories_index') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Cateories</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('brand_index') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Brand</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('product_type_index') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Product type</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('product_index') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('stock_index') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Stock</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('transfer_index') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Transfer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('home') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Reports</p>
                </a>
              </li>
              
            </ul>
          </li>




          <li class=\"nav-item has-treeview menu-open\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-chart-pie\"></i>
              <p>
                User management
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"{{ path('user_index') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('home') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Permisssions</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('home') }} \" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Groups</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
\t\t\t\t\t\t<!-- /.sidebar-menu -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.sidebar -->
\t\t\t\t</aside>

\t\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t\t<div
\t\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t\t<section class=\"content-header\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t{% block maintitle %}
\t\t\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/\">Home</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% block breadcrumb %}


\t\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Patient</li>
\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t\t</section>

\t\t\t\t\t<!-- Main content -->
\t\t\t\t\t<section class=\"content\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t\t\t{% for label, messages in app.flashes %}
\t\t\t\t\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t\t\t\t\t<div class=\"row alert alert-{{ label }} alert-dismissible\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mr-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa fa-{% if label=='success' %}check {% else %}ban {% endif %}\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tAlert!</h4>
\t\t\t\t\t\t\t\t\t\t\t{{ message }}

\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t<!-- left column -->
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t{% block body %}
\t\t\t\t\t\t\t\t\t\t<h1>Body yyyyyyyyyyy</h1>
\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/.col (left) -->
\t\t\t\t\t\t\t\t<!-- right column -->
\t\t\t\t\t\t\t\t<div class=\"col-md-6\"></div>
\t\t\t\t\t\t\t\t<!--/.col (right) -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.container-fluid -->
\t\t\t\t\t</section>
\t\t\t\t\t<!-- /.content -->
\t\t\t\t</div>
\t\t\t\t<!-- /.content-wrapper -->
\t\t\t\t<footer class=\"main-footer\">
\t\t\t\t\t<div class=\"float-right d-none d-sm-block\">
\t\t\t\t\t\t<b>Version</b>
\t\t\t\t\t\t1.0
\t\t\t\t\t</div>
\t\t\t\t\t<strong>Copyright &copy; 2020
\t\t\t\t\t\t<a href=\"/\">Inventory Management</a>.</strong>
\t\t\t\t\tAll rights reserved.
\t\t\t\t</footer>


\t\t\t\t<!-- Control Sidebar -->
\t\t\t{# <aside class=\"control-sidebar control-sidebar-dark\">
\t\t\t\t\t\t    <!-- Control sidebar content goes here -->
\t\t\t\t\t\t  </aside> #}
\t\t\t\t<!-- /.control-sidebar -->
\t\t\t</div>
\t\t\t<!-- ./wrapper -->

\t\t\t<!-- jQuery -->
\t\t\t<script src=\"{{asset('assets/plugins/jquery/jquery.min.js')}}\"></script>
\t\t\t<!-- Bootstrap 4 -->
\t\t\t<script src=\"{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
\t\t\t<!-- jquery-validation -->
\t\t\t{# <script src=\"../../plugins/jquery-validation/jquery.validate.min.js\"></script>
\t\t\t\t\t\t<script src=\"{{asset('assets/plugins/jquery-validation/additional-methods.min.js\"></script> #}
\t\t\t<!-- AdminLTE App --><script src=\"{{asset('assets/dist/js/adminlte.min.js')}}\"> </script>
\t\t\t<script src=\"{{asset('assets/plugins/select2/js/select2.full.min.js')}}\"></script>


\t\t\t{% block javascripts %}{% endblock %}

\t\t</body>

\t</html>", "base.html.twig", "/var/www/inventory/templates/base.html.twig");
    }
}
