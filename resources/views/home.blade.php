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

    <!------------------- Main Container ------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!--------- Login Container -------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!------------- Left Box -------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center 
            flex-column left-box"
                style="background: linear-gradient(135deg, #ffffff, #163ad6);">
                <div class="featured-image mb-3">
                    <img src="{{ asset('img/base.png') }}" class="img-fluid" style="width: 250px">
                </div>
                <p class="fs-2" style="font-family: 'Poppins',sans-serif; font-weight: 600; color: rgb(33, 37, 41)">
                    Bem
                    Vindo</p>
                <small class="text-wrap text-center"
                    style="width: 17rem;font-family: 'Poppins',sans-serif; color: rgb(33, 37, 41)">Cadastre-se e faça
                    parte de
                    experiências incríveis</small>
            </div>

            <!------------- Right Box -------------->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Faça seu login</h2>
                    </div>

                    <!------------------ Email -------------------->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Digite seu email">
                    </div>

                    <!------------- Password -------------->
                    <div class="input-group mb-1">
                        <input type="password" id="senha"
                            class="form-control form-control
                            lg lg-light fs-6"
                            placeholder="Digite sua senha">
                        <span class="input-group-text password-toggle" id="toggleSenha"><i class="bi bi-eye"></i></span>
                    </div>

                    <!----------------- Checkbox ---------------->
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Lembrar de
                                    mim</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Esqueceu sua senha?</a></small>
                        </div>
                    </div>

                    <!-------- Button --------->
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Entrar</button>
                    </div>

                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="img/google.png" style="width:20px"
                                class="me-2"><small>Entrar com o Google</small></button>
                    </div>

                    <div class="row">
                        <small>Não tem conta? <a href="#">Cadastre-se</a></small>
                    </div>
                </div>
            </div>

            <!-- Coluna da imagem de fundo (gradiente) -->
            <div class="col-md-6 d-none d-md-flex align-items justify-content-center">
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
