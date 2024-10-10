<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-100 text-gray-800'); ?>>
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold"><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </header>

    <main class="container mx-auto py-8">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold"><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </article>
            <?php endwhile;
        else: ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </main>

    <footer class="bg-blue-600 text-white py-4">
        <p class="text-center">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>