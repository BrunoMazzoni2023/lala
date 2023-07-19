<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JogosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClienteController;
//use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\Admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/


#######      DIMINUINDO A ROTA PELOS PREFIXOS   #######
/*
Route::prefix('usuarios')->name('user.')->controller(UserController::class)->group(function() {
    Route::get('/','index')->name('index');
  }
*/



//ClIENTE=PRODUTOS
Route::get('/clientes/{id}/produtos/create', [ProductController::class, 'create'])->name('produtos.create');
//Route::get('/clientes/produtos/{id}/edit', [ProductController::class, 'edit'])->name('produtos.edit');

Route::get('/clientes/{cliente}/produtos/{id}', [ProductController::class, 'edit'])->name('produtos.edit');
Route::post('/clientes/{id}/produtos', [ProductController::class, 'store'])->name('produtos.store');
Route::put('/produtos{id}', [ProductController::class, 'update'])->name('produtos.update');
Route::get('/clientes/{id}/produtos', [ProductController::class, 'index'])->name('produtos.index');
Route::delete('/produtos/delete/{id}', [ProductController::class, 'destroy'])->name('produtos.destroy'); // delete botao Deletar Direto

//Route::get('/clientes/produtos', [ProductController::class, 'show'])->name('produtos.show');


//CLIENTES
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');



//HOME
Route::get('/', [HomeController::class, 'index'])->name('home.index'); 
Route::get('/contato', [HomeController::class, 'contato'])->name('home.contato'); 

//USUARIOS
Route::get('/usuarios/adicionar', [UsersController::class, 'create'])->name('user.create');   //CREATE BOTAO ir p/ o formulario Novo usuário
Route::post('/usuarios/adicionar', [UsersController::class, 'store'])->name('user.store');  //Controller ADICIONAR
Route::get('/usuarios',[UsersController::class, 'index'])->name('user.index');              //Controller PAGINA INICIAL /USUARIOS
Route::get('/usuario/{id}', [UsersController::class, 'show'])->name('user.show');          //VIEW BOTAO ir p/ Ver a pagina de cadastro
Route::get('/usuarios/editar/{id}', [UsersController::class, 'edit'])->name('user.edit');   //edit Botao Editar  para ir p/ pagina atualizar
Route::put('/usuario/update/{id}', [UsersController::class, 'update'])->name('user.update'); // update atualizar ROTA
Route::delete('/user/delete/{id}', [UsersController::class, 'destroy'])->name('user.destroy'); // delete botao Deletar Direto
Route::get('/login', [UsersController::class, 'login']); 
Route::post('/usuarios/home', [UsersController::class, 'user.login']);

/* ////PRODUTOS
Route::get('produtos/adicionar', [ProdutosController::class, 'create'])->name('produtos.create');   //CREATE BOTAO ir p/ o formulario Novo usuário
Route::post('produtos/adicionar', [ProdutosController::class, 'store'])->name('produtos.store');  //Controller ADICIONAR
Route::get('/produtos',[ProdutosController::class, 'index'])->name('produtos.index');              //Controller PAGINA INICIAL /PRODUTOS
Route::get('/produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.show');          //VIEW BOTAO ir p/ Ver a pagina de cadastro
Route::get('/produtos/editar/{id}', [ProdutosController::class, 'edit'])->name('produtos.edit');   //edit Botao Editar  para ir p/ pagina atualizar
Route::put('/produtos/update/{id}', [ProdutosController::class, 'update'])->name('produtos.update'); // update atualizar ROTA
Route::delete('/produtos/delete/{id}', [ProdutosController::class, 'destroy'])->name('produtos.destroy'); // delete botao Deletar Direto
  */


/* ///PRODUTOS
Route::prefix('produtos')->group(function(){
  Route::get('/', [produtosController::class, 'index'])->name('produtos-index');
  Route::get('/create', [produtosController::class, 'create'])->name('produtos-create');
  Route::post('/produtos', [produtosController::class, 'store'])->name('produtos-store');
  
  });
 */



///JOGOS
//Route::get('/jogos', [JogosController::class, 'index']);
  Route::prefix('jogos')->group(function(){
  Route::get('/', [jogosController::class, 'index'])->name('jogos-index');
  Route::get('/create', [jogosController::class, 'create'])->name('jogos-create');
  Route::post('/jogos', [jogosController::class, 'store'])->name('jogos-store');
  
  });


/*   Route::fallback(function(){
    return "Erro!";
  }); */