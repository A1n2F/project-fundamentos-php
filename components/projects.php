<?php 
    $projetos = [
        [
            "title" => "Meu portfolio",
            "finalizado" => false,
            "ano" => 2023,
            "descricao" => "Meu primeiro portfolio escrito em HTML e PHP",
            "stack" => ["PHP", "Javascript", "HTML", "CSS"],
            "img" => '/img/p1.png',
        ],
        [
            "title" => "Lista de tarefas",
            "finalizado" => true,
            "ano" => 2021,
            "descricao" => "Lista de tarefas escrito em HTML e PHP",
            "stack" => ["PHP", "Javascript", "HTML", "CSS"],
            "img" => '/img/p2.png',
        ],
        [
            "title" => "Controle de Leitura de livros",
            "finalizado" => true,
            "ano" => 2024,
            "descricao" => "Lista de livros escrito em HTML e PHP",
            "stack" => ["PHP", "Javascript", "HTML", "CSS"],
            "img" => '/img/p3.png',
        ],
        [
            "title" => "Mais um projeto",
            "finalizado" => false,
            "ano" => 2022,
            "descricao" => "Mais um projeto escrito em HTML e PHP",
            "stack" => ["PHP", "Javascript", "HTML", "CSS"],
            "img" => '/img/p4.png',
        ],
    ];
?>

<?php foreach($projetos as $projeto): ?>

<div class="bg-slate-800 rounded-lg p-3 flex items-center">
    <div class="w-1/5 flex items-center justify-center">
        <img src="<?=$projeto['img']?>" class="h-30" alt="">
    </div>

    <div class="w-4/5 space-y-3">
        <div class="flex gap-3 justify-between">
            <h3 class="font-semibold text-xl">
                <?=$projeto['title']?>   
                    <?php if($projeto['finalizado']): ?>
                        <span class="text-sm text-gray-400 opacity-70 italic">(Finalizado em <?=$projeto['ano']?>)</span>     
                    <?php else: ?>
                        <span class="text-sm text-gray-400 opacity-70 italic">(Em andamento...)</span>
                        
                    <?php endif; ?>
            </h3>
            <div class="space-x-1">
                <?php 
                    $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];
                    foreach($projeto['stack'] as $position => $language): ?>
                        <span class="bg-<?=$colors[$position]?>-400 text-<?=$colors[$position]?>-900 rounded-md px-2 py-1 font-semibold text-sm">
                            <?=$language?>
                        </span>

                <?php endforeach; ?>
            </div>
        </div>

        <p class="leading-6"> 
            <?=$projeto['descricao']?>
        </p>
    </div>
</div>

<?php endforeach; ?>