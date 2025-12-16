<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion admin</title>
    <link rel="stylesheet" href="{{ url('./assets/css/style.css') }}">
</head>
<body class="auth-wrapper">
<div class="auth-content">
    <div class="card">
        <div class="card-body text-center">
            <h3 class="mb-4">Connexion admin</h3>

            @if ($errors->any())
                <div class="alert alert-danger text-left">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login.post') }}">
                @csrf

                <div class="form-group text-left">
                    <label for="email">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="form-control"
                    >
                </div>

                <div class="form-group text-left">
                    <label for="password">Mot de passe</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        class="form-control"
                    >
                </div>

                <div class="form-group text-left">
                    <div class="checkbox checkbox-primary d-inline">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="cr">
                            Se souvenir de moi
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary shadow-2 mb-4 btn-block">
                    Se connecter
                </button>
            </form>
        </div>
    </div>
</div>

<script src="{{ url('./assets/js/vendor-all.min.js') }}"></script>
<script src="{{ url('./assets/js/plugins/bootstrap.min.js') }}"></script>
</body>
</html>


