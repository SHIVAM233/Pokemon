<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Search</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-lg w-full bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center mb-4">Pokémon Search</h1>
        
        <?php if($errors->any()): ?>
            <div class="bg-red-200 text-red-800 p-2 rounded mb-4">
                <?php echo e($errors->first('error')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('pokemon.search')); ?>" method="GET" class="flex items-center gap-2">
            <input
                type="text"
                name="query"
                placeholder="Enter Pokémon name or ID"
                class="p-2 border rounded-md w-full"
                required
            >
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Search</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\pokemon-app\resources\views/pokemon/index.blade.php ENDPATH**/ ?>