@extends('layout.index')
@section('content')

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../assets/images/background/login-register.jpg);">
      <div class="login-box card">
          <div class="card-body">
              <form class="form-horizontal form-material" id="loginform" action="index.html">
                  <div class="text-center">
                      <a href="javascript:void(0)" class="db"><img src="../assets/images/logo/logo.png" alt="Home" /></a>
                  </div>
                  <h3 class="box-title m-t-40 m-b-0">Registrar agora</h3><small>Crie sua conta e divirta-se</small>
                  <div class="form-group m-t-20">
                      <div class="col-xs-12">
                          <input class="form-control" type="text" required="" placeholder="Nome">
                      </div>
                  </div>
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input class="form-control" type="text" required="" placeholder="O email">
                      </div>
                  </div>
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input class="form-control" type="password" required="" placeholder="Senha">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-xs-12">
                          <input class="form-control" type="password" required="" placeholder="Confirme a Senha">
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-md-12">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Eu concordo com todos os termos<a href="javascript:void(0)">termos</a></label> 
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

@endsection
