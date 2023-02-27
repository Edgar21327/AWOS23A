<style>
    body{
    margin-top:0px;
    background-color: #f2f3f8;
}
.card {
    margin-bottom: 1.5rem;
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: .2rem;
}

/*MODIFICADOR DE REGISTER HERE*/
.card .card-body .m-sm-4 .loginbox-signup{   
    text-align: right;
    padding-top: 10px;
    
}
.card .card-body .m-sm-4 .loginbox-signup a {
    font-size: 13px;
    color: #666;
}
/*MODIFICADOR DE REGISTER HERE*/


/*MODIFICADOR DE Connect with Your Social Accounts*/
.card .card-body .social-title {
    padding: 0 10px 10px;
    text-align: center;
    font-size: 14px;
    font-weight: 500;
    color: #a9a9a9;
    margin-top: 10px;
}
/*MODIFICADOR DE Connect with Your Social Accounts*/ 

/*MODIFICADOR DE OR-LINE*/
.card .card-body .loginbox-or {
    position: relative;
    text-align: center;
    height: 20px;
}

/*MODIFICADOR DE LINE*/
.card .card-body .loginbox-or .or-line {
    position: absolute;
    height: 1px;
    top: 10px;
    left: 40px;
    right: 40px;
    background-color: #ccc;
}
/*MODIFICADOR DE LINE*/

/*MODIFICADOR DE OR*/
.card .card-body .loginbox-or .or {
    position: absolute;
    top: 0;
    -lh-property: 0;
    left: -webkit-calc(50% - 25px);
    left: -moz-calc(50% - 25px);
    left: calc(50% - 25px);
    width: 50px;
    height: 20px;
    background-color: #fff;
    color: #999;
    margin: 0 auto;
}
/*MODIFICADOR DE OR*/
/*MODIFICADOR DE OR-LINE*/

/*MODIFICADOR DE REDES SOCIALES*/
.card .card-body .social-buttons {
    /* padding-left: 20%; */
    height: 80px;
    padding: 15px auto;
    text-align: center;
    display:flex;
    justify-content: center;
    align-items: center;
}
/*MODIFICADOR DE REDES SOCIALES*/

/*MODIFICADOR DE FACEBOOK*/
.card .card-body .social-buttons .button-facebook {
    float: left;
    border: 2px solid #3b5998;
    color: #3b5998;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    /* margin-right: 30px;
    margin-left: 22px; */
    background-color: #fff;
}
.card .card-body .social-buttons .button-facebook i {
    font-size: 26px;
    line-height: 50px;
}
/*MODIFICADOR DE FACEBOOK*/

/*MODIFICADOR DE TWITTER*/
.card .card-body .social-buttons .button-twitter {
    float: left;
    border: 2px solid #29c1f6;
    color: #29c1f6;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    /* margin-left: 30px; */
    background-color: #fff;
}
.card .card-body .social-buttons .button-twitter i {
    font-size: 26px;
    line-height: 50px;
}
/*MODIFICADOR DE TWITTER*/

/*MODIFICADOR DE GOOGLE*/
.card .card-body .social-buttons  .button-google  {
    float: left;
    border: 2px solid #ef4f1d;
    color: #ef4f1d;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    margin-left: 30px;
    margin-right: 30px;
    background-color: #fff;
}
.card .card-body .social-buttons .button-google i {
    font-size: 26px;
    line-height: 50px;
}
/*MODIFICADOR DE GOOGLE*/
</style>

{{-- BOOTSTRAP PARA LEER ICONOS SOCIALES --}}
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
{{-- CDN BOOTSTRAP --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
<div class="container h-100">
    <div class="row h-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">

                <div class="text-center mt-4">
                    <h1 class="h2">INICIAR SESION</h1>
                </div>

                <div class="card">
                    <div class="card-body">

                <div class="loginbox-social">
                    <div class="social-title ">Conéctese con sus Redes Sociales</div>
                    <div class="social-buttons">

                        {{-- BOTON FACEBOOK --}}
                        <a href="{{url('login/facebook')}}" class="button-facebook">
                            <i class="social-icon fa fa-facebook"></i>
                        </a>
                        {{-- BOTON FACEBOOK --}}

                        {{-- BOTON GOOGLE --}}
                        <a href="{{ url('login/google')}}" class="button-google">
                            <i class="social-icon fa fa-google"></i>
                        </a>
                         {{-- BOTON GOOGLE --}}

                         {{-- BOTON TWITTER --}}
                        <a href="{{ url('login/google')}}" class="button-twitter">
                            <i class="social-icon fa fa-twitter"></i>
                        </a>
                         {{-- BOTON TWITER --}}
                    </div>
                </div>

                <div class="loginbox-or">
                    <div class="or-line"></div>
                    <div class="or">O</div>
                </div>

                        <div class="m-sm-4">
                            <form action="{{route('login-user')}}" method="post">
                                
                                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif

                    @csrf
                                
                    <div class="form-group">
                        <label for="name">Correo</label>
                        <input type="text"class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password"class="form-control" placeholder="Enter Password" name="password" value="">
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                    </div>

                                <div class="text-left mt-3">
                                    {{-- <a class="btn btn-lg btn-primary" type="submit">Login</a> --}}
                                    <button type="submit" class="btn btn-lg btn-primary" style="background-color:#0d6efd">Iniciar Sesion</button>
                                </div>
                                <div class="loginbox-signup">
                                    <a href="{{ url('/registro')}}">Crear Cuenta</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>