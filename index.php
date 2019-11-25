<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'html_header.php' ?>
</head>
<body>
  <script>
  (function () {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = 'https://app.termly.io/embed.min.js';
    s.id = '9cfc8568-1d78-4581-8952-82cb1ad38b63';
    s.setAttribute("data-name", "termly-embed-banner");
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  })();
</script>
  <main class="home">
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
      <h3>Search, post, and view encrypted messages. 100% free and open-source.</h3>
      <form action="./search.php" method="get" class="index-search-form">
          <label for="search-bar">Search</label>
          <input id="search-bar" class="search-bar" type="text" placeholder="Search message IDs and fingerprints" name="search">
          <label for="search-button">Submit</label>
          <input id="search-button" type="image" class="search-button disabled" src="./assets/img/search.png" alt="Search button" value="search">
      </form>
      <a href="https://app.magicpad.io" target="_blank" rel="noopener noreferrer nofollow">Encrypt & decrypt using MagicPad</a>
    </div>
  </main>
</body>
</html>
