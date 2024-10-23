
<?php if(isset($errors)) : ?>
         <?php foreach($errors as $error) : ?>
            <div class="message bg-red-500 text-white my-3 px-2 py-1">
                <?= $error ?>
            </div>
         <?php endforeach; ?>
  <?php endif; ?>