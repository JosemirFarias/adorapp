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

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- Login Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <h1>Formulário</h1>

            <form method="POST" action="{{ route('register') }}" class="row g-3">
                @csrf

                <!-- Name -->
                <div class="col-12">
                    <label for="name" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <!-- Telephone -->
                <div class="col-md-6">
                    <label for="telephone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone">
                </div>

                <!-- Birth -->
                <div class="col-md-6">
                    <label for="birthdate" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate">
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <!-- Password -->
                <div class="col-md-6">
                    <label for="password" class="form-label">Crie uma Senha</label>
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Digite sua senha" required>
                        <span class="input-group-text password-toggle" id="toggleSenha"><i class="bi bi-eye"></i></span>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="col-md-6">
                    <label for="password_confirmation" class="form-label">Confirme a Senha</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                        required>
                </div>

                <!-- Select Function -->
                <div class="col-md-6">
                    <label for="function" class="form-label">Função</label>
                    <select class="form-select" id="function" name="function">
                        <option value="">-- Escolha --</option>
                        <option value="member">Membro</option>
                        <option value="leader">Líder</option>
                    </select>
                </div>

                <!-- Select Role -->
                <div class="col-md-6">
                    <label for="role" class="form-label">Qual o seu Papel?</label>
                    <select class="form-select" id="role" name="role">
                        <option value="">-- Escolha --</option>
                        <option value="vocalist">Vocalista</option>
                        <option value="instrumentist">Instrumentista</option>
                        <option value="media">Mídia</option>
                    </select>
                </div>

                <!-- Instruments -->
                <div id="instruments-container" class="mb-3" style="display: none;">
                    <label class="form-label">Selecione os instrumentos</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="instruments[]" value="guitar"
                            id="guitar">
                        <label class="form-check-label" for="guitar">Guitarra</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="instruments[]" value="acoustic_guitar"
                            id="acoustic_guitar">
                        <label class="form-check-label" for="acoustic_guitar">Violão</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="instruments[]" value="bass"
                            id="bass">
                        <label class="form-check-label" for="bass">Contra Baixo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="instruments[]" value="keyboard"
                            id="keyboard">
                        <label class="form-check-label" for="keyboard">Teclado</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="instruments[]" value="drums"
                            id="drums">
                        <label class="form-check-label" for="drums">Bateria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="instruments[]" value="percussion"
                            id="percussion">
                        <label class="form-check-label" for="percussion">Percussão</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('login') }}">Voltar</a>
            </form>

        </div>
    </div>

    <!-- Script para mostrar e ocultar os instrumentos -->
    <script>
        const roleSelect = document.getElementById('role');
        const instrumentsContainer = document.getElementById('instruments-container');

        roleSelect.addEventListener('change', function() {
            if (this.value === 'instrumentist') {
                instrumentsContainer.style.display = 'block';
            } else {
                instrumentsContainer.style.display = 'none';
                // Limpar checkboxes quando o usuário muda para vocalista
                const checkboxes = instrumentsContainer.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(cb => cb.checked = false);
            }
        });
    </script>

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

    <!-- jQuery e jQuery Mask -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <!-- Máscara de telefone -->
    <script>
        $(document).ready(function() {
            $('#inputTelephone').mask('(00) 00000-0000');
        });
    </script>

</body>

</html>
