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
    <div class="content">
      <h2>Post a message</h2>
      <form action="./post.php" method="post">
        <section>
          <h3>Your fingerprint</h3>
          <input type="text" placeholder="20 digit hex" name="fromkey">
        </section>
        <section>
          <h3>Recipient fingerprint</h3>
          <input type="text" placeholder="20 digit hex" name="tokey">
        </section>
        <section>
          <h3>Message</h3>
          <textarea name="message" placeholder="----BEGIN PGP MESSAGE-----"></textarea>
        </section>
        <section>
          <input type="submit" class="button-1 disabled post-submit" value="Post">
        </section>
      </form>
    </div>
    <?php
      include './post_php/post.php';
    ?>
  </main>
  <script src="./js/lip.js"></script>
  <script src="./js/post.js"></script>
</body>
</html>
