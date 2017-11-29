<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', 'GameNeighbor - Welcome')
    </title>

    <?php include "includes/htmlhead.php"; ?>

    @stack('head')

</head>

@yield('bodytag')

  <?php include("includes/header.php"); ?>
  <?php include("includes/navigation.php"); ?>

  <section id='content'>
      @yield('content')
  </section>

  <?php include("includes/footer.php"); ?>

  @stack('body')

</body>
</html>
