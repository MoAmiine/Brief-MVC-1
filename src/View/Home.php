<?php 
use App\Model\Produit;
?>

<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalNexus | Excellence Électronique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .tech-bg { background: radial-gradient(circle at top right, #1e293b, #0f172a); }
        .glass-card { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-extrabold tracking-tighter text-slate-900">
                DIGITAL<span class="text-blue-600">NEXUS</span>
            </a>
            
            <div class="hidden md:flex items-center space-x-8 font-semibold text-sm">
                <a href="#catalogue" class="hover:text-blue-600 transition">Catalogue</a>
                <a href="#" class="hover:text-blue-600 transition">Promotions</a>
                <a href="Login.php" class="text-slate-500 hover:text-slate-900 transition">Connexion</a>
                <a href="signUp.php" class="bg-slate-900 text-white px-6 py-2.5 rounded-full hover:bg-blue-600 transition shadow-lg shadow-blue-200">
                    S'inscrire
                </a>
            </div>
        </div>
    </nav>

    <header class="tech-bg py-20 px-6">
        <div class="container mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div class="text-white space-y-6">
                <span class="inline-block px-4 py-1.5 rounded-full bg-blue-500/20 text-blue-400 text-xs font-bold uppercase tracking-widest">
                    Nouveautés 2026
                </span>
                <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
                    Le future de la <span class="text-blue-500">Tech</span> est ici.
                </h1>
                <p class="text-slate-400 text-lg max-w-md">
                    Explorez notre sélection de composants et périphériques haut de gamme pour booster vos performances.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#catalogue" class="bg-blue-600 hover:bg-blue-700 px-8 py-4 rounded-xl font-bold transition flex items-center group">
                        Découvrir le catalogue
                        <i class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                    </a>
                </div>
            </div>
            
            <div class="hidden md:block relative">
                <div class="absolute -inset-4 bg-blue-500/20 blur-3xl rounded-full"></div>
                <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?auto=format&fit=crop&q=80&w=800" 
                     class="relative rounded-2xl shadow-2xl border border-white/10" alt="Tech Gear">
            </div>
        </div>
    </header>

    <section class="container mx-auto px-6 -mt-10 grid md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-slate-100 flex items-center space-x-4">
            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600">
                <i class="fa-solid fa-bolt-lightning text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold">Livraison Prioritaire</h3>
                <p class="text-xs text-slate-500">Expédié sous 24h ouvrées</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-slate-100 flex items-center space-x-4">
            <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600">
                <i class="fa-solid fa-lock text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold">Paiement Sécurisé</h3>
                <p class="text-xs text-slate-500">Cryptage SSL 256-bits</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-xl border border-slate-100 flex items-center space-x-4">
            <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600">
                <i class="fa-solid fa-arrows-rotate text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold">Retours Gratuits</h3>
                <p class="text-xs text-slate-500">Satisfait ou remboursé 30j</p>
            </div>
        </div>
    </section>

    <main id="catalogue" class="container mx-auto px-6 py-20">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 mb-2">Catalogue Electronique</h2>
                <p class="text-slate-500">Nos produits les plus demandés cette semaine.</p>
            </div>
            
            <div class="flex gap-2 overflow-x-auto pb-2 md:pb-0">
                <button class="bg-slate-900 text-white px-5 py-2 rounded-full text-sm font-semibold">Tous</button>
                <button class="bg-white border border-slate-200 px-5 py-2 rounded-full text-sm font-semibold hover:bg-slate-50 transition">Laptops</button>
                <button class="bg-white border border-slate-200 px-5 py-2 rounded-full text-sm font-semibold hover:bg-slate-50 transition">Smartphones</button>
                <button class="bg-white border border-slate-200 px-5 py-2 rounded-full text-sm font-semibold hover:bg-slate-50 transition">Composants</button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <?php if(!empty($produits)): ?>
                <?php foreach($produits as $produit): ?>
                <div class="group bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                    <div class="relative p-4">
                        <div class="aspect-square bg-slate-50 rounded-2xl overflow-hidden">
                            <img src="<?= htmlspecialchars($produit->image) ?>" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <span class="text-[10px] font-black uppercase tracking-widest text-blue-600 bg-blue-50 px-2 py-1 rounded">
                            <?= htmlspecialchars($produit->category_name) ?>
                        </span>
                        <h3 class="mt-3 font-bold text-slate-800 line-clamp-1"><?= htmlspecialchars($produit->name) ?></h3>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-xl font-extrabold text-slate-900"><?= number_format($produit->price, 2) ?> €</span>
                            <a href="/products/detail/<?= $produit->id ?>" class="w-10 h-10 bg-slate-100 rounded-xl flex items-center justify-center hover:bg-blue-600 hover:text-white transition">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full bg-blue-50 border-2 border-dashed border-blue-200 rounded-3xl p-12 text-center text-blue-800 italic">
                    <i class="fa-solid fa-database mb-4 text-3xl"></i>
                    <p>Connectez votre base de données pour afficher vos produits réels.</p>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <footer class="bg-white border-t border-slate-100 py-12 mt-20">
        <div class="container mx-auto px-6 grid md:grid-cols-4 gap-12 text-sm">
            <div class="col-span-2">
                <a href="#" class="text-xl font-extrabold tracking-tighter text-slate-900">
                    DIGITAL<span class="text-blue-600">NEXUS</span>
                </a>
                <p class="mt-4 text-slate-500 max-w-xs leading-relaxed">
                    Le partenaire de confiance pour tous vos besoins en électronique de pointe. Qualité certifiée et service client premium.
                </p>
            </div>
            <div>
                <h4 class="font-bold mb-4 uppercase text-xs tracking-widest text-slate-400">Liens Rapides</h4>
                <ul class="space-y-2 text-slate-600">
                    <li><a href="#" class="hover:text-blue-600">À propos</a></li>
                    <li><a href="#" class="hover:text-blue-600">CGV</a></li>
                    <li><a href="#" class="hover:text-blue-600">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4 uppercase text-xs tracking-widest text-slate-400">Newsletter</h4>
                <div class="flex">
                    <input type="text" placeholder="Votre email" class="bg-slate-50 border border-slate-200 rounded-l-lg px-4 py-2 w-full focus:outline-none focus:ring-1 focus:ring-blue-600">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700">OK</button>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-6 mt-12 pt-8 border-t border-slate-50 text-center text-xs text-slate-400">
            &copy; 2026 DigitalNexus. Projet Académique MVC.
        </div>
    </footer>

</body>
</html>