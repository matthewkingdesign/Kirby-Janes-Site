<!-- This line now uses the 'snippet method to call the header snippet' -->
<?php snippet('headerHome') ?>

<div class="homePageImg">
  <?= $page->image() ?>
  <div class="homePageContentContainer">
    <h1 id="homePageTitle"><?= $page->heading() ?></h1>
    <h3 id="homePageSubTitle"><?= $page->subTitle() ?></h3>
  </div>

</div>









<!-- This line now uses the 'snippet method to call the footer snippet' -->
<?php snippet('footerHome') ?>
