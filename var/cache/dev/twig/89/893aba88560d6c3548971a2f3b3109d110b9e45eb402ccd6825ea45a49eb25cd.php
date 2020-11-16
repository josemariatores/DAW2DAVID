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

/* Products.html.twig */
class __TwigTemplate_13efa40135aa06ee0d5b915759c38f89f618ecc99abed78c41164b261f460cba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Products.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Products.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <div class=\"row tm-gallery\">
    <div id=\"tm gallery-page\" class=\"tm gallery-page\">
        ";
        // line 6
        $context["lowerLimit"] = (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 6, $this->source); })()) - 1) * (isset($context["itemsPerPage"]) || array_key_exists("itemsPerPage", $context) ? $context["itemsPerPage"] : (function () { throw new RuntimeError('Variable "itemsPerPage" does not exist.', 6, $this->source); })()));
        // line 7
        echo "        ";
        $context["upperLimit"] = (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 7, $this->source); })()) * (isset($context["itemsPerPage"]) || array_key_exists("itemsPerPage", $context) ? $context["itemsPerPage"] : (function () { throw new RuntimeError('Variable "itemsPerPage" does not exist.', 7, $this->source); })())) + 1);
        // line 8
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["travels"]) {
            echo " 
            ";
            // line 9
            if (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9), (isset($context["lowerLimit"]) || array_key_exists("lowerLimit", $context) ? $context["lowerLimit"] : (function () { throw new RuntimeError('Variable "lowerLimit" does not exist.', 9, $this->source); })()))) && (-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9), (isset($context["upperLimit"]) || array_key_exists("upperLimit", $context) ? $context["upperLimit"] : (function () { throw new RuntimeError('Variable "upperLimit" does not exist.', 9, $this->source); })()))))) {
                // line 10
                echo "            <article class=\"col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item\">
                <figure>
                    <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["travels"], "imagen", [], "any", false, false, false, 12), "img"), "html", null, true);
                echo "\"  alt=\"image\" class=\"img-fluid tm-gallery-img\" />
                    <figcaption>
                        <h4 class=\"tm-gallery-title\">";
                // line 14
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["travels"], "getName", [], "method", false, false, false, 14)), "html", null, true);
                echo "</h4>
                        <p class=\"tm-gallery-description\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["travels"], "getDescription", [], "method", false, false, false, 15), "html", null, true);
                echo "</p>
                        <p class=\"tm-gallery-place\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["travels"], "getPlace", [], "method", false, false, false, 16), "html", null, true);
                echo "</p>
                    </figcaption>
                </figure>
            </article>
            ";
            }
            // line 21
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['travels'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        ";
        $context["lastPage"] = twig_round((twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })())) / (isset($context["itemsPerPage"]) || array_key_exists("itemsPerPage", $context) ? $context["itemsPerPage"] : (function () { throw new RuntimeError('Variable "itemsPerPage" does not exist.', 22, $this->source); })())), 0, "ceil");
        // line 23
        echo "        ";
        $context["remainder"] = ((twig_round((twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })())) / (isset($context["itemsPerPage"]) || array_key_exists("itemsPerPage", $context) ? $context["itemsPerPage"] : (function () { throw new RuntimeError('Variable "itemsPerPage" does not exist.', 23, $this->source); })())), 0, "ceil") * (isset($context["itemsPerPage"]) || array_key_exists("itemsPerPage", $context) ? $context["itemsPerPage"] : (function () { throw new RuntimeError('Variable "itemsPerPage" does not exist.', 23, $this->source); })())) - twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })())));
        // line 24
        echo "        ";
        if (((0 === twig_compare((isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new RuntimeError('Variable "lastPage" does not exist.', 24, $this->source); })()), (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 24, $this->source); })()))) && (0 !== twig_compare((isset($context["remainder"]) || array_key_exists("remainder", $context) ? $context["remainder"] : (function () { throw new RuntimeError('Variable "remainder" does not exist.', 24, $this->source); })()), 0)))) {
            // line 25
            echo "
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["remainder"]) || array_key_exists("remainder", $context) ? $context["remainder"] : (function () { throw new RuntimeError('Variable "remainder" does not exist.', 26, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["dummyTravels"]) {
                // line 27
                echo "            <article class=\"col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item\">
                <figure>
                    <img src=\"\" alt\"\" class=\"img-fluid tm-gallery-img\" />
                    <figcaption>
                        <h4 class=\"tm-gallery-title\">&nbsp;</h4>
                        <p class=\"tm-gallery-description\">&nbsp;</p>
                        <p class=\"tm-gallery-price\">&nbsp;</p>
                    </figcaption>
                </figure>
            </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dummyTravels'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        ";
        }
        // line 39
        echo "    </div>
</div>

<div class=\"tm-paging-links\">
    <nav>
    <ul>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new RuntimeError('Variable "lastPage" does not exist.', 45, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["paginator"]) {
            // line 46
            echo "        <li class=\"tm-paging-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Products", ["currentTravel" => (isset($context["currentTravel"]) || array_key_exists("currentTravel", $context) ? $context["currentTravel"] : (function () { throw new RuntimeError('Variable "currentTravel" does not exist.', 46, $this->source); })()), "currentPage" => $context["paginator"]]), "html", null, true);
            echo "\" class=\"tm-paging-link\"";
            echo (((0 === twig_compare((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 46, $this->source); })()), $context["paginator"]))) ? ("active") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["paginator"], "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginator'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </ul>
    </nav>
