<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto|Material+Icons' rel="stylesheet">
</head>
<body>
    <v-app>
        <v-toolbar flat dark color="primary">
            <img src="{{ url('/').'/images/logo.png' }}" height="50" alt="">
            <v-btn flat href="{{ url('/') }}">Evrika</v-btn>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-sm-and-down">
                    <v-btn flat>Меню</v-btn>
            </v-toolbar-items>
            <v-divider
            class="mx-3"
            inset
            vertical
            ></v-divider>
            <v-toolbar-items class="hidden-sm-and-down">
            @guest
                <v-btn flat href="{{ route('login') }}">Войти</v-btn>
                @if (Route::has('register'))
                <v-btn flat href="{{ route('register') }}">Регистрация</v-btn>
                @endif
            @else
            <v-menu offset-y>
                <template v-slot:activator="{ on }">
                    <v-btn
                    flat
                    v-on="on"
                    >
                    {{ Auth::user()->name }}
                    <v-icon dark>arrow_drop_down</v-icon>
                    </v-btn>
                </template>
                <v-list>
                    <v-list-tile>
                    <v-list-tile-title>
                        <a href="{{ route('home') }}">Аккаунт</a>
                    </v-list-tile>
                    </v-list-tile-title>
                    <v-list-tile>
                    <v-list-tile-title>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                        >
                            Выйти
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </v-list-tile-title>
                    </v-list-tile>
                </v-list>
            </v-menu>
            @endguest
            </v-toolbar-items>
        </v-toolbar>
        <v-content>
            @yield('content')
        </v-content>
    </v-app>
</body>
</html>
