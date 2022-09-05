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
           
            $this->data['cpf'] = array(
                'name'  => 'cpf',
                'id'    => 'cpf',
                'type'  => 'int',
                'class' => 'form-control cpf',
                'value' => $this->form_validation->set_value('cpf'),
            );
          
            $this->data['celular'] = array(
                'name'  => 'celular',
                'id'    => 'celular',
                'type'  => 'text',
                'class' => 'form-control celular',
                'value' => $this->form_validation->set_value('celular'),
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
            $this->data['q_cpf'] = $this->load->view('public/includes/questoes/q_cpf.php', $this->data, TRUE);
           

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


}
