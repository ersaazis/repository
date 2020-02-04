@extends('layout')
@section('content')
<div class="row">
    <div class="col-12">
        <iframe style="height:100vh; width:100%; border:none; margin:0; padding:0; overflow:hidden;" src="https://docs.google.com/viewer?url={{urlencode(url()->current('?download=yes'))}}?download=yes&hl=en&pid=explorer&efh=false&a=v&chrome=false&embedded=true"></iframe>
    </div>
    <div class="col-12">
        <a class="btn btn-secondary float-left" role="button" href="{{url()->current()}}/../"><i class="fa fa-backward"></i>Back</a>
        <a class="btn btn-success float-right" role="button" href="{{url()->current()}}?download=yes"><i class="fa fa-cloud-download"></i>Download</a>
    </div>
</div>
@endsection
