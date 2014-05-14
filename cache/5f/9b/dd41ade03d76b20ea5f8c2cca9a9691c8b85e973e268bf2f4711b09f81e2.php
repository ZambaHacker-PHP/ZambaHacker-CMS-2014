<?php

/* home.twig */
class __TwigTemplate_5f9bdd41ade03d76b20ea5f8c2cca9a9691c8b85e973e268bf2f4711b09f81e2 extends Twig_Template
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
<!DOCTYPE HTML>
<html>
<head>
<meta charset=\"utf-8\"/>
<title>";
        // line 6
        if (isset($context["titolo"])) { $_titolo_ = $context["titolo"]; } else { $_titolo_ = null; }
        echo twig_escape_filter($this->env, $_titolo_, "html", null, true);
        echo "</title>
<meta property=\"og:title\" content=\"";
        // line 7
        if (isset($context["titolo"])) { $_titolo_ = $context["titolo"]; } else { $_titolo_ = null; }
        echo twig_escape_filter($this->env, $_titolo_, "html", null, true);
        echo "\"/>
<meta property=\"og:site_name\" content=\"";
        // line 8
        if (isset($context["titolo"])) { $_titolo_ = $context["titolo"]; } else { $_titolo_ = null; }
        echo twig_escape_filter($this->env, $_titolo_, "html", null, true);
        echo "\"/>
<meta name=\"description\" content=\"";
        // line 9
        if (isset($context["titolo"])) { $_titolo_ = $context["titolo"]; } else { $_titolo_ = null; }
        echo twig_escape_filter($this->env, $_titolo_, "html", null, true);
        echo "\"/>
<meta name=\"keywords\" content=\"";
        // line 10
        if (isset($context["titolo"])) { $_titolo_ = $context["titolo"]; } else { $_titolo_ = null; }
        echo twig_escape_filter($this->env, $_titolo_, "html", null, true);
        echo "\"/>

<link rel=\"icon\" href=\"";
        // line 12
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "//images/favicon.ico\" />
<link href=\"";
        // line 13
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/styles/style_zamba_";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo ".css\" rel=\"stylesheet\"/>

<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"http://code.jquery.com/ui/1.8.23/jquery-ui.min.js\" type=\"text/javascript\"></script>
    <!--compatibilita' ie-->
    <!--[if IE]>
    <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

</head>

<body>

