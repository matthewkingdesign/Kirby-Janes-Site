<!-- This line now uses the 'snippet method to call the header snippet' -->
<?php snippet('header') ?>

    <!-- If the defualt php page is loaded show the text from that txt file  -->
    <div class="paintingsPostWrapper">
      <!-- <div class="paintingPostGrid"> -->

        <div class="leftContent">
          <h3 class="paintingPostTitle"><?= $page->heading() ?></h3>
          <p><?= $page->text() ?></p>
        </div>

        <div class="rightContent">
          <?php foreach ($page->images() as $image): ?>
            <img class="paintingImg <?= $image->orientation() ?>" src="<?= $image->url() ?>" alt="">
          <?php endforeach; ?>
          <nav class="paintingPostPrevNext">
            <?php if($prev = $page->prev()): ?>
              <a id="prevNavTag" class="navTags" href="<?= $prev->url() ?>"> < PREV</a>
            <?php endif ?>
            <?php if($next = $page->next()): ?>
              <a id="nextNavTag" class="navTags" href="<?= $next->url() ?>">NEXT ></a>
            <?php endif ?>
          </nav>
        </div>

      <!-- </div> -->
    </div>



<?php snippet('footer') ?>
