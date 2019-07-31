<!DOCTYPE html>
<html>
<head>
  <?php include 'html_header.php' ?>
</head>
<body>
  <main>
    <nav class="mobile-nav">
      <h1>MagicPost</h1>
      <button class="mobile-menu"><img src="./assets/img/menu.svg"/></button>
    </nav>
    <nav class="main-nav">
      <ul>
        <li>
          <a class="tab" href="./index.php">Search</a>
        </li>
        <li>
          <a class="tab" href="./post.php">Post</a>
        </li>
        <li>
          <a class="tab" href="./about.php">About</a>
        </li>
      </ul>
    </nav>
    <div class="content about">
      <section>
          <h2>About MagicPost</h2>
          <p>MagicPost is an open-source, free pastebin-like service for encrypted messages. For all your encryption needs, please try <a href="https://www.magicpad.io" target="_blank" class="_blank">MagicPad</a>.</p>
      </section>
      <section>
        <h3>Credits</h3>
        <ul class="credits-list">
          <li>Created by Hyun</li>
        </ul>
      </section>
      <section>
        <h3>Links</h3>
        <ul class="credits-list">
          <li><a class="b-link" href="https://github.com/hyundotio/magicpost" target="_blank" rel="noopener noreferrer nofollow">MagicPost GitHub</a></li>
        </ul>
      </section>
      <section>
        <h3>License</h3><span>MIT</span>
      </section>
    </div>
  </main>
  <script src="./js/mobile.js"></script>
</body>
</html>
