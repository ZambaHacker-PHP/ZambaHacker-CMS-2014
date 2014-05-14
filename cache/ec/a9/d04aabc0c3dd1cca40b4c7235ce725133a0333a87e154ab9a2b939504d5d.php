<?php

/* index.twig */
class __TwigTemplate_eca9d04aabc0c3dd1cca40b4c7235ce725133a0333a87e154ab9a2b939504d5d extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<html>
<head>
<meta charset=\"utf-8\"/>
<title>";
        // line 5
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "titolo"), "html", null, true);
        echo " - Entra nel nostro Hotel</title>

<meta property=\"og:title\" content=\"";
        // line 7
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "titolo"), "html", null, true);
        echo " - Entra nel nostro Hotel\"/>
<meta property=\"og:site_name\" content=\"";
        // line 8
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "titolo"), "html", null, true);
        echo " - Entra nel nostro Hotel\"/>
<meta name=\"description\" content=\"";
        // line 9
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "titolo"), "html", null, true);
        echo " - Entra nel nostro Hotel\"/>
<meta name=\"keywords\" content=\"";
        // line 10
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "titolo"), "html", null, true);
        echo " - Entra nel nostro Hotel\"/>


<link rel=\"icon\" href=\"";
        // line 13
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "//images/favicon.ico\" />
<link href=\"";
        // line 14
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/styles/style_zamba_";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
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
<header>
<nav><a href=\"/\"><section class=\"logo\"></section></a></nav>
<section id=\"scritte\"><marquee id=\"tweet\" onmouseover=\"stop()\" onmouseout=\"start()\">";
        // line 32
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "mex_top"), "html", null, true);
        echo "</marquee></section>
<section id=\"online\"><section class=\"testo\">";
        // line 33
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "online"), "html", null, true);
        echo " Utenti in linea</section></section>

</header>

<article id=\"prima_colonna\" style=\"padding-top: 40px;\">
<article class=\"errore\" style=\"width: 200px; clear: left;margin: auto;margin-top:20px;margin-bottom: 20px;display:none;\"><a style=\"color:#ffffff; text-decoration: none;\" href=\"javascript:void(0)\" onclick=\"diesel()\">Diesel questo &egrave; per te, clicca qui !</a></article>

<div id=\"fb-root\" class=\" fb_reset\">
<script type=\"text/javascript\">

window.assistedLogin = function(FBobject, optresponse) {
FBobject.init({
appId: '";
        // line 45
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "appid"), "html", null, true);
        echo "',
status: true,
cookie: true,
xfbml: true
        });
permissions = 'user_birthday,email';
Action = function(response) {
if (response.authResponse) {
fbConnectUrl = \"/ajax/facebook/facebook.php\";
window.location.replace(fbConnectUrl);
}
};

if (typeof optresponse == 'undefined')
FBobject.login(Action, {scope:permissions});
else
FBobject.login(optresponse, {scope:permissions});

};

(function() {
var e = document.createElement('script');
e.async = true;
e.src = document.location.protocol + '//connect.facebook.net/it_IT/all.js';
document.getElementById('fb-root').appendChild(e);
}());
</script>
<article id=\"box\" style=\"width: 328px;float:left; padding-left:160px;\">
        <section id=\"top_box\"><section class=\"left\" style=\"background: url(";
        // line 73
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/left_rad.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 300px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/cent_rad.png) repeat-x;\"><section id=\"titolo\">Entra con Facebook</section></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/right_rad.png) no-repeat;\"></section></section>
        <section id=\"centro\"><section class=\"centr\" style=\"padding:0px; padding-bottom: 6px;height: 82px;\"><form id=\"login_Fb\" onsubmit=\"assistedLogin(FB); return false;\" action=\"javascript:void(0)\" method=\"post\" style=\"
    width: 198px;
    height: 38px;
    margin: auto;
\">
<input type=\"submit\" class=\"register_fb\" value=\"Facebook\"/>
</form></section></section>
        <section id=\"bottom_box\"><section class=\"left\"  style=\"background: url(";
        // line 81
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/left_bot.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 296px; background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/cent_bot.png) repeat-x;\"></section><section class=\"right\"  style=\"background: url(";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/right_bot.png) no-repeat;\"></section></section>
        </article>


