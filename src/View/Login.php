<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | DigitalNexus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .auth-bg { background: radial-gradient(circle at center, #1e293b 0%, #0f172a 100%); }
    </style>
</head>
<body class="auth-bg min-h-screen flex items-center justify-center p-6">

    <div class="max-w-md w-full">
        <div class="text-center mb-10">
            <a href="/" class="text-3xl font-extrabold tracking-tighter text-white">
                DIGITAL<span class="text-blue-500">NEXUS</span>
            </a>
            <p class="text-slate-400 mt-2">Accédez à votre espace client high-tech</p>
        </div>

        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden p-8 md:p-10">
            <h2 class="text-2xl font-bold text-slate-800 mb-6 text-center">Bon retour !</h2>

            <?php if (isset($error)): ?>
                <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 flex items-center">
                    <i class="fa-solid fa-circle-exclamation mr-3"></i>
                    <p class="text-sm font-medium"><?= htmlspecialchars($error) ?></p>
                </div>
            <?php endif; ?>

            <form action="../../../../auth/login" method="POST" class="space-y-5">
                <div>
                    <label for="email" class="block text-sm font-bold text-slate-700 mb-2">Adresse Email</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" name="email" id="email" required
                            class="block w-full pl-10 pr-3 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                            placeholder="nom@exemple.com">
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-2">
                        <label for="password" class="block text-sm font-bold text-slate-700">Mot de passe</label>
                        <a href="#" class="text-xs text-blue-600 hover:underline">Oublié ?</a>
                    </div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" name="password" id="password" required
                            class="block w-full pl-10 pr-3 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                            placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="remember" class="h-4 w-4 text-blue-600 border-slate-300 rounded focus:ring-blue-500">
                    <label for="remember" class="ml-2 block text-sm text-slate-600">Se souvenir de moi</label>
                </div>

                <button type="submit" 
                    class="w-full bg-slate-900 text-white font-bold py-4 rounded-xl hover:bg-blue-600 transition duration-300 shadow-lg shadow-slate-200">
                    Se connecter
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                <p class="text-slate-600 text-sm">
                    Pas encore de compte ? 
                    <a href="/auth/register" class="text-blue-600 font-bold hover:underline">Créer un compte</a>
                </p>
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="/" class="text-slate-400 hover:text-white transition text-sm flex items-center justify-center">
                <i class="fa-solid fa-arrow-left mr-2"></i> Retour au catalogue
            </a>
        </div>
    </div>

</body>
</html>