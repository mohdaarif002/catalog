<!DOCTYPE html>
<html>
     <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
          
    </head>
    <body>
  
            <table class="table table-bordered">
                <tr><th>category_id</th>  <th>name</th> <th>description</th> <th>parent</th> </tr>
                  @foreach($data as $category)

                      <tr>
                          <td>{{$category->category_id}}&nbsp;&nbsp;{{HTML::link('editCategory?id='.$category->category_id,'edit')}}&nbsp;&nbsp;{{ HTML::link('deleteCategory?id='.$category->category_id,'delete') }}</td>
                          <td> {{$category->name}}</td>
                          <td>{{$category->description}}</td>
                          @if($category->parent==NULL)
                            <td>{{'NULL'}} </td>
                          @else   
                            <td>{{$category->parent}} </td>
                          @endif

                      </tr>

                  @endforeach


          </table>

    
    
    
    </body>
</html>   