@extends('layout.index')
@section('content')
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
       
        @include('common.header')
        @include('common.aside')
        <div class="page-wrapper">
            
            <div class="container-fluid">
               
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Account</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                This is dashboard (Working...)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <footer class="footer">
            © 2021 Mata Chamas by Crystal
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>

@endsection
