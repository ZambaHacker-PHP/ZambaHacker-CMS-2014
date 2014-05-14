<?php

/* dash.twig */
class __TwigTemplate_21a5537e601258186762b081a518d7e55a0f7a5b0323ae4df5b77ff2416ae376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"it\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/><style type=\"text/css\">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><style type=\"text/css\">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style>
<style type=\"text/css\">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style>
<style type=\"text/css\">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}</style>

    <meta charset=\"utf-8\"/>
    <title>";
        // line 8
        if (isset($context["titolo"])) { $_titolo_ = $context["titolo"]; } else { $_titolo_ = null; }
        echo twig_escape_filter($this->env, $_titolo_, "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <meta name=\"description\" content=\"A complete admin panel theme\"/>
    <meta name=\"author\" content=\"theemio\"/>

    <!-- styles -->

    <link href=\"tema/admin/css/utopia-white.css?v19\" rel=\"stylesheet\"/>
    <link href=\"tema/admin/css/utopia-responsive.css\" rel=\"stylesheet\"/>
    <link href=\"tema/admin/css/ui-lightness/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"tema/admin/admin_files/weather.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"tema/admin/css/gallery/modal.css\" rel=\"stylesheet\"/>
    <link href=\"tema/admin/admin_files/validationEngine.jquery.css\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"tema/admin/admin_files/chosen.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"tema/admin/css/ie.css\" rel=\"stylesheet\"/>

    <script type=\"text/javascript\" src=\"tema/admin/admin_files/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"tema/admin/admin_files/jquery.cookie.js\"></script>


    <!--[if IE 8]>
    <link href=\"css/ie8.css\" rel=\"stylesheet\">
    <![endif]-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!--[if gte IE 9]>
      <style type=\"text/css\">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->


<body>

<div class=\"container-fluid\">

    <!-- Header starts -->
    <div class=\"row-fluid\">
        <div class=\"span12\">

        ";
        // line 54
        $this->env->loadTemplate("header.twig")->display($context);
        // line 55
        echo "
            <!-- End header -->

        </div>

    </div>

    <!-- Header ends -->

    <div class=\"row-fluid\">

        <!-- Sidebar statrt -->
        <div class=\"span2 sidebar-container\">

            <div class=\"sidebar\">

                <div class=\"navbar sidebar-toggle\">
                    <div class=\"container\">

                        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </a>

                    </div>
                </div>

                ";
        // line 83
        $this->env->loadTemplate("menu.twig")->display($context);
        // line 84
        echo "
            </div>
        </div>

        <!-- Sidebar end -->

        <!-- Body start -->
            <div class=\"span10 body-container\">

                <div class=\"row-fluid\">

                    <!--Chart Icons -->
                    <div class=\"span3\">
                        <div class=\"utopia-chart-legend\">
                            <div class=\"utopia-chart-icon\">
                                <img src=\"tema/admin/admin_files/access_point.png\"/>
                            </div>
                            <div class=\"utopia-chart-heading\">";
        // line 101
        if (isset($context["online"])) { $_online_ = $context["online"]; } else { $_online_ = null; }
        echo twig_escape_filter($this->env, $_online_, "html", null, true);
        echo "</div>
                            <div class=\"utopia-chart-desc\">UTENTI CONNESSI</div>
                        </div>
                    </div>

                    <div class=\"span3\">
                        <div class=\"utopia-chart-legend\">
                            <div class=\"utopia-chart-icon\">
                                <img src=\"tema/admin/img/icons2/administrator.png\"/>
                            </div>
                            <div class=\"utopia-chart-heading\">";
        // line 111
        if (isset($context["hk"])) { $_hk_ = $context["hk"]; } else { $_hk_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_hk_, "user_reg"), "html", null, true);
        echo "</div>
                            <div class=\"utopia-chart-desc\">UTENTI REGISTRATI</div>
                        </div>
                    </div>

                    <div class=\"span3\">
                        <div class=\"utopia-chart-legend\">
                            <div class=\"utopia-chart-icon\">
                                <img src=\"tema/admin/img/icons2/pencil.png\"/>
                            </div>
                            <div class=\"utopia-chart-heading\">";
        // line 121
        if (isset($context["hk"])) { $_hk_ = $context["hk"]; } else { $_hk_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_hk_, "news"), "html", null, true);
        echo "</div>
                            <div class=\"utopia-chart-desc\">NEWS</div>
                        </div>
                    </div>

                    <div class=\"span3\">
                        <div class=\"utopia-chart-legend\">
                            <div class=\"utopia-chart-icon\">
                                <img src=\"tema/admin/img/icons2/game_control.png\"/>
                            </div>
                            <div class=\"utopia-chart-heading\">";
        // line 131
        if (isset($context["hk"])) { $_hk_ = $context["hk"]; } else { $_hk_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_hk_, "stanze"), "html", null, true);
        echo "</div>
                            <div class=\"utopia-chart-desc\">STANZE</div>
                        </div>
                    </div>
                    <!--Chart Icons End -->
                </div>

                    <div class=\"row-fluid\">
                <div class=\"span12\">
                    <section class=\"utopia-widget\">
                        <div class=\"utopia-widget-title\">
                            <img src=\"tema/admin/img/icons/window.png\" class=\"utopia-widget-icon\">
                            <span>Benvenuto</span>
                        </div>

                        <div class=\"utopia-widget-content\">
                            <p>Benvenuto, ";
        // line 147
        if (isset($context["hk"])) { $_hk_ = $context["hk"]; } else { $_hk_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_hk_, "utente"), "username"), "html", null, true);
        echo " nell' amministrazione di ";
        if (isset($context["titolo"])) { $_titolo_ = $context["titolo"]; } else { $_titolo_ = null; }
        echo twig_escape_filter($this->env, $_titolo_, "html", null, true);
        echo "</p>
                        </div>
                    </section>
                </div>
            </div>
                


                
            </div>
        <!-- Body end -->
        
        ";
        // line 159
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 160
        echo "
    </div>

    <!-- Maincontent end -->

</div> <!-- end of container -->

<!-- javascript placed at the end of the document so the pages load faster -->
<script type=\"text/javascript\" src=\"tema/admin/admin_files/utopia.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/jquery.hoverIntent.min.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/jquery.easing.1.3.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/jquery.datatable.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/tables.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/jquery.sparkline.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/jquery.vticker-min.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/datepicker.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/load-image.min.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/image-gallery.min.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/jquery.simpleWeather.js\"></script>
<script src=\"tema/admin/admin_files/jquery.validationEngine.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/maskedinput.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/chosen.jquery.js\"></script>

<script type=\"text/javascript\" src=\"tema/admin/admin_files/header.js\"></script>
<script type=\"text/javascript\" src=\"tema/admin/admin_files/sidebar.js\"></script>




<div id=\"ui-datepicker-div\" class=\"ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all\"></div></body></html>";
    }

    public function getTemplateName()
    {
        return "dash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 160,  212 => 159,  193 => 147,  173 => 131,  159 => 121,  145 => 111,  131 => 101,  112 => 84,  110 => 83,  80 => 55,  78 => 54,  28 => 8,  19 => 1,);
    }
}
