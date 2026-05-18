<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>{{ $s }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> 
    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">

    <!-- Animate styles for this template -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">

    <!-- Version Marketing CSS for this template -->
    <link href="{{ asset('css/version/marketing.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        <header class="market-header header" style="margin-bottom: 103px;">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="marketing-index.html"><img src="images/version/market-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                        </ul>
                        @include('user.layouts.search')
                        @yield('search')
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
    </div>
    <div class="page-title db">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2>Search: {{ $s }}</h2>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Search</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <div class="blog-custom-build">
            
            @if ($posts->count())
    @foreach ($posts as $post)
        <div class="blog-box wow fadeIn">
            <div class="post-media">
                <a href="{{ route('posts.single', ['slug'=>$post->slug]) }}" title="">
                    <img src="{{ $post->getImage() }}" alt="" style="width: 150px; height: 150px; margin-right: 20px;">
                    <div class="hovereffect">
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="blog-meta big-meta text-center">
            <div class="post-sharing">
                <h4 style="color: black;">
                    <a href="{{ route('posts.single', ['slug'=>$post->slug]) }}" title="{{ $post->title }}">{{ $post->title }}</a>
                </h4>
                <h3>{{ $post->description }}</h3>
                <small><a href="{{ route('categories.single',['slug'=>$post->category->id]) }}" title="">{{ $post->category->title }}</a></small>
                <small>{{ $post->getPostDate() }}</small>
                <small><i class="fa fa-eye"></i>{{ $post->views }}</small>
            </div>
        </div>
        <hr class="invis">
    @endforeach
    
    <!-- Пагинация - перенес сюда, внутрь if -->
    <div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers float-right">
                {{ $posts->appends(['s' => request()->get('s')])->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

@else
    <h2>По вашему запросу ничего не найдено...</h2>
    <p><small>потому что вы еблан</small></p>
@endif

        </div>
    </div>
    <hr class="invis">
    
    
</body>