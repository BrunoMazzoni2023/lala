<?php

namespace App\Models;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigocliente',
        'nome',
        'pessoa',
        'cnpj',
        'estado',
        'data_nascimento', 
    ];

    public function produtos()
    {
        
        return $this->hasMany(Produto::class);
        //return $this->belongsToMany(Produto::class, 'associacoes');
    }

/*     public function getClientes(string|null $search = null)
    {   
        $clientes =$this->where(function ($query) use ($search){
        if ($search) {
            $query->where('codigocliente', $search);
            $query->orWhere('nome', 'LIKE', "%{$search}%");
        }
    })
    ->with(['']) 
    ->get();

    return $clientes;
}
 */

}

