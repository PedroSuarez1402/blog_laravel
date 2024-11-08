<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
            <img class="mx-auto h-10 w-auto"
                    src="https://tailwindui.com/plus/img/logos/mark.svg?color=gray&shade=600" alt="Your Company">
            <h2 class="text-3xl font-extrabold text-gray-800">Iniciar sesión</h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-900 placeholder-gray-400 p-3">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-900 placeholder-gray-400 p-3">
                    </div>
                    <div class="text-right mt-2">
                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center rounded-md bg-gray-800 px-4 py-2 text-lg font-semibold text-white shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">
                        Iniciar sesión
                    </button>
                </div>
            </form>

            <p class="mt-6 text-center text-sm text-gray-500">
                ¿No tienes cuenta?
                <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Regístrate aquí</a>
            </p>
        </div>
    </div>
</body>
</html>
