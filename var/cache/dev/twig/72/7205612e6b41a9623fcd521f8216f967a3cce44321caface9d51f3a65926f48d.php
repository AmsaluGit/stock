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

/* user_type/base.htmlOLDER.twig */
class __TwigTemplate_603031d7568c0cf7f706a80ad38fe1fd17f6760660a3db87b54bf061f0a83fa4 extends Template
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
            'body' => [$this, 'block_body'],
            'dashboard' => [$this, 'block_dashboard'],
            'slashdashboard' => [$this, 'block_slashdashboard'],
            'custompage' => [$this, 'block_custompage'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_type/base.htmlOLDER.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_type/base.htmlOLDER.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "    </head>




    <body class=\"hold-transition sidebar-mini layout-fixed\">
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 374
        echo "</body>

";
        // line 376
        $this->displayBlock('javascripts', $context, $blocks);
        // line 416
        echo "
    
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        
          <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- JQVMap -->
  <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
  <!-- summernote -->
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/summernote/summernote-bs4.css"), "html", null, true);
        echo "\">
  <!-- Google Font: Source Sans Pro -->
  <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "        
        <div class=\"wrapper\">

  <!-- Navbar -->
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

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"index3.html\" class=\"brand-link\">
      <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/inventory.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
           style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">Inventory Management System</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">


      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">

          <li class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link  active\">
              <i class=\"nav-icon fas fa-chart-pie\"></i>
              <p>
                Manage Stock
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\" ";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("college_index");
        echo " \" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>College</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Department</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Store</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Cateories</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("brand_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Brand</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_type_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Product type</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 230
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Order</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transfer_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Transfer</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 248
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Reports</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
        // line 254
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Visualization</p>
                </a>
              </li>
            </ul>
          </li>




          <li class=\"nav-item has-treeview\">
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
        // line 275
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"assets/pages/charts/flot.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Permisssions</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"assets/pages/charts/inline.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Groups</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


";
        // line 306
        echo "





   <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
      <!-- Content Header (Page header) -->
      <div class=\"content-header\">
        <div class=\"container-fluid\">
          <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
              <h1 class=\"m-0 text-dark\">
              ";
        // line 320
        $this->displayBlock('dashboard', $context, $blocks);
        // line 323
        echo "              </h1>
            </div><!-- /.col -->
            <div class=\"col-sm-6\">
              <ol class=\"breadcrumb float-sm-right\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item active\">
                ";
        // line 329
        $this->displayBlock('slashdashboard', $context, $blocks);
        // line 332
        echo "                </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
";
        // line 339
        $this->displayBlock('custompage', $context, $blocks);
        // line 342
        echo "        
</div>
    <!-- /.content-wrapper --> 
















";
        // line 361
        $this->displayBlock('footer', $context, $blocks);
        // line 369
        echo "
</div>
<!-- ./wrapper -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 320
    public function block_dashboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

        // line 321
        echo "                
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 329
    public function block_slashdashboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slashdashboard"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slashdashboard"));

        // line 330
        echo "                
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 339
    public function block_custompage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custompage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custompage"));

        // line 340
        echo "  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 361
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 362
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 376
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 377
        echo "
 

        
        <!-- jQuery -->
