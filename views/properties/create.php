<main class="container">
    <h1>Create property</h1>

    <?php foreach($errors as $error) { ?>
      <div class="alert error">
        <?php echo $error; ?>
      </div>
    <?php } ?>

    <a href="/admin" class="btn-blue" style="margin-bottom: 2rem;">Return</a>

    <form class="form" method="POST" enctype="multipart/form-data">
      <?php include __DIR__ . '/form.php'; ?>
      <input type="submit" value="Create property" class="btn-blue">
    </form>
</main>
