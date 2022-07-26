<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuariorede extends Admin_Controller {

    public function __construct(){
        parent::__construct();

        /* Title Page :: Common */
		$this->page_title->push(lang('usuariorede'));
		$this->data['pageicon'] = 'ul-list';
        $this->data['pagetitle'] = $this->page_title->show();
		$this->anchor = 'admin/' . $this->router->class;

		$this->load->helper('utilidades');

		$this->form_validation->set_error_delimiters('<div class="form_val_error">', '</div>');


        /* Breadcrumbs :: Common */
       //$this->breadcrumbs->unshift(1, 'usuariorede', 'admin/usuariorede');
    }

	public function index(){  
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            /* dados  */
            
            $this->data['usurede'] = R::findAll("usuariorede");
 
           /* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();
            /* Nome do Botão Criar do INDEX */
			$this->data['texto_btn_create'] = 'Criar PTS';
			/* Data */
			$this->data['error'] = NULL;
			/* Load Template */
			$this->template->admin_render($this->anchor . '/index', $this->data);
        }
    }

/*=============funções usuariorede========================================*/	
    public function create() {
        /* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Novo Campo", 'admin/usuariorede/create');
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Variables */
		$tables = $this->config->item('tables', 'ion_auth');

		/* Validate form input */
		$this->form_validation->set_rules('nome', 'nome', 'required');
                
        /* cria a tabela com seus campos */
		if ($this->form_validation->run()) {
			$usurede = R::dispense("usuariorede");
            $usurede->nome = $this->input->post('nome');
            $usurede->endereco = $this->input->post('endereco');
            $usurede->telefone = $this->input->post('telefone');
			$usurede->datanasc = $this->input->post('datanasc');
			$usurede->responsavel = $this->input->post('responsavel');
			$usurede->tipo=$this->input->post('tipo');
			$usurede->idapoiador=$this->input->post('idapoiador');
			$usurede->foco = $this->input->post('foco');
            $usurede->justificativa = $this->input->post('justificativa');
            
            
			R::store($usurede);

			$this->session->set_flashdata('message', "Dados gravados");
            redirect('admin/usuariorede', 'refresh');
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
            
            $this->data['endereco'] = array(
                'name'  => 'endereco',
                'id'    => 'endereco',
                'type'  => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('endereco'),
            );

            $this->data['telefone'] = array(
                'name'  => 'telefone',
                'id'    => 'telefome',
                'type'  => 'int',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('telefone'),
			);
			
			$this->data['datanasc'] = array(
                'name'  => 'datanasc',
                'id'    => 'datanasc',
                'type'  => 'date',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('datanasc'),
            );

			$this->data['responsavel'] = array(
                'name'  => 'responsavel',
                'id'    => 'responsavel',
                'type'  => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('responsavel'),
            );

			$this->data['tipo'] = array(
				'name'  => 'tipo',
				'id'    => 'tipo',				
                'options' => $this->gettipo(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('tipo'),
            );

			$this->data['idapoiador'] = array(
				'name'  => 'idapoiador',
				'id'    => 'idapoiador',				
                'options' => $this->getapoiopessoas(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('idapoiador'),
            );
			
			$this->data['foco'] = array(
                'name'  => 'foco',
                'id'    => 'foco',
				'type'  => 'text',
				'rows'  => '7',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('foco'),
			);
			
			$this->data['justificativa'] = array(
                'name'  => 'justificativa',
                'id'    => 'justificativa',
				'type'  => 'text',
				'rows'  => '7',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('justificativa'),
            );


        }         
        /* Load Template */
        $this->template->admin_render('admin/usuariorede/create', $this->data);
    }

	public function edit($id) {
		$id = (int) $id;

		if (! $this->ion_auth->logged_in()) {
			redirect('auth', 'refresh');
		}

		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Editar Usuário da Rede", 'admin/usuariorede/edit');
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Validate form input */
		$this->form_validation->set_rules('nome', 'nome', 'required');
		
		$usurede = R::load("usuariorede", $id);

		if (isset($_POST) && ! empty($_POST)) {
			if ($this->form_validation->run()) {
				$usurede->nome = $this->input->post('nome');
				$usurede->endereco= $this->input->post('endereco');
				$usurede->telefone = $this->input->post('telefone');
				$usurede->datanasc = $this->input->post('datanasc');
				$usurede->responsavel = $this->input->post('responsavel');
				$usurede->tipo = $this->input->post('tipo');
				$usurede->idapoiador = $this->input->post('idapoiador');
				$usurede->foco = $this->input->post('foco');
				$usurede->justificativa = $this->input->post('justificativa');
				
								
				R::store($usurede);

				redirect('admin/usuariorede/', 'refresh');
			}
		}
	
		// set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : "");

		$this->data['id'] = array(
			'id' => $usurede->id,
		);

		$this->data['nome'] = array(
			'name'  => 'nome',
			'id'    => 'nome',
			'type'  => 'text',
			'class' => 'form-control',
			'value' => $usurede->nome,
		);

        $this->data['endereco'] = array(
			'name'  => 'endereco',
			'id'    => 'endereco',
			'type'  => 'text',
			'class' => 'form-control',
			'value' => $usurede->endereco,
        );
        
        $this->data['telefone'] = array(
			'name'  => 'telefone',
			'id'    => 'telefone',
			'type'  => 'text',
			'class' => 'form-control',
			'value' => $usurede->telefone,
		);

		$this->data['datanasc'] = array(
			'name'  => 'datanasc',
			'id'    => 'datanasc',
			'type'  => 'date',
			'class' => 'form-control',
			'value' => $usurede->datanasc,
		);

		$this->data['responsavel'] = array(
			'name'  => 'responsavel',
			'id'    => 'responsavel',
			'type'  => 'text',
			'class' => 'form-control',
			'value' => $usurede->responsavel,
		);

		$this->data['descricao'] = array(
			'name'  => 'descricao',
			'id'    => 'descricao',
			'selected'=>$usurede->descricao,				
			'options' => $this->gettipo(),
			'class' => 'form-control',
			'value' => $this->form_validation->set_value('descricao'),
		);


		$this->data['idapoiador'] = array(
			'name'  => 'idapoiador',
			'id'    => 'idapoiador',
			'selected'=>$usurede->idapoiador,				
			'options' => $this->getapoiopessoas(),
			'class' => 'form-control',
			'value' => $this->form_validation->set_value('idpessoas'),
		);
		
		$this->data['foco'] = array( 
			'name'  => 'foco',
			'id'    => 'foco',
			'type'  => 'text',
			'rows'  => '7',
        	'class' => 'form-control',
			'value' => $usurede->foco,
		);
		
		$this->data['justificativa'] = array(
			'name'  => 'justificativa',
			'id'    => 'justificativa',
			'type'  => 'text',
			'rows'  => '7',
			'class' => 'form-control',
			'value' => $usurede->justificativa,
        );




		/* Load Template */
		$this->template->admin_render('admin/usuariorede/edit', $this->data);
	}

	public function deleteyes($id) {
		
		if ( ! $this->ion_auth->logged_in() ) {
			return show_error('voce não esta logado');
		}

		//$id = $this->input->get("id");

		if (!isset($id) || $id == null) {
            return show_error('id não confere');
			redirect('admin/usuariorede', 'refresh');
		}

		if ($this->ion_auth->logged_in()) {
			
			 /*deleta as referencias do conexao */
			 $lixor = R::findAll("referencia", 'idusuariorede ='.$id); 
			 R::trashAll($lixor);
			 
			 /*deleta as estrategias do conexao */
			 $lixoe = R::findAll("estrategias", 'idusuariorede ='.$id); 
			 R::trashAll($lixoe);
			 
			 /*deleta os diagnosticos do conexao */
			 $lixod = R::findAll("diagnosticos", 'idusuariorede ='.$id); 
			 R::trashAll($lixod);
			 
			/*deleta usuariorede do conexao */
			$lixo = R::load("usuariorede", $id);
			R::trash($lixo);
		}
		redirect('admin/usuariorede', 'refresh');
	}

/*=============funções referencia=========================================*/	
	public function createrefer($id) {
		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Nova Referencia", 'admin/usuariorede/createrefer');
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Variables */
		$tables = $this->config->item('tables', 'ion_auth');

		/* Validate form input */
		$this->form_validation->set_rules('idservicos', 'idservicos', 'required');
		$this->form_validation->set_rules('periodo', 'periodo', 'required');

		if ($this->form_validation->run() ) {
			$refer = R::dispense("referencia");
			$refer->idusuariorede = $id;
			$refer->idservicos = $this->input->post('idservicos');
			$refer->periodo = $this->input->post('periodo');

			R::store($refer);

			$this->session->set_flashdata('message', "Dados gravados");
			redirect('admin/usuariorede/view/' . $id, 'refresh');

		} else {
			$this->data['message'] = (validation_errors() ? validation_errors() : "");
			
			$this->data['idservicos'] = array(
				'name'  => 'idservicos',
				'id'    => 'idservicos',
				'options' => $this->getapoioservicos(),
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('idservicos'),
			);

			$this->data['periodo'] = array(
				'name'  => 'periodo',
				'id'    => 'periodo',
				'type'  => 'date',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('periodo'),
			);

			/* Load Template */
			$this->template->admin_render('admin/usuariorede/createrefer', $this->data);
		}
	}

	public function editrefer($id) {
		$id = (int) $id;

		if (! $this->ion_auth->logged_in()) {
			redirect('auth', 'refresh');
		}

		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Editar Rede de Referencia", 'admin/usuariorede/editrefer');
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Validate form input */
		$this->form_validation->set_rules('idunidades', 'idunidades', 'required');
		
		$refer = R::load("referencia", $id);

		if (isset($_POST) && ! empty($_POST)) {
			if ($this->form_validation->run()) {
				$refer->periodo = $this->input->post('periodo');
				$refer->idunidades= $this->input->post('idunidades');
												
				R::store($refer);

				redirect('admin/usuariorede/', 'refresh');
			
			}
		}
	
		// set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : "");

		$this->data['id'] = array(
			'id' => $refer->id,
		);

		$this->data['periodo'] = array(
			'name'  => 'periodo',
			'id'    => 'periodo',
			'type'  => 'date',
			'class' => 'form-control',
			'value' => $refer->periodo,
		);

		$this->data['idservicos'] = array(
			'name'  => 'idservicos',
			'id'    => 'idservicos',
			'selected'=>$refer->idservicos,				
			'options' => $this->getapoioservicos(),
			'class' => 'form-control',
			'value' => $this->form_validation->set_value('idservicos'),
		);
	

		/* Load Template */
		$this->template->admin_render('admin/usuariorede/editrefer', $this->data);
	}

	public function deletrefer($id) {
		if ( ! $this->ion_auth->logged_in() ) {
			return show_error('voce não esta logado');
		}

		//$id = $this->input->get("id");

		if (!isset($id) || $id == null) {
            return show_error('id não confere');
			redirect('admin/usuariorede', 'refresh');
		}

		if ($this->ion_auth->logged_in()) {
			$lixo = R::load("referencia", $id);
			R::trash($lixo);
		}
		redirect('admin/usuariorede', 'refresh');
	}

/*=============funções estrategias========================================*/	
	public function createestrategia($id) {
		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Nova Estrategia", 'admin/usuariorede/createestrategia');
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Variables */
		$tables = $this->config->item('tables', 'ion_auth');

		/* Validate form input */
		$this->form_validation->set_rules('idunidades', 'idunidades', 'required');
		$this->form_validation->set_rules('idapoiador', 'idapoiador', 'required');
		$this->form_validation->set_rules('descricao', 'descricao', 'required');

		if ($this->form_validation->run() ) {
			$estrategia = R::dispense("estrategias");
			$estrategia->idusuariorede = $id;
			$estrategia->idunidades = $this->input->post('idunidades');
			$estrategia->idapoiador = $this->input->post('idapoiador');
			$estrategia->descricao = $this->input->post('descricao');
			$estrategia->dataregistro = $this->input->post('dataregistro');
			
			
			R::store($estrategia);

			$this->session->set_flashdata('message', "Dados gravados");
			redirect('admin/usuariorede/view/' . $id, 'refresh');

		} else {
			$this->data['message'] = (validation_errors() ? validation_errors() : "");
			
			$this->data['idunidades'] = array(
				'name'  => 'idunidades',
				'id'    => 'idunidades',
				'options' => $this->getapoiounidade(),
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('idunidades'),
			);

			$this->data['idapoiador'] = array(
				'name'  => 'idapoiador',
				'id'    => 'idapoiador',
				'class' => 'form-control',
				'options' => $this->getapoiopessoas(),
				'value' => $this->form_validation->set_value('idapoiador'),
			);
			
			$this->data['descricao'] = array(
				'name'  => 'descricao',
				'id'    => 'descricao',
				'type'  => 'text',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('descricao'),
			);

			$this->data['dataregistro'] = array(
				'name'  => 'dataregistro',
				'id'    => 'dataregistro',
				'type'  => 'date',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('dataregistro'),
			);


			/* Load Template */
			$this->template->admin_render('admin/usuariorede/createestrategia', $this->data);
		}
	}

	public function editestrategia($id) {
		$id = (int) $id;

		if (! $this->ion_auth->logged_in()) {
			redirect('auth', 'refresh');
		}

		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Editar Rede de Referencia", 'admin/usuariorede/editestrategia');
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Validate form input */
		$this->form_validation->set_rules('idunidades', 'idunidades', 'required');
		
		$estrategia = R::load("estrategias", $id);

		if (isset($_POST) && ! empty($_POST)) {
			if ($this->form_validation->run()) {
				$estrategia->idunidades = $this->input->post('idunidades');
				$estrategia->idapoiador = $this->input->post('idapoiador');
				$estrategia->descricao = $this->input->post('descricao');
				$estrategia->dataregistro = $this->input->post('dataregistro');

				R::store($estrategia);

				redirect('admin/usuariorede/', 'refresh');
			}
		}
	
		// set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : "");

		$this->data['id'] = array(
			'id' => $estrategia->id,
		);

		$this->data['idunidades'] = array(
			'name'  => 'idunidades',
			'id'    => 'idunidades',
			'selected'=>$estrategia->idunidades,
			'options' => $this->getapoiounidade(),
			'class' => 'form-control',
			'value' => $this->form_validation->set_value('idunidades'),
		);

		$this->data['idapoiador'] = array(
			'name'  => 'idapoiador',
			'id'    => 'idapoiador',
			'class' => 'form-control',
			'selected'=>$estrategia->idapoiador,
			'options' => $this->getapoiopessoas(),
			'value' => $this->form_validation->set_value('idapoiador'),
		);
		
		$this->data['descricao'] = array(
			'name'  => 'descricao',
			'id'    => 'descricao',
			'type'  => 'text',
			'class' => 'form-control',
			'value' => $estrategia->descricao,

		);

		$this->data['dataregistro'] = array(
			'name'  => 'dataregistro',
			'id'    => 'dataregistro',
			'type'  => 'date',
			'class' => 'form-control',
			'value' => $estrategia->dataregistro,
		);

		/* Load Template */
		$this->template->admin_render('admin/usuariorede/editestrategia', $this->data);
	}

	public function deletestrategia($id) {
		if ( ! $this->ion_auth->logged_in() ) {
			return show_error('voce não esta logado');
		}

		//$id = $this->input->get("id");

		if (!isset($id) || $id == null) {
            return show_error('id não confere');
			redirect('admin/usuariorede', 'refresh');
		}

		if ($this->ion_auth->logged_in()) {
			$lixo = R::load("estrategias", $id);
			R::trash($lixo);
		}
		redirect('admin/usuariorede', 'refresh');
	}

/*=============funções Diagnosticos========================================*/	
	public function creatediagnostico($id) {
	
		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Novo Diagnostico", 'admin/usuariorede/creatediagnostico');
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Variables */
		$tables = $this->config->item('tables', 'ion_auth');

		/* Validate form input */
		$this->form_validation->set_rules('nome', 'nome', 'required');
			
		/* cria a tabela com seus campos */
		if ($this->form_validation->run()) {
			$diagno = R::dispense("diagnosticos");
			$diagno->nome = $this->input->post('nome');
			$diagno->alta = $this->input->post('alta');
			$diagno->estrategia = $this->input->post('estrategia');
			$diagno->atualizacao = $this->input->post('atualizacao');
			$diagno->reuniao=$this->input->post('reuniao');
			$diagno->dataregistro=$this->input->post('dataregistro');
			$diagno->reintegracao=$this->input->post('reintegracao');
			$diagno->idusuariorede = $id;

			R::store($diagno);

			$this->session->set_flashdata('message', "Dados gravados");
			redirect('admin/usuariorede', 'refresh');
		} 
		else {
			$this->data['message'] = (validation_errors() ? validation_errors() : "");

			$this->data['nome'] = array(
				'name'  => 'nome',
				'id'    => 'nome',
				'type'  => 'text',
				'rows'  => '3',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('nome'),
			);
			
			$this->data['alta'] = array(
				'name'  => 'alta',
				'id'    => 'alta',
				'type'  => 'text',
				'rows'  => '3',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('alta'),
			);

			$this->data['reintegracao'] = array(
				'name'  => 'reintegracao',
				'id'    => 'reintegracao',
				'type'  => 'text',
				'rows'  => '3',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('reintegracao'),
			);

			$this->data['estrategia'] = array(
				'name'  => 'estrategia',
				'id'    => 'estrategia',
				'type'  => 'text',
				'rows'  => '3',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('estrategia'),
			);
			
			$this->data['atualizacao'] = array(
				'name'  => 'atualizacao',
				'id'    => 'atualizacao',
				'type'  => 'text',
				'rows'  => '3',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('atualizacao'),
			);

			$this->data['reuniao'] = array(
				'name'  => 'reuniao',
				'id'    => 'reuniao',				
				'type'  => 'text',
				'rows'  => '3',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('reuniao'),
			);
			
			$this->data['dataregistro'] = array(
				'name'  => 'dataregistro',
				'id'    => 'dataregistro',
				'type'  => 'date',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('dataregistro'),
			);
			
			
		}         
		/* Load Template */
		$this->template->admin_render('admin/usuariorede/creatediagnostico', $this->data);
	}	

	public function editdiagnostico($id) {
		$id = (int) $id;

		if (! $this->ion_auth->logged_in()) {
			redirect('auth', 'refresh');
		}

		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Editar Diagnostico", 'admin/usuariorede/editestrategia');
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Validate form input */
		$this->form_validation->set_rules('nome', 'nome', 'required');
		
		$diagno = R::load("diagnosticos", $id);

		if (isset($_POST) && ! empty($_POST)) {
			if ($this->form_validation->run()) {
				$diagno->nome = $this->input->post('nome');
				$diagno->alta = $this->input->post('alta');
				$diagno->estrategia = $this->input->post('estrategia');
				$diagno->atualizacao = $this->input->post('atualizacao');
				$diagno->reuniao=$this->input->post('reuniao');
				$diagno->dataregistro=$this->input->post('dataregistro');
				$diagno->reintegracao=$this->input->post('reintegracao');
				
				R::store($diagno);

				redirect('admin/usuariorede/', 'refresh');
			}
		}
	
		// set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : "");

		$this->data['id'] = array(
			'id' => $diagno->id,
		);

		$this->data['nome'] = array(
			'name'  => 'nome',
			'id'    => 'nome',
			'type'  => 'text',
			'rows'  => '3',
			'class' => 'form-control',
			'value' => $diagno->nome,
		);
		
		$this->data['alta'] = array(
			'name'  => 'alta',
			'id'    => 'alta',
			'type'  => 'text',
			'rows'  => '3',
			'class' => 'form-control',
			'value' => $diagno->alta,
		);

		$this->data['reintegracao'] = array(
			'name'  => 'reintegracao',
			'id'    => 'reintegracao',
			'type'  => 'text',
			'rows'  => '3',
			'class' => 'form-control',
			'value' => $diagno->reintegracao,
		);

		$this->data['estrategia'] = array(
			'name'  => 'estrategia',
			'id'    => 'estrategia',
			'type'  => 'text',
			'rows'  => '3',
			'class' => 'form-control',
			'value' => $diagno->estrategia,
		);
		
		$this->data['atualizacao'] = array(
			'name'  => 'atualizacao',
			'id'    => 'atualizacao',
			'type'  => 'text',
			'rows'  => '3',
			'class' => 'form-control',
			'value' => $diagno->atualizacao,
		);

		$this->data['reuniao'] = array(
			'name'  => 'reuniao',
			'id'    => 'reuniao',				
			'type'  => 'text',
			'rows'  => '3',
			'class' => 'form-control',
			'value' => $diagno->reuniao,
		);
		
		$this->data['dataregistro'] = array(
			'name'  => 'dataregistro',
			'id'    => 'dataregistro',
			'type'  => 'date',
			'class' => 'form-control',
			'value' => $diagno->dataregistro,
		);
		

		/* Load Template */
		$this->template->admin_render('admin/usuariorede/editdiagnostico', $this->data);
	} 

	public function deletdiagnostico($id) {
		if ( ! $this->ion_auth->logged_in() ) {
			return show_error('voce não esta logado');
		}

		//$id = $this->input->get("id");

		if (!isset($id) || $id == null) {
            return show_error('id não confere');
			redirect('admin/usuariorede', 'refresh');
		}

		if ($this->ion_auth->logged_in()) {
			$lixo = R::load("diagnosticos", $id);
			R::trash($lixo);
		}
		redirect('admin/usuariorede', 'refresh');
	}

/*=============função que Mostra Todos=====================================*/	
	public function view($id){
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
            { redirect('auth/login', 'refresh'); }
        else{ 
			
			/* -- Breadcrumbs ----------------------------------------------------*/
            $this->data['breadcrumb'] = $this->breadcrumbs->show();
			$this->anchor = 'admin/' . $this->router->class;
			/* -- Data -----------------------------------------------------------*/
            $this->data['error'] = NULL;
        
			/*--chama usuariorede pelo id  --------------------------------------------*/
           		
			$sql1="SELECT  u.id as ids,u.nome,u.endereco,u.telefone,u.datanasc,u.responsavel,r.descricao,u.foco,u.justificativa,
							s.descricao as ds, un.descricao as dun 
					FROM usuariorede as u

					INNER join apoiador as a
					on u.idapoiador=a.id

					INNER join servicos as s
					on a.idservicos=s.id

					INNER join unidades as un
					on a.idunidades=un.id

					INNER join responsaveis as r
					on r.id =u.id

					where u.id=" .$id;

			$this->data['usuario'] = R::getAll($sql1);

			/*--chama serviço de referencia--------------------------------------------*/
			$sql2="SELECT r.id as ids, r.periodo, p.nome,s.descricao
			FROM referencia as r
			
			inner join apoiador a
			on r.idservicos = a.id
			
			inner join pessoas as p
			on a.idpessoas=p.id
			
			inner join servicos as s
			on a.idservicos=s.id
			
			where r.idusuariorede=" .$id;

			$this->data['ref'] = R::getAll($sql2);
 
		/*--chama estrategia------------------------------------------------------*/
		$sql3="SELECT e.id as ids, e.descricao as de,e.dataregistro, p.nome,u.descricao as du
		FROM estrategias as e

		inner join apoiador a
		on e.idapoiador = a.id

		inner join pessoas as p
		on a.idpessoas=p.id

		inner join unidades as u
		on a.idunidades=u.id

		where e.idusuariorede=" .$id;

		$this->data['est'] = R::getAll($sql3);

		/*--chama diagnostico------------------------------------------------------*/
		$sql4 = "SELECT id,nome,alta,estrategia,atualizacao,reuniao,dataregistro,reintegracao,idusuariorede
				 from diagnosticos 
				 where idusuariorede =".$id;	
	
		$this->data['diagno']= R:: getAll($sql4); 

				
		/*--Load Template ---------------------------------------------------------*/
        	$this->template->admin_render('admin/usuariorede/view', $this->data);
           }
	}    

/*=============funções de Busca============================================*/
	public function getapoiounidade() {
		$sql = "select  a.id, a.idunidades,u.descricao as ud
		from apoiador as a 
				
		inner join unidades as u
		on a.idunidades = u.id";
					        
        $options = array("0" => "Selecione uma Unidade");
		 
		$apoio = R::getAll($sql);        

		foreach ($apoio as $ap) {   
            $options[$ap['id']] = $ap['ud'];           
        }
		return $options;
    }

	public function getapoioservicos() {
		$sql = "select  a.id, a.idservicos,s.descricao as ud
		from apoiador as a 
				
		inner join servicos as s
		on a.idservicos = s.id";
					        
        $options = array("0" => "Selecione um Serviço");
		 
		$apoio = R::getAll($sql);        

		foreach ($apoio as $ap) {   
            $options[$ap['id']] = $ap['ud'];           
        }
		return $options;
    }

	public function getapoiopessoas() {
		$sql = "select  a.id, a.idunidades,p.nome 
		from apoiador as a 
				
		inner join pessoas as p
		on a.idpessoas = p.id";
					        
        $options = array("0" => "Selecione um Cuidador(a)");
		 
		$apoio = R::getAll($sql);        

		foreach ($apoio as $ap) {   
            $options[$ap['id']] = $ap['nome'];           
        }
		return $options;
	}
	
	public function gettipo() {
		$sql = "select  * from responsaveis";
					        
        $options = array("0" => "Tipo");
		 
		$resp = R::getAll($sql);        

		foreach ($resp as $ap) {   
            $options[$ap['id']] = $ap['descricao'];           
        }
		return $options;
    }
/*=============fim===========================================================*/
}