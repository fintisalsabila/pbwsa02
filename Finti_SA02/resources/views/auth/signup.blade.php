@extends("tema.layout")
@section("isi")
<div style="text-align: center;">
<h3 >SIGN UP</h3>
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
<form method="post" action="{{ route('register') }}" class="mx-auto" style="max-width: 400px;">
@csrf
<div class="form-group">
    <label for="name">Nama Lengkap:</label>
    <input type="text" class="form-control" id="name" name="name" 
        value="{{ old('name') }}" placeholder="Masukkan nama lengkap Anda"/>
</div>
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
<div class="form-group">
    <label for="password_confirmation">Konfirmasi Password:</label>
    <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation" 
        value="{{ old('password_confirmation') }}" placeholder="Ketik ulang password Anda"/>
</div>

<div class="form-group">
    <label for="name">Role / Hak Akses</label><br>
    <div class="form-check form-check-inline">
    <input type="radio" id="role" name="role" 
        value="Manajer" class="form-check-input" />Manajer&nbsp;
        <input type="radio" id="role" name="role" 
        value="Staf" class="form-check-input" checked />Staf
    </div>    
</div>

<button type="submit" class="btn btn-success">Register</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection