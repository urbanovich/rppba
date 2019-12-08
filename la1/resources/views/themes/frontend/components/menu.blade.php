<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="fl_left">
            <ul class="nospace">
                <li><i class="fa fa-clock-o"></i> Mon. - Fri. 8am - 5pm</li>
                <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
            </ul>
        </div>
        <div class="fl_right">
            <ul class="nospace">
                <li><a href="/"><i class="fa fa-lg fa-home"></i></a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}"><i class="fa fa-lg fa-sign-in"></i></a></li>
                <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                @else
                    <li><a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a></li>
                @endif
                <li><a href="#" title="Sign Up"><i class="fa fa-lg fa-edit"></i></a></li>
            </ul>
        </div>
        <!-- ################################################################################################ -->
    </div>
</div>
