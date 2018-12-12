
<div class="top-nav">
    <ul>
        {{-- Setup active links --}}
        <li class="active">{{ link_to_route('home', config('app.name', 'Laravel')) }}</li>
        <li><a href="blog.html">Blog</a></li>

        <ul class="ml-auto">
            @guest
                <li class="nav-item">{{ link_to_route('login', __('auth.login'), [], ['class' => 'nav-link']) }}</li>
                <li class="nav-item">{{ link_to_route('register', __('auth.register'), [], ['class' => 'nav-link']) }}</li>
            @else
                <li class="nav-item dropdown">
                    <a v-pre href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        {{ link_to_route('users.show', __('users.public_profile'), Auth::user(), ['class' => 'dropdown-item']) }}
                        {{ link_to_route('users.edit', __('users.settings'), [], ['class' => 'dropdown-item']) }}

                        <div class="dropdown-divider"></div>

                        <a href="{{ url('/logout') }}"
                            class="dropdown-item"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            @lang('auth.logout')
                        </a>

                        <form id="logout-form" class="d-none" action="{{ url('/logout') }}" method="POST">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            @endguest
        </ul>

        <div class="clear"> </div>
    </ul>
</div>
<div class="clear"> </div>
