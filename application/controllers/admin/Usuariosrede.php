<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuariosrede extends Admin_Controller {

    public function __construct()    {
        parent::__construct();

        /* Title Page :: Common */
        $this->page_title->push(lang('usuariosrede'));
        $this->data['pageicon'] = 'ul-list';
        $this->data['pagetitle'] = $this->page_title->show();

        $this->anchor = 'admin/' . $this->router->class;

		$this->load->helper('utilidades');

		$this->form_validation->set_error_delimiters('<div class="form_val_error">', '</div>');

        /* Breadcrumbs :: Common */
       // $this->breadcrumbs->unshift(1, 'apoiador', 'admin/apoiador');
    }
	public function index()	{  
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            /* dados  */
            
            //$this->data['usuariorede'] = R::findAll("questionarios");
            $sql = "SELECT  q.id,q.logradouro,q.numero,q.complemento,q.bairro,
                            q.cep,q.cidade,q.estado,q.cpf,q.cnpj,q.nomenegocio,
                            q.negociocasa,q.formaatuacao,q.tempoatividade,q.termo,
                            q.email,q.nome,q.datanasc,q.nomeusuario,q.celular,q.atividade,
                            q.porte,q.ramo,q.rede,c.nome as cid, r.descricao as descricaoramo
            FROM questionarios as q

            inner join cidades as c
            on c.id = q.cidade

            inner join ramo as r
            on r.id = q.ramo

            ";

            $this->data['usuariorede'] = R::getAll($sql);



            /* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* Nome do Botão Criar do INDEX */
			$this->data['texto_btn_create'] = 'Criar Usuariorede';

			/* Data */
			$this->data['error'] = NULL;

			//$this->data['aparelhos'] = R::findAll('aparelhos');


			/* Load Template */
			$this->template->admin_render($this->anchor . '/index', $this->data);
        }
    }
	public function view($id)	{  
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            /* dados  */
            
            $this->data['usuariorede'] = R::findAll("questionarios",$id);
            /*$sql = "SELECT  q.id,q.logradouro,q.numero,q.complemento,q.bairro,
                            q.cep,q.cidade,q.estado,q.cpf,q.cnpj,q.nomenegocio,
                            q.negociocasa,q.formaatuacao,q.tempoatividade,q.termo,
                            q.email,q.nome,q.datanasc,q.nomeusuario,q.celular,q.atividade,
                            q.porte,q.ramo,q.rede,c.nome as cid, r.descricao as descricaoramo
            FROM questionarios as q

            inner join cidades as c
            on c.id = q.cidade

            inner join ramo as r
            on r.id = q.ramo

            ";

            $this->data['usuariorede'] = R::getAll($sql);

            */

            /* Breadcrumbs */
			$this->data['breadcrumb'] = $this->breadcrumbs->show();

			/* Nome do Botão Criar do INDEX */
			$this->data['texto_btn_create'] = 'Criar Usuariorede';

			/* Data */
			$this->data['error'] = NULL;

			//$this->data['aparelhos'] = R::findAll('aparelhos');


			/* Load Template */
			$this->template->admin_render($this->anchor . '/view', $this->data);
        }
    }
    public function deleteyes($id) {
		if ( ! $this->ion_auth->logged_in() ) {
			return show_error('voce não esta logado');
		}

		//$id = $this->input->get("id");

		if (!isset($id) || $id == null) {
            return show_error('id não confere');
			redirect('admin/usuariosrede', 'refresh');
		}

		if ($this->ion_auth->logged_in()) {
			$lixo = R::load("usuariosrede", $id);
			R::trash($lixo);
		}
		redirect('admin/usuariosrede', 'refresh');
	}
    public function edit($id) {
		$id = (int) $id;

		if (! $this->ion_auth->logged_in()) {
			redirect('auth', 'refresh');
		}

		/* Breadcrumbs */
		$this->breadcrumbs->unshift(2, "Editar Usuário", 'admin/usuariosrede/edit');
		$this->data['breadcrumb'] = $this->breadcrumbs->show();

         /* Titulo */
         $this->data['texto_edit'] = 'Editar Usuário';
		/* Validate form input */
		$this->form_validation->set_rules('descricao', 'descricao', 'required');
		
		$usuariorede = R::load("questionarios", $id);

		if (isset($_POST) && ! empty($_POST)) {
			if ($this->form_validation->run()) {
				$usuariorede->logradouro     = $this->input->post('logradouro');
                $usuariorede->email          = $this->input->post('email');
                $usuariorede->nome           = $this->input->post('nome');
                $usuariorede->datanasc       = $this->input->post('datanasc');
                $usuariorede->nomeusuario    = $this->input->post('nomeusuario');
                $usuariorede->numero         = $this->input->post('numero');
                $usuariorede->complemento    = $this->input->post('complemento');
                $usuariorede->bairro         = $this->input->post('bairro');
                $usuariorede->cep            = $this->input->post('cep');
                $usuariorede->cidade         = $this->input->post('cidade');
                $usuariorede->estado         = $this->input->post('estado');
                $usuariorede->cpf            = $this->input->post('cpf');
                $usuariorede->cnpj           = $this->input->post('cnpj');
                $usuariorede->celular        = $this->input->post('celular');
                $usuariorede->nomenegocio    = $this->input->post('nomenegocio');
                $usuariorede->negociocasa    = $this->input->post('negociocasa');
                $usuariorede->formaatuacao   = $this->input->post('formaatuacao');
                $usuariorede->atividade      = $this->input->post('atividade');
                $usuariorede->tempoatividade = $this->input->post('tempoatividade');
                $usuariorede->porte          = $this->input->post('porte');
                $usuariorede->ramo           = $this->input->post('ramo');
                $usuariorede->rede           = $this->input->post('rede');
               
                try {
                    R::store($usuariorede);
                } catch (Exception $e) {
                    R::rollback();
                }

				redirect('admin/usuariosrede/', 'refresh');
			}
		}
	
		// set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : "");

		$this->data['id'] = array(
			'id' => $usuariorede->id
		);
		
        $this->data['email'] = array(
            'name'  => 'email',
            'id'    => 'email',
            'type'  => 'text',
            'class' => 'form-control email',
            'value' => $usuariorede->email,
        );
        $this->data['nome'] = array(
            'name'  => 'nome',
            'id'    => 'nome',
            'type'  => 'text',
            'class' => 'form-control nome',
            'value' => $usuariorede->nome,
        );
        $this->data['datanasc'] = array(
            'name'  => 'datanasc',
            'id'    => 'datanasc',
            'type'  => 'date',
            'class' => 'form-control nome',
            'value' => $usuariorede->nome,
        );
        $this->data['nomeusuario'] = array(
            'name'  => 'nomeusuario',
            'id'    => 'nomeusuario',
            'type'  => 'text',
            'class' => 'form-control nomeusuario',
            'value' => $usuariorede->nomeusuario,
        );
       
        $this->data['logradouro'] = array(
            'name'  => 'logradouro',
            'id'    => 'logradouro',
            'type'  => 'text',
            'class' => 'form-control logradouro',
            'value' => $usuariorede->logradouro,
        );
        $this->data['numero'] = array(
            'name'  => 'numero',
            'id'    => 'numero',
            'type'  => 'int',
            'class' => 'form-control numero',
            'value' => $usuariorede->numero,
        );
        $this->data['complemento'] = array(
            'name'  => 'complemento',
            'id'    => 'complemento',
            'type'  => 'text',
            'class' => 'form-control complemento',
            'value' => $usuariorede->complemento,
        );
        $this->data['bairro'] = array(
            'name'  => 'bairro',
            'id'    => 'bairro',
            'type'  => 'text',
            'class' => 'form-control bairro',
            'value' => $usuariorede->bairro,
        );
        $this->data['cep'] = array(
            'name'  => 'cep',
            'id'    => 'cep',
            'type'  => 'int',
            'class' => 'form-control cep',
            'value' => $usuariorede->cep,
        );
        $this->data['cidade'] = array(
            'name'  => 'cidade',
            'id'    => 'cidade',
            'selected'=>$usuariorede->cidade,
            'options'  => $this->getcidade(),
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('cidade'),
        );
        $this->data['estado'] = array(
            'name'  => 'estado',
            'id'    => 'estado',
            'selected'=>$usuariorede->estado,
            'options'  => $this->getestado(),
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('estado'),
        );
        $this->data['cpf'] = array(
            'name'  => 'cpf',
            'id'    => 'cpf',
            'type'  => 'int',
            'class' => 'form-control cpf',
            'value' => $usuariorede->cpf,
        );
        $this->data['cnpj'] = array(
            'name'  => 'cnpj',
            'id'    => 'cnpj',
            'type'  => 'int',
            'class' => 'form-control cnpj',
            'value' => $usuariorede->cnpj,
        );  
        $this->data['celular'] = array(
            'name'  => 'celular',
            'id'    => 'celular',
            'type'  => 'text',
            'class' => 'form-control celular',
            'value' => $usuariorede->celular,
        );
        $this->data['nomenegocio'] = array(
            'name'  => 'nomenegocio',
            'id'    => 'nomenegocio',
            'type'  => 'text',
            'class' => 'form-control nomenegocio',
            'value' => $usuariorede->nomenegocio,
        );
        $this->data['negociocasa'] = array(
            'name'  => 'negociocasa',
            'id'    => 'negociocasa',
            'type'  => 'checkbox',
            'selected'=>$usuariorede->negociocasa,
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('negociocasa'),
        );
        $this->data['formaatuacao'] = array(
            'name'  => 'formaatuacao',
            'id'    => 'formaatuacao',
            'selected'=>$usuariorede->formaatuacao,
            'options'  => $this->getformaatuacao(),
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('formaatuacao'),
        );
        $this->data['outraforma'] = array(
            'name'  => 'outraforma',
            'id'    => 'outraforma',
            'type'  => 'text',
            'class' => 'form-control outraforma',
            'value' => $usuariorede->outraforma,
        );
        $this->data['atividade'] = array(
            'name'  => 'atividade',
            'id'    => 'atividade',
            'selected'=>$usuariorede->atividade,
            'options'  => $this->getatividade(),
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('atividade'),
        );
        $this->data['outraatividade'] = array(
            'name'  => 'outraatividade',
            'id'    => 'outraatividade',
            'type'  => 'text',
            'class' => 'form-control outraatividade',
            'value' => $usuariorede->outraatividade,
        );
        $this->data['tempoatividade'] = array(
            'name'  => 'tempoatividade',
            'id'    => 'tempoatividade',
            'selected'=>$usuariorede->tempoatividade,
            'options'  => $this->gettempoatividade(),
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('tempoatividade'),
        );
        $this->data['porte'] = array(
            'name'  => 'porte',
            'id'    => 'porte',
            'selected'=>$usuariorede->porte,
            'options'  => $this->getporte(),
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('porte'),
        );
        $this->data['outroporte'] = array(
            'name'  => 'outroporte',
            'id'    => 'outroporte',
            'type'  => 'text',
            'class' => 'form-control outroporte',
            'value' => $usuariorede->outroporte,
        );
        $this->data['ramo'] = array(
            'name'  => 'ramo',
            'id'    => 'ramo',
            'selected'=>$usuariorede->ramo,
            'options'  => $this->getramo(),
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('ramo'),
        );
        $this->data['outroramo'] = array(
            'name'  => 'outroramo',
            'id'    => 'outroramo',
            'type'  => 'text',
            'class' => 'form-control outroramo',
            'value' => $usuariorede->outroramo,
        );
        $this->data['rede'] = array(
            'name'  => 'rede',
            'id'    => 'rede',
            'selected'=>$usuariorede->rede,
            'options'  => $this->getSimNao(),
            'class' => 'form-control',
            'value' => $this->form_validation->set_value('rede'),
        );
        $this->data['instagram'] = array(
            'name'  => 'instagram',
            'id'    => 'instagram',
            'type'  => 'text',
            'class' => 'form-control instagram',
            'value' => $usuariorede->instagram,
        );
        $this->data['facebook'] = array(
            'name'  => 'facebook',
            'id'    => 'facebook',
            'type'  => 'text',
            'class' => 'form-control facebook',
            'value' => $usuariorede->facebook,
        );
        $this->data['whatsapp'] = array(
            'name'  => 'whatsapp',
            'id'    => 'whatsapp',
            'type'  => 'text',
            'class' => 'form-control whatsapp',
            'value' => $usuariorede->whatsapp,
        );
        $this->data['site'] = array(
            'name'  => 'site',
            'id'    => 'site',
            'type'  => 'text',
            'class' => 'form-control site',
            'value' => $usuariorede->site,
        );
        $this->data['outras'] = array(
            'name'  => 'outras',
            'id'    => 'outras',
            'type'  => 'text',
            'class' => 'form-control outras',
            'value' => $usuariorede->outras,
        );
       
        /* Load Template */
        $this->template->admin_render('admin/usuariosrede/edit', $this->data);

	}
    private function getSimNao() {
        $ret = array(
            array('id' => '1', 'nome' => 'SIM'),
            array('id' => '0', 'nome' => 'NÃO')
        );

        return $ret;
    }
    private function getver() {
        $ret = array(
            array('id' => '1', 'nome' => 'Ver o Termo de Autorização de uso de Imagem'),
            array('id' => '0', 'nome' => 'Não Ver'),
        );

        return $ret;
    }
    private function getcidade() {
        $cid = R::findAll("cidades",'estado = 23');
        foreach ($cid as $c) {
            $options[$c->id] = $c->nome;
        }
        return $options;
    }
    private function getestado() {
        $est = R::findAll("estados", 'id=23');
        foreach ($est as $e) {
            $options[$e->id] = $e->nome;
        }
        return $options;
    }
    private function getformaatuacao() {
        $est = R::findAll("formasatuacao");
        foreach ($est as $e) {
            $options[$e->id] = $e->descricao;
        }
        return $options;
    }
    private function getatividade() {
        $est = R::findAll("atividades");
        foreach ($est as $e) {
            $options[$e->id] = $e->descricao;
        }
        return $options;
    }
    private function gettempoatividade() {
        $est = R::findAll("tempoatividade");
        foreach ($est as $e) {
            $options[$e->id] = $e->descricao;
        }
        return $options;
    }
    private function getporte() {
        $est = R::findAll("porte");
        foreach ($est as $e) {
            $options[$e->id] = $e->descricao;
        }
        return $options;
    }
    private function getramo() {
        $est = R::findAll("ramo");
        foreach ($est as $e) {
            $options[$e->id] = $e->descricao;
        }
        return $options;
    }



}
