<?php

/* commenti.twig */
class __TwigTemplate_f61f278c31702c8474654902b13377f36dff7969d282dc115b0abf6e6aa18c63 extends Twig_Template
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
        return array (  96 => 21,  83 => 14,  61 => 11,  54 => 8,  49 => 7,  31 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
