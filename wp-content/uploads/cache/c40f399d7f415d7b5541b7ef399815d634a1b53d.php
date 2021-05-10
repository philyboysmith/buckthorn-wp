<?php

$query = $_GET['s'];

$team = get_field('image', 14);
$company = get_field('company', 10);

$extra_results = [];
foreach ($team as $key => $p) {


    $name = $p['name'];
    similar_text(strtolower($name), strtolower($query), $perc);
    $array = explode(' ', strtolower($name));

    if($perc > 50 || in_array(strtolower($query), $array)){
        $extra_results[] = [
            'title' => $p['name'],
            'blurb' => $p['biog'],
            'url' => '/our-team#team-' . sanitize_title($p['name']),
            'sort' => $perc
        ];
    }
}

foreach ($company as $key => $p) {
    $name = $p['title'];
    similar_text(strtolower($name), strtolower($query), $perc);
    if($perc > 50){
        $extra_results[] = [
            'title' => $name,
            'blurb' => $p['description'],
            'url' => '/our-companies#company-' . ($key + 1) . '-popup',
            'sort' => 100
        ];
    }
}

function cmp($a, $b)
{
    return strcmp($b["sort"], $a["sort"]);
}

usort($extra_results, "cmp");

?>

<?php $__env->startSection('content'); ?>
  <main class="site-content bg-img bg-img-1">
            <div class="white-opacity-strip">
            </div>
            <div class="mx-auto max-w-screen-2xl w-full p-4 md:text-lg">
                <div class="flex flex-wrap my-6 xl:my-12">
                    <div class="w-full lg:w-8/12 lg:w-10/12 xl:w-7/12 pl-6 md:pl-12 border-l-4 border-blue">
                        <h1 class="mb-4 font-serif text-4xl lg:text-5xl xl:text-6xl">
                            Search results
                        </h1>
                        <?php if(!have_posts() && count($extra_results) === 0 ): ?>
                            <div class="alert alert-warning">
                            <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

                            </div>
                            <?php echo get_search_form(false); ?>

                        <?php endif; ?>

                        <?php $__currentLoopData = $extra_results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <article class="w-full prose mb-8">
                        <header>
                            <h3 class="entry-title"><a href="<?php echo e($result['url']); ?>"><?php echo e($result['title']); ?></a></h3>

                        </header>
                        <div class="entry-summary">
                        <p><?php echo e($result['blurb']); ?></p>
                        </div>
                        </article>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php while(have_posts()): ?> <?php the_post() ?>
                            <?php echo $__env->make('partials.content-search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>