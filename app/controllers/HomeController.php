<?php
use DB;
use Illuminate\Support\Facades\Input;
use app\models\User as User;

class HomeController extends BaseController {

	
	public function showWelcome()
	{
		return View::make('hello');
	}


         public function getCategories()
        {

            $categories=DB::table('category')->lists('name','category_id');


           return View::make('addCategory',array('categoryList'=>$categories));
         } 
         
         public function fillCategories()
         {
             
            $Name= $_POST['form_name'];
            $Desc=$_POST['form_desc'];
            $Parent=$_POST['Parent'];
             
            if($Parent==1)$Parent=NULL;
           
            DB::table('category')->insert(array('name'=>$Name,'parent'=>$Parent,'description'=>$Desc));
            
            $var=1;
            Session::put('key', $var);
            return Redirect::to('createCategory');
           
         }   
         
         public function showAllCategory()
         {
             
             $data=DB::table('category')->get();
             
             
             return View::make('showAllCategory',array('data'=>$data));
             
         }
         
          public function editCategory()
         {
           $category_id = Input::get('id');
           $obj=DB::table('category')->where('category_id',$category_id)->first();
          return View::make('editCategory')->with('catRow',$obj);
             
         }
         
         public function editAction()
         {
           $name= Input::get('edit_name') ; 
            $desc=Input::get('edit_desc') ; 
            $id=Input::get('id') ; 
            
            $update=['name'=>$name,'description'=>$desc];
            DB::table('category')->where('category_id',$id)->update($update);
            return Redirect::to('/')->with('message','Category is added Successfully!!');
            
         }
         
         public function deleteCategory()
         {
           $category_id = Input::get('id');
            
            User::deleteParent($category_id);//without instance calling a static function
           
            return Redirect::to('/')->with('msg','123');//this is flash message 
             
         }
         
}