@extends('layout.index')
@section('content')

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <section id="wrapper">
        <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
            <div class="container">
                <div class="select-user-logo">
                    <a href="/"><img src="../assets/images/logo/logo.png" alt="homepage" class="dark-logo" /></a>
                </div>
                <div class="row">
                    <div class="card-body">
                        <div class="row col-md-12">
                            @foreach ($role as $roles)
                                <div class="col-md-3">
                                    <div class="select-user-area">
                                        <p class="select-sm-title">{{ $roles->explain }}</p>
                                        <div class="user-icon">
                                            <i class="{{ $roles->icon }}"></i>
                                        </div>
                                        <button type="button" class="btn btn-block btn-lg btn-secondary"
                                            data-id="{{ $roles->role }}" onclick="RoleLogin(this)">Como cliente</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <p class="already-account">Você já está cadastrado? <a href="{{route('login')}}">Entrar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
      function RoleLogin(elem) {
        var role = $(elem).attr('data-id');
        window.location.href="/register?id="+role;
      }
    </script>

@endsection
