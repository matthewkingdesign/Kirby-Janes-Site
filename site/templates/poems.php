<!-- This line now uses the 'snippet method to call the header snippet' -->
<?php snippet('header') ?>



<div class="poemsContainer">
  <?php foreach ($page->children() as $project): ?>
        <h2 class="poemHeading"><?= $project->heading() ?></h2>
        <p class="poemText"><?= $project->text()->kt() ?></p>
        <?= $project->image()->resize(600)?>


  <?php endforeach  ?>
</div>



<!-- This line now uses the 'snippet method to call the footer snippet' -->
<?php snippet('footer') ?>
