<!-- This is the header file. loads style sheets etc and just the menu as for JANES WEBSITE that is the only thing repeated through out all the site.  -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $page->title() ?></title>

    <?= css('assets/css/style.css') ?>

  </head>
  <body>
    <!-- We are using a php foreach loop to dynamically access the menu. Then using kirby objects to get the correct info from the txt files
    We are only using listed (or numbered folders in the file structure)-->
    <nav class="menu">
      <?php foreach($site->children()->listed() as $subpage): ?>
        <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
      <?php endforeach ?>
    </nav>
<p>header heaaad head</p>
