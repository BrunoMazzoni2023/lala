<?php

namespace App\Http\Controllers;

use id;
use App\Http\Requests\StoreUpdateClienteFormRequest;
use App\Models\{
    Cliente,
    Produto
};
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    protected $cliente;
    protected $produto;

    public function __construct(Cliente $cliente, Produto $produto)
    {
        $this->cliente = $cliente;
        $this->produto = $produto;
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         $search = $request->search;
         
        $clientes = Cliente::where(function ($query) use ($search){
            if ($search) {

                $query->where('codigocliente', $search);
                $query->where('nome', $search);
                $query->where('cnpj', $search);
         
                $query->orwhere('codigocliente', 'LIKE', "%{$search}%");
                $query->orwhere('nome', 'LIKE', "%{$search}%");
                $query->orwhere('cnpj', 'LIKE', "%{$search}%");
            }
        })
        
        ->with('Produtos')
        ->paginate(200); 
        
        return view('clientes.index',compact('clientes'));  

        
      /*   $cliente = Cliente::all();
        return view('clientes.index', ['clientes'=>$cliente]); */
      
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateClienteFormRequest $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         //$user = User::where('id', $id)->first();
     if(!$cliente = Cliente::find($id))
     return redirect()->route('clientes.index');

     return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if(!$cliente = Cliente::find($id))
        return redirect()->route('clientes.index');
    
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if(!$cliente = Cliente::find($id))
        return redirect()->route('clientes.index');
    
        $data = $request->all();

    
        $cliente->update($data);
        
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

     

        $cliente = Cliente::find($id);
        $cliente-> delete();
        return redirect()->back();

        
    }
}



/* public function destroy(string $id)
{

    $cliente = Cliente::find($id);
    $cliente-> delete();
    return redirect()->back();
} */