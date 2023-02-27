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

.card .card-body .m-sm-4 .loginbox-signup{   
    text-align: right;
    padding-top: 10px;
}

.card .card-body .m-sm-4 .loginbox-signup a {
    font-size: 13px;
    color: #666;
}
</style>

{{-- CDN BOOTSTRAP --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
<div class="container h-100">
    <div class="row h-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">

                <div class="text-center mt-4">
                    <h1 class="h2">Crear Cuenta</h1>
                    {{-- <p class="lead">
                        Start creating the best possible user experience for you customers.
                    </p> --}}
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <form action="{{route('register-user')}}" method="post">

                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
            
                                @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
            
                                @csrf
                                {{-- NOMBRES --}}
                                <div class="col">
                                    <label for="name">Nombre Completo</label>
                                    <input type="text"class="form-control" placeholder="Enter Full Name" name="name" value="{{old('name')}}">
                                    <span class="text-danger">@error('name'){{$message}} @enderror</span>
                                </div>
                                 {{-- NOMBRES --}}

                                {{-- CORREO --}}
                                <div class="form-group">
                                    <label for="email">Correo</label>
                                    <input type="text"class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                </div>
                                {{-- CORREO --}}

                                {{-- CONTRASEÑA --}}
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password"class="form-control" placeholder="Enter Password" name="password" value="">
                                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                </div>
                                {{-- CONTRASEÑA --}}

                                <div class="text-left mt-3">
                                    {{-- <a href="index.html" class="btn btn-lg btn-primary">Sign up</a> --}}
                                    <button type="submit" class="btn btn-lg btn-primary" style="background-color:#0d6efd">Registrarse</button>
                                </div>
                                <div class="loginbox-signup">
                                    <a href="{{ url('/login')}}">Iniciar Sesion</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>