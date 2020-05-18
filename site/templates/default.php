<!-- This line now uses the 'snippet method to call the header snippet' -->
<?php snippet('header') ?>

    <!-- If the defualt php page is loaded show the text from that txt file  -->
    <p>this is the default page template</p>
    <p><?= $page->text() ?></p>

<?php snippet('footer') ?>
