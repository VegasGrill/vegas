<?php namespace Pedidos;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model {

    protected $fillable = [
        'pedido_numero',
        'pedido_nome_garcon',
        'pedido_numero_mesa',
        'pedido_time_entrada',
        'pedido_time_previsao_entrega',
        'pedido_time_entrega',
        'pedido_status'
    ];

    public function up() {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('pedido_nome_garcon');
            $table->string('pedido_numero_mesa');
            $table->string('pedido_time_entrada');
            $table->string('pedido_time_previsao_entrega');
            $table->integer('pedido_time_entrega');
            $table->integer('pedido_status');
            $table->timestamps();
        });
    }

}