</div>
<div class=\"tm-paging-links\">
    <nav>
        <ul>
            ";
        // line 54
        $context["currentTravel"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", [0 => "travel"], "method", false, false, false, 54);
        // line 55
        echo "            <li class=\"tm-paging-items\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Products", ["currentTravel" => "USA"]);
        echo "\" class=\"tm-paging-link\"";
        echo (((0 === twig_compare((isset($context["currentTravel"]) || array_key_exists("currentTravel", $context) ? $context["currentTravel"] : (function () { throw new RuntimeError('Variable "currentTravel" does not exist.', 55, $this->source); })()), "USA"))) ? (" active ") : (""));
        echo ">USA</a></li>
            <li class=\"tm-paging-items\"><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Products", ["currentTravel" => "Europe"]);
        echo "\" class=\"tm-paging-link\"";
        echo (((0 === twig_compare((isset($context["currentTravel"]) || array_key_exists("currentTravel", $context) ? $context["currentTravel"] : (function () { throw new RuntimeError('Variable "currentTravel" does not exist.', 56, $this->source); })()), "  Europe "))) ? (" active ") : (""));
        echo ">Europe</a></li>
            <li class=\"tm-paging-items\"><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Products", ["currentTravel" => "Asia"]);
        echo "\" class=\"tm-paging-link\"";
        echo (((0 === twig_compare((isset($context["currentTravel"]) || array_key_exists("currentTravel", $context) ? $context["currentTravel"] : (function () { throw new RuntimeError('Variable "currentTravel" does not exist.', 57, $this->source); })()), "Asia"))) ? (" active ") : (""));
        echo ">Asia</a></li>
        </ul>
    </nav>
</div>
     

   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 57,  215 => 56,  208 => 55,  206 => 54,  198 => 48,  185 => 46,  181 => 45,  173 => 39,  170 => 38,  154 => 27,  150 => 26,  147 => 25,  144 => 24,  141 => 23,  138 => 22,  124 => 21,  116 => 16,  112 => 15,  108 => 14,  103 => 12,  99 => 10,  97 => 9,  77 => 8,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block body %}
 <div class=\"row tm-gallery\">
    <div id=\"tm gallery-page\" class=\"tm gallery-page\">
        {% set lowerLimit = (currentPage - 1 ) * itemsPerPage %}
        {% set upperLimit =  currentPage  * itemsPerPage + 1 %}
        {% for travels in data %} 
            {% if loop.index > lowerLimit and loop.index < upperLimit %}
            <article class=\"col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item\">
                <figure>
                    <img src=\"{{ asset(travels.imagen, 'img') }}\"  alt=\"image\" class=\"img-fluid tm-gallery-img\" />
                    <figcaption>
                        <h4 class=\"tm-gallery-title\">{{ travels.getName() | upper }}</h4>
                        <p class=\"tm-gallery-description\">{{ travels.getDescription() }}</p>
                        <p class=\"tm-gallery-place\">{{ travels.getPlace() }}</p>
                    </figcaption>
                </figure>
            </article>
            {% endif %}
        {% endfor %}
        {% set lastPage = (((data | length)/itemsPerPage)|round(0,'ceil')) %}
        {% set remainder = (((data | length)/itemsPerPage)|round(0,'ceil'))*itemsPerPage-(data|length) %}
        {% if lastPage == currentPage and remainder != 0 %}

            {% for dummyTravels in 1..remainder %}
            <article class=\"col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item\">
                <figure>
                    <img src=\"\" alt\"\" class=\"img-fluid tm-gallery-img\" />
                    <figcaption>
                        <h4 class=\"tm-gallery-title\">&nbsp;</h4>
                        <p class=\"tm-gallery-description\">&nbsp;</p>
                        <p class=\"tm-gallery-price\">&nbsp;</p>
                    </figcaption>
                </figure>
            </article>
            {% endfor %}
        {% endif %}
    </div>
</div>

<div class=\"tm-paging-links\">
    <nav>
    <ul>
        {% for paginator in 1.. lastPage %}
        <li class=\"tm-paging-item\"><a href=\"{{path('Products',{currentTravel : currentTravel, currentPage : paginator })}}\" class=\"tm-paging-link\"{{currentPage == paginator ? 'active' : ''}}>{{paginator}}</a></li>
        {% endfor %}
    </ul>
    </nav>
</div>
<div class=\"tm-paging-links\">
    <nav>
        <ul>
            {% set currentTravel = app.request.attributes.get(\"travel\") %}
            <li class=\"tm-paging-items\"><a href=\"{{path('Products',{currentTravel : 'USA'})}}\" class=\"tm-paging-link\"{{currentTravel == 'USA' ? ' active ' : ''}}>USA</a></li>
            <li class=\"tm-paging-items\"><a href=\"{{path('Products',{currentTravel : 'Europe'})}}\" class=\"tm-paging-link\"{{currentTravel == '  Europe ' ? ' active ' : ''}}>Europe</a></li>
            <li class=\"tm-paging-items\"><a href=\"{{path('Products',{currentTravel : 'Asia'})}}\" class=\"tm-paging-link\"{{currentTravel == 'Asia' ? ' active ' : ''}}>Asia</a></li>
        </ul>
    </nav>
</div>
     

   
{% endblock %}
", "Products.html.twig", "C:\\Users\\josem\\DAW2\\DAW2\\templates\\Products.html.twig");
    }
}
