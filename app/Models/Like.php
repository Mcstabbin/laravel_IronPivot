<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Like extends Model
{
    protected $table = 'likeable';

    public function likeable()
    {
        return $this->morphTo();
        /*  This says i am a poly morphic relationship I can be applied to any other model*/

        /*Because the like model serves as a central repository for likes associated with multiple different models, we require a means for knowing both which model and which record ID is associated with a particular like This will not be used in controllers or views only called by other models*/
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');

        /*Now, let's define a relationship on the like model that will let us access the User that likes . We can define the inverse of a hasOne relationship using the belongsTo method: 

        In the example above, Eloquent will try to match the user_id from the like model to an id on the User model. 
        Eloquent determines the default foreign key name by examining the name of the 
        relationship method and suffixing the method name with _id. 
        However, if the foreign key on the like model is not user_id, you may pass a custom key name as the second argument to the  belongsTo method:
        */
    }
}