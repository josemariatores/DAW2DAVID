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

/* index.html.twig */
class __TwigTemplate_4009aa684fdd08e3b5c4933717a80682752d1a4c1fd19c0afe2f17e75ecdff87 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
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
    <div class=\"banner\">
        <div class=\"container-fluid\">
            <div class=\"col-md-5 col-sm-5 col-xs-12\">
                <div class=\"left-content\">
                    <div class=\"inside-content\">
                        <h4>Total 3 HTML pages are included in this Brunch Template. Home, Generic and Contact.</h4>
                        <div class=\"white-border-button\">
                            <a href=\"#\">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-2 col-xs-12\">
                <div class=\"center-image\">
                    <div class=\"inside-content\">
                        <img src=\"img/center-image.png\" alt=\"\">
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 col-sm-5 col-xs-12\">
                <div class=\"right-content\">
                    <div class=\"owl-carousel owl-theme\">
                        <div class=\"item\">
                            <p>“Phasellus in nulla non ante tempor maximus. Mauris bibendum augue vel neque maximus, eget venenatis neque condimentum. Quisque suscipit porta finibus. Mauris volutpat commodo mattis.”</p>
                        </div>
                        <div class=\"item\">
                            <p>“Vestibulum posuere iaculis diam, in faucibus urna. Duis nisl tellus, gravida in lacinia consequat, aliquet ac ligula. Etiam bibendum ligula a nunc malesuada, non congue tortor porttitor.”</p>
                        </div>
                        <div class=\"item\">
                            <p>“Nullam sit amet sapien libero. Nulla arcu elit, auctor a odio nec, ultrices ultricies felis. Quisque pretium tempor odio, ut consectetur lectus semper a.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"template-presentation\">
        <div class=\"container\">
            <div class=\"col-md-7 hidden-xs hidden-sm\">
                <div class=\"left-image\">
                    <img src=\"img/template-image.png\" alt=\"\">
                </div>
            </div>
            <div class=\"col-md-5 hidden-xs hidden-sm\">
                <div class=\"right-content\">
                    <div class=\"author-image\">
                        <img src=\"img/template-author.png\" alt=\"\">
                    </div>
                    <h4>Mauris tristique tempus dapibus. Nulla quis risus euismod, imperdiet nisl sed.</h4>
                    <div class=\"blue-button\">
                        <a href=\"#\">View More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 hidden-lg hidden-md\">
                <div class=\"right-content\">
                    <div class=\"author-image\">
                        <img src=\"img/template-author.png\" alt=\"\">
                    </div>
                    <h4>Mauris tristique tempus dapibus. Nulla quis risus euismod, imperdiet nisl sed.</h4>
                    <div class=\"blue-button\">
                        <a href=\"#\">View More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-7 hidden-lg hidden-md\">
                <div class=\"left-image\">
                    <img src=\"img/template-image.png\" alt=\"\">
                </div>
            </div>
        </div>
    </div>

    <div class=\"left-right-image\">
        <div class=\"container\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"right-image\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h2 class=\"hidden-sm hidden-xs\">Donec pulvinar quis tortor <br>aliquam tincidunt</h2>
                            <h2 class=\"hidden-lg hidden-md\">Donec pulvinar quis tortor aliquam tincidunt</h2>
                            <span>Suspendisse faucibus ornare purus</span>
                            <p>Morbi quam dui, scelerisque cursus nisl et, placerat congue mi. Proin odio massa, tempor id odio eget, mollis molestie dui. Cras elementum mollis nisi, dapibus sagittis leo pretium nec.</p> <br />
                            <p>Aenean lobortis magna purus, quis blandit eros dictum at. Fusce gravida ligula non neque tempor congue. Vivamus efficitur eget nulla vel lacinia.</p>
                            <div class=\"blue-border-button\">
                                <a href=\"#\">View More</a>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"image\">
                                <img src=\"img/right-image-post.png\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"left-image\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"image\">
                                <img src=\"img/left-image-post.png\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <h2 class=\"hidden-sm hidden-xs\">Aliquam luctus convallis <br>tortor in cursus</h2>
                            <h2 class=\"hidden-lg hidden-md\">Aliquam luctus convallis tortor in cursus</h2>
                            <span>Lorem ipsum dolor sit amet</span>
                            <p>Nulla elementum, purus at cursus sollicitudin, dolor est fermentum justo, vel iaculis nibh lectus non elit. Cras bibendum felis tincidunt mauris tincidunt facilisis. Aenean porttitor lectus quis nulla laoreet, eget pulvinar leo ultricies.</p> <br /> 
                            <p>Mauris tristique tempus dapibus. Nulla quis risus euismod, imperdiet nisl sed, mattis magna. Nunc sed malesuada purus. Quisque urna nunc, lacinia vel ipsum tristique, finibus sollicitudin massa.</p>
                            <div class=\"blue-border-button\">
                                <a href=\"#\">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"video\">
        <div class=\"container-fluid\">
            <div class=\"col-md-4\">
                <div class=\"text-content\">
                    <div class=\"inside-content\">
                        <h4>Brunch HTML Template is provided by Tooplate for free of charge. You can use it for your website. Thank you.</h4>
                        <div class=\"white-border-button\">
                            <a href=\"#\">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div id=\"video-container\">
                    <div class=\"video-overlay\"></div>
                    <div class=\"video-content\">
                        <div class=\"inner\">
                            <a href=\"http://youtube.com\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                        </div>
                    </div>
                    
                    <video autoplay=\"\" loop=\"\" muted>
                        <source src=\"videos/highway-loop.mp4\" type=\"video/mp4\">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block body %}

    <div class=\"banner\">
        <div class=\"container-fluid\">
            <div class=\"col-md-5 col-sm-5 col-xs-12\">
                <div class=\"left-content\">
                    <div class=\"inside-content\">
                        <h4>Total 3 HTML pages are included in this Brunch Template. Home, Generic and Contact.</h4>
                        <div class=\"white-border-button\">
                            <a href=\"#\">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-2 col-xs-12\">
                <div class=\"center-image\">
                    <div class=\"inside-content\">
                        <img src=\"img/center-image.png\" alt=\"\">
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 col-sm-5 col-xs-12\">
                <div class=\"right-content\">
                    <div class=\"owl-carousel owl-theme\">
                        <div class=\"item\">
                            <p>“Phasellus in nulla non ante tempor maximus. Mauris bibendum augue vel neque maximus, eget venenatis neque condimentum. Quisque suscipit porta finibus. Mauris volutpat commodo mattis.”</p>
                        </div>
                        <div class=\"item\">
                            <p>“Vestibulum posuere iaculis diam, in faucibus urna. Duis nisl tellus, gravida in lacinia consequat, aliquet ac ligula. Etiam bibendum ligula a nunc malesuada, non congue tortor porttitor.”</p>
                        </div>
                        <div class=\"item\">
                            <p>“Nullam sit amet sapien libero. Nulla arcu elit, auctor a odio nec, ultrices ultricies felis. Quisque pretium tempor odio, ut consectetur lectus semper a.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"template-presentation\">
        <div class=\"container\">
            <div class=\"col-md-7 hidden-xs hidden-sm\">
                <div class=\"left-image\">
                    <img src=\"img/template-image.png\" alt=\"\">
                </div>
            </div>
            <div class=\"col-md-5 hidden-xs hidden-sm\">
                <div class=\"right-content\">
                    <div class=\"author-image\">
                        <img src=\"img/template-author.png\" alt=\"\">
                    </div>
                    <h4>Mauris tristique tempus dapibus. Nulla quis risus euismod, imperdiet nisl sed.</h4>
                    <div class=\"blue-button\">
                        <a href=\"#\">View More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 hidden-lg hidden-md\">
                <div class=\"right-content\">
                    <div class=\"author-image\">
                        <img src=\"img/template-author.png\" alt=\"\">
                    </div>
                    <h4>Mauris tristique tempus dapibus. Nulla quis risus euismod, imperdiet nisl sed.</h4>
                    <div class=\"blue-button\">
                        <a href=\"#\">View More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-7 hidden-lg hidden-md\">
                <div class=\"left-image\">
                    <img src=\"img/template-image.png\" alt=\"\">
                </div>
            </div>
        </div>
    </div>

    <div class=\"left-right-image\">
        <div class=\"container\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"right-image\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h2 class=\"hidden-sm hidden-xs\">Donec pulvinar quis tortor <br>aliquam tincidunt</h2>
                            <h2 class=\"hidden-lg hidden-md\">Donec pulvinar quis tortor aliquam tincidunt</h2>
                            <span>Suspendisse faucibus ornare purus</span>
                            <p>Morbi quam dui, scelerisque cursus nisl et, placerat congue mi. Proin odio massa, tempor id odio eget, mollis molestie dui. Cras elementum mollis nisi, dapibus sagittis leo pretium nec.</p> <br />
                            <p>Aenean lobortis magna purus, quis blandit eros dictum at. Fusce gravida ligula non neque tempor congue. Vivamus efficitur eget nulla vel lacinia.</p>
                            <div class=\"blue-border-button\">
                                <a href=\"#\">View More</a>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"image\">
                                <img src=\"img/right-image-post.png\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"left-image\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"image\">
                                <img src=\"img/left-image-post.png\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <h2 class=\"hidden-sm hidden-xs\">Aliquam luctus convallis <br>tortor in cursus</h2>
                            <h2 class=\"hidden-lg hidden-md\">Aliquam luctus convallis tortor in cursus</h2>
                            <span>Lorem ipsum dolor sit amet</span>
                            <p>Nulla elementum, purus at cursus sollicitudin, dolor est fermentum justo, vel iaculis nibh lectus non elit. Cras bibendum felis tincidunt mauris tincidunt facilisis. Aenean porttitor lectus quis nulla laoreet, eget pulvinar leo ultricies.</p> <br /> 
                            <p>Mauris tristique tempus dapibus. Nulla quis risus euismod, imperdiet nisl sed, mattis magna. Nunc sed malesuada purus. Quisque urna nunc, lacinia vel ipsum tristique, finibus sollicitudin massa.</p>
                            <div class=\"blue-border-button\">
                                <a href=\"#\">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"video\">
        <div class=\"container-fluid\">
            <div class=\"col-md-4\">
                <div class=\"text-content\">
                    <div class=\"inside-content\">
                        <h4>Brunch HTML Template is provided by Tooplate for free of charge. You can use it for your website. Thank you.</h4>
                        <div class=\"white-border-button\">
                            <a href=\"#\">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div id=\"video-container\">
                    <div class=\"video-overlay\"></div>
                    <div class=\"video-content\">
                        <div class=\"inner\">
                            <a href=\"http://youtube.com\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                        </div>
                    </div>
                    
                    <video autoplay=\"\" loop=\"\" muted>
                        <source src=\"videos/highway-loop.mp4\" type=\"video/mp4\">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

    


   

", "index.html.twig", "C:\\Users\\josem\\DAW2\\DAW2\\templates\\index.html.twig");
    }
}
