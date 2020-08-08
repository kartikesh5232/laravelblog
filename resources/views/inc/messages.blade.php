@if (count($errors)>0)

@foreach ($errors->all() as $error)
<div class="alert alert-danger">
{{$error}}    
</div>    
@endforeach
@endif


@if (session('success'))
<div class="alert alert-success">
   <h1>{{session('success')}} </h1>    
    </div>    
@endif

@if (session('error'))
<div class="alert alert-danger">
      <h1>{{session('error')}} </h1> 
    </div>    
@endif
