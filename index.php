<?php 
  include_once 'lib/load.php';
?>
<?php
?>
<!doctype html>
<html lang="en" class="h-100">
<header>
  <?php load_templete('head'); ?>
</header>
<?php load_templete('header'); ?>
  <main class="px-3">
    <main class="form-signin">
    <h1>Excited??</h1>
  <form method="post"    action="templete/display.php" >
    <div class="form-floating">
      <input type="text" name="bfname" class="form-control" id="floatingInput" placeholder="" required>
      <label for="floatingInput"  >Your Name</label>
    </div>
    <div class="form-floating">
      <input type="text" name="gfname" class="form-control" id="floatingPassword" placeholder="" required>
      <label for="floatingPassword">Your Crush Name</label>
    </div>
    <input class="w-100 btn btn-lg btn-primary" id="btn" type="submit" value="Find" ></input>
    <p class="mt-5 mb-8 text-muted"></p>
  </form>
  <div>
  </div>
</main>
  <footer class="mt-auto text-white-50">
    </footer>
</div>
</body>
</html>