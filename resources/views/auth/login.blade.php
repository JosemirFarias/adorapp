<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>AdoraApp</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            {{-- Left Box --}}
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: linear-gradient(135deg, #ffffff, #163ad6);">
                <div class="featured-image mb-3">
                    <img src="{{ asset('img/base.png') }}" class="img-fluid" style="width: 250px">
                </div>
                <p class="fs-2 fw-bold text-dark">Bem Vindo</p>
                <small class="text-wrap text-center text-dark" style="width: 17rem;">
                    Cadastre-se e faça parte de experiências incríveis
                </small>
            </div>

            {{-- Right Box (Login Form) --}}
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Faça seu login</h2>
                    </div>

                    {{-- Formulário Livewire --}}
                    <form wire:submit.prevent="login" class="row">

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input wire:model.defer="email" id="email" type="email"
                                class="form-control form-control-lg bg-light fs-6" placeholder="Digite seu email"
                                required autofocus>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Senha --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <div class="input-group">
                                <input wire:model.defer="password" id="password" type="password"
                                    class="form-control form-control-lg bg-light fs-6" placeholder="Digite sua senha"
                                    required>
                                <span class="input-group-text password-toggle" id="toggleSenha">
                                    <i class="bi bi-eye"></i>
                                </span>
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Remember --}}
                        <div class="input-group mb-4 d-flex justify-content-between">
                            <div class="form-check">
                                <input wire:model.defer="remember" type="checkbox" class="form-check-input"
                                    id="remember">
                                <label for="remember" class="form-check-label text-secondary">
                                    <small>Lembrar de mim</small>
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="forgot">
                                    <small><a href="{{ route('password.request') }}">Esqueceu sua senha?</a></small>
                                </div>
                            @endif
                        </div>

                        {{-- Botão Entrar --}}
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6"
                                wire:loading.attr="disabled">
                                <span wire:loading.remove>Entrar</span>
                                <span wire:loading>Carregando...</span>
                            </button>
                        </div>

                        {{-- Botão Google (decorativo por enquanto) --}}
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-lg btn-light w-100 fs-6">
                                <img src="{{ asset('img/google.png') }}" style="width:20px" class="me-2">
                                <small>Entrar com o Google</small>
                            </button>
                        </div>

                        <div class="row">
                            <small>Não tem conta? <a href="{{ route('register') }}">Cadastre-se</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Script Mostrar/Ocultar Senha --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toggleSenha = document.getElementById('toggleSenha');
            const senhaInput = document.getElementById('password');

            toggleSenha.addEventListener('click', () => {
                if (senhaInput.type === 'password') {
                    senhaInput.type = 'text';
                    toggleSenha.innerHTML = '<i class="bi bi-eye-slash"></i>';
                } else {
                    senhaInput.type = 'password';
                    toggleSenha.innerHTML = '<i class="bi bi-eye"></i>';
                }
            });
        });
    </script>
</body>

</html>
