<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regioes extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Title Page :: Common */
        $this->page_title->push('Regiões');
        $this->data['pageicon'] = 'ul-list';
		$this->data['pagetitle'] = $this->page_title->show();

		$this->anchor = 'admin/'.$this->router->class;
		
		$this->load->helper('utilidades');

		$this->form_validation->set_error_delimiters('<div class="form_val_error">', '</div>'); 

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, 'Regiões', $this->anchor);
    }

	public function index()
	{
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* Nome do Botão Criar do INDEX */
            $this->data['texto_btn_create'] = 'Criar Regiões';

            /* Data */
            $this->data['error'] = NULL;

            $regioes = R::find( 'regioes' );

            /* Carrega os Tipos de Eventos */
			$this->data['regioes'] = $regioes;
			
			$this->data['id_check'] = array(
				'name'          => 'id',
				'id'            => 'id_check[]',
				'value'         => null,
				'checked'       => FALSE,
				'style'         => 'margin:10px'
			);
						
			/* Load Template */		
            $this->template->admin_render($this->anchor.'/index', $this->data);
        }
	}
	
	public function form(){	
        
        $form['titulo'] = array(
			'name'  => 'titulo',
			'id'    => 'titulo',
			'type'  => 'text',
			'class' => 'form-control tag',			
        );
        
		$form['tipo'] = array(
			'name'  => 'tipo',
			'id'    => 'tipo',
			'type'  => 'text',
            'class' => 'form-control',	
            'readonly' => 'readonly'	
        );		

        $form['descricao'] = array(
			'name'  				=> 'descricao',
			'id'    				=> 'descricao',
			'type'  				=> 'text',
			'class' 				=> 'form-control'			
		);	
              		
		$form['latitude'] = array(
			'name'  				=> 'latitude',
			'id'    				=> 'latitude',
			'type'  				=> 'hidden',
			'class' 				=> 'form-control'			
        );	
        
		$form['longitude'] = array(
			'name'  				=> 'longitude',
			'id'    				=> 'longitude',
			'type'  				=> 'hidden',
			'class' 				=> 'form-control'			
        );	

        $form['poligono'] = array(
			'name'  				=> 'poligono',
			'id'    				=> 'poligono',
			'type'  				=> 'text',
			'class' 				=> 'form-control'			
		);
        
		$form['publicado'] = array(
			'name'  				=> 'publicado',
			'id'    				=> 'publicado',
			'class' 				=> 'icheck',
			'type'  				=> 'checkbox',
			'value' 				=> '1',
			'style' 				=> 'margin-top:10px'
		);
	
		return $form;
	}
    
    public function create()
	{
		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, 'Criar Regiões', $this->anchor.'/create');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();
        
        $this->data['texto_create'] = 'Criar Regiões';

		/* Variables */
		$tables = $this->config->item('tables', 'ion_auth');

		/* Validate form input */
        $this->form_validation->set_rules('titulo', 'Título', 'required');    
        $this->form_validation->set_rules('tipo', 'tipo', 'required'); 
        $this->form_validation->set_rules('poligono', 'poligono', 'required');        
       					
		if ($this->form_validation->run() == TRUE)
		{
            $titulo 	= ucfirst($this->input->post('titulo'));
            $tipo 	    = $this->input->post('tipo');

            $latitude   = ucfirst($this->input->post('latitude'));
            $longitude  = ucfirst($this->input->post('longitude'));
            
			$publicado 	= $this->input->post('publicado');	
			
            $regiao = R::dispense("regiao");	
            		
			$regiao->titulo 		= $titulo;
			$regiao->tipo 	        = $tipo;		
            $regiao->latitude 		= $latitude;
            $regiao->longitude 		= $longitude;
            $regiao->publicado 	    = $publicado;
            
			R::store($regiao);

			$this->session->set_flashdata('message', "Dados gravados");
			redirect($this->anchor, 'refresh');

		}	
		else
		{
			$this->data['message'] = (validation_errors() ? validation_errors() : "");
			
			//Recebe os dados do Form
            $form = $this->form();
            				
            $this->data = array_merge($this->data,$form);
            
            $this->data['tipo']['value'] 		= 'Polygon';
															
			/* Load Template */
			$this->template->admin_render($this->anchor.'/create', $this->data);
		}
	}

	public function edit($id) {
		$id = (int) $id;

		if (! $this->ion_auth->logged_in()) {
			redirect('auth', 'refresh');
		}

		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Editar Regiões", $this->anchor.'/edit');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();
        
         /* Titulo */
		$this->data['texto_edit'] = 'Editar Regiões';

		/* Validate form input */			
        $this->form_validation->set_rules('titulo', 'Título', 'required');    
        $this->form_validation->set_rules('tipo', 'tipo', 'required'); 
        $this->form_validation->set_rules('poligono', 'poligono', 'required');        
      		
		$regioes = R::load("regioes", $id);
		
		if (isset($_POST) && ! empty($_POST)) {
			if ($this->form_validation->run()) {
                $titulo 	= ucfirst($this->input->post('titulo'));	
                $tipo 	    = ucfirst($this->input->post('tipo'));		
				$descricao 	= ucfirst($this->input->post('descricao'));	
				
				$latitude 	= $this->input->post('latitude');	
				$longitude 	= $this->input->post('longitude');	
                $poligono 	= $this->input->post('poligono');					    
                              
                $publicado 	= $this->input->post('publicado');	

                $regioes->titulo 		    = $titulo;	
                $regioes->tipo 		        = $tipo;
                $regioes->descricao 		= $descricao;
				$regioes->poligono 		    = $poligono;
				$regioes->latitude			= $latitude;	
                $regioes->longitude 		= $longitude;
                $regioes->publicado 	    = $publicado;

                try{
                    R::store($regioes);
                }
                catch(Exception $e) {
                    R::rollback();
                }  
				
				redirect($this->anchor, 'refresh');
			}
		}
	
		// set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : "");

		//Recebe os dados do Form
		$form = $this->form();
				
		$this->data = array_merge($this->data,$form);

		$this->data['id'] = array(
			'id' => $regioes->id
		);

        $this->data['titulo']['value'] 		= $regioes->titulo;
        $this->data['tipo']['value'] 		= $regioes->tipo;
        $this->data['descricao']['value'] 	= $regioes->descricao;
        $this->data['poligono']['value'] 	= $regioes->poligono;

        $this->data['poligono']['readonly'] = 'readonly';
	    	
		$this->data['publicado']['checked'] = $regioes->publicado?true:false;
		$this->data['publicado']['value'] 	= $regioes->publicado?1:0;
							
		/* Load Template */
		$this->template->admin_render($this->anchor.'/edit', $this->data);
	}

	public function view($id) {
		$id = (int) $id;

		if (! $this->ion_auth->logged_in()) {
			redirect('auth', 'refresh');
		}

		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Visualizar Regiões", $this->anchor.'/view');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();
        
        $this->data['texto_view'] = 'Visualizar Regiões';
		
		$regioes = R::load("regioes", $id);

		// set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : "");
		
		//Recebe os dados do Form
        $form = $this->form();
        
        foreach($form as $key => $val){
            //Adiciona disabled e read only em todos campos do form
            $disabled = array('readonly' => 'readonly','disabled' => 'disabled');
            //Os Campos do form agora com propriedades que o desligam                       
            $campos = array_merge($val,$disabled);
            $form[$key] = $campos;           
        }
				
		$this->data = array_merge($this->data,$form);

		$this->data['id'] = array(
			'id' => $regioes->id
		);
		
        $this->data['titulo']['value'] 		= $regioes->titulo;
        $this->data['tipo']['value'] 		= $regioes->tipo;
        $this->data['descricao']['value']   = $regioes->descricao;
       
        $this->data['latitude']['value'] 	= $regioes->latitude;
        $this->data['longitude']['value'] 	= $regioes->longitude;
        $this->data['poligono']['value']    = json_decode(json_encode($regioes->poligono));
        		
		$this->data['publicado']['checked'] = $regioes->publicado?true:false;
		$this->data['publicado']['value'] 	= $regioes->publicado?1:0;
									
		/* Load Template */
		$this->template->admin_render($this->anchor.'/view', $this->data);
	}

	function activate($id) {
		$id = (int) $id;
	
		$regioes = R::load("regioes", $id);

		$regioes->publicado = TRUE;
		
		R::store($regioes);
		
		$this->session->set_flashdata('message', "Região Ativada");
		redirect($this->anchor, 'refresh');
	}

	public function deactivate($id) {
		$id = (int) $id;

		$regioes = R::load("regioes", $id);
		$regioes->publicado = FALSE;
		
		R::store($regioes);
		
		$this->session->set_flashdata('message', "Região Desativada");
		redirect($this->anchor, 'refresh');
	}

	public function deleteyes() {
		if ( ! $this->ion_auth->logged_in() ) {
			return show_error('you are not logged');
		}

		$id = $this->input->get("id");

		if (!isset($id) || $id == null) {
			redirect($this->anchor, 'refresh');
		}

		if ($this->ion_auth->logged_in()) {
			$lixo = R::load("regioes", $id);
			R::trash($lixo);
		}
		redirect($this->anchor, 'refresh');
	}
}
