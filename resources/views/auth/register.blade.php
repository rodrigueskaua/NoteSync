@extends('layouts.auth')
@section('title', 'Cadastro')
@section('card-class', 'card-register')
@section('form-action', '')
@section('content')
<div class="form-group mb-4">
  <label for="">Nome</label><br>
  <i class='bx bx-user-circle input-icon'></i>
  <input type="text" name="name" class="form-control" placeholder="Digite seu Nome" required>
</div>

<div class="form-group mb-4">
  <label for="">Email</label><br>
  <i class="bx bx-envelope input-icon"></i>
  <input type="email" name="email" class="form-control" placeholder="Digite seu Email" required>
</div>

<div class="form-group mb-4">
  <label for="">Senha</label><br>
  <i class="bx bx-lock input-icon"></i>
  <input type="password" name="password" class="form-control" placeholder="Digite sua Senha" required>
</div>

<div class="form-group">
  <label for="">Confirme sua senha</label><br>
  <i class="bx bx-lock input-icon"></i>
  <input type="password" name="password" class="form-control" placeholder="Digite sua Senha" required>
</div>

<div class="form-buttons mb-4">
  <button class="btn-register">Cadastre-se</button>
</div>


@section('sign-class', 'sign-in')
@section('sign-question-text', 'Já possui uma conta?')
@section('sign-link', '')
@section('sign-link-text', 'Faça Login')

@endsection