<article id=\"pagina\">
<section id=\"top\">
";
        // line 28
        $this->env->loadTemplate("nav.twig")->display($context);
        // line 29
        echo "<article id=\"prima_riga\" style=\"padding-top: 40px;\">

    <article id=\"box\" style=\"width: 328px; float:left;\">
        <section id=\"top_box\"><section class=\"left\" style=\"background: url(";
        // line 32
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_rad.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 300px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_rad.png) repeat-x;\"><section id=\"titolo\">Ultime News</section></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_rad.png) no-repeat;\"></section></section>
        <section id=\"centro\"><section class=\"centr\" style=\"padding: 0;height: 88px;\">
                <div id=\"slideshow\">
                     ";
        // line 35
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_home_, "news"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 36
            echo "                     <div class=\"";
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_news_, "class"), "html", null, true);
            echo "\">
                     
                        <a href=\"news.php?id=";
            // line 38
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_news_, "id"), "html", null, true);
            echo "\" target=\"_blank\" style=\"text-decoration: none;\"><section class=\"bg\" style=\"background: url(";
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_news_, "image"), "html", null, true);
            echo ") no-repeat; background-position: -220px,-20px;\"><section class=\"titolo\">";
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_news_, "title"), "html", null, true);
            echo "</section><section class=\"testo\">";
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo nl2br($this->getAttribute($_news_, "shortstory"));
            echo "<div></div></section></section></a>
                        
                     </div>
                     ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "                     <center>Non ci sono news</center>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                   
                    </div></section></section>
        <section id=\"bottom_box\"><section class=\"left\"  style=\"background: url(";
        // line 46
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_bot.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 296px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_bot.png) repeat-x;\"></section><section class=\"right\" style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_bot.png) no-repeat;\"></section></section>
        <script type=\"text/javascript\">
            (function() {
                var asjs = document.createElement('script');
                asjs.type = 'text/javascript';
                asjs.async = true;
                asjs.src ='./js/news_show.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
            }());
        </script>
    </article>


    <article id=\"dati\" style=\"float:right\">

        <figure><img src=\"http://www.habbo.it/habbo-imaging/avatarimage?figure=";
        // line 61
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_home_, "usr"), "look"), "html", null, true);
        echo "&direction=&head_direction=&gesture=&action=&size=\"/></figure>
        <article class=\"user_section\"><aside id=\"username\">";
        // line 62
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_home_, "usr"), "username"), "html", null, true);
        echo "</aside></article>
        <article class=\"in\"><aside id=\"mini_statics\"><span>Ultima Connessione: ";
        // line 63
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_home_, "usr"), "ultima_visita"), "html", null, true);
        echo "</span> </aside><aside id=\"event\">
                <section class=\"right\"><aside id=\"date\" style=\"padding-top:8px;\"></aside></section>
                <section class=\"leftbig\" style=\"height: 30px;overflow:hidden;width: 149px;\">";
        // line 65
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_home_, "utente"), "motto"), "html", null, true);
        echo "</section>
                <section class=\"left\" style=\"overflow: hidden;\"><aside id=\"coins\">";
        // line 66
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_home_, "utente"), "credits"), "html", null, true);
        echo "</aside></section>
            </aside></article>
    </article>


    <article id=\"box\" style=\"width: 300px;margin:auto;\">
        <section id=\"top_box\"><section class=\"left\" style=\"background: url(";
        // line 72
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_rad.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 272px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_rad.png) repeat-x;\"><section id=\"titolo\">Entra in Hotel</section></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_rad.png) no-repeat;\"></section></section>
        <section id=\"centro\"><section class=\"centr\" style=\"padding:0px; padding-top:6px;padding-bottom: 6px;height: 76px;\"><form action=\"/gioca.php\"><section id=\"entra\" style=\"width: 198px;height: 36px;margin: auto;\"><input type=\"submit\" class=\"normal\" value=\"Entra in Hotel\" style=\"position: relative;top: 59%;\"></section></form></section></section>
        <section id=\"bottom_box\"><section class=\"left\"  style=\"background: url(";
        // line 74
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_bot.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 268px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_bot.png) repeat-x;\"></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_bot.png) no-repeat;\"></section></section>
    </article>


</article>

