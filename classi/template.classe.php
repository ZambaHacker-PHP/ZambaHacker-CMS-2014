<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


require_once "lib/Twig/Autoloader.php";


class template
{

    private $path;
    protected $loader;
    protected $twig;
    private $file;
    private $cartella;
    private $config;

    public function __construct($config,$file,$cartella='',$tema='')
    {

        $this->config = $config;
        Twig_Autoloader::register();
        $this->cartella = $cartella;

        if($cartella == ''){
                
            if($tema==''){    
                
                $this->path = 'tema/' .$config->tema;
                
            }else{
                
                $this->path = 'tema/' .$tema;
            }
        }else{

            $this->path = 'tema/' .$config->tema.'/'.$this->cartella;

        }

        $this->file = $file;
        $this->loader = new Twig_Loader_Filesystem($this->path);

        $this->twig = new Twig_Environment($this->loader, array('cache' => 'cache',
            'auto_reload' => true));

    }

    public function load_template($bindings)
    {

        $bindings['root'] = $this->path;
        $template = $this->twig->loadTemplate($this->file . '.twig');
        $template = $template->display($bindings);

        return $template;
    }

    public function colori($colore)
    {

        switch($colore){
            case 'giallo':
                $colore = '#E69B11';
                break;
            case 'blu':
                $colore = '#0077e6';
                break;
            case 'verde':
                $colore = '#acd100';
                break;
            case 'rosso':
                $colore = '#fd450f';
                break;
            case 'nero':
                $colore = '#000000';
                break;
            case 'azzurro':
                $colore ='#72c6e0';
                break;
            case 'rosa':
                $colore = '#fcb2e2';
                break;
                 }

        return $colore;

    }

}
