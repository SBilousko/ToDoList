<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield("title")</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        <link rel="stylesheet" type="text/css" href="/css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/9a39ed3abe.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </head>
    <body>
        <div class="container">
            <header class="header">
                <ul class="navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="/tasks" title="All Tasks" focus>All Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/current" title="Current">Current</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/completed" title="Completed">Completed</a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a> --}}

                            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                                <a class="nav-link dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            {{-- </div> --}}
                        </li>
                    @endguest
                </ul>
                {{-- <ul class="navbar-nav ml-auto">
                    
                </ul> --}}
            </header>
            <main class="main">

                @yield("add-task")

                @yield("content")

            </main>
        </div>
        <script src="/js/script.js"></script>
        <script>

            $(function() {

                $('#submit-btn').on('click', function() {
                    var task = $('#task-name').val();
                    var deadline = $('#datepicker').val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: '/tasks',
                        type: "POST",
                        data: { title:task, deadline:deadline },
                        // headers: {
                        //     'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        // },
                        success: function (data) {
                            alert(data.success);
                            // $('#addArticle').modal('hide');
                            // $('#articles-wrap').removeClass('hidden').addClass('show');
                            // $('.alert').removeClass('show').addClass('hidden');
                            // var str = '<tr><td>'+data['id']+
                            // '</td><td><a href="/article/'+data['id']+'">'+data['title']+'</a>'+
                            // '</td><td><a href="/article/'+data['id']+'" class="delete" data-delete="'+data['id']+'">Удалить</a></td></tr>';
                            // $('.table > tbody:last').append(str);
                        },
                        error: function (msg) {
                            alert('Error');
                        }
                    });
                });
            });
        </script>
    </body>
</html>
