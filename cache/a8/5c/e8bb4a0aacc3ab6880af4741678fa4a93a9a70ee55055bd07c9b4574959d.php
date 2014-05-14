<?php

/* personaggi.twig */
class __TwigTemplate_a85ce8bb4a0aacc3ab6880af4741678fa4a93a9a70ee55055bd07c9b4574959d extends Twig_Template
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
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_home_, "top"));
        foreach ($context['_seq'] as $context["_key"] => $context["top"]) {
            // line 2
            echo "<section id=\"left\" style=\"
        width: 296px;
        padding-bottom: 6px;\">
       
        <article class=\"nome\">
        <a href=\"home.php?usr=";
            // line 7
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_top_, "username"), "html", null, true);
            echo "\" style=\"text-decoration:none;color: #777777;\">";
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_top_, "username"), "html", null, true);
            echo "</a><article class=\"gioca\">
        ";
            // line 8
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_top_, "activity_points"), "html", null, true);
            echo " smeraldi
        </article>    
        
        </article>
       
         <a href=\"home.php?usr=";
            // line 13
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_top_, "username"), "html", null, true);
            echo "\" style=\"text-decoration:none;color: #777777;\"><article class=\"look\">
        <img src=\"http://www.habbo.it/habbo-imaging/avatarimage?figure=";
            // line 14
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_top_, "look"), "html", null, true);
            echo "&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;action=wav&amp;size=s\">
        </article></a>
         <a href=\"home.php?usr=";
            // line 16
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_top_, "username"), "html", null, true);
            echo "\" style=\"text-decoration:none;color: #777777;\"><article class=\"data\">
        Ultima visita: ";
            // line 17
            if (isset($context["top"])) { $_top_ = $context["top"]; } else { $_top_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_top_, "ultima_visita"), "html", null, true);
            echo "
        </article></a>
        </section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "personaggi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  59 => 16,  53 => 14,  48 => 13,  39 => 8,  24 => 2,  96 => 21,  83 => 14,  61 => 11,  54 => 8,  22 => 2,  159 => 77,  154 => 76,  150 => 74,  142 => 68,  139 => 67,  127 => 57,  110 => 50,  107 => 49,  97 => 41,  91 => 37,  80 => 34,  77 => 33,  65 => 23,  49 => 7,  43 => 10,  32 => 7,  28 => 3,  25 => 5,  636 => 182,  634 => 181,  591 => 157,  587 => 156,  567 => 155,  546 => 153,  525 => 151,  503 => 148,  499 => 147,  479 => 146,  454 => 140,  450 => 139,  430 => 138,  395 => 122,  375 => 106,  370 => 105,  365 => 104,  360 => 103,  355 => 102,  349 => 100,  324 => 94,  302 => 91,  298 => 89,  296 => 88,  269 => 83,  263 => 81,  237 => 74,  216 => 72,  206 => 66,  201 => 65,  195 => 63,  190 => 62,  185 => 61,  151 => 46,  147 => 44,  140 => 42,  121 => 53,  114 => 36,  108 => 35,  86 => 32,  81 => 29,  79 => 28,  57 => 17,  52 => 12,  46 => 10,  41 => 9,  36 => 8,  31 => 7,  26 => 6,  19 => 1,);
    }
}
