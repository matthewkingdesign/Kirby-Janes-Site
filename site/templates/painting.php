<!-- This line now uses the 'snippet method to call the header snippet' -->
<?php snippet('header') ?>

    <!-- If the defualt php page is loaded show the text from that txt file  -->

    <div class="wrapper-painting">
      <p><?= $page->heading() ?></p>
      <p><?= $page->text() ?></p>
      <?php foreach ($page->images() as $image): ?>
        <img class="paintingImg" src="<?= $image->url() ?>" alt="">
        <!-- You can resize images right here in the template file -->
        <!-- <?= $image->resize(800) ?> -->
      <?php endforeach; ?>
    </div>


<?php snippet('footer') ?>
