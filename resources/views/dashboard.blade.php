@extends('crudbooster::themes.adminlte.layout.layout')
@section('content')
<iframe src="{{route('filemanager')}}" style="height:100vh; width:100%; border:none; margin:0; padding:0; overflow:hidden;">
    Your browser doesn't support iframes
</iframe>
@endsection