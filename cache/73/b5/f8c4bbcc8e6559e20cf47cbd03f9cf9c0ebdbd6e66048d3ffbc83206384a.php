<?php

/* nav.twig */
class __TwigTemplate_73b5f8c4bbcc8e6559e20cf47cbd03f9cf9c0ebdbd6e66048d3ffbc83206384a extends Twig_Template
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
        echo "<header>
    <nav><section class=\"logo\"></section><ul>
            <a href=\"/home.php\">
                
                    ";
        // line 5
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        if (($this->getAttribute($this->getAttribute($_home_, "utente"), "username") == $this->getAttribute($this->getAttribute($_home_, "usr"), "username"))) {
            // line 6
            echo "                    ";
            if (isset($context["pagina"])) { $_pagina_ = $context["pagina"]; } else { $_pagina_ = null; }
            if (($_pagina_ == "home")) {
                // line 7
                echo "                    <li data-subnav=\"home\" style=\"background: url(";
                if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
                echo twig_escape_filter($this->env, $_root_, "html", null, true);
                echo "/images/menu/";
                if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_home_, "usr"), "colore"), "html", null, true);
                echo "/menu_arrow.png) center 44px no-repeat;\" >
                    
                    ";
            } else {
                // line 10
                echo "                    
                    <li data-subnav=\"home\">
                    
                    ";
            }
            // line 14
            echo "                    Bacheca\tdi ";
            if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_home_, "utente"), "username"), "html", null, true);
            echo "
                    </li>
                    ";
        } else {
            // line 17
            echo "                    
                    <li data-subnav=\"home\">
                    Torna alla tua bacheca
                    </li>
                    
                    ";
        }
        // line 23
        echo "                   
            </a>

            <aside class=\"circle\">●</aside>
            <a href=\"/impostazioni.php\">
                <li data-subnav=\"team\">
                    Impostazioni</li>
            </a>
            <aside class=\"circle\">●</aside>
            <a href=\"/staff.php\">
                 ";
        // line 33
        if (isset($context["pagina"])) { $_pagina_ = $context["pagina"]; } else { $_pagina_ = null; }
        if (($_pagina_ == "staff")) {
            // line 34
            echo "                    <li data-subnav=\"staff\" style=\"background: url(";
            if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
            echo twig_escape_filter($this->env, $_root_, "html", null, true);
            echo "/images/menu/";
            if (isset($context["staff"])) { $_staff_ = $context["staff"]; } else { $_staff_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_staff_, "colore"), "html", null, true);
            echo "/menu_arrow.png) center 44px no-repeat;\" >
                    
                    ";
        } else {
            // line 37
            echo "                    
                    <li data-subnav=\"staff\">
                    
                    ";
        }
        // line 41
        echo "                    
                    Staff </li>
            </a>
            
               
            
            <aside class=\"circle\">●</aside>
            <a href=\"/news.php\">
                 ";
        // line 49
        if (isset($context["pagina"])) { $_pagina_ = $context["pagina"]; } else { $_pagina_ = null; }
        if (($_pagina_ == "news")) {
            // line 50
            echo "                    <li data-subnav=\"news\" style=\"background: url(";
            if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
            echo twig_escape_filter($this->env, $_root_, "html", null, true);
            echo "/images/menu/";
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_news_, "colore"), "html", null, true);
            echo "/menu_arrow.png) center 44px no-repeat;\" >
                    
                    ";
        } else {
            // line 53
            echo "                    
                    <li data-subnav=\"news\">
                    
                    ";
        }
        // line 57
        echo "                    
                    News </li>
            </a>

            <aside class=\"circle\">●</aside>
            <a href=\"/esci.php\">
                <li data-subnav=\"guides\">
                    Esci</li>
            </a>

            ";
        // line 67
        if (isset($context["permessi"])) { $_permessi_ = $context["permessi"]; } else { $_permessi_ = null; }
        if (($this->getAttribute($_permessi_, "hk") == 1)) {
            // line 68
            echo "            <aside class=\"circle\">●</aside>
            <a href=\"/admin/\">
                <li data-subnav=\"guides\">
                    Amministrazione</li>
            </a>
            ";
        }
        // line 74
        echo "
        </ul></nav>
    <section id=\"scritte\"><marquee id=\"tweet\" onmouseover=\"stop()\" onmouseout=\"start()\">";
        // line 76
        if (isset($context["mex_top"])) { $_mex_top_ = $context["mex_top"]; } else { $_mex_top_ = null; }
        echo twig_escape_filter($this->env, $_mex_top_, "html", null, true);
        echo "</marquee></section>
    <section id=\"online\"><section class=\"testo\">";
        // line 77
        if (isset($context["online"])) { $_online_ = $context["online"]; } else { $_online_ = null; }
        echo twig_escape_filter($this->env, $_online_, "html", null, true);
        echo " JaBBini in linea</section></section>
</header>";
    }

    public function getTemplateName()
    {
        return "nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 77,  154 => 76,  150 => 74,  142 => 68,  139 => 67,  127 => 57,  110 => 50,  107 => 49,  97 => 41,  91 => 37,  80 => 34,  77 => 33,  65 => 23,  49 => 14,  43 => 10,  32 => 7,  28 => 6,  25 => 5,  636 => 182,  634 => 181,  591 => 157,  587 => 156,  567 => 155,  546 => 153,  525 => 151,  503 => 148,  499 => 147,  479 => 146,  454 => 140,  450 => 139,  430 => 138,  395 => 122,  375 => 106,  370 => 105,  365 => 104,  360 => 103,  355 => 102,  349 => 100,  324 => 94,  302 => 91,  298 => 89,  296 => 88,  269 => 83,  263 => 81,  237 => 74,  216 => 72,  206 => 66,  201 => 65,  195 => 63,  190 => 62,  185 => 61,  151 => 46,  147 => 44,  140 => 42,  121 => 53,  114 => 36,  108 => 35,  86 => 32,  81 => 29,  79 => 28,  57 => 17,  52 => 12,  46 => 10,  41 => 9,  36 => 8,  31 => 7,  26 => 6,  19 => 1,);
    }
}
