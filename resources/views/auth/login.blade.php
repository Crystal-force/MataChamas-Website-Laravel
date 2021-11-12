@extends('layout.index')
@section('content')

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../assets/images/background/login-register.jpg);">
      <div class="login-box card">
          <div class="card-body">
              <form class="form-horizontal form-material text-center" id="loginform" action="/login" method="POST">
                  <a href="javascript:void(0)" class="db"><img src="../assets/images/logo/logo.png" alt="Home" /></a>
                  <div class="form-group  m-t-40">
                      <div class="col-xs-12">
                          <input class="form-control" type="text" required="" placeholder="Nome do usuário">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-xs-12">
                          <input class="form-control" type="password" required="" placeholder="Senha">
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-12">
                          <div class="d-flex no-block align-items-center">
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                                  <label class="custom-control-label" for="customCheck1">Lembre de mim</label>
                              </div> 
                              <div class="ml-auto">
                                  <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Esqueceu sua senha?</a> 
                              </div>
                          </div>   
                      </div>
                  </div>
                  <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                          <button class="btn btn-danger btn-lg btn-block text-uppercase btn-rounded" type="submit">Conecte-se</button>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                          <div class="social">
                              <button class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </button>
                              <button class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </button>
                          </div>
                      </div>
                  </div>
                  <div class="form-group m-b-0">
                      <div class="col-sm-12 text-center">
                        Não tem uma conta? <a href="{{route('register')}}" class="text-primary m-l-5"><b>Criar Conta</b></a>
                      </div>
                  </div>
              </form>
              <form class="form-horizontal" id="recoverform" action="#">
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <h3>Recuperar senha</h3>
                          <p class="text-muted">Digite seu e-mail e as instruções serão enviadas para você! </p>
                      </div>
                  </div>
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input class="form-control" type="text" required="" placeholder="Email">
                      </div>
                  </div>
                  <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                          <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
    </section>

@endsection
