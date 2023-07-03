@extends('layouts.auth')
@section('title', 'Cadastro')
@section('card-class', 'card-register')
@section('form-action', route('user.store'))
@section('content')
<div class="form-group mb-3">
  <label for="">Nome</label><br>
  <i class='bx bx-user-circle input-icon'></i>
  <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Digite seu Nome" required>
  @error('name')
    <div class="alert mt-1" role="alert">{{ $message }}</div>
  @enderror
</div>

<div class="form-group mb-3">
  <label for="">Email</label><br>
  <i class="bx bx-envelope input-icon"></i>
  <input type="email" autocomplete="off" name="email" class="form-control" placeholder="Digite seu Email" required>
  @error('email')
    <div class="alert mt-1" role="alert">{{ $message }}</div>
  @enderror
</div>

<div class="form-group mb-3">
  <label for="">Senha</label><br>
  <i class="bx bx-lock input-icon"></i>
  <input type="password" autocomplete="off" name="password" class="form-control" placeholder="Digite sua Senha" required>
  @error('password')
    <div class="alert mt-1" role="alert">{{ str_replace('password', 'senha', $message) }}</div>
  @enderror
</div>

<div class="form-group">
  <label for="">Confirme sua senha</label><br>
  <i class="bx bx-lock input-icon"></i>
  <input type="password" autocomplete="off" name="password_confirmation" class="form-control" placeholder="Digite sua Senha novamente" required>
  @error('password_confirmation')
    <div class="alert mt-1" role="alert">{{ str_replace('password', 'senha', $message) }}</div>
  @enderror
</div>

<div class="form-buttons mb-4">
  <button type="submit" class="btn-register">Cadastre-se</button>
</div>

@section('sign-class', 'sign-in')
@section('sign-question-text', 'Já possui uma conta?')
@section('sign-link', route('auth.login'))
@section('sign-link-text', 'Faça Login')

@endsection
