<?php
namespace app\models;
use DB;


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends \Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'category';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
        
        
        
        public static function deleteParent($category_id)
        {     
            if ((is_string($category_id)) && ($category_id == 0 || $category_id == NULL) )return 0;
            else{
                $newCategoryId=\DB::table('category')->where('parent',$category_id)->get();
                
                  foreach($newCategoryId as $new)
                    {

                    if(!empty($new->category_id))
                        self::deleteParent($new->category_id);//self keyword is used to call current class functions 
                     
                    }
              DB::table('category')->where('category_id',$category_id)->delete();      
                    
            }    
              
        }
       
}
