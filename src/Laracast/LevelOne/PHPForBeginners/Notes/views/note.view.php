<?php require("partials/head.view.php") ?>
    
<?php require("partials/nav.view.php") ?>

<?php require("partials/banner.view.php") ?>
    
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/Laracast/LevelOne/PHPForBeginners/Notes/notes/" class="text-blue-500 underline">go back...</a>
        </p>
        <p><?= $note['body'] ?></p>
    </div>
</main>

<?php require("partials/foot.view.php") ?>