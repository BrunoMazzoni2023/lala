<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
       $users = User::get();
        return view('user.index', [
            'usuarios' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'password']);

        $data['password'] =  bcrypt('password');

        User::create($request->all());
        return redirect()->route('user.index');  //REDIRECIONANDO PARA OUTRA PAGINA
    }


/*     public function store(Request $request)
    {
        $data = $request->only(['name', 'email']);

       // $data['password'] =  bcrypt('password');

        User::create($data);
        return redirect()->route('user.index');  //REDIRECIONANDO PARA OUTRA PAGINA
    } */

    

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user = User::find($id);

        return view('user.show',[
            'user' => $user
        ]);


        //$user = User::where('id', $id)->first();
        //dd($user);

            //$user = User::find($id);      BUSCA    no http escreve /users/1
       // dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::find($id);

        return view('user.edit',[
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only(['nome','email','password']);

        $user = User::find($id);

        $user->update($data);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function login(string $id)
    {
        {
            return view('login');
        }
    }
}