<article id=\"login\" class=\"box_log\" style=\"padding-right: 160px; \">
<form id=\"log\" onsubmit=\"log()\" action=\"javascript:void(0)\"method=\"post\">
<figure></figure>
<article class=\"out\">
<input type=\"text\" id=\"username\" name=\"username\"  placeholder=\"Username\" autocomplete=\"off\" maxlength=\"20\" />
<input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\" autocomplete=\"off\" maxlength=\"20\" />
<input type=\"submit\" name=\"login\" class=\"normal\" value=\"Entra\" />
</article>
</form>
<form id=\"asd\" onsubmit=\"box()\" action=\"javascript:void(0)\" method=\"post\">
<input type=\"submit\" name=\"register_bt\" class=\"register_bt\" value=\"Registrati\" />
</form>
</article>

<article id=\"login\" class=\"box_reg\" style=\"padding-right: 160px; display:none; \">
<form id=\"reg\" onsubmit=\"registera()\" action=\"javascript:void(0)\"method=\"post\">
<figure></figure>
<article class=\"out\">
<input type=\"text\" id=\"username_reg\" name=\"username_reg\"  placeholder=\"Username\" autocomplete=\"off\" maxlength=\"20\" />
<input type=\"password\" id=\"password_reg\" name=\"password_reg\" placeholder=\"Password\" autocomplete=\"off\" maxlength=\"20\" />
<input type=\"text\" id=\"email_reg\" name=\"email_reg\"  placeholder=\"Email\" autocomplete=\"off\" maxlength=\"25\" />
<input type=\"submit\" class=\"normal\" name=\"reg\" value=\"Registrati\" />
</article>
</form>
</article>


<script type=\"text/javascript\">
(function() {
var asjs = document.createElement('script');
asjs.type = 'text/javascript';
asjs.async = true;
asjs.src ='./js/login_reg.js';
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>

</article>
<div id=\"msg\" class=\"errore\" style=\"display:none;width: 668px; clear: left; margin: 198px auto auto;background-color: ";
        // line 123
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "col_code"), "html", null, true);
        echo ";\"></div><div id=\"success\"></div>

<article id=\"seconda_colonna\" style=\"clear:left;padding-top:20px;\">

<article id=\"box\" style=\"width: 681px;margin: auto;\">
        <section id=\"top_box\"><section class=\"left\" style=\"background: url(";
        // line 128
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/left_rad.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 653px; background: url(/";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "//images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/cent_rad.png) repeat-x;\"><section id=\"titolo\">Informazioni</section></section><section class=\"right\"  style=\"background: url(/";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "//images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/right_rad.png) no-repeat;\"></section></section>
        <section id=\"centro\"><section class=\"centr\" style=\"\">";
        // line 129
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo $this->getAttribute($_index_, "mex_index");
        echo "</section></section>
        <section id=\"bottom_box\"><section class=\"left\"  style=\"background: url(";
        // line 130
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "/images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/left_bot.png) no-repeat;\"></section><section class=\"centr\" style=\"width: 649px; background: url(/";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "//images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/cent_bot.png) repeat-x;\"></section><section class=\"right\"  style=\"background: url(/";
        if (isset($context["root"])) { $_root_ = $context["root"]; } else { $_root_ = null; }
        echo twig_escape_filter($this->env, $_root_, "html", null, true);
        echo "//images/box/";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_index_, "colore"), "html", null, true);
        echo "/right_bot.png) no-repeat;\"></section></section>
</article>


</article>
<div id=\"online\" style=\"display: none;\">1</div>
<section id=\"push\" style=\"height: 96px\"></section>
<section id=\"distanza\" style=\"height: 30px;\"></section>
</section>



<section id=\"bottom\">
";
        // line 143
        $this->env->loadTemplate("footer.twig")->display($context);
        // line 144
        echo "</section>

</article>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 144,  290 => 143,  258 => 130,  253 => 129,  233 => 128,  224 => 123,  163 => 81,  136 => 73,  104 => 45,  88 => 33,  83 => 32,  58 => 14,  53 => 13,  46 => 10,  41 => 9,  36 => 8,  31 => 7,  25 => 5,  19 => 1,);
    }
}
