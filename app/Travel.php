<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    //

    protected $table = 'travels';
}

/* 
Esempiuo inserimentro tramite php artisan tinker

App\Travel {#3295}
>>> $travels->country='italy'  
=> "italy"
>>> $travels->city='milan'    
=> "milan"
>>> $travels->departure='2021-07-20'     
=> "2021-07-20"
>>> $travels->return='2021-07-27'    
=> "2021-07-27"
>>> $travels->detail='Vacation on Milan' 
=> "Vacation on Milan"
>>> $travels->n_persons=2
=> 2
>>> $travels->price=1000 
=> 1000
>>> $travels->save()                     
=> true
*/