@extends("tema.layout")
@section("isi")
<div style="text-align: center;">
<h3>Reset Password New</h3>
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
<form method="post" action="{{ route('password.update') }}" class="mx-auto" style="max-width: 400px;">
@csrf
<input type="hidden" name="token" 
    value="{{$r->route('token') }}">

<div class="form-group">
    <label for="email">Email: {{ $r->email }}</label>
    <input type="hidden" name="email" 
        value="{{ $r->email }}"/>
</div>
<div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" 
        value="{{ old('password') }}" placeholder="Ketik password Anda"/>
</div>
<div class="form-group">
    <label for="password_confirmation">Konfirmasi Password:</label>
    <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation" 
        value="{{ old('password_confirmation') }}" placeholder="Ketik ulang password Anda"/>
</div>
<button type="submit" class="btn btn-success">Register</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection