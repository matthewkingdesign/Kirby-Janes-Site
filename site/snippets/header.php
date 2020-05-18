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
    <div class="container">
      <div class="content">
