@extends('layout.index')
@section('content')

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../assets/images/background/login-register.jpg);">
      <div class="login-box card">
          <div class="card-body">
              <form class="form-horizontal form-material" id="loginform">
                  <div class="text-center">
                      <a href="javascript:void(0)" class="db"><img src="../assets/images/logo/logo.png" alt="Home" /></a>
                  </div>
                  <h3 class="box-title m-t-40 m-b-0">Registrar agora</h3><small>Crie sua conta e divirta-se</small>
                  <div class="form-group m-t-20">
                      <div class="col-xs-12">
                          <input class="form-control" type="text" required="" placeholder="Nome" id="name">
                      </div>
                  </div>
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input class="form-control" type="text" required="" placeholder="O email" id="email">
                      </div>
                  </div>
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input class="form-control" type="password" required="" placeholder="Senha" id="password">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-xs-12">
                          <input class="form-control" type="password" required="" placeholder="Confirme a Senha" id="confirm_pwd">
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-12">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="term_check">
                              <label class="custom-control-label" for="customCheck1" >Eu concordo com todos os termos<a href="javascript:void(0)"> termos</a></label> 
                          </div> 
                      </div>
                  </div>
                  <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                          <button class="btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light btn-rounded" type="submit">Inscrever-se</button>
                      </div>
                  </div>
                  <div class="form-group m-b-0">
                      <div class="col-sm-12 text-center">
                          <p>já tem uma conta? <a href="{{route('login')}}" class="text-info m-l-5"><b>Entrar</b></a></p>
                      </div>
                  </div>
              </form>
          </div>
      </div>
    </section>


    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script>
        $("#loginform").submit(function(event) {
            event.preventDefault();

            var name = '';
            var email = '';
            var password = '';
            var confirm_pwd = '';

            name = $("#name").val();
            email = $("#email").val();
            password = $("#password").val();
            confirm_pwd = $("#confirm_pwd").val();
            
            if(password != confirm_pwd) {
              $.toast({
                heading: 'Um pequeno erro',
                text: 'A senha de confirmação não está correta. por favor cheque novamente.',
                position: 'top-center',
                loaderBg:'#ff6849',
                icon: 'error',
                hideAfter: 3500
              });
            }
            else {
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

              $.ajax({
                url: 'register',
                method: 'POST',
                data: {
                  name: name,
                  email: email,
                  password: password,
                },
                dataType: false,
                success: function(response) {
                  if(response.data == '1') {
                    $.toast({
                      heading: 'Bem-vindo ao Mata Chamas!',
                      text: 'Você se conectou com sucesso. Por favor, aproveite este sistema',
                      position: 'top-center',
                      loaderBg:'#ff6849',
                      icon: 'success',
                      hideAfter: 3500
                    });

                    setTimeout(function() { 
                        window.location.href="/dashboard";
                    }, 3000);
                  }
                  else {
                    $.toast({
                      heading: 'Aviso...',
                      text: 'O e-mail do usuário não existe agora. Verifique seu e-mail novamente',
                      position: 'top-center',
                      loaderBg:'#ff6849',
                      icon: 'warning',
                      hideAfter: 3500
                    });
                  }
                }
              });
            }
        });
    </script>

@endsection
