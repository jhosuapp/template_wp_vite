<?php get_header() ?>


<section>
    <h1>Plantilla creada por <a href="https://github.com/jhosuapp" target="_blank">jhosua penagos</a></h1>
    <p class="my-2">
            <span class="block text-gray-500">// define IS_VITE_DEVELOPMENT in functions or wp-config.php</span>
            define('IS_VITE_DEVELOPMENT', TRUE);
        </p>
        <p class="my-2">
            <span class="block text-gray-500">// run first time in your <strong>theme folder</strong> (node.js required)</span>
            npm install
        </p>
        <p class="my-2">
            <span class="block text-gray-500">// start development & refresh your browser</span>
            npm run dev
        </p>
        <p class="text-xs">Currently in <strong><?php echo (IS_VITE_DEVELOPMENT) ? "development" : "production" ?></strong> mode.</p>
</section>

<?php get_footer() ?>