<article id=\"seconda-riga\" style=\"height: 314px;margin-top: 20px;\">
    <input type=\"text\" value=\"";
        // line 81
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_home_, "usr"), "username"), "html", null, true);
        echo "\" id=\"nomeprofilo\" name=\"nomeprofilo\" hidden=\"true\" style=\"display: none;\"/>
    <article id=\"box\" style=\"width: 681px;float:left;\">
        <section id=\"top_box\"><section class=\"left\" style=\"background: url(";
        // line 83
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_rad.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 653px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_rad.png) repeat-x;\"><section id=\"titolo\">Bacheca di ";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_home_, "usr"), "username"), "html", null, true);
        echo "</section></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_rad.png) no-repeat;\"></section></section>
        <section id=\"centro\"><section class=\"centr\" style=\"padding: 0; padding-bottom: 6px;height: 238px;\">             <section class=\"wrapper\">

                    <article id=\"right\"><div id=\"testi\" style=\"height: 238px; padding-top:6px;  overflow: auto;\">
           
                    ";
        // line 88
        $this->env->loadTemplate("commenti.twig")->display($context);
        // line 89
        echo "                    
                    </div></section></section></section>
        <section id=\"bottom_box\"><section class=\"left\"  style=\"background: url(";
        // line 91
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_bot.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 649px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_bot.png) repeat-x;\"></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_bot.png) no-repeat;\"></section></section>
    </article>
    <article id=\"box\" style=\"width: 300px;float:right;\">
        <section id=\"top_box\"><section class=\"left\" style=\"background: url(";
        // line 94
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_rad.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 272px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_rad.png) repeat-x;\"><section id=\"titolo\">Scrivi un Commento</section></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_rad.png) no-repeat;\"></section></section>
        <section id=\"centro\"><section class=\"centr\" style=\"padding:0; padding-bottom: 6px;height: 238px;\"><form id=\"post_comm\" onsubmit=\"post_commento()\" action=\"javascript:void(0)\" name=\"post_comm\" action=\"#\" method=\"post\">
                    <section id=\"commenti\">
                        <textarea wrap=\"on\" id=\"commento\" name=\"commento\" style=\"color: #777777;\"></textarea>
                    </section>
                    <div id=\"smile\" style=\"margin-top: -25px;\"><center>
                            <a href=\"javascript:Smile(' :) ')\"><img src=\"";
        // line 100
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/smilies/sorriso_lingua.png\" alt=\":)\" title=\":)\" border=\"0\"></a>

                            <a href=\"javascript:Smile(' :0 ')\"><img src=\"";
        // line 102
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/smilies/sorrisone.png\" alt=\":0\" title=\":0\" border=\"0\"></a>
                            <a href=\"javascript:Smile(' :p ')\"><img src=\"";
        // line 103
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/smilies/lingua.png\" alt=\":p\" title=\":p\" border=\"0\"></a>
                            <a href=\"javascript:Smile(' (y) ')\"><img src=\"";
        // line 104
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/smilies/merda.png\" alt=\"(y)\" title=\"(y)\" border=\"0\"></a>
                            <a href=\"javascript:Smile(' (L) ')\"><img src=\"";
        // line 105
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/smilies/cuore.png\" alt=\"(L)\" title=\"(L)\" border=\"0\"></a>
                            <a href=\"javascript:Smile(' :* ')\"><img src=\"";
        // line 106
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/smilies/bacio.png\" alt=\":*\" title=\":*\" border=\"0\"></a>

                        </center>
                    </div>
                    <section id=\"commenti_input\">
                        <input type=\"submit\"  name=\"invia\" class=\"normal\" id=\"invia\" value=\"Invia\"/>
                    </section>


                    <div id=\"messaggio_bacheca\"></div>

                    <div id=\"msg\" class=\"errore\" style=\"opacity: 1;width: 221px; z-index: 1; position: absolute; display: none;margin: 18px 0px 0px 34px;\"></div>
                    <div id=\"frase\">
                        <center>Per taggare una persona: \"@nomeutente\"</center>
                    </div>
                </form></section></section>
        <section id=\"bottom_box\"><section class=\"left\"  style=\"background: url(";
        // line 122
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_bot.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 268px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_bot.png) repeat-x;\"></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_bot.png) no-repeat;\"></section></section>
    </article>
    <script type=\"text/javascript\">
        (function() {
            var asjs = document.createElement('script');
            asjs.type = 'text/javascript';
            asjs.async = true;
            asjs.src ='./js/bacheca.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
        }());
    </script>
</article>

