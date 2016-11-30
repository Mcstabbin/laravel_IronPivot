<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Status extends Model
    {
            protected $table = 'statuses';

            protected $fillable = [
                'body'
            ];

            public function user()
            {
                return $this->belongsTo('App\Models\User', 'user_id');
                /* This creates a relation to user model

                In the example above, Eloquent will try to match the user_id from the Status model to an id on the User model. Eloquent determines the 
                default foreign key name by examining the name of the relationship method and suffixing the method name with _id. However, if the
                 foreign key on the  Status model is not user_id, you may pass a custom key name as the second argument to the  belongsTo method:
                 */
            }

            public function scopeNotReply($query)
            {
                return $query->whereNull('parent_id');
            }

            public function replies()
            {
                return $this->hasMany('App\Models\Status', 'parent_id');
                /*A "one-to-many" relationship is used to define relationships where a single model owns any amount of other models. For example, a 
                blog post may have an infinite number of status. Like all other Eloquent relationships, one-to-many relationships are defined 
                by placing a function on your Eloquent model:
                Remember, Eloquent will automatically determine the proper foreign key column on the Status model. By convention, Eloquent will take 
                the "snake case" name of the owning model and suffix it with _id. So, for this example, Eloquent will assume the foreign key on the 
                Status model is  parent_id.
                Once the relationship has been defined, we can access the collection of comments by accessing the  Status property. Remember, since 
                Eloquent provides "dynamic properties", we can access relationship functions as if they were defined as properties on the model:
                 */

            }

            public function likes()
            {
                return $this->morphMany('App\Models\Like', 'likeable');
                /*
                The Status_id column will contain the ID value of the post or video, while the  commentable_type column will contain the class name of the owning model. 
                */
                /**
                * Get all of the Status's likes.
                */
            }
    }