<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
<!-- JQVMap -->
<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Summernote -->
<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user_type/base.htmlOLDER.twig";
    }

    public function getDebugInfo()
    {
        return array (  753 => 414,  748 => 412,  743 => 410,  738 => 408,  733 => 406,  728 => 404,  723 => 402,  719 => 401,  714 => 399,  709 => 397,  705 => 396,  700 => 394,  695 => 392,  690 => 390,  681 => 384,  676 => 382,  669 => 377,  659 => 376,  649 => 362,  639 => 361,  628 => 340,  618 => 339,  607 => 330,  597 => 329,  586 => 321,  576 => 320,  562 => 369,  560 => 361,  539 => 342,  537 => 339,  528 => 332,  526 => 329,  518 => 323,  516 => 320,  500 => 306,  469 => 275,  445 => 254,  436 => 248,  427 => 242,  418 => 236,  409 => 230,  400 => 224,  391 => 218,  382 => 212,  373 => 206,  364 => 200,  355 => 194,  329 => 171,  197 => 41,  187 => 40,  175 => 32,  170 => 30,  165 => 28,  160 => 26,  155 => 24,  150 => 22,  145 => 20,  140 => 18,  135 => 16,  130 => 14,  121 => 7,  111 => 6,  92 => 5,  79 => 416,  77 => 376,  73 => 374,  71 => 40,  63 => 34,  61 => 6,  57 => 5,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        
          <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}\">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}\">
  <!-- JQVMap -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/dist/css/adminlte.min.css')}}\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}\">
  <!-- summernote -->
  <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/summernote/summernote-bs4.css')}}\">
  <!-- Google Font: Source Sans Pro -->
  <link href=\"{{asset('assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet')}}\">
        {% endblock %}
    </head>




    <body class=\"hold-transition sidebar-mini layout-fixed\">
        {% block body %}
        
        <div class=\"wrapper\">

  <!-- Navbar -->
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

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"index3.html\" class=\"brand-link\">
      <img src=\"{{ asset('images/inventory.png') }}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
           style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">Inventory Management System</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">


      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">

          <li class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link  active\">
              <i class=\"nav-icon fas fa-chart-pie\"></i>
              <p>
                Manage Stock
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
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
                <a href=\"{{ path('order_index') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Order</p>
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
              <li class=\"nav-item\">
                <a href=\"{{ path('home') }}\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Visualization</p>
                </a>
              </li>
            </ul>
          </li>




          <li class=\"nav-item has-treeview\">
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
                <a href=\"assets/pages/charts/flot.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Permisssions</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"assets/pages/charts/inline.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Groups</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


{# {% block custompage %}
 
{% endblock %} #}






   <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
      <!-- Content Header (Page header) -->
      <div class=\"content-header\">
        <div class=\"container-fluid\">
          <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
              <h1 class=\"m-0 text-dark\">
              {% block dashboard %}
                
              {% endblock %}
              </h1>
            </div><!-- /.col -->
            <div class=\"col-sm-6\">
              <ol class=\"breadcrumb float-sm-right\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item active\">
                {% block slashdashboard %}
                
              {% endblock %}
                </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
{% block custompage %}
  
{% endblock %}
        
</div>
    <!-- /.content-wrapper --> 
















{% block footer %}
    {# <strong>Copyright &copy; 2020 <a href=\"http://bhu.edu.et\">Bulehora University</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
      <b>Version</b> 3.0.5
    </div>
  </footer> #}
{% endblock %}

</div>
<!-- ./wrapper -->

{% endblock %}
</body>

{% block javascripts %}

 

        
        <!-- jQuery -->
<script src=\"{{asset('assets/plugins/jquery/jquery.min.js')}}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<!-- ChartJS -->
<script src=\"{{asset('assets/plugins/chart.js/Chart.min.js')}}\"></script>
<!-- Sparkline -->
<script src=\"{{asset('assets/plugins/sparklines/sparkline.js')}}\"></script>
<!-- JQVMap -->
<script src=\"{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}\"></script>
<script src=\"{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}\"></script>
<!-- jQuery Knob Chart -->
<script src=\"{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}\"></script>
<!-- daterangepicker -->
<script src=\"{{asset('assets/plugins/moment/moment.min.js')}}\"></script>
<script src=\"{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}\"></script>
<!-- Summernote -->
<script src=\"{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}\"></script>
<!-- overlayScrollbars -->
<script src=\"{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{asset('assets/dist/js/adminlte.js')}}\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"{{asset('assets/dist/js/pages/dashboard.js')}}\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{asset('assets/dist/js/demo.js')}}\"></script>
        {% endblock %}

    
</html>
", "user_type/base.htmlOLDER.twig", "/var/www/inventory/templates/user_type/base.htmlOLDER.twig");
    }
}
