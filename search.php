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
      <div class="search-header-box">
        <h1>MagicPost</h1>
        <form action="./search.php" method="get">
            <input class="search-bar" type="text" placeholder="Search message IDs and fingerprints" name="search">
            <input type="image" class="search-button disabled" src="./assets/img/search.png" value="search">
        </form>
        <?php
          include './search_php/search.php';
        ?>
      </div>
  </main>
  <script src="./js/lip.js"></script>
  <script src="./js/mobile.js"></script>
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
