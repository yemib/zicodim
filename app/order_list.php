<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class order_list extends Model
{
    //

    public function product(){

        return $this->belongsTo(add_product::class  ,  'product_id');
    }


    public function  client(){

        return $this->belongsTo(client::class  ,  'email');
    } 
}
