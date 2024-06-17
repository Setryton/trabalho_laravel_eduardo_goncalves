<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Flash\AutoExpireFlashBag;

use function PHPUnit\Framework\returnCallback;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = Cliente::all();

        return view('cliente.index', compact('cliente'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'idade' => $request->input('idade'),
            'endereco' => $request->input('endereco'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
            'CEP' => $request->input('CEP')
        ]);

        $cliente->save();

        return redirect()->route('cliente.index');
    }

    public function edit($id)
    {
        $clientes = Cliente::where('id',$id)->first();
        if(!empty($clientes)){
            return view('cliente.edit', ['clientes'=>$clientes]);
        } else {
            return redirect()->route('cliente.index');
        }
        
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'idade' => $request->idade,
            'email' => $request->email,
            'cidade' => $request->cidade,
            'endereco' => $request->endereco,
            'estado' => $request->estado,
            'CEP' => $request->CEP
        ];
        cliente::where('id',$id)->update($data);
        return redirect()->route('cliente.index');

    }

    public function destroy($id)
    {
        cliente::where('id',$id)->delete();
        return redirect()->route('cliente.index');
    }
}