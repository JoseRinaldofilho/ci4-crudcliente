<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClienteModel;
class Cliente extends Controller{

    
    public function __construct()
    {
        $this->clienteM = new \App\Models\ClienteModel();
    }
    // chama a view de clientes
    public function index()
    {

        $data = $this->clienteM->findAll();
        $dados['clientes'] = $data;
        // dd($data);
        echo view('cliente/index',$dados);
        
    }
    // chama view de formulario
    public function create()
    {
      helper('form');
        echo view('cliente/form');
    }

    //salva o clinte no banco de dados
    public function store()
    {
      //busca no formulario 
      $post = $this->request->getPost();
      
      $ClienteModel = new ClienteModel();      
       //sava o $post na var clinte model
         if($ClienteModel->save($post)){
          
           return redirect()->to('/cliente');
         
        }
        echo "Erro no banco";      
    }

    //ediatr o cliente
    public function edit($id)
    {
        //estanciar
        $clienteModel = new ClienteModel();
        //add em dados busca oi 1 id
        $dados = $clienteModel->find($id);
        // dd($dados);
        if (is_null($dados)) { // checar de dados esta vazio 
          echo "Erro Cliente na encontrado";
        }
        // se nao der Erro chama a visao
        helper('form');
        echo view('cliente/form',[
          'dados' => $dados
        ]);

    }

    //delata o cliente
    public function delete($id)
    {
      //estanciar
      $clienteModel = new ClienteModel();
      //add em dados busca oi 1 id
      if ($clienteModel->delete($id)) {
        echo "Deletado com sucesso";
        return redirect()->to('/cliente');
      }

    }

}