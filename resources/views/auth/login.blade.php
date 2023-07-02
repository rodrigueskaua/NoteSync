@extends('layouts.auth')
@section('title', 'Login')
@section('card-class', 'card-login')
@section('form-action', route('auth'))
@section('content')

@if ($mensagem = Session::get('erro'))
<script>
  Swal.fire({
      icon: 'error',
      title: 'Erro',
      text: '{{ $mensagem }}',
  });
</script>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }} <br>
    @endforeach
@endif
@csrf
<div class="form-group mb-5">
  <label for="">Email</label><br>
  <i class="bx bx-envelope input-icon"></i>
  <input type="email" name="email" class="form-control" placeholder="Digite seu Email" required>
</div>

<div class="form-group">
  <label for="">Senha</label><br>
  <i class="bx bx-lock input-icon"></i>
  <input type="password" name="password" class="form-control" placeholder="Digite sua Senha" required>
</div>

<div class="forgot-password text-end mt-2">
  <a href="/">Esqueceu sua senha?</a>
</div>

<div class="form-buttons mb-4">
  <button type="submit" class="btn-login">Login</button>
  <div class="divider">
    <hr>
  </div>
  <button class="btn-google d-flex justify-content-center align-items-center"><img
      src="/assets/brand/google-favicon.svg" alt="" srcset="">Continue com o google</button>
</div>

@section('sign-class', 'sign-up')
@section('sign-question-text', 'Não possui uma conta?')
@section('sign-link', '')
@section('sign-link-text', 'Cadastre-se')

@endsection
