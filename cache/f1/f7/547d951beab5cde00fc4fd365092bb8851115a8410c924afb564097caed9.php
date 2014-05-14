<?php

/* commenti.twig */
class __TwigTemplate_f1f7547d951beab5cde00fc4fd365092bb8851115a8410c924afb564097caed9 extends Twig_Template
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
        echo "         
                    ";
        // line 2
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_home_, "commenti"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commento"]) {
            // line 3
            echo "                    
                        <section class=\"";
            // line 4
            if (isset($context["commento"])) { $_commento_ = $context["commento"]; } else { $_commento_ = null; }
            if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
            if (($this->getAttribute($_commento_, "user_name") == $this->getAttribute($this->getAttribute($_home_, "utente"), "username"))) {
                echo "mp right";
            } else {
                echo "mp left";
            }
            echo "\"><article id=\"mpleft\"> <a href=\"home.php?usr=";
            if (isset($context["commento"])) { $_commento_ = $context["commento"]; } else { $_commento_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_commento_, "user_name"), "html", null, true);
            echo "\" style=\"text-decoration:none;color: #FFFFFF;\"><img src=\"http://www.habbo.it/habbo-imaging/avatarimage?figure=";
            if (isset($context["commento"])) { $_commento_ = $context["commento"]; } else { $_commento_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_commento_, "look"), "html", null, true);
            echo "&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;action=wav&amp;size=\"></a></article>
                        <article id=\"mpright\">
                        <aside class=\"mptop\"><div style=\"overflow: hidden;\">
                        <a href=\"home.php?usr=";
            // line 7
            if (isset($context["commento"])) { $_commento_ = $context["commento"]; } else { $_commento_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_commento_, "user_name"), "html", null, true);
            echo "\" style=\"text-decoration:none;color: #FFFFFF;\"><span style=\"float: left;\">
                        <b>";
            // line 8
            if (isset($context["commento"])) { $_commento_ = $context["commento"]; } else { $_commento_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_commento_, "user_name"), "html", null, true);
            echo "</b> 
                        <b>scrive:</b> 
                \t\t</span></a>
                        <span style=\"float: right;\"> <a href=\"home.php?usr=";
            // line 11
            if (isset($context["commento"])) { $_commento_ = $context["commento"]; } else { $_commento_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_commento_, "user_name"), "html", null, true);
            echo "\" style=\"text-decoration:none;color: #FFFFFF;\">";
            if (isset($context["commento"])) { $_commento_ = $context["commento"]; } else { $_commento_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_commento_, "data"), "html", null, true);
            echo "</a> ";
            if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
            if (isset($context["commento"])) { $_commento_ = $context["commento"]; } else { $_commento_ = null; }
            if (((($this->getAttribute($this->getAttribute($_home_, "utente"), "username") == $this->getAttribute($_commento_, "nomeprofilo")) || ($this->getAttribute($this->getAttribute($_home_, "utente"), "username") == $this->getAttribute($_commento_, "user_name"))) || ($this->getAttribute($this->getAttribute($_home_, "permessi"), "commenti") == 1))) {
                echo " &#183; <a href=\"javascript:elimina_comm(";
                if (isset($context["commento"])) { $_commento_ = $context["commento"]; } else { $_commento_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_commento_, "id"), "html", null, true);
                echo ")\"><img src=\"";
                if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
                echo twig_escape_filter($this->env, $_root_, "html", null, true);
                echo "/images/X.gif\"/></a>";
            }
            echo "\t\t</span>
                \t\t</div></aside>
                        <aside class=\"mpmid\">
                        ";
            // line 14
            if (isset($context["commento"])) { $_commento_ = $context["commento"]; } else { $_commento_ = null; }
            echo nl2br($this->getAttribute($_commento_, "commento"));
            echo "
                        </aside>
                        <aside class=\"mpfooter\"></aside>
                        </article>
                        </section>
                        
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "                        
                        <center>Non ci sono commenti in questa bacheca</center>
        
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "commenti.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  83 => 14,  61 => 11,  54 => 8,  22 => 2,  159 => 77,  154 => 76,  150 => 74,  142 => 68,  139 => 67,  127 => 57,  110 => 50,  107 => 49,  97 => 41,  91 => 37,  80 => 34,  77 => 33,  65 => 23,  49 => 7,  43 => 10,  32 => 7,  28 => 3,  25 => 5,  636 => 182,  634 => 181,  591 => 157,  587 => 156,  567 => 155,  546 => 153,  525 => 151,  503 => 148,  499 => 147,  479 => 146,  454 => 140,  450 => 139,  430 => 138,  395 => 122,  375 => 106,  370 => 105,  365 => 104,  360 => 103,  355 => 102,  349 => 100,  324 => 94,  302 => 91,  298 => 89,  296 => 88,  269 => 83,  263 => 81,  237 => 74,  216 => 72,  206 => 66,  201 => 65,  195 => 63,  190 => 62,  185 => 61,  151 => 46,  147 => 44,  140 => 42,  121 => 53,  114 => 36,  108 => 35,  86 => 32,  81 => 29,  79 => 28,  57 => 17,  52 => 12,  46 => 10,  41 => 9,  36 => 8,  31 => 4,  26 => 6,  19 => 1,);
    }
}
