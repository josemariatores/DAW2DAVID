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

/* generic-page.html.twig */
class __TwigTemplate_cfa8b975b09e3cd6edad8f4ef185ec62f59c3154b7475d831fde685b951c70ac extends Template
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
        // line 2
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generic-page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "generic-page.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "generic-page.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " 
    


    <div class=\"heading-page\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h2>Generic Page</h2>
                <div class=\"line-dec\"></div>
            </div>
        </div>
    </div>

    <div class=\"services\">
        <div class=\"container\">
            <div class=\"col-md-4\">
                <div class=\"service-item\">
                    <div class=\"icon\">
                        <img src=\"img/first-service-icon.png\" alt=\"\">
                    </div>
                    <div class=\"text\">
                        <h2>Design &amp; Development</h2>
                        <p> Curabitur efficitur elit ac augue pellentesque tempor ut nec est. Aenean fermentum viverra arcu, at convallis purus iaculis id.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service-item\">
                    <div class=\"icon\">
                        <img src=\"img/second-service-icon.png\" alt=\"\">
                    </div>
                    <div class=\"text\">
                        <h2>Deliver On Time</h2>
                        <p>Fusce ultricies tortor ut mattis bibendum. Cras pellentesque suscipit nulla, sit amet luctus purus. Donec non erat eros. Cras vel dui in urna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service-item\">
                    <div class=\"icon\">
                        <img src=\"img/third-service-icon.png\" alt=\"\">
                    </div>
                    <div class=\"text\">
                        <h2>Quality Preview</h2>
                        <p>Sed dapibus dignissim pharetra. Phasellus vitae consequat nisi. Phasellus interdum purus a magna consequat, nec cursus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"accordions\">
        <div class=\"container\">
            <div class=\"col-md-8 col-md-offset-2\">
                <ul class=\"accordion\">
                    <li>
                        <a>Our Story 2018</a>
                        <p>Duis id porta enim. Vivamus at lacus eget ligula pharetra sodales sit amet ac arcu. Vivamus luctus sem nec tortor blandit, tempor blandit odio lobortis. Quisque vehicula tellus vitae maximus accumsan. 
                        <br><br>Sed id mi id quam interdum tincidunt. Suspendisse faucibus turpis id feugiat commodo. Curabitur nisl ante, lobortis ac venenatis sit amet, luctus at est. Nulla facilisi. Vivamus ex est, consequat non massa nec, facilisis finibus mauris.</p>
                    </li>
                    <li>
                        <a>Our Story 2017</a>
                        <p>Suspendisse eu congue ante. Sed nec diam lobortis, aliquet eros consectetur, tempus ligula. Donec tempor risus placerat risus fermentum convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        <br><br>Suspendisse interdum elit non efficitur sollicitudin. Mauris feugiat facilisis tempor. Cras rhoncus condimentum bibendum.</p>
                    </li>
                    <li>
                        <a>Our Story 2016</a>
                        <p>Phasellus ac porttitor lorem. Vestibulum sodales et eros quis tempus. Proin imperdiet, dolor quis dictum volutpat, elit tortor aliquet urna, vel fermentum risus orci ut nisl.
                        <br><br>Vestibulum aliquam pharetra nulla a varius. Suspendisse semper lectus a nisi auctor, non sagittis libero rutrum. Sed eget interdum turpis. Donec eleifend auctor ligula vel bibendum. Donec placerat ante enim, sit amet molestie massa venenatis sed.</p>
                    </li>
                    <li>
                        <a>Our Story 2012-2015</a>
                        <p>Sed hendrerit mi viverra mi maximus consectetur. Vivamus finibus quam quis justo commodo, vel condimentum lacus volutpat.
                        <br><br>Duis tristique, erat id tempus viverra, quam ante tempus massa, id pulvinar nisi lorem at metus. Aenean posuere risus tristique ipsum dignissim pellentesque. Donec mauris enim, laoreet id mi sed, porta tristique diam.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class=\"subscribe-form\">
        <div class=\"container\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
          \t<form action=\"#\" method=\"get\">
                <h4>Cras pellentesque suscipit nulla, sit amet luctus purus. Donec non erat eros.</h4>
                <fieldset>
                    <input name=\"email\" type=\"text\" id=\"email\" 
                    onfocus=\"if(this.value == 'Your Email...') { this.value = ''; }\" 
                    onBlur=\"if(this.value == '') { this.value = 'Your Email...';}\"
                    value=\"Your Email...\" required=\"\" />
          \t\t</fieldset>
                <fieldset>
                    <button type=\"submit\" id=\"form-submit\" class=\"btn\">Subscribe Now!</button>
                </fieldset>
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
        return "generic-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.html.twig' %}

