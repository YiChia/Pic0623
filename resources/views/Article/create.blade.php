
@extends('layouts.app')
@section('content')
<section class="container">

<form action="{{url('Article')}}"method="post">
 <!--{{ csrf_field() }} -->
<input type="hidden" name="_token" value="{{csrf_token()}}"> 
<input type="text" name="title" value="">
<textarea name="content"id="" rows="10" cols="30" class="form-control"></textarea>
<input type="submit" name="" value="送出" class="btn btn-primary">    
</form>
</section>
@stop

{{var_dump($errors)}}


