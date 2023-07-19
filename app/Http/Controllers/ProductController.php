<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUserFormRequest;

use App\Models\{
    Produto,
    Cliente
};

use Illuminate\Http\Request;


class ProductController extends Controller
{
    protected $produto;
    protected $cliente;



    
    public function __construct(Produto $produto, Cliente $cliente)
    {
        $this->produto = $produto;
        $this->cliente = $cliente;
        
    }




    public function index($clienteId)
    {

        $produtos = Produto::find(1); // Obtém o produto com ID 1
        $tax = $produtos->calcularImposto(); // Calcula o imposto do produto
        echo "O imposto do produto {$produtos->descricao} é: R$ {$tax}"; 
        
       if( !$cliente = $this->cliente->find($clienteId)) {
        return redirect()->back();
       }
   
       $produto = $cliente->produtos()->get();
   
        return view('clientes.produtos.index', compact('cliente', 'produto'));
    }




    public function create($clienteId)
    {
       if( !$cliente = $this->cliente->find($clienteId)) {
        return redirect()->back();
       }

        return view('clientes.produtos.create', compact('cliente'));
    }






    public function store(Request $request, $clienteId)
    {
       if( !$cliente = $this->cliente->find($clienteId)) {
        return redirect()->back();
       }

       $cliente->produtos()->create([
            'codigo' => $request->codigo,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'imposto' => $request->imposto,
      
            //'descricao'=> isset($request->visible)

            
       ]);
 

        return redirect()->route('produtos.index', $cliente->id);
    }





    public function edit($clienteId, $id)
    {
       if( !$produto = $this->produto->find($id)) {
        return redirect()->back();
       }
       $cliente = $produto->cliente;

        return view('clientes.produtos.edit', compact('cliente', 'produto'));
    } 



    public function update(Request $request, $id)
    {
       if( !$produto = $this->produto->find($id)) {
        return redirect()->back();
       }

       $produto->update([
            'codigo' => $request->codigo,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'imposto' => $request->imposto,
            //'descricao'=> isset($request->visible)
       ]);

        return redirect()->route('produtos.index', $produto->cliente_id);
    }

    public function destroy(string $id)
    {
        $produto = Produto::find($id);
        $produto-> delete();
        return redirect()->back();
    }


}















/*     public function show($clienteId)
    {
       if( !$cliente = $this->cliente->find($clienteId)) {
        return redirect()->route('clientes.produtos.index', $cliente->id);
       }

    

    } */
    


/* if(!$cliente = Cliente::find($id))
return redirect()->route('clientes.index');

return view('clientes.show', compact('cliente')); 


 $cliente->produto*/