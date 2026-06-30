<?php require(base_path(BASE_PATH."/../views/partials/head.view.php")) ?>
<?php require(base_path(BASE_PATH."/../views/partials/nav.view.php")) ?>
<?php require(base_path(BASE_PATH."/../views/partials/banner.view.php")) ?>
    
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/Laracast/LevelOne/PHPForBeginners/Notes/notes/" class="text-blue-500 underline">go back...</a>
        </p>
        <p><?= str_contains($note['body'],'<script>') ? htmlspecialchars($note['body']) : $note['body'] ?></p>
        <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" id="id" value="<?= $note['id'] ?>">
            <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
        </form>
    </div>
</main>

<?php require(base_path(BASE_PATH."/../views/partials/foot.view.php")) ?>