<?php
namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class ClienteValidacao
{
    public static function salvar($cliente)
    {
        $validacao = new Validacao();
        $validacao->setData('cliente', $cliente->cliente);
        $validacao->setData('cpf', $cliente->cpf);
        $validacao->setData('cep', $cliente->cep);
        $validacao->setData('bairro', $cliente->bairro);
        $validacao->setData('cidade', $cliente->cidade);
        $validacao->setData('uf', $cliente->uf);
        $validacao->setData('email', $cliente->email);

        $validacao->getData('cliente')->isVazio();
        $validacao->getData('cpf')->isVazio();
        $validacao->getData('cep')->isVazio();
        $validacao->getData('bairro')->isVazio();
        $validacao->getData('cidade')->isVazio();
        $validacao->getData('uf')->isVazio();
        $validacao->getData('email')->isVazio();
        
        if ($cliente->cliente) {
            $validacao->getData('cliente')->isMinimo(6)->isUnicoJr('cliente', $cliente, 'id_cliente', 'id_cliente');
        }
        
        if ($cliente->email) {
            $exit = Service::get('cliente', 'email', $cliente->email);
            if ($exit && $cliente->id_cliente != $exit->id_cliente) {
                $validacao->getData('email')->isEmail()->isUnico(1);
            }
        }
    
        if ($cliente->cpf) {
            $exit = Service::get('cliente', 'cpf', $cliente->cpf);
            if ($exit && $cliente->id_cliente != $exit->id_cliente) {
                $validacao->getData('cpf')->isCPF()->isUnico(1);
            }
        }
        
        return $validacao;
    }
}