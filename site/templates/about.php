<!-- This line now uses the 'snippet method to call the header snippet' -->
<?php snippet('header') ?>

    <!-- If the defualt php page is loaded show the text from that txt file  -->
    <div class="paintingsPostWrapper">


        <div class="leftContent">
          <h3 class="aboutPageTitle"><?= $page->heading() ?></h3>
          <p><?= $page->text()->kt() ?></p>
          <h3 class="aboutPageTitle"><?= $page->Art_Heading() ?></h3>
          <p><?= $page->Art_text()->kt() ?></p>
          <h3 class="aboutPageTitle"><?= $page->Verse_Heading() ?></h3>
          <p><?= $page->Verse_Text()->kt() ?></p>
        </div>

        <div class="rightContent">
          <?php if($image = $page->image('jane.jpg')): ?>
            <img class="" src="<?= $image->url() ?>" alt="">
          <?php endif ?>

          <h3 id="getInTouchTitle" class="aboutPageTitle"><?= $page->getInTouch() ?></h3>
          <p><?= $page->getInTouchText()->kt() ?></p>
          <h4 id="email"><?= $page->email()->kt() ?></h4>

          <ul class="socialContainer">
            <li><a href="<?= $page->twitterUrl() ?>"><?= $page->image('twitter.png') ?></a></li>
            <li><a href="<?= $page->instaUrl() ?>"><?= $page->image('insta.png') ?></a></li>
            <li><a href="<?= $page->facebookUrl() ?>"><?= $page->image('facebook.png') ?></a></li>
          </ul>



        </div>


    </div>



<?php snippet('footer') ?>
