@extends('voyager::master')

@section('page_title','Messaging')

@section('css')
    <style>
        .project-tab {
            padding: 10%;
            margin-top: -8%;
        }
        .project-tab #tabs{
            background: #007b5e;
            color: #eee;
        }
        .project-tab #tabs h6.section-title{
            color: #eee;
        }
        .project-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #0062cc;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 3px solid !important;
            font-size: 16px;
            font-weight: bold;
        }
        .project-tab .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #0062cc;
            font-size: 16px;
            font-weight: 600;
        }
        .project-tab .nav-link:hover {
            border: none;
        }
        .project-tab thead{
            background: #f3f3f3;
            color: #333;
        }
        .project-tab a{
            text-decoration: none;
            color: #333;
            font-weight: 600;
        }
        .glyphicon-lg
        {
            font-size:4em
        }
        .info-block
        {
            border-right:5px solid #E6E6E6;margin-bottom:25px
        }
        .info-block .square-box
        {
            width:100px;min-height:110px;margin-right:22px;text-align:center!important;background-color:#676767;padding:20px 0
        }
        .info-block.block-info
        {
            border-color:#20819e
        }
        .info-block.block-info .square-box
        {
            background-color:#20819e;color:#FFF
        }
    </style>
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-paper-plane"></i>
        Messaging
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        <div class="container">
            <div class="col-md-12">
                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1primary" data-toggle="tab">Pengaduan Masyarakat</a></li>
                                <li><a href="#tab2primary" data-toggle="tab">Kritik Dan Saran</a></li>
                            </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1primary">
                                @foreach ($pengaduan as $item)
                                    <a href="{{ route('admin.messaging.read',[$item->id]) }}" style="text-decoration: none;color:#333">
                                        <div class="items col-xs-12 col-sm-6 col-md-12 col-lg-12 clearfix">

                                            <div class="info-block {{ $item->read_status==0?'block-info':'' }} clearfix">
                                                <div class="square-box pull-left">
                                                    <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td width='150'><strong>Nama Pengirim</strong></td>
                                                        <td width='15'>:</td>
                                                        <td>{{ $item->fullname }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Title</strong></td>
                                                        <td>:</td>
                                                        <td>{{ $item->subject }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Kontak</strong></td>
                                                        <td>:</td>
                                                        <td>{{ $item->phone .'/ '. $item->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Isi Pesan</strong></td>
                                                        <td>:</td>
                                                        <td>{{ $item->message }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="row text-right">
                                                <button class="btn btn-info">Balas</button>
                                                <button class="btn btn-danger">Hapus</button>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="tab2primary">
                                @foreach ($saran as $item)
                                    <a href="{{ route('admin.messaging.read',[$item->id]) }}" style="text-decoration: none;color:#333">
                                        <div class="items col-xs-12 col-sm-6 col-md-12 col-lg-12 clearfix">

                                            <div class="info-block {{ $item->read_status==0?'block-info':'' }} clearfix">
                                                <div class="square-box pull-left">
                                                    <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td width='150'><strong>Nama Pengirim</strong></td>
                                                        <td width='15'>:</td>
                                                        <td>{{ $item->fullname }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Title</strong></td>
                                                        <td>:</td>
                                                        <td>{{ $item->subject }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Kontak</strong></td>
                                                        <td>:</td>
                                                        <td>{{ $item->phone .'/ '. $item->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Isi Pesan</strong></td>
                                                        <td>:</td>
                                                        <td>{{ $item->message }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="row text-right" >
                                                <button class="btn btn-info">Balas</button>
                                                <button class="btn btn-danger">Hapus</button>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
