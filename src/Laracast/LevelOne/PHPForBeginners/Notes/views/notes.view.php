<?php require("partials/head.view.php") ?>
    
<?php require("partials/nav.view.php") ?>

<?php require("partials/banner.view.php") ?>
    
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul class="max-w-md space-y-1 text-body list-inside">
            <?php foreach($notes as $note): ?>
                <li class="flex items-center">
                    <svg class="w-4 h-4 text-fg-success me-1.5 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                    <a href="/Laracast/LevelOne/PHPForBeginners/Notes/note/?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="mt-6">
            <a href="/Laracast/LevelOne/PHPForBeginners/Notes/notes/create/" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </div>
</main>

<?php require("partials/foot.view.php") ?>