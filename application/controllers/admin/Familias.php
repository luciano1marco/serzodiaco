<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class familias extends Admin_Controller {

	public function __construct()    {
        parent::__construct();

        /* Title Page :: Common */
        $this->page_title->push(lang('Familias'));
        $this->data['pageicon'] = 'ul-list';
        $this->data['pagetitle'] = $this->page_title->show();

        $this->anchor = 'admin/' . $this->router->class;

		$this->load->helper('utilidades');

		$this->form_validation->set_error_delimiters('<div class="form_val_error">', '</div>');

        /* Breadcrumbs :: Common */
       // $this->breadcrumbs->unshift(1, 'apoiador', 'admin/apoiador');
    }
	///-----cruds--------------------------------
	public function index($id)	{ 
		
		 
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            /* dados  */
			$sql1 = "SELECT nome,id FROM pessoas where id = ".$id;
			$this->data['socio'] = R::getAll($sql1);
            $sql = "SELECT 	f.id,
							f.id_socio, 
							f.id_grau,
							f.nome as parente,
							p.nome as socio,
							g.descricao
					FROM `familias` as f
			
					inner join pessoas as p
					on f.id_socio = p.id
					
					inner join grau as g
					on g.id = f.id_grau
					
					where f.id_socio = ".$id;
			
			$this->data['familia'] = R::getAll($sql);
           /* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* Nome do Botão Criar do INDEX */
			$this->data['texto_btn_create'] = 'Adicionar Parente';

			/* Data */
			$this->data['error'] = NULL;

			//$this->data['aparelhos'] = R::findAll('aparelhos');


			/* Load Template */
			$this->template->admin_render($this->anchor . '/index', $this->data);
        }
    }

    public function create($id) {

		$id = (int) $id;
		
		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Novo Parente", 'admin/familias/create');
		$this->data['breadcrumb'] = $this->breadcrumbs->show();
		$this->data['texto_create'] = 'Adicionar Parente';
		/* Variables */
		$tables = $this->config->item('tables', 'ion_auth');

		/* Validate form input */
		$this->form_validation->set_rules('nome', 'nome', 'required');
                
        /* cria a tabela com seus campos */
		if ($this->form_validation->run()) {
			$familia = R::dispense("familias");
            $familia->nome = $this->input->post('nome');
            $familia->email = $this->input->post('email');
            $familia->telefone = $this->input->post('telefone');
			$familia->cpf = $this->input->post('cpf');
			$familia->id_grau = $this->input->post('id_grau');
            $familia->data_nasc = $this->input->post('data_nasc');
			$familia->id_socio = $id;
			
			R::store($familia);

			$this->session->set_flashdata('message', "Dados gravados");
            redirect('admin/familias/index/'.$id, 'refresh');
		} 
        else {
            $this->data['message'] = (validation_errors() ? validation_errors() : "");

            $this->data['nome'] = array(
                'name'  => 'nome',
                'id'    => 'nome',
                'type'  => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('nome'),
            );
            
            $this->data['email'] = array(
                'name'  => 'email',
                'id'    => 'email',
                'type'  => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('email'),
            );

            $this->data['telefone'] = array(
                'name'  => 'telefone',
                'id'    => 'telefome',
                'type'  => 'int',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('telefone'),
            );
			$this->data['cpf'] = array(
                'name'  => 'cpf',
                'id'    => 'cpf',
                'type'  => 'int',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('cpf'),
            );
			$this->data['id_grau'] = array(
                'name'  => 'id_grau',
                'id'    => 'id_grau',
                'options' => $this->getgrau(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('id_grau'),
            );
			$this->data['data_nasc'] = array(
                'name'  => 'data_nasc',
                'id'    => 'data_nasc',
                'type'  => 'date',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('data_nasc'),
            );
			
			
        }         
        /* Load Template */
        $this->template->admin_render('admin/familias/create', $this->data);
    }
    
	public function view($id){
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
            { redirect('auth/login', 'refresh'); }
        else{ 
			
			/* -- Breadcrumbs ----------------------------------------------------*/
            $this->data['breadcrumb'] = $this->breadcrumbs->show();
			$this->anchor = 'admin/' . $this->router->class;
			/* -- Data -----------------------------------------------------------*/
            $this->data['error'] = NULL;

			$sql1 = "SELECT 
						f.id, 
						f.id_socio,
						f.id_grau,
						f.email,
						f.telefone,
						f.nome,
						f.cpf,
						f.data_nasc,
						g.descricao as nomegrau,
						p.nome as socio
				FROM familias as f
				
				inner join grau as g
				on f.id_grau = g.id
				
				inner join pessoas as p
				on p.id = f.id_socio
				
				where f.id = ".$id;

			$this->data['parente'] = R::getAll($sql1);

						
		/*--Load Template ---------------------------------------------------------*/
        	$this->template->admin_render('admin/familias/view', $this->data);
           }
	}    

	public function edit($id) {
		$id = (int) $id;

		if (! $this->ion_auth->logged_in()) {
			redirect('auth', 'refresh');
		}

		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Editar Parente", 'admin/familias/edit');
		$this->data['breadcrumb'] = $this->breadcrumbs->show();
		 /* Titulo */
		 $this->data['texto_edit'] = 'Editar Parente';
		/* Validate form input */
		$this->form_validation->set_rules('nome', 'nome', 'required');
		
		$familia = R::load("familias", $id);

		if (isset($_POST) && ! empty($_POST)) {
			if ($this->form_validation->run()) {
				$familia->nome = $this->input->post('nome');
				$familia->email = $this->input->post('email');
				$familia->telefone = $this->input->post('telefone');
				$familia->id_grau = $this->input->post('id_grau');
				$familia->cpf = $this->input->post('cpf');
				$familia->id_socio = $this->input->post('id_socio');
				$familia->data_nasc = $this->input->post('data_nasc');
				
				R::store($familia);

				redirect('admin/familias/index/'.$familia->id_socio, 'refresh');
			}
		}
	
		// set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : "");

		$this->data['id'] = array(
			'id' => $familia->id,
		);

		$this->data['nome'] = array(
			'name'  => 'nome',
			'id'    => 'nome',
			'type'  => 'text',
			'class' => 'form-control',
			'value' => $familia->nome,
		);

        $this->data['email'] = array(
			'name'  => 'email',
			'id'    => 'email',
			'type'  => 'text',
			'class' => 'form-control',
			'value' => $familia->email,
        );
        
        $this->data['telefone'] = array(
			'name'  => 'telefone',
			'id'    => 'telefone',
			'type'  => 'text',
			'class' => 'form-control',
			'value' => $familia->telefone,
		);
		$this->data['cpf'] = array(
			'name'  => 'cpf',
			'id'    => 'cpf',
			'type'  => 'text',
			'class' => 'form-control',
			'value' => $familia->cpf,
		);
		$this->data['id_grau'] = array(
			'name'  => 'id_grau',
			'id'    => 'id_grau',
			'selected'=>$familia->id_grau,
			'options' => $this->getgrau(),
			'class' => 'form-control',
			'value' => $familia->id_grau,
		);
		$this->data['id_socio'] = array(
			'name'  => 'id_socio',
			'id'    => 'id_socio',
			'selected'=>$familia->id_socio,
			'options' => $this->getsocio(),
			'class' => 'form-control',
			'value' => $familia->id_socio,
		);
		$this->data['data_nasc'] = array(
			'name'  => 'data_nasc',
			'id'    => 'data_nasc',
			'type'  => 'date',
			'class' => 'form-control',
			'value' => $familia->data_nasc,
		);

		/* Load Template */
		$this->template->admin_render('admin/familias/edit', $this->data);
	}
	public function deleteyes($id) {
		if ( ! $this->ion_auth->logged_in() ) {
			return show_error('voce não esta logado');
		}

		//---busca o id socio do parente
		$fam = R::load("familias", $id);
		$id_socio = $fam->id_socio;
		 
		if (!isset($id) || $id == null) {
            return show_error('id não confere');
			redirect('admin/familias', 'refresh');
		}

		if ($this->ion_auth->logged_in()) {
			$lixo = R::load("familias", $id);
			R::trash($lixo);
		}
		redirect('admin/familias/index/'.$id_socio, 'refresh');
	}
	//----ativado ou desativado-----------------
	function activate($id) {
		$id = (int) $id;
	
		$item = R::load("familias", $id);

		$item->ativo = 1;
		
		R::store($item);
		
		$this->session->set_flashdata('message', "Item de Menu ativado");
		redirect('admin/familias', 'refresh');
	}

	public function deactivate($id) {
		$id = (int) $id;

		$item = R::load("familias", $id);
		$item->ativo = 0;
		
		R::store($item);
		
		$this->session->set_flashdata('message', "Item de Menu desativado");		
		redirect('admin/familias', 'refresh');
	}

	//---gets-------------------------------------
	public function getgrau(){
        $sql = "SELECT * FROM grau ";
		
        $options = array("0" => "Selecione Grau de Parentesco");
                
        $result = R::getAll($sql);        

		foreach ($result as $r) {   
            $options[$r['id']] = $r['descricao'];           
        }
		return $options;
    }
	
	public function getsocio(){
        $sql = "SELECT * FROM pessoas";

        $options = array("0" => "Selecione Sócio");
                
        $result = R::getAll($sql);        

		foreach ($result as $r) {   
            $options[$r['id']] = $r['nome'];           
        }
		return $options;
    }

}