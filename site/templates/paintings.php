<!-- This line now uses the 'snippet method to call the header snippet' -->
<?php snippet('header') ?>




    <div class="wrapper">
      <?php foreach ($page->children() as $project): ?>
        <a class="item-container" href="<?= $project->url() ?>">
          <div class="item">
            <?= $project->image()->crop(500, 700) ?>
            <!-- <?= $project->title() ?> -->
          </div>
        </a>
      <?php endforeach  ?>
    </div>




<!-- This line now uses the 'snippet method to call the footer snippet' -->
<?php snippet('footer') ?>
