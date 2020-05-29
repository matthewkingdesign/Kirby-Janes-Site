    </div> <!-- content -->
  </div> <!-- container -->
<footer>
<nav class="menu">
  <?php foreach($site->children()->listed() as $subpage): ?>
    <a class="menuItem" href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
  <?php endforeach ?>
</nav>
</footer>
</body>

</html>
