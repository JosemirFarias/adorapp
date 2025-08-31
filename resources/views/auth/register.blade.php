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


    <title>User Create</title>
</head>

<body>

    <!------------------- Main Container ------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!--------- Login Container -------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <h1>Formulário</h1>

            <form action="{{ route('user.store') }}" method="POST" class="row g-3">
                @csrf

                <!------------- Name ------------->
                <div class="col-12">
                    <label for="name" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="name">
                </div>

                <!----------- Email ---------->
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail">
                </div>

                <!------------- Birth ------------->
                <div class="col-md-6">
                    <label for="birthdate" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate">
                </div>

                <!------------ Password ------------>
                <div class="col-md-6">
                    <label for="inputPassword" class="form-label">Crie uma Senha</label>
                    <div class="input-group">
                        <input type="password" id="senha"
                            class="form-control form-control
                            lg lg-light fs-6"
                            placeholder="Digite sua senha">
                        <span class="input-group-text password-toggle" id="toggleSenha"><i class="bi bi-eye"></i></span>
                    </div>
                </div>

                <!----------- Select 1 ----------->
                <div class="col-md-6">
                    <label for="function" class="form-label">Função</label>
                    <select class="form-select" id="function" name="function">
                        <option selected>...</option>
                        <option value="1">Membro</option>
                        <option value="2">Lider</option>
                    </select>
                </div>

                <!----------- Select 2 ----------->
                <div class="col-md-6">
                    <label for="occupation" class="form-label">Ocupação</label>
                    <select class="form-select" id="occupation" name="occupation">
                        <option selected>...</option>
                        <option value="1">Vocalista</option>
                        <option value="2">Instrumentista</option>
                    </select>
                </div>

            </form>

            <a href="{{ route('login.form') }}">Home</a>
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
