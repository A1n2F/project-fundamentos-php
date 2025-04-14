<?php 
    $items = [
        ['href' => '#projetos', 'text' => 'Projetos'],
        ['href' => '#github', 'text' => 'Github'],
        ['href' => '#linkedin', 'text' => 'Linkedin'],
        ['href' => '#twitter', 'text' => 'Twitter'],
    ];
?>

<header class="mx-auto max-w-screen-xl px-3 py-6 flex items-center justify-between">
    <div class="font-bold text-xl text-cyan-600">
        Meu portfolio.
    </div>

    <div>
        <ul class="flex gap-3 font-medium text-gray-200">

            <?php foreach($items as $item): ?>
                <li>
                    <a href="<?=$item['href']?>" class="hover:underline">
                        <?=$item['text']?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</header>