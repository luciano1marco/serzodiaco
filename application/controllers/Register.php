<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends Public_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Carrega helper URL
        $this->load->helper("url");
        $this->load->helper("html");
        $this->load->helper("form");
        $this->lang->load('auth');

        $this->load->helper('configuracao');
        $this->load->helper('utilidades');

        $this->form_validation->set_error_delimiters('<div class="form_val_error">', '</div>');
    }

    public function index()
    {
        $this->load->config('admin/dp_config');
        $this->load->config('common/dp_config'); 

        $this->cfg = configuracao();
        $php = configuracao_PHP();

        $this->cfg['arq_js'] = base_url() . 'public/javascript/controllers/home.js';

        $this->form_validation->set_rules('logradouro', 'Logradouro', 'required');      
        $this->form_validation->set_rules('email', 'E-mail', 'required');      
        $this->form_validation->set_rules('nome', 'Nome', 'required');      
        $this->form_validation->set_rules('datanasc', 'Data de Nascimento', 'required');      
        $this->form_validation->set_rules('nomeusuario', 'Nome de Usuário', 'required');      
        $this->form_validation->set_rules('password', 'lang:users_password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', 'lang:users_password_confirm', 'required');
        $this->form_validation->set_rules('numero', 'Número', 'required');      
        $this->form_validation->set_rules('bairro', 'Bairro', 'required');      
        $this->form_validation->set_rules('cep', 'CEP', 'required');      
        $this->form_validation->set_rules('cidade', 'Cidade', 'required');      
        $this->form_validation->set_rules('estado', 'Estado', 'required');      
        $this->form_validation->set_rules('cpf', 'CPF', 'required');      
        $this->form_validation->set_rules('celular', 'Celular', 'required');      
        $this->form_validation->set_rules('nomenegocio', 'Nome do Negócio', 'required');      
        $this->form_validation->set_rules('negociocasa', 'Negócio em casa', 'required');      
        $this->form_validation->set_rules('formaatuacao', 'Forma de Atuação', 'required');      
        $this->form_validation->set_rules('atividade', 'Atividade Econômica', 'required');      
        $this->form_validation->set_rules('tempoatividade', 'Tempo Atividade', 'required');      
        $this->form_validation->set_rules('porte', 'Porte', 'required');      
        $this->form_validation->set_rules('ramo', 'Ramo', 'required');      
        $this->form_validation->set_rules('rede', 'Rede', 'required');      
        $this->form_validation->set_rules('termo', 'Termo', 'required');      
        
        
        if ($this->form_validation->run() == TRUE) {

            $qbyte      = random_bytes(16);
            $hex        = bin2hex($qbyte);
            //Um MD5 random
            $md5id     = hash('md5', $hex);
           
            //----pega os valores do post
            $email          = $this->input->post('email');
            $nome           = $this->input->post('nome');
            $datanasc       = $this->input->post('datanasc');
            $nomeusuario    = $this->input->post('nomeusuario');
            $password       = $this->input->post('password');
            $logradouro     = $this->input->post('logradouro');
            $numero         = $this->input->post('numero');
            $complemento    = $this->input->post('complemento');
            $bairro         = $this->input->post('bairro');
            $cep            = $this->input->post('cep');
            $cidade         = $this->input->post('cidade');
            $estado         = $this->input->post('estado');
            $cpf            = $this->input->post('cpf');
            $cnpj           = $this->input->post('cnpj');
            $celular        = $this->input->post('celular');
            $nomenegocio    = $this->input->post('nomenegocio');
            $negociocasa    = $this->input->post('negociocasa');
            $formaatuacao   = $this->input->post('formaatuacao');
            $atividade      = $this->input->post('atividade');
            $tempoatividade = $this->input->post('tempoatividade');
            $porte          = $this->input->post('porte');
            $ramo           = $this->input->post('ramo');
            $rede           = $this->input->post('rede');
            $termo          = $this->input->post('termo');
            
            //--encripta password--------
           // $password = hash('md5',$hex);

            if ($formaatuacao == 9) {
                $formaatuacao   = $this->input->post('outraforma');
            }
            if ($atividade == 12) {
                $atividade   = $this->input->post('outraatividade');
            }
            if ($porte == 7) {
                $porte   = $this->input->post('outroporte');
            }
            if ($ramo == 5) {
                $ramo   = $this->input->post('outroramo');
            }
           
            R::begin();
            //Na tabela mae dados principais
            $questionario = R::dispense("questionarios");

            $questionario->md5id = $md5id;
            $questionario->email = isset($email) ? $email : null;
            $questionario->nome = isset($nome) ? $nome : null;
            $questionario->datanasc = isset($datanasc) ? $datanasc : null;
            $questionario->nomeusuario = isset($nomeusuario) ? $nomeusuario : null;
           // $questionario->password = isset($password) ? $password : null;
            $questionario->logradouro = isset($logradouro) ? $logradouro : null;
            $questionario->numero = isset($numero) ? $numero : null;
            $questionario->complemento = isset($complemento) ? $complemento : null;
            $questionario->bairro = isset($bairro) ? $bairro : null;
            $questionario->cep = isset($cep) ? $cep : null;
            $questionario->cidade = isset($cidade) ? $cidade : null;
            $questionario->estado = isset($estado) ? $estado : null;
            $questionario->cpf = isset($cpf) ? $cpf : null;
            $questionario->cnpj = isset($cnpj) ? $cnpj : null;
            $questionario->celular = isset($celular) ? $celular : null;
            $questionario->nomenegocio = isset($nomenegocio) ? $nomenegocio : null;
            $questionario->negociocasa = isset($negociocasa) ? $negociocasa : null;
            $questionario->formaatuacao = isset($formaatuacao) ? $formaatuacao : null;
            $questionario->atividade = isset($atividade) ? $atividade : null;
            $questionario->tempoatividade = isset($tempoatividade) ? $tempoatividade : null;
            $questionario->porte = isset($porte) ? $porte : null;
            $questionario->ramo = isset($ramo) ? $ramo : null;
            $questionario->rede = isset($rede) ? $rede : null;
            $questionario->termo = isset($termo) ? $termo : null;
            
           //O Id do questionario MASTER
            $id_questionario = R::store($questionario);

            R::commit();

            $this->session->set_flashdata('message', 'Dados Gravados no Banco!!');

            //--grava na tabela redessociais
            if ($rede == 1){
                $rs = R::dispense("redessociais");
                $rs->id_quest  = $id_questionario;
                $rs->instagram = $this->input->post('instagram');
                $rs->facebook  = $this->input->post('facebook');
                $rs->whatsapp  = $this->input->post('whatsapp');
                $rs->site      = $this->input->post('site');
                $rs->outras    = $this->input->post('outras');
                
                R::store($rs);
            }
            //--separa nome completo para primeiro nome
            $nome = $this->input->post("nome");
            $nome = explode(" ",$nome);
            
            //--grava na tabela users
               $username   = $nome[0];
               $email      =  $this->input->post('email');
               $password   =  $this->input->post('password');
               $adicional = array(
                    'active'     =>  1,
                    'first_name' => $nome[0],
                    'last_name'  =>  $nome[1],
                );
                $group = array('2');//grava na tabela groups
                $id = $this->ion_auth->register($username, $password,$email, $adicional, $group); 
            //--fim grava tabela users
                
            redirect('home', 'refresh');
        } else {
            /* CHECK BOX E RADIO */
            $this->data['simounao']  = $this->getSimNao();
            $this->data['ver']  = $this->getver();
            $this->data['formas'] = R::findAll('formasatuacao');
            $this->data['ativ']   = R::findAll('atividades');
            $this->data['tempo']   = R::findAll('tempoatividade');
            $this->data['port']   = R::findAll('porte');
            $this->data['ram']   = R::findAll('ramo');
       

            $this->data['email'] = array(
                'name'  => 'email',
                'id'    => 'email',
                'type'  => 'text',
                'class' => 'form-control email',
                'value' => $this->form_validation->set_value('email'),
            );
            $this->data['nome'] = array(
                'name'  => 'nome',
                'id'    => 'nome',
                'type'  => 'text',
                'class' => 'form-control nome',
                'value' => $this->form_validation->set_value('nome'),
            );
            $this->data['datanasc'] = array(
                'name'  => 'datanasc',
                'id'    => 'datanasc',
                'type'  => 'date',
                'class' => 'form-control nome',
                'value' => $this->form_validation->set_value('datanasc'),
            );
            $this->data['nomeusuario'] = array(
                'name'  => 'nomeusuario',
                'id'    => 'nomeusuario',
                'type'  => 'text',
                'class' => 'form-control nomeusuario',
                'value' => $this->form_validation->set_value('nomeusuario'),
            );
            $this->data['password'] = array(
				'name'  => 'password',
				'id'    => 'password',
				'type'  => 'password',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('password'),
			);
			$this->data['password_confirm'] = array(
				'name'  => 'password_confirm',
				'id'    => 'password_confirm',
				'type'  => 'password',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('password_confirm'),
			);

            $this->data['logradouro'] = array(
                'name'  => 'logradouro',
                'id'    => 'logradouro',
                'type'  => 'text',
                'class' => 'form-control logradouro',
                'value' => $this->form_validation->set_value('logradouro'),
            );
            $this->data['numero'] = array(
                'name'  => 'numero',
                'id'    => 'numero',
                'type'  => 'int',
                'class' => 'form-control numero',
                'value' => $this->form_validation->set_value('numero'),
            );
            $this->data['complemento'] = array(
                'name'  => 'complemento',
                'id'    => 'complemento',
                'type'  => 'text',
                'class' => 'form-control complemento',
                'value' => $this->form_validation->set_value('complemento'),
            );
            $this->data['bairro'] = array(
                'name'  => 'bairro',
                'id'    => 'bairro',
                'type'  => 'text',
                'class' => 'form-control bairro',
                'value' => $this->form_validation->set_value('bairro'),
            );
            $this->data['cep'] = array(
                'name'  => 'cep',
                'id'    => 'cep',
                'type'  => 'int',
                'class' => 'form-control cep',
                'value' => $this->form_validation->set_value('cep'),
            );
            $this->data['cidade'] = array(
                'name'  => 'cidade',
                'id'    => 'cidade',
                'type'  => 'checkbox',
                'options'  => $this->getcidade(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('cidade'),
            );
            $this->data['estado'] = array(
                'name'  => 'estado',
                'id'    => 'estado',
                'type'  => 'checkbox',
                'options'  => $this->getestado(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('estado'),
            );
            $this->data['cpf'] = array(
                'name'  => 'cpf',
                'id'    => 'cpf',
                'type'  => 'int',
                'class' => 'form-control cpf',
                'value' => $this->form_validation->set_value('cpf'),
            );
            $this->data['cnpj'] = array(
                'name'  => 'cnpj',
                'id'    => 'cnpj',
                'type'  => 'int',
                'class' => 'form-control cnpj',
                'value' => $this->form_validation->set_value('cnpj'),
            );  
            $this->data['celular'] = array(
                'name'  => 'celular',
                'id'    => 'celular',
                'type'  => 'text',
                'class' => 'form-control celular',
                'value' => $this->form_validation->set_value('celular'),
            );
            $this->data['nomenegocio'] = array(
                'name'  => 'nomenegocio',
                'id'    => 'nomenegocio',
                'type'  => 'text',
                'class' => 'form-control nomenegocio',
                'value' => $this->form_validation->set_value('nomenegocio'),
            );
            $this->data['negociocasa'] = array(
                'name'  => 'negociocasa',
                'id'    => 'negociocasa',
                'type'  => 'checkbox',
                'options'  => $this->getSimNao(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('negociocasa'),
            );
            $this->data['formaatuacao'] = array(
                'name'  => 'formaatuacao',
                'id'    => 'formaatuacao',
                'type'  => 'checkbox',
                'options'  => $this->getformaatuacao(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('formaatuacao'),
            );
            $this->data['outraforma'] = array(
                'name'  => 'outraforma',
                'id'    => 'outraforma',
                'type'  => 'text',
                'class' => 'form-control outraforma',
                'value' => $this->form_validation->set_value('outraforma'),
            );
            $this->data['atividade'] = array(
                'name'  => 'atividade',
                'id'    => 'atividade',
                'type'  => 'checkbox',
                'options'  => $this->getatividade(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('atividade'),
            );
            $this->data['outraatividade'] = array(
                'name'  => 'outraatividade',
                'id'    => 'outraatividade',
                'type'  => 'text',
                'class' => 'form-control outraatividade',
                'value' => $this->form_validation->set_value('outraatividade'),
            );
            $this->data['tempoatividade'] = array(
                'name'  => 'tempoatividade',
                'id'    => 'tempoatividade',
                'type'  => 'checkbox',
                'options'  => $this->gettempoatividade(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('tempoatividade'),
            );
            $this->data['porte'] = array(
                'name'  => 'porte',
                'id'    => 'porte',
                'type'  => 'checkbox',
                'options'  => $this->getporte(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('porte'),
            );
            $this->data['outroporte'] = array(
                'name'  => 'outroporte',
                'id'    => 'outroporte',
                'type'  => 'text',
                'class' => 'form-control outroporte',
                'value' => $this->form_validation->set_value('outroporte'),
            );
            $this->data['ramo'] = array(
                'name'  => 'ramo',
                'id'    => 'ramo',
                'type'  => 'checkbox',
                'options'  => $this->getramo(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('ramo'),
            );
            $this->data['outroramo'] = array(
                'name'  => 'outroramo',
                'id'    => 'outroramo',
                'type'  => 'text',
                'class' => 'form-control outroramo',
                'value' => $this->form_validation->set_value('outroramo'),
            );
            $this->data['rede'] = array(
                'name'  => 'rede',
                'id'    => 'rede',
                'type'  => 'checkbox',
                'options'  => $this->getSimNao(),
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('rede'),
            );
            $this->data['instagram'] = array(
                'name'  => 'instagram',
                'id'    => 'instagram',
                'type'  => 'text',
                'class' => 'form-control instagram',
                'value' => $this->form_validation->set_value('instagram'),
            );
            $this->data['facebook'] = array(
                'name'  => 'facebook',
                'id'    => 'facebook',
                'type'  => 'text',
                'class' => 'form-control facebook',
                'value' => $this->form_validation->set_value('facebook'),
            );
            $this->data['whatsapp'] = array(
                'name'  => 'whatsapp',
                'id'    => 'whatsapp',
                'type'  => 'text',
                'class' => 'form-control whatsapp',
                'value' => $this->form_validation->set_value('whatsapp'),
            );
            $this->data['site'] = array(
                'name'  => 'site',
                'id'    => 'site',
                'type'  => 'text',
                'class' => 'form-control site',
                'value' => $this->form_validation->set_value('site'),
            );
            $this->data['outras'] = array(
                'name'  => 'outras',
                'id'    => 'outras',
                'type'  => 'text',
                'class' => 'form-control outras',
                'value' => $this->form_validation->set_value('outras'),
            );
            $this->data['termo'] = array(
                'name'  => 'termo',
                'id'    => 'termo',
                'type'  => 'checkbox',
                'options'  => $this->getver(),
                'class' => 'form-control termo',
                'value' => $this->form_validation->set_value('termo'),
            );

            //---chama os modulos 
            $this->data['modulo_cabecalho'] = $this->load->view('public/includes/header.php', $this->cfg, TRUE);
            $this->data['modulo_rodape'] = $this->load->view('public/includes/footer.php', $this->cfg, TRUE);
            $this->data['modulo_menu'] = $this->load->view('public/includes/menu.php', $this->data, TRUE);
            
            //-----chama as questões 
            $this->data['q_email'] = $this->load->view('public/includes/questoes/q_email.php', $this->data, TRUE);
            $this->data['q_nome'] = $this->load->view('public/includes/questoes/q_nome.php', $this->data, TRUE);
            $this->data['q_datanasc'] = $this->load->view('public/includes/questoes/q_datanasc.php', $this->data, TRUE);
            $this->data['q_nomeusuario'] = $this->load->view('public/includes/questoes/q_nomeusuario.php', $this->data, TRUE);
            $this->data['q_senha'] = $this->load->view('public/includes/questoes/q_senha.php', $this->data, TRUE);
            $this->data['q_logradouro'] = $this->load->view('public/includes/questoes/q_logradouro.php', $this->data, TRUE);
            $this->data['q_numero'] = $this->load->view('public/includes/questoes/q_numero.php', $this->data, TRUE);
            $this->data['q_complemento'] = $this->load->view('public/includes/questoes/q_complemento.php', $this->data, TRUE);
            $this->data['q_bairro'] = $this->load->view('public/includes/questoes/q_bairro.php', $this->data, TRUE);
            $this->data['q_cep'] = $this->load->view('public/includes/questoes/q_cep.php', $this->data, TRUE);
            $this->data['q_cidade'] = $this->load->view('public/includes/questoes/q_cidade.php', $this->data, TRUE);
            $this->data['q_estado'] = $this->load->view('public/includes/questoes/q_estado.php', $this->data, TRUE);
            $this->data['q_cpf'] = $this->load->view('public/includes/questoes/q_cpf.php', $this->data, TRUE);
            $this->data['q_cnpj'] = $this->load->view('public/includes/questoes/q_cnpj.php', $this->data, TRUE);
            $this->data['q_celular'] = $this->load->view('public/includes/questoes/q_celular.php', $this->data, TRUE);
            $this->data['q_nomenegocio'] = $this->load->view('public/includes/questoes/q_nomenegocio.php', $this->data, TRUE);
            $this->data['q_negociocasa'] = $this->load->view('public/includes/questoes/q_negociocasa.php', $this->data, TRUE);
            $this->data['q_formaatuacao'] = $this->load->view('public/includes/questoes/q_formaatuacao.php', $this->data, TRUE);
            $this->data['q_atividade'] = $this->load->view('public/includes/questoes/q_atividade.php', $this->data, TRUE);
            $this->data['q_tempoatividade'] = $this->load->view('public/includes/questoes/q_tempoatividade.php', $this->data, TRUE);
            $this->data['q_porte'] = $this->load->view('public/includes/questoes/q_porte.php', $this->data, TRUE);
            $this->data['q_ramo'] = $this->load->view('public/includes/questoes/q_ramo.php', $this->data, TRUE);
            $this->data['q_rede'] = $this->load->view('public/includes/questoes/q_rede.php', $this->data, TRUE);
            $this->data['q_termo'] = $this->load->view('public/includes/questoes/q_termo.php', $this->data, TRUE);
            

            $this->load->view('public/register', $this->data);
        } //FIM ELSE
    }

    //---Rules ----------------------------
    public function rules_responsavel($field_value)
    {
        if (empty($field_value) && !isset($_POST['logradouro'])) {
            $this->form_validation->set_rules('logradouro', 'Possui Acesso', 'required');
            $this->form_validation->set_message('rules_logradouro', 'O campo {field} é obrigatorio');
            return false;
        }
    }
   
    //---Funções----------------------------

    private function getSimNao()
    {
        $ret = array(
            array('id' => '1', 'nome' => 'SIM'),
            array('id' => '0', 'nome' => 'NÃO')
        );

        return $ret;
    }

    private function getver()
    {
        $ret = array(
            array('id' => '1', 'nome' => 'Ver o Termo de Autorização de uso de Imagem'),
            array('id' => '0', 'nome' => 'Não Ver'),
        );

        return $ret;
    }

    private function getcidade()
    {
        $cid = R::findAll("cidades",'estado = 23');
        foreach ($cid as $c) {
            $options[$c->id] = $c->nome;
        }
        return $options;
    }
    private function getestado()
    {
        $est = R::findAll("estados", 'id=23');
        foreach ($est as $e) {
            $options[$e->id] = $e->nome;
        }
        return $options;
    }

    private function getformaatuacao()
    {
        $est = R::findAll("formasatuacao");
        foreach ($est as $e) {
            $options[$e->id] = $e->descricao;
        }
        return $options;
    }
    private function getatividade()
    {
        $est = R::findAll("atividades");
        foreach ($est as $e) {
            $options[$e->id] = $e->descricao;
        }
        return $options;
    }
    private function gettempoatividade()
    {
        $est = R::findAll("tempoatividade");
        foreach ($est as $e) {
            $options[$e->id] = $e->descricao;
        }
        return $options;
    }
    private function getporte()
    {
        $est = R::findAll("porte");
        foreach ($est as $e) {
            $options[$e->id] = $e->descricao;
        }
        return $options;
    }
    private function getramo()
    {
        $est = R::findAll("ramo");
        foreach ($est as $e) {
            $options[$e->id] = $e->descricao;
        }
        return $options;
    }



}
