<!DOCTYPE html>
<html>
<head>
  <?php include 'html_header.php' ?>
</head>
<body>
  <main class="home">
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
    <div class="search-box">
      <h1>MagicPost</h1>
      <h3>Search, post, and view encrypted messages. 100% free.</h3>
      <form action="./search.php" method="get" class="index-search-form">
          <input class="search-bar" type="text" placeholder="Search message IDs and fingerprints" name="search">
          <input type="image" class="search-button disabled" src="./assets/img/search.png" value="search">
      </form>
      <a href="https://app.magicpad.io" target="_blank">Encrypt & decrypt using MagicPad</a>
    </div>
  </main>
  <script src="./js/mobile.js"></script>
  <script src="./js/search.js"></script>
</body>
</html>
