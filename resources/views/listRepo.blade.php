@extends('layout')
@section('content')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th class="d-none d-lg-table-cell">Tipe</th>
                <th class="d-none d-lg-table-cell">Ukuran</th>
                <th style="width:15%;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($slashData)
            <tr>
                <td><a href="{{url()->current()}}/../" class="text-success"><< back</a></td>
                <td class="d-none d-lg-table-cell"></td>
                <td class="d-none d-lg-table-cell"></td>
                <td class="text-center"></td>
            </tr>
            @endif
            @foreach ($dataDirectories as $item)
                <tr>
                    <td><a href="{{url($item)}}" class="text-success">{{pathinfo($item)['basename']}}</a></td>
                    <td class="d-none d-lg-table-cell">Directory</td>
                    <td class="d-none d-lg-table-cell">Directory</td>
                    <td class="text-center"></td>
                </tr>
            @endforeach
            @foreach ($datafiles as $item)
                <tr>
                    <?php
                        $detailItem=pathinfo($item);
                    ?>
                    <td class="text-dark">{{$detailItem['basename']}}</td>
                    <td class="d-none d-lg-table-cell">{{$detailItem['extension']}}</td>
                    <td class="d-none d-lg-table-cell">{{Storage::disk('share')->size($item)}} kb</td>
                    <td class="text-center">
                        @if (in_array($detailItem['extension'],$viewerExt))
                            <a data-toggle="tooltip" data-placement="bottom" title="Preview" class="btn btn-info btn-sm ml-1" role="button" href="{{url($item)}}"><i class="fa m-0 p-0 fa-eye"></i></a>
                        @endif
                        <a data-toggle="tooltip" data-placement="bottom" title="Download" class="btn btn-success btn-sm ml-1" role="button" href="{{url($item)}}?download=yes"><i class="fa m-0 p-0 fa-cloud-download"></i></a>
                    </td>
                </tr>                    
            @endforeach
        </tbody>
    </table>
</div>
{{-- <div class="row">
    <div class="col"><a class="btn btn-secondary float-left" role="button" href="#"><i class="fa fa-backward"></i>Back</a><a class="btn btn-success float-right" role="button" href="#"><i class="fa fa-cloud-download"></i>Download</a></div>
</div> --}}

@endsection
