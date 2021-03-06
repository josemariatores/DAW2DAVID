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

/* recibe-login.html.twig */
class __TwigTemplate_622fe4947f061abe78a0866b9dee1a33171bb085da00791a625083f6e6823e49 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recibe-login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recibe-login.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "recibe-login.html.twig", 1);
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
        echo "    <div class=\"heading-page\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h2>Registrarse</h2>
                <div class=\"line-dec\"></div>
            </div>
        </div>
    </div>

    <div class=\"contact-form\">
        <div class=\"container-fluid\">
            <div class=\"col-md-4\">
                <div class=\"text-content\">
                    <div class=\"inside-content\">
                        <h4>Sed eget interdum turpis. Donec eleifend auctor ligula vel bibendum. Donec placerat ante enim.</h4>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"right-content\">
                    <div id=\"contact\">
                    <form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recibe-page");
        echo "\" method=\"post\">
                        <div class=\"col-md-4 col-md-offset-2\">
                            <fieldset>
                                <input name=\"name\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your name...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-4\">
                            <fieldset>
                                <input name=\"email\" type=\"text\" class=\"form-control\" id=\"email\" placeholder=\"Email...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-4\">
                            <fieldset>
                                <input name=\"password\" type=\"text\" class=\"form-control\" id=\"password\" placeholder=\"Your password...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-8 col-md-offset-2\">
                            <fieldset>
                                <button type=\"submit\" id=\"form-submit\" class=\"btn\">Iniciar  sesion</button>
                            </fieldset>
                        </div> 
                    </form>
                    </div>                
                </div>
            </div>
            


    


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recibe-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block body %}
    <div class=\"heading-page\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h2>Registrarse</h2>
                <div class=\"line-dec\"></div>
            </div>
        </div>
    </div>

    <div class=\"contact-form\">
        <div class=\"container-fluid\">
            <div class=\"col-md-4\">
                <div class=\"text-content\">
                    <div class=\"inside-content\">
                        <h4>Sed eget interdum turpis. Donec eleifend auctor ligula vel bibendum. Donec placerat ante enim.</h4>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"right-content\">
                    <div id=\"contact\">
                    <form action=\"{{ path('recibe-page') }}\" method=\"post\">
                        <div class=\"col-md-4 col-md-offset-2\">
                            <fieldset>
                                <input name=\"name\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your name...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-4\">
                            <fieldset>
                                <input name=\"email\" type=\"text\" class=\"form-control\" id=\"email\" placeholder=\"Email...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-4\">
                            <fieldset>
                                <input name=\"password\" type=\"text\" class=\"form-control\" id=\"password\" placeholder=\"Your password...\" required=\"\">
                            </fieldset>
                        </div>
                        <div class=\"col-md-8 col-md-offset-2\">
                            <fieldset>
                                <button type=\"submit\" id=\"form-submit\" class=\"btn\">Iniciar  sesion</button>
                            </fieldset>
                        </div> 
                    </form>
                    </div>                
                </div>
            </div>
            


    


    {% endblock %}", "recibe-login.html.twig", "C:\\Users\\josem\\DAW2\\DAW2\\templates\\recibe-login.html.twig");
    }
}
