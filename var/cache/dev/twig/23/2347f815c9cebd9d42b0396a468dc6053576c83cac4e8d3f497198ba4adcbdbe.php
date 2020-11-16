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

/* contact-page.html.twig */
class __TwigTemplate_34ff32544d5d5e116a3fc3652cdbbfc87864191c340366f65876a34a2a4d639a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact-page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact-page.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "contact-page.html.twig", 1);
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
        echo " 
     

    <div class=\"heading-page\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h2>Contact Us</h2>
                <div class=\"line-dec\"></div>
            </div>
        </div>
    </div>


    <div class=\"contact-intro\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h2 class=\"hidden-sm hidden-xs\">Vivamus faucibus aliquam <br>massa id malesuada</h2>
                <h2 class=\"hidden-lg hidden-md\">Vivamus faucibus aliquam massa id malesuada</h2>
                <span>Humblebrag banjo man braid leggings tote bag.</span>
                <p>Cras sit amet tortor vitae justo suscipit accumsan. Ut vel nulla bibendum dolor porttitor convallis vel ac tellus. Aliquam lacinia in mi sit amet ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque eget maximus magna. </p>
                <br><p>Ut facilisis lorem in nisl viverra, non rhoncus elit commodo. Duis id porta enim. Vivamus at lacus eget ligula pharetra sodales sit amet ac arcu. Vivamus luctus sem nec tortor blandit, tempor blandit odio lobortis. Quisque vehicula tellus vitae maximus accumsan. Sed id mi id quam interdum tincidunt. Suspendisse faucibus turpis id feugiat commodo.</p>
                <div class=\"blue-border-button\">
                    <a href=\"#\">View More</a>
                </div>
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
        // line 45
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
                        <div class=\"col-md-8 col-md-offset-2\">
                            <fieldset>
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" id=\"message\" placeholder=\"Your message...\" required=\"\"></textarea>
                          </fieldset>
                        </div>
                        <div class=\"col-md-8 col-md-offset-2\">
                            <fieldset>
                                <button type=\"submit\" id=\"form-submit\" class=\"btn\">Send Message</button>
                            </fieldset>
                        </div> 
                    </form>
                    </div>                
                </div>
            </div>
            <div class=\"col-md-12\">
                <div id=\"map\">
                \t<!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click \"Share\" and choose \"Embed map\" tab
                           4. Copy only URL and paste it within the src=\"\" field below
                    -->
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907\" width=\"100%\" height=\"450px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>
            </div>
        </div>  
    </div>


    <div class=\"subscribe-form\">
        <div class=\"container\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
                <form action=\"#\" method=\"get\">
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
        return "contact-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 45,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block body %}
 
     

    <div class=\"heading-page\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h2>Contact Us</h2>
                <div class=\"line-dec\"></div>
            </div>
        </div>
    </div>


    <div class=\"contact-intro\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h2 class=\"hidden-sm hidden-xs\">Vivamus faucibus aliquam <br>massa id malesuada</h2>
                <h2 class=\"hidden-lg hidden-md\">Vivamus faucibus aliquam massa id malesuada</h2>
                <span>Humblebrag banjo man braid leggings tote bag.</span>
                <p>Cras sit amet tortor vitae justo suscipit accumsan. Ut vel nulla bibendum dolor porttitor convallis vel ac tellus. Aliquam lacinia in mi sit amet ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque eget maximus magna. </p>
                <br><p>Ut facilisis lorem in nisl viverra, non rhoncus elit commodo. Duis id porta enim. Vivamus at lacus eget ligula pharetra sodales sit amet ac arcu. Vivamus luctus sem nec tortor blandit, tempor blandit odio lobortis. Quisque vehicula tellus vitae maximus accumsan. Sed id mi id quam interdum tincidunt. Suspendisse faucibus turpis id feugiat commodo.</p>
                <div class=\"blue-border-button\">
                    <a href=\"#\">View More</a>
                </div>
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
                        <div class=\"col-md-8 col-md-offset-2\">
                            <fieldset>
                                <textarea name=\"message\" rows=\"6\" class=\"form-control\" id=\"message\" placeholder=\"Your message...\" required=\"\"></textarea>
                          </fieldset>
                        </div>
                        <div class=\"col-md-8 col-md-offset-2\">
                            <fieldset>
                                <button type=\"submit\" id=\"form-submit\" class=\"btn\">Send Message</button>
                            </fieldset>
                        </div> 
                    </form>
                    </div>                
                </div>
            </div>
            <div class=\"col-md-12\">
                <div id=\"map\">
                \t<!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click \"Share\" and choose \"Embed map\" tab
                           4. Copy only URL and paste it within the src=\"\" field below
                    -->
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907\" width=\"100%\" height=\"450px\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                </div>
            </div>
        </div>  
    </div>


    <div class=\"subscribe-form\">
        <div class=\"container\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
                <form action=\"#\" method=\"get\">
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


    ", "contact-page.html.twig", "C:\\Users\\josem\\DAW2\\DAW2\\templates\\contact-page.html.twig");
    }
}
