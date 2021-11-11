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
            {{-- <div class="select-user-area"> --}}
                <div class="card-body">
                  <div class="row col-md-12">
                    <div class="col-md-3">
                      <div class="select-user-area">
                        <p class="select-sm-title">Quer encontrar um serviço agora?</p>
                        <div class="user-icon">
                          <i class="fas fa-users"></i>
                        </div>
                        <button type="button" class="btn btn-block btn-lg btn-secondary">Como cliente</button>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="select-user-area">
                        <p class="select-sm-title">Você quer trabalhar como vendedor?</p>
                        <div class="user-icon">
                          <i class="fas fa-credit-card"></i>
                        </div>
                        <button type="button" class="btn btn-block btn-lg btn-secondary">Como vendedor</button>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="select-user-area">
                        <p class="select-sm-title">Você quer trabalhar como motorista?</p>
                        <div class="user-icon">
                          <i class="fas fa-car"></i>
                        </div>
                        <button type="button" class="btn btn-block btn-lg btn-secondary">Como motorista</button>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="select-user-area">
                        <p class="select-sm-title">Você quer trabalhar como empresa?</p>
                        <div class="user-icon">
                          <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <button type="button" class="btn btn-block btn-lg btn-secondary">Como empresa</button>
                      </div>
                    </div>
                  </div>
                </div>
            {{-- </div> --}}
          </div>
        </div>
    </div>
  </section>
  
@endsection


