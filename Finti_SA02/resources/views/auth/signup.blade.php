@extends("tema.layout")
@section("isi")
<h3>SIGN UP</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('register') }}">
@csrf
<div class="form-group">
    <label for="name">Nama Lengkap:</label>
    <input type="text" class="form-control" id="name" name="name" 
        value="{{ old('name') }}" placeholder="isi nama"/>
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="email" 
        value="{{ old('email') }}" placeholder="isi email"/>
</div>
<div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" 
        value="{{ old('password') }}" placeholder="ketik password"/>
</div>
<div class="form-group">
    <label for="password_confirmation">Password Confirmation:</label>
    <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation" 
        value="{{ old('password_confirmation') }}" placeholder="ketik ulang password"/>
</div>
<button type="submit" class="btn btn-success">Register</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection