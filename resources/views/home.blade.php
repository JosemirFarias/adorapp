<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>AdoraApp</title>
</head>

<body>
    <div class="container-fluid login-container d-flex align-items-center">
        <div class="row flex-fill">

            <!-- Coluna do formulário -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="login-form w-100 px-4">
                    <h2 class="mb-4">Faça seu login</h2>
                    <form>

                        <!-- Campo Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" placeholder="Digite seu email"
                                    required>
                            </div>
                        </div>

                        <!-- Campo Senha -->
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="senha"
                                    placeholder="Digite sua senha" required>
                                <span class="input-group-text password-toggle" id="toggleSenha"><i
                                        class="bi bi-eye"></i></span>
                            </div>
                        </div>

                        <!-- Checkbox -->
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="lembrar">
                            <label class="form-check-label" for="lembrar">Lembrar de mim</label>
                        </div>

                        <!-- Botão -->
                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                    </form>
                </div>
            </div>

            <!-- Coluna da imagem de fundo (gradiente) -->
            <div class="col-md-6 d-none d-md-flex align-items justify-content-center">
                <img src="{{ asset('img/base.png') }}" alt="Login Lateral" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Script mostrar/ocultar senha -->
    <script>
        const toggleSenha = document.getElementById('toggleSenha');
        const senhaInput = document.getElementById('senha');

        toggleSenha.addEventListener('click', () => {
            if (senhaInput.type === 'password') {
                senhaInput.type = 'text';
                toggleSenha.innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                senhaInput.type = 'password';
                toggleSenha.innerHTML = '<i class="bi bi-eye"></i>';
            }
        });
    </script>

</body>

</html>
