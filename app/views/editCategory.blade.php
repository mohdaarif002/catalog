<html>
    <body>
  <h2>Editing Category Page</h2>
   
 {{Form::open(array('url'=>'editAction','POST' ))}}
    
   <p>  {{Form::label('Name')}}  {{Form::text('edit_name',$catRow->name)}} </p> <br />
   <p>{{Form::label('Description')}} <br />{{Form::textarea('edit_desc',$catRow->description)}} </p> <br />
        
      {{Form::hidden('id',$catRow->category_id)}}
       
        {{Form::submit('Update')}} 
    
{{Form::close()}}



  
    
    
  </body>   
</html>    
   
    


