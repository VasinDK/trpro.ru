<nav id="top-menu">
        <div class="container">
            <div class="row">

                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="col-sm-4 col-md-4">
                    <div class="navbar-header">
                        <a class="logo navbar-brand" href="#">Gerber_brown</a>
                    </div>
                </div>  

                <div class="col-sm-8 col-md-8">
                    <ul class="top-links list-unstyled text-right">
                        <li class="top-contact">
                            <ol class="list-inline">
                                <li><i class="fa fa-phone"></i> : 8 (499) 391 93 55</li>
                                <li><i class="fa fa-envelope-o"></i> : k-biv@trpro.ru</li>
                            </ol>
                        </li>
                        <li>
                            <ol class="social-icons list-inline">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ol>
                        </li>
                    </ul>
                </div>  
                            
            </div>
        </div>
    </nav>

    <!-- Main Navigation
    ========================-->
    <div id="sticky-anchor"></div>
    <nav id="main-menu" class="navbar navbar-default">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myMenu">
                    <i class="fa fa-list-ul"></i>
                </button>
            </div>

            @if(isset($mainMenus) && is_array($mainMenus))

            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="myMenu">
                    <ul class="nav navbar-nav navbar-left">
                        @foreach($mainMenus as $key => $mainMenu)
                        {{-- {{dd($mainMenu)}} --}}

                            @if(($mainMenu['parent'] == 0) && ($mainMenu['cardinality'] == 0))
                                <li><a href="{{ $mainMenu['path'] }}">{{ $mainMenu['title'] }}</a></li>
                                 
                                @else 
                                @if($mainMenu['parent'] == 0)
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ $mainMenu['title'] }}<span class="caret"></span></a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ $mainMenu['path'] }}">{{ $mainMenu['title'] }} </a>
                                            </li>
                                            @foreach($mainMenus as $childMenu)
                                                @if($childMenu['parent'] == $mainMenu['id'])    
                                                    <li><a href="{{ $childMenu['path'] }}">{{ $childMenu['title'] }} </a>
                                                    </li>
                                                @endif
                                            @endforeach                      
                                          
                                        </ul>
                                    </li>                                  
                                @endif
                            @endif
                        @endforeach 

                    </ul>

                    <form class="navbar-form navbar-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div><!-- /.navbar-collapse -->
            @endif

        </div><!-- /.container -->
    </nav>


@if (!route::get('/'))

<!-- Page Header
========================-->
<div id="en-header">
    <div class="container">
        <h2 class="pull-left">Contact</h2>
        <ol class="breadcrumb pull-right">
          <li><a href="index.html">Home</a></li>
          <li class="active">Contact</li>
        </ol>
    </div>
</div>

@endif