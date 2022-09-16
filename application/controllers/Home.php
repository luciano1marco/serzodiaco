<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

    public function __construct() {
        parent::__construct();
        // Carrega helper URL
        //$this->load->helper("url");
        $this->load->helper('configuracao');
        $this->load->helper('utilidades');
    }
	public function index() {
        $cfg = configuracao();
        $php = configuracao_PHP();

        //carregar dados 
        $this->data['imagem'] = R::findAll("imagens");
       
        // Caso sistema funcione apenas logado, descomentar a linha abaixo e importar o helper URL no construtor
       // redirect("admin");

        $this->data['modulo_meiogeral'] = $this->load->view('public/includes/meiogeral.php', $this->data, TRUE);	
        $this->data['modulo_cabecalho'] = $this->load->view('public/includes/header.php', $cfg, TRUE);	
        $this->data['modulo_rodape'] = $this->load->view('public/includes/footer.php',$cfg, TRUE);      
        $this->data['modulo_menu'] = $this->load->view('public/includes/menu.php', $this->data, TRUE);	
        $this->data['modulo_faleconosco'] = $this->load->view('public/includes/faleconosco.php', $this->data, TRUE);	
        $this->data['modulo_meio'] = $this->load->view('public/includes/meio.php', $this->data, TRUE);	
        
        //$this->data['modulo_meio1'] = $this->load->view('public/includes/meio1.php', $this->data, TRUE);	

        $this->load->view('public/home', $this->data);
	}
    public function listar() {
        $cfg = configuracao();
        $php = configuracao_PHP();

        // pessoas
        $this->data['pessoa'] = R::findAll("pessoas");
        
        $this->data['modulo_meiogeral'] = $this->load->view('public/includes/meiogeral.php', $this->data, TRUE);	
        $this->data['modulo_cabecalho'] = $this->load->view('public/includes/header.php', $cfg, TRUE);	
        $this->data['modulo_rodape'] = $this->load->view('public/includes/footer.php',$cfg, TRUE);      
        $this->data['modulo_menu'] = $this->load->view('public/includes/menu.php', $this->data, TRUE);	
        $this->data['modulo_faleconosco'] = $this->load->view('public/includes/faleconosco.php', $this->data, TRUE);	
        $this->data['modulo_meio'] = $this->load->view('public/includes/meio.php', $this->data, TRUE);	
          
        $this->load->view('public/listar', $this->data);
        
    }

}
