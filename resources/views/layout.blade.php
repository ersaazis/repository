<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Repository - @yield('title','Universitas Islam Negeri Sunan Gunung Djati Bandung')</title>
    <link rel="stylesheet" href="{{asset('')}}assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{asset('')}}assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="{{url('')}}">Repository <span class="text-success">Pascasarjana</span></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#cari-repo" data-toggle="modal" data-target="#cari-repo">Cari data</a></li>
                    @if (cb()->session()->id())
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{url(cb()->getAdminPath().'/')}}">Admin</a></li>
                    @else
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{url(cb()->getAdminPath().'/login')}}">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading text-left row">
                    <div class="col-md-6 offset-md-3">
                        <div class="row">
                            <div class="col-md-3 text-right">
                                <img src="{{url('uin.png')}}" class="w-100">
                            </div>
                            <div class="col-md-9">
                                <h2 class="text-success">Universitas Islam Negri Sunan Gunung Djati Bandung</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="breadcrumb shadow-sm bg-white">
                    <li class="breadcrumb-item"><a href="{{url('')}}"><span class="badge badge-success text-white"><i class="fa fa-hdd-o"></i></span></a></li>
                    <?php
                        $slash=null;
                    ?>
                    @foreach ($breadcrumb as $item)
                        <?php
                            $slash.=$item.'/';
                        ?>
                        <li class="breadcrumb-item"><a href="{{url($slash)}}"><span class="text-success">{{$item}}</span></a></li>
                    @endforeach
                </ol>
                <div class="block-content">
                    @yield('content')
                </div>
            </div>
        </section>
    </main>
    <div class="modal fade" role="dialog" tabindex="-1" id="cari-repo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cari Data</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form action="{{url()->current()}}">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Cari Berdasarkan Nama" name="cari">
                            <div class="input-group-append"><button class="btn btn-primary" type="submit">Cari</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark p-3 text-white text-center">
        <p>© {{date('Y')}} Copyright Text</p>
    </div>
    <script src="{{asset('/')}}assets/js/jquery.min.js"></script>
    <script src="{{asset('/')}}assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{asset('/')}}assets/js/smoothproducts.min.js"></script>
    <script src="{{asset('/')}}assets/js/theme.js"></script>
    <script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
</body>

</html>