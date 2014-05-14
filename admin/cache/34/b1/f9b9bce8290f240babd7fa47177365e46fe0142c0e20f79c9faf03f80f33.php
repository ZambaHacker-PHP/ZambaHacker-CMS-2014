<?php

/* menu.twig */
class __TwigTemplate_34b1f9b9bce8290f240babd7fa47177365e46fe0142c0e20f79c9faf03f80f33 extends Twig_Template
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
        echo "<div class=\"nav-collapse collapse leftmenu\">

                    <ul>
                        ";
        // line 4
        if (isset($context["pagina"])) { $_pagina_ = $context["pagina"]; } else { $_pagina_ = null; }
        if (($_pagina_ == "dash")) {
            echo " <li class=\"current\"> ";
        } else {
            echo "<li>";
        }
        echo "<a class=\"dashboard smronju\" href=\"index.php\" title=\"Dashboard\"><span><em>Dashboard</em></span></a></li>
                        ";
        // line 5
        if (isset($context["pagina"])) { $_pagina_ = $context["pagina"]; } else { $_pagina_ = null; }
        if (($_pagina_ == "users")) {
            echo " <li class=\"current\"> ";
        } else {
            echo "<li>";
        }
        echo "<a class=\"users\" href=\"javascript:void(0)\" title=\"utenti\"><span><em>Utenti</em></span></a>
                            <ul class=\"dropdown\" style=\"left: 222px; visibility: hidden; display: none;\">
                             <li><a class=\"users\" href=\"modifica_utente.php\" title=\"Tables\"><span><em>Modifica Utente</em></span></a></li>
                                <li><a class=\"users\" href=\"enter_user.php\" title=\"entra\"><span><em>Entra in un Utente</em></span></a></li>
                                <li><a class=\"users\" href=\"controlla_badge.php\" title=\"distintivi\"><span><em>Controlla Distintivi</em></span></a></li>
                                <li><a class=\"users\" href=\"chatlog.php\" title=\"distintivi\"><span><em>Chatlog</em></span></a></li>
                            </ul>
                        </li>
                        <li><a class=\"editor\" href=\"javascript:void(0)\" title=\"utenti\"><span><em>News</em></span></a>
                            <ul class=\"dropdown\" style=\"left: 222px; visibility: hidden; display: none;\">
                        <li><a class=\"editor\" href=\"crea_news.php\" title=\"new_news\"><span><em>Crea una News</em></span></a></li>
                                <li><a class=\"editor\" href=\"http://utopiaadmin.themio.net/pricingtables.html\" title=\"mod_news\"><span><em>Modifica una News</em></span></a></li>
                            </ul>
                        </li>
                        
                        <li><a class=\"error\" href=\"javascript:void(0)\" title=\"utenti\"><span><em>Ban</em></span></a>
                            <ul class=\"dropdown\" style=\"left: 222px; visibility: hidden; display: none;\">
                        <li><a class=\"error\" href=\"http://utopiaadmin.themio.net/tables.html\" title=\"new_news\"><span><em>Banna un Utente</em></span></a></li>
                                <li><a class=\"error\" href=\"http://utopiaadmin.themio.net/pricingtables.html\" title=\"mod_news\"><span><em>Sbanna un Utente</em></span></a></li>
                                <li><a class=\"error\" href=\"http://utopiaadmin.themio.net/pricingtables.html\" title=\"lista\"><span><em>Lista Ban</em></span></a></li>
                            </ul>
                        </li>
                        
                        <li><a class=\"chat\" href=\"javascript:void(0)\" title=\"utenti\"><span><em>Log Staff</em></span></a>
                            <ul class=\"dropdown\" style=\"left: 222px; visibility: hidden; display: none;\">
                        <li><a class=\"chat\" href=\"http://utopiaadmin.themio.net/tables.html\" title=\"new_news\"><span><em>Log Comandi</em></span></a></li>
                                <li><a class=\"chat\" href=\"http://utopiaadmin.themio.net/pricingtables.html\" title=\"mod_news\"><span><em>Log HK</em></span></a></li>
                            </ul>
                        </li>
                        
                    </ul>

                </div>";
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  24 => 4,  46 => 26,  214 => 160,  212 => 159,  193 => 147,  173 => 131,  159 => 121,  145 => 111,  131 => 101,  112 => 84,  110 => 83,  80 => 55,  78 => 54,  28 => 8,  19 => 1,);
    }
}
