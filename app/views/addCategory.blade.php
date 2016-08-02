<html>
     <head>
         
      <head>   
    <body> 
        <center>
    
{{Form::open(array('url'=>'addAction','POST' ))}}
    
   <p>  {{Form::label('Name')}}  {{Form::text('form_name')}} </p> <br />
   <p>{{Form::label('Description')}} <br />{{Form::textarea('form_desc')}} </p> <br />
          
   <p> {{Form::label('Parent')}}  {{ Form::select('Parent', $categoryList , Input::old()) }} </p> <br />
       
        {{Form::submit('create')}} 
    
{{Form::close()}}
    
    </center>
    
    @if(Session::get('key')==1)
    <script>
        alert('category is created!!');
    </script>
    
    @endif
   {{ Session::flush()}}
    </body>
</html>    
