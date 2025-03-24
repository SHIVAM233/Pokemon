<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-lg w-full bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center capitalize"><?php echo e($pokemon['name']); ?></h1>
        
        <img
            src="<?php echo e($pokemon['sprites']['front_default']); ?>"
            alt="<?php echo e($pokemon['name']); ?>"
            class="w-40 h-40 mx-auto my-4"
        >

        <div class="text-center">
            <p><strong>Types:</strong> <?php echo e(implode(', ', array_map(fn($type) => $type['type']['name'], $pokemon['types']))); ?></p>

            <h2 class="text-lg font-bold mt-4">Stats:</h2>
            <ul class="list-disc list-inside">
                <?php $__currentLoopData = $pokemon['stats']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($stat['stat']['name']); ?>: <?php echo e($stat['base_stat']); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <div class="flex justify-between mt-6">
            <a
                href="<?php echo e(route('pokemon.search', ['query' => $pokemon['id'] > 1 ? $pokemon['id'] - 1 : 1])); ?>"
                class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400"
            >
                Previous
            </a>
            <a
                href="<?php echo e(route('pokemon.search', ['query' => $pokemon['id'] + 1])); ?>"
                class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400"
            >
                Next
            </a>
        </div>

        <a href="<?php echo e(route('home')); ?>" class="block text-center text-blue-500 mt-4">Back to Search</a>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\pokemon-app\resources\views/pokemon/details.blade.php ENDPATH**/ ?>