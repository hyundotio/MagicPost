<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'html_header.php' ?>
</head>
<body>
  <div class="master-container home-container">
  <header>
    <nav class="main-nav">
      <ul>
        <li>
          <a class="tab active" href="./index.php">Search</a>
        </li>
        <li>
          <a class="tab" href="./post.php">Post</a>
        </li>
      </ul>
    </nav>
    <nav class="about-nav">
      <ul>
        <li>
          <a class="tab" href="./about.php">About</a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="home">
    <div class="search-box">
      <h1>MagicPost</h1>
      <h3>Search, post, and view encrypted messages. 100% free and open-source.</h3>
      <form action="./search.php" method="get" class="index-search-form">
          <label for="search-bar">Search</label>
          <input id="search-bar" class="search-bar" type="text" placeholder="Search message IDs and fingerprints" name="search">
          <label for="search-button">Submit</label>
          <input id="search-button" type="image" class="search-button disabled" src="./assets/img/search.png" alt="Search button" value="search">
      </form>
      <a class="mpad-link" href="https://www.magicpad.io" target="_blank" rel="noopener noreferrer nofollow">Encrypt & decrypt using MagicPad</a>
    </div>
  </main>
  </div>
</body>
</html>
