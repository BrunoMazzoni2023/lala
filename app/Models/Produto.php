<?php

namespace App\Models;


use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Ramsey\Uuid\Type\Integer;

class Produto extends Model
{
     use HasFactory;

     protected $fillable = [    
          'codigo',
          'descricao',
          'preco',
          'imposto',
      
          ];

          public function clientes()
          {
            return $this->belongsTo(Cliente::class);
          
          }


           public function calculateTax($preco)
          {
          // Cálculo do imposto (exemplo: 10%)
          $taxRate = 100;
          $tax = $preco * $taxRate;

          // Retorna o valor do imposto
          return $tax;
          } 

          

          
          public function calcularImposto()
          {
       
            
              return $this->preco * $this->imposto / 100;
          }
      }

   /*      public function imprimir_porcentagem(float $preco, float $imposto)
          {
            $porcentagem = obter_porcentagem ($preco, $imposto);

            echo "O valor de $valor corresponde a $porcentagem % de %imposto\n ";
          } 

         return imprimir_porcentagem(10,100);
 */


          //return $this->preco * $this->imposto / 100;

       /*    public function getCpfAttribute()
          {
              if ($this->pessoa === 'F') {
                  return $this->cnpj;
              }
            } */
       




/* public function clientes()
{
    return $this->belongsToMany(Cliente::class, 'associacoes');
}

public function getValorImpostoAttribute()
{


return $this->preco * $this->imposto / 100;
} */