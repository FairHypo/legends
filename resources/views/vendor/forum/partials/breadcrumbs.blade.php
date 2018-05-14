<ol class="breadcrumb">
    <li>
        <a href="{{ url('/') }}">
            {{ config('app.name', 'Legends') }}
        </a>
    </li>
    <li><a href="{{ url(config('forum.routing.prefix')) }}">{{ trans('forum::general.index') }}</a></li>
    @if (isset($category) && $category)
        @include ('forum::partials.breadcrumb-categories', ['category' => $category])
    @endif
    @if (isset($thread) && $thread)
        <li><a href="{{ Forum::route('thread.show', $thread) }}">{{ $thread->title }}</a></li>
    @endif
    @if (isset($breadcrumb_other) && $breadcrumb_other)
        <li>{!! $breadcrumb_other !!}</li>
    @endif
    <li class="nav-item dropdown">
        @guest
            <a class="nav-link" href="{{ route('login') }}">{{ __('auth.Login') }}</a>
            <a class="nav-link" href="{{ route('register') }}">{{ __('auth.Register') }}</a>
        @else
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} {{ Auth::user()->role->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                    {{ __('auth.Logout') }}
                </a>
                <a class="dropdown-item" href="{{ route('cabinet') }}">
                    Кабинет
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @endguest
    </li>
</ol>
