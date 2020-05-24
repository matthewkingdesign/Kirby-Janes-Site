<!-- This line now uses the 'snippet method to call the header snippet' -->
<?php snippet('header') ?>





      <div class="paintinsGrid">
        <?php foreach ($page->children() as $project): ?>
          <a class="imgContainer" href="<?= $project->url() ?>">
              <p class="paintingTitle"><?= $project->title() ?></p>
              <?= $project->image()->crop(500, 700) ?>
          </a>

        <?php endforeach  ?>
      </div>





<!-- This line now uses the 'snippet method to call the footer snippet' -->
<?php snippet('footer') ?>
