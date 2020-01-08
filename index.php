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
          <input spellcheck="false" id="search-bar" class="search-bar mono-input" type="text" placeholder="Message IDs and fingerprints" name="search">
          <label for="search-button">Submit</label>
          <input id="search-button" type="image" class="search-button disabled" src="./assets/img/search.png" alt="Search button" value="search">
      </form>
      <a class="mpad-link" href="https://www.magicpad.io" target="_blank" rel="noopener noreferrer nofollow">Encrypt & decrypt using MagicPad</a>
    </div>
  </main>
  <footer>
			<small class="copyright">2019 © Hyun</small>
			<ul class="social list mobile-flex">
				<li>
					<a href="https://twitter.com/hyunkseo" rel="noopener noreferrer nofollow" target="_blank"><img alt="Twitter" src="./ui/twitter.svg"></a>
				</li>
				<li>
					<a href="https://github.com/hyundotio/magicpost" rel="noopener noreferrer nofollow" target="_blank"><img alt="GitHub Repo Link" src="./ui/github.svg"></a>
				</li>
			</ul>
		</footer>
  </div>
</body>
</html>
