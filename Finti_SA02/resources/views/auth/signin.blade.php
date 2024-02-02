@extends("tema.layout")
@section("isi")
<div style="text-align: center;">
<h3>SIGN IN</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<br>
<form method="post" action="{{ route('login')}}" class="mx-auto" style="max-width: 400px;">
@csrf
<div class="form-group">
    <label for="email">Alamat Email:</label>
    <input type="text" class="form-control" id="email" name="email" 
        value="{{ old('email') }}" placeholder="Masukkan alamat email Anda"/>
</div>
<div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" 
        value="{{ old('password') }}" placeholder="Ketik password Anda"/>
</div>
<button type="submit" class="btn btn-success">Login</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
<a href="{{ route('password.request') }}">Forgot Password ?</a>
</form>
@endsection