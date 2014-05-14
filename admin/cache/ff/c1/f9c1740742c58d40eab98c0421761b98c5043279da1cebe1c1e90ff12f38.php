<?php

/* header.twig */
class __TwigTemplate_ffc1f9c1740742c58d40eab98c0421761b98c5043279da1cebe1c1e90ff12f38 extends Twig_Template
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
        echo "<div class=\"header-top\">

                <div class=\"header-wrapper\">

                    <a href=\"/admin/\" class=\"utopia-logo\"><img src=\"../tema/Default/images/menu/logo1.png\" alt=\"Utopia\"></a>

                    <div class=\"header-right\">

                        <div class=\"header-divider\">&nbsp;</div>

                        <div class=\"search-panel header-divider\">
                            <div class=\"search-box\">
                                <img src=\"tema/admin/admin_files/zoom.png\" alt=\"Search\">
                                <form action=\"\" method=\"post\">
                                    <input type=\"text\" name=\"search\" placeholder=\"cerca un utente\">
                                </form>
                            </div>
                        </div>


                  

                        <div class=\"user-panel header-divider\">
                            <div class=\"user-info\">
                                <img src=\"tema/admin/admin_files/user.png\" alt=\"\">
                                <a href=\"\">";
        // line 26
        if (isset($context["hk"])) { $_hk_ = $context["hk"]; } else { $_hk_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_hk_, "utente"), "username"), "html", null, true);
        echo "</a>
                            </div>

                            <div class=\"user-dropbox\" style=\"display: none;\">
                                <ul>
                                    <li class=\"user\"><a href=\"../\">Home</a></li>
                                    <li class=\"logout\"><a href=\"../esci.php\">Esci</a></li>
                                </ul>
                            </div>

                        </div><!-- User panel end -->

                    </div><!-- End header right -->

                </div><!-- End header wrapper -->

            </div>";
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 26,  214 => 160,  212 => 159,  193 => 147,  173 => 131,  159 => 121,  145 => 111,  131 => 101,  112 => 84,  110 => 83,  80 => 55,  78 => 54,  28 => 8,  19 => 1,);
    }
}
