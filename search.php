<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'html_header.php' ?>
</head>
<body>
  <div class="master-container">
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
  <main>
      <section class="search-header-box">
        <h2>MagicPost</h2>
        <form action="./search.php" method="get">
            <input spellcheck="false" class="search-bar mono-input" type="text" placeholder="Search message IDs and fingerprints" name="search">
            <input type="image" class="search-button disabled" src="./assets/img/search.png" alt="Search button" value="search" name="search">
        </form>
      </section>
        <?php
          include './search_php/search.php';
        ?>

  </main>
</div>
  <script src="./js/lip.js"></script>
  <script src="./js/search.js"></script>
  <script src="./js_include/tablesort.min.js"></script>
  <script src="./js_include/tablesort.date.min.js"></script>
  <script>
    const tableEl = document.getElementsByTagName('table');
    if(tableEl.length > 0){
      new Tablesort(tableEl[0]);
    }
  </script>
</body>

</html>
