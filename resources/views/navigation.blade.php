<header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <!-- /responsive nav button -->
            
            <!-- logo -->
            <a class="navbar-brand" href="#body">
                <h1 id="logo">
                    <img src="img/logo.png" alt="Brandi">
                </h1>
            </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li class="current"><a href="#body">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#works">Work</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#footer">Footer</a></li> 
            </ul>
            <ul id="nav" class="nav navbar-nav">
                <li>
                    @if (Route::has('login'))
                
                        @auth
                            <li><a href="{{ url('/home') }}">Back office</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
    
                            {{-- @if (Route::has('register'))
                               <li><a href="{{ route('register') }}">Register</a> </li> 
                            @endif --}}
                        @endauth
                    
                @endif
    
                </li>
            </ul>
        </nav>
        
        <!-- /main nav -->
        
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->
