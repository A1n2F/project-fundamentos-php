<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-white">

    <?php 
        include('./components/header.php');
    ?>

    <main class="mx-auto max-w-screen-xl min-h-20 px-3 py-6">
        <?php 
            include('./components/hero.php');
        ?>

        <section class="space-y-3 py-10">
            <h2 class="text-2xl font-bold mb-10" id="projetos">Meus Projetos</h2>

            <?php 
                include('./components/projects.php');
            ?>
        </section>
    </main>

    <footer class="mx-auto max-w-screen-xl min-h-20">
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
            Copyright <?=date('Y')?> - Construído com PHP.
        </div>
    </footer>
</body>
</html>