<?php
  include './post_php/post.php';
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'html_header.php' ?>
</head>
<body>
  <div class="master-container">
  <header>
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
          <a class="tab active" href="./post.php">Post</a>
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
    <div class="content">
      <section>
        <h2 class="page-header">Post a message</h2>
      </section>
      <section>
      <form action="./post.php" method="post">
        <section>
          <h3>Your fingerprint</h3>
          <label for="fromkey">Your fingerprint</label>
          <input spellcheck="false" class="mono-input" type="text" id="fromkey" placeholder="40 digit hex" name="fromkey" value="<?php echo $cleanFromKey; ?>">
        </section>
        <section>
          <h3>Recipient fingerprint</h3>
          <label for="tokey">Recipient fingerprint</label>
          <input spellcheck="false" class="mono-input" type="text" id="tokey" placeholder="40 digit hex" name="tokey" value="<?php echo $cleanToKey; ?>">
        </section>
        <section>
          <h3>Message</h3>
          <label for="message">Your fingerprint</label>
          <textarea spellcheck="false" class="mono-input" name="message" id="message" placeholder="-----BEGIN PGP MESSAGE-----"><?php echo $cleanStr; ?></textarea>
        </section>
        <section>
          <input type="submit" class="button-1 disabled post-submit" value="Post">
        </section>
      </form>
    </section>
    </div>
  </main>
  </div>
  <script src="./js/post.js"></script>
  <?php
    include './post_php/post_process.php';
  ?>
  <script src="./js/lip.js"></script>
</body>
</html>
