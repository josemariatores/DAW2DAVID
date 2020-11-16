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

/* layout.html.twig */
class __TwigTemplate_57f49146b862c1005e4a5222855ffd93da234c00ce600666303c52aa760c5ef3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
            'subfooter' => [$this, 'block_subfooter'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>Brunch HTML Template</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">

        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/css/bootstrap-theme.min.css\">
        <link rel=\"stylesheet\" href=\"/css/fontAwesome.css\">
        <link rel=\"stylesheet\" href=\"/css/hero-slider.css\">
        <link rel=\"stylesheet\" href=\"/css/owl-carousel.css\">
        <link rel=\"stylesheet\" href=\"/css/datepicker.css\">
        <link rel=\"stylesheet\" href=\"/css/tooplate-style.css\">

        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">

        <script src=\"js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "        <div class=\"wrap inner-header\">
        <header id=\"header\">
            <div class=\"container-fluid\">
                <div class=\"col-md-12\">
                    <button id=\"primary-nav-button\" type=\"button\">Menu</button>
                    <div class=\"logo\">
                        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"/img/white-logo.png\" alt=\"Brunch Template\"></a>
                    </div>
                    <nav id=\"primary-nav\" class=\"dropdown cf\">
                        <ul class=\"dropdown menu\">
                            <li class='active'><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Main Features</a></li>
                            <li><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Products");
        echo "\">Products</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generic-page");
        echo "\">Latest Products</a></li>
                                    <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generic-page");
        echo "\">New Arrivals</a></li>
                                    <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generic-page");
        echo "\">Top Rated 2019</a></li>
                                    <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generic-page");
        echo "\">Recommended</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generic-page");
        echo "\">Shop</a></li>
                            <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact-page");
        echo "\">Contact Us</a></li>
                            <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login-page");
        echo "\">Login</a></li>
                        </ul>
                    </nav><!-- / #primary-nav -->
                </div>
            </div>
        </header>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 59
        echo "    
        <div class=\"container\">
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"footer-item\">
                    <h2>Latest Products</h2>
                    <ul>
                        <li><a href=\"#\">-  Microdosing</a></li>
                        <li><a href=\"#\">-  Dreamcatcher</a></li>
                        <li><a href=\"#\">-  Chambray irony</a></li>
                        <li><a href=\"#\">-  Bitters leggings</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"footer-item\">
                    <h2>New Arrivals</h2>
                    <ul>
                        <li><a href=\"#\">-  Park brunch</a></li>
                        <li><a href=\"#\">-  Shoreditch</a></li>
                        <li><a href=\"#\">-  Activated</a></li>
                        <li><a href=\"#\">-  Charcoales</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"footer-item\">
                    <h2>Top Rated 2018</h2>
                    <ul>
                        <li><a href=\"#\">-  Messenger</a></li>
                        <li><a href=\"#\">-  Selvage</a></li>
                        <li><a href=\"#\">-  Chartreuse</a></li>
                        <li><a href=\"#\">-  Bushwick</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"footer-item\">
                    <h2>Recommended</h2>
                    <ul>
                        <li><a href=\"#\">-  Coloring</a></li>
                        <li><a href=\"#\">-  Pinterest</a></li>
                        <li><a href=\"#\">-  Mumblecore</a></li>
                        <li><a href=\"#\">-  Mustache</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-12\">
                <div class=\"footer-item\">
                    <h2>More About Us</h2>
                    <p>Duis tristique, erat id tempus viverra, quam ante tempus massa, id pulvinar nisi lorem at metus. Aenean posuere risus tristique.</p>
                    <ul class=\"social-icons\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_subfooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subfooter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subfooter"));

        // line 123
        echo "
    <div class=\"sub-footer\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <p>Copyright &copy; 2018 Company Name 
                
                - Design: <a rel=\"nofollow\" href=\"https://www.facebook.com/tooplate\">Tooplate</a></p>
            </div>
        </div>
    </div>

   
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 138
        echo "     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.11.2.min.js\"><\\/script>')</script>

    <script src=\"/js/vendor/bootstrap.min.js\"></script>
    
    <script src=\"/js/datepicker.js\"></script>
    <script src=\"/js/plugins.js\"></script>
    <script src=\"/js/main.js\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 138,  291 => 137,  269 => 123,  259 => 122,  188 => 59,  178 => 58,  160 => 48,  156 => 47,  152 => 46,  146 => 43,  142 => 42,  138 => 41,  134 => 40,  129 => 38,  125 => 37,  118 => 33,  110 => 27,  100 => 26,  72 => 6,  62 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}


    {% block head %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>Brunch HTML Template</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">

        <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/css/bootstrap-theme.min.css\">
        <link rel=\"stylesheet\" href=\"/css/fontAwesome.css\">
        <link rel=\"stylesheet\" href=\"/css/hero-slider.css\">
        <link rel=\"stylesheet\" href=\"/css/owl-carousel.css\">
        <link rel=\"stylesheet\" href=\"/css/datepicker.css\">
        <link rel=\"stylesheet\" href=\"/css/tooplate-style.css\">

        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">

        <script src=\"js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
    {% endblock %}
   
    {% block header %}
        <div class=\"wrap inner-header\">
        <header id=\"header\">
            <div class=\"container-fluid\">
                <div class=\"col-md-12\">
                    <button id=\"primary-nav-button\" type=\"button\">Menu</button>
                    <div class=\"logo\">
                        <a href=\"{{path('index')}}\"><img src=\"/img/white-logo.png\" alt=\"Brunch Template\"></a>
                    </div>
                    <nav id=\"primary-nav\" class=\"dropdown cf\">
                        <ul class=\"dropdown menu\">
                            <li class='active'><a href=\"{{path('index')}}\">Main Features</a></li>
                            <li><a href=\"{{path('Products')}}\">Products</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"{{path('generic-page')}}\">Latest Products</a></li>
                                    <li><a href=\"{{path('generic-page')}}\">New Arrivals</a></li>
                                    <li><a href=\"{{path('generic-page')}}\">Top Rated 2019</a></li>
                                    <li><a href=\"{{path('generic-page')}}\">Recommended</a></li>
                                </ul>
                            </li>
                            <li><a href=\"{{path('generic-page')}}\">Shop</a></li>
                            <li><a href=\"{{path('contact-page')}}\">Contact Us</a></li>
                            <li><a href=\"{{path('login-page')}}\">Login</a></li>
                        </ul>
                    </nav><!-- / #primary-nav -->
                </div>
            </div>
        </header>
    </div>
    {% endblock %}
 

    {% block footer %}
    
        <div class=\"container\">
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"footer-item\">
                    <h2>Latest Products</h2>
                    <ul>
                        <li><a href=\"#\">-  Microdosing</a></li>
                        <li><a href=\"#\">-  Dreamcatcher</a></li>
                        <li><a href=\"#\">-  Chambray irony</a></li>
                        <li><a href=\"#\">-  Bitters leggings</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"footer-item\">
                    <h2>New Arrivals</h2>
                    <ul>
                        <li><a href=\"#\">-  Park brunch</a></li>
                        <li><a href=\"#\">-  Shoreditch</a></li>
                        <li><a href=\"#\">-  Activated</a></li>
                        <li><a href=\"#\">-  Charcoales</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"footer-item\">
                    <h2>Top Rated 2018</h2>
                    <ul>
                        <li><a href=\"#\">-  Messenger</a></li>
                        <li><a href=\"#\">-  Selvage</a></li>
                        <li><a href=\"#\">-  Chartreuse</a></li>
                        <li><a href=\"#\">-  Bushwick</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-6\">
                <div class=\"footer-item\">
                    <h2>Recommended</h2>
                    <ul>
                        <li><a href=\"#\">-  Coloring</a></li>
                        <li><a href=\"#\">-  Pinterest</a></li>
                        <li><a href=\"#\">-  Mumblecore</a></li>
                        <li><a href=\"#\">-  Mustache</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-12\">
                <div class=\"footer-item\">
                    <h2>More About Us</h2>
                    <p>Duis tristique, erat id tempus viverra, quam ante tempus massa, id pulvinar nisi lorem at metus. Aenean posuere risus tristique.</p>
                    <ul class=\"social-icons\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    
    {% endblock %}

    {% block subfooter %}

    <div class=\"sub-footer\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <p>Copyright &copy; 2018 Company Name 
                
                - Design: <a rel=\"nofollow\" href=\"https://www.facebook.com/tooplate\">Tooplate</a></p>
            </div>
        </div>
    </div>

   
    {% endblock %}
    
    {% block scripts %}
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.11.2.min.js\"><\\/script>')</script>

    <script src=\"/js/vendor/bootstrap.min.js\"></script>
    
    <script src=\"/js/datepicker.js\"></script>
    <script src=\"/js/plugins.js\"></script>
    <script src=\"/js/main.js\"></script>
    {% endblock %}

", "layout.html.twig", "C:\\Users\\josem\\DAW2\\DAW2\\templates\\layout.html.twig");
    }
}