{% block body %}
 
    


    <div class=\"heading-page\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h2>Generic Page</h2>
                <div class=\"line-dec\"></div>
            </div>
        </div>
    </div>

    <div class=\"services\">
        <div class=\"container\">
            <div class=\"col-md-4\">
                <div class=\"service-item\">
                    <div class=\"icon\">
                        <img src=\"img/first-service-icon.png\" alt=\"\">
                    </div>
                    <div class=\"text\">
                        <h2>Design &amp; Development</h2>
                        <p> Curabitur efficitur elit ac augue pellentesque tempor ut nec est. Aenean fermentum viverra arcu, at convallis purus iaculis id.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service-item\">
                    <div class=\"icon\">
                        <img src=\"img/second-service-icon.png\" alt=\"\">
                    </div>
                    <div class=\"text\">
                        <h2>Deliver On Time</h2>
                        <p>Fusce ultricies tortor ut mattis bibendum. Cras pellentesque suscipit nulla, sit amet luctus purus. Donec non erat eros. Cras vel dui in urna.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service-item\">
                    <div class=\"icon\">
                        <img src=\"img/third-service-icon.png\" alt=\"\">
                    </div>
                    <div class=\"text\">
                        <h2>Quality Preview</h2>
                        <p>Sed dapibus dignissim pharetra. Phasellus vitae consequat nisi. Phasellus interdum purus a magna consequat, nec cursus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"accordions\">
        <div class=\"container\">
            <div class=\"col-md-8 col-md-offset-2\">
                <ul class=\"accordion\">
                    <li>
                        <a>Our Story 2018</a>
                        <p>Duis id porta enim. Vivamus at lacus eget ligula pharetra sodales sit amet ac arcu. Vivamus luctus sem nec tortor blandit, tempor blandit odio lobortis. Quisque vehicula tellus vitae maximus accumsan. 
                        <br><br>Sed id mi id quam interdum tincidunt. Suspendisse faucibus turpis id feugiat commodo. Curabitur nisl ante, lobortis ac venenatis sit amet, luctus at est. Nulla facilisi. Vivamus ex est, consequat non massa nec, facilisis finibus mauris.</p>
                    </li>
                    <li>
                        <a>Our Story 2017</a>
                        <p>Suspendisse eu congue ante. Sed nec diam lobortis, aliquet eros consectetur, tempus ligula. Donec tempor risus placerat risus fermentum convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        <br><br>Suspendisse interdum elit non efficitur sollicitudin. Mauris feugiat facilisis tempor. Cras rhoncus condimentum bibendum.</p>
                    </li>
                    <li>
                        <a>Our Story 2016</a>
                        <p>Phasellus ac porttitor lorem. Vestibulum sodales et eros quis tempus. Proin imperdiet, dolor quis dictum volutpat, elit tortor aliquet urna, vel fermentum risus orci ut nisl.
                        <br><br>Vestibulum aliquam pharetra nulla a varius. Suspendisse semper lectus a nisi auctor, non sagittis libero rutrum. Sed eget interdum turpis. Donec eleifend auctor ligula vel bibendum. Donec placerat ante enim, sit amet molestie massa venenatis sed.</p>
                    </li>
                    <li>
                        <a>Our Story 2012-2015</a>
                        <p>Sed hendrerit mi viverra mi maximus consectetur. Vivamus finibus quam quis justo commodo, vel condimentum lacus volutpat.
                        <br><br>Duis tristique, erat id tempus viverra, quam ante tempus massa, id pulvinar nisi lorem at metus. Aenean posuere risus tristique ipsum dignissim pellentesque. Donec mauris enim, laoreet id mi sed, porta tristique diam.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class=\"subscribe-form\">
        <div class=\"container\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
          \t<form action=\"#\" method=\"get\">
                <h4>Cras pellentesque suscipit nulla, sit amet luctus purus. Donec non erat eros.</h4>
                <fieldset>
                    <input name=\"email\" type=\"text\" id=\"email\" 
                    onfocus=\"if(this.value == 'Your Email...') { this.value = ''; }\" 
                    onBlur=\"if(this.value == '') { this.value = 'Your Email...';}\"
                    value=\"Your Email...\" required=\"\" />
          \t\t</fieldset>
                <fieldset>
                    <button type=\"submit\" id=\"form-submit\" class=\"btn\">Subscribe Now!</button>
                </fieldset>
            </form>
            </div>
        </div>
    </div>

{% endblock %}

   


 ", "generic-page.html.twig", "C:\\Users\\josem\\DAW2\\DAW2\\templates\\generic-page.html.twig");
    }
}