<article id=\"terza-riga\" style=\"margin-top: 20px; height:324px;\">

    <article id=\"box\" style=\"width: 300px;float: left;\">
        <section id=\"top_box\"><section class=\"left\" style=\"background: url(";
        // line 138
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_rad.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 272px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_rad.png) repeat-x;\"><section id=\"titolo\">Utenti Top</section></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_rad.png) no-repeat;\"></section></section>
        <section id=\"centro\"><section class=\"centr\" style=\"padding:0px; padding-bottom: 6px; padding-top: 6px;height: 250px;\"><div id=\"personaggi\" style=\"margin-top: -6px;\"><div id=\"pers\">                    ";
        // line 139
        $this->env->loadTemplate("personaggi.twig")->display($context);
        echo "</div></div></section></section>
        <section id=\"bottom_box\"><section class=\"left\"  style=\"background: url(";
        // line 140
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_bot.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 268px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_bot.png) repeat-x;\"></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_bot.png) no-repeat;\"></section></section>
    </article><div id=\"personaggi_success\"></div>



    <article id=\"box\" style=\"width: 300px;float: right;\">
        <section id=\"top_box\"><section class=\"left\" style=\"background: url(";
        // line 146
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_rad.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 272px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_rad.png) repeat-x;\"><section id=\"titolo\">Cambia Colore</section></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_rad.png) no-repeat;\"></section></section>
        <section id=\"centro\"><section class=\"centr\" style=\"padding:0px; padding-bottom: 6px; padding-top: 6px;height: 250px;\"><div id=\"personaggi\" style=\"margin-top: -6px;\"><div id=\"gruppi\"></div></div><section class=\"crea\" style=\"padding-top: 6px;width: 198px;margin: auto; cursor:pointer;\">";
        // line 147
        $this->env->loadTemplate("colori.twig")->display($context);
        echo "</section></section></section>
        <section id=\"bottom_box\"><section class=\"left\"  style=\"background: url(";
        // line 148
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_bot.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 268px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_bot.png) repeat-x;\"></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_bot.png) no-repeat;\"></section></section>
    </article><div id=\"gruppi_success\"></div>
    <article id=\"box\" style=\"width: 330px;margin:auto;\">
        <section id=\"top_box\"><section class=\"left\" style=\"background: url(";
        // line 151
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_rad.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 302px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_rad.png) repeat-x;\"><section id=\"titolo\">Cerca un Utente</section></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_rad.png) no-repeat;\"></section></section>
        <section id=\"centro\"><section class=\"centr\" style=\"height: 93px;\"><article class=\"cerca\" style=\"width:198px;margin:auto;\"><form id=\"post_cerca\" onsubmit=\"cerca()\" action=\"javascript:void(0)\" name=\"post_cerca\" action=\"#\" method=\"post\"><input type=\"text\" id=\"nome_cerca\" placeholder=\"Cerca un Utente\"/><input type=\"submit\" value=\"Cerca\" id=\"invia\" class=\"normal\"/></form><div id=\"msg_cerca\" class=\"errore\" style=\"opacity: 1; width: 190px; z-index: 1; position: absolute; margin: 2px 0px 0px;\">Cerca un utente e vai sulla sua bacheca</div></article></section></section>
        <section id=\"bottom_box\"><section class=\"left\"  style=\"background: url(";
        // line 153
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_bot.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 298px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_bot.png) repeat-x;\"></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_bot.png) no-repeat;\"></section></section>
    </article><article id=\"box\" style=\"width: 330px;margin:auto; margin-top:5px;\">
        <section id=\"top_box\"><section class=\"left\" style=\"background: url(";
        // line 155
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_rad.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 302px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_rad.png) repeat-x;\"><section id=\"titolo\">Radio</section></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_rad.png) no-repeat;\"></section></section>
        <section id=\"centro\"><section class=\"centr\" style=\"height: 70px;\">";
        // line 156
        $this->env->loadTemplate("radio.twig")->display($context);
        echo "</section></section>
        <section id=\"bottom_box\"><section class=\"left\"  style=\"background: url(";
        // line 157
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/left_bot.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 298px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/cent_bot.png) repeat-x;\"></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["home"])) { $_home_ = $context["home"]; } else { $_home_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_home_, "colore"), "html", null, true);
        echo "/right_bot.png) no-repeat;\"></section></section>
    </article></article>


<script type=\"text/javascript\">
    (function() {
        var asjs = document.createElement('script');
        asjs.type = 'text/javascript';
        asjs.async = true;
        asjs.src ='./js/cerca.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
    }());
</script>



<section id=\"push\" style=\"height: 96px\"></section>
<section id=\"distanza\" style=\"height: 30px;\"></section>
</section>



<section id=\"bottom\">

";
        // line 181
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 182
        echo "    
    </section>

</article>


</html>";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 182,  634 => 181,  591 => 157,  587 => 156,  567 => 155,  546 => 153,  525 => 151,  503 => 148,  499 => 147,  479 => 146,  454 => 140,  450 => 139,  430 => 138,  395 => 122,  375 => 106,  370 => 105,  365 => 104,  360 => 103,  355 => 102,  349 => 100,  324 => 94,  302 => 91,  298 => 89,  296 => 88,  269 => 83,  263 => 81,  237 => 74,  216 => 72,  206 => 66,  201 => 65,  195 => 63,  190 => 62,  185 => 61,  151 => 46,  147 => 44,  140 => 42,  121 => 38,  114 => 36,  108 => 35,  86 => 32,  81 => 29,  79 => 28,  57 => 13,  52 => 12,  46 => 10,  41 => 9,  36 => 8,  31 => 7,  26 => 6,  19 => 1,);
    }
}
