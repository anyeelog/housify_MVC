<main class="container">
    <h1>Admin of Housify</h1>

    <?php
      if($result) {
        $message = showNotification(intval($result));
        if($message) { ?>
          <p class="alert success"><?php echo s($message); ?></p>
    <?php
        }
      }
    ?>

    <a href="/properties/create" class="button btn-yw">New property</a>
    <a href="/sellers/create" class="button btn-blue">New seller</a>

    <table class="properties">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Image</th>
          <th>Price</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($properties as $property) { ?>
          <tr>
            <th><?php echo $property->id; ?></th>
            <th><?php echo $property->title; ?></th>
            <th>
              <img src="/images/<?php echo $property->image; ?>" alt="Property image" class="table-img">
            </th>
            <th>$<?php echo $property->price; ?></th>
            <th>
              <a href="/properties/update?id=<?php echo $property->id; ?>" class="btn-blue-block">Update</a>

              <form method="POST" class="w-100" action="/properties/delete">
                <input type="hidden" name="id" value="<?php echo $property->id; ?>">
                <input type="hidden" name="type" value="property">
                <input type="submit" value="Delete" class="btn-red-block w-100">
              </form>
            </th>
          </tr>
        <?php } ?>
      </tbody>
    </table>



    <h2>Sellers</h2>

    <table class="properties">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($sellers as $seller) { ?>
          <tr>
            <th><?php echo $seller->id; ?></th>
            <th><?php echo $seller->name . " " . $seller->lastname; ?></th>
            <th><?php echo $seller->phone; ?></th>
            <th>
              <a href="/sellers/update?id=<?php echo $seller->id; ?>" class="btn-blue-block">Update</a>

              <form method="POST" class="w-100" action="/sellers/delete">
                <input type="hidden" name="id" value="<?php echo $seller->id; ?>">
                <input type="hidden" name="type" value="seller">
                <input type="submit" value="Delete" class="btn-red-block w-100">
              </form>
            </th>
          </tr>
        <?php } ?>
      </tbody>
    </table>

</main>
