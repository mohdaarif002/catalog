<!DOCTYPE html>
<html>

<body>

{{HTML::link('createCategory','Create-Category')}}
<br><br>
{{HTML::link('showAllCategory','Show-All-Category')}}
<br><br>
{{HTML::link('/','Refresh')}}


@if( !empty(Session::get('message')))
    {{Session::get('message')}}  
@endif
    
@if(!empty(Session::get('msg')))
<script>
  alert('category n its sub-categories are deleted!!');
</script>

@endif
{{ Session::flush()}}

</body>
</html>
