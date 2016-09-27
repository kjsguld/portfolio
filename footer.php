  <!-- footer start -->
  <footer>
    <div class="container">
      <div class="row">
        <ul class="list-inline text-center">
          <li>
            <a href="https://www.facebook.com/kristian.j.guld">
              <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="https://dk.linkedin.com/in/kristian-jeppe-schou-guld-729762111">
              <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="https://github.com/kjsguld">
              <i class="fa fa-github-square fa-3x" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="row">
        <p class="text-center">
          <?php the_author(); ?> &copy; <?php echo (date()<2015) ? '2015 - '.date('Y') : date('Y') ; ?>
        </p>
      </div>
    <div class="container">
  </footer>
  <!-- footer end -->
  <?php wp_footer();?>
  </body>
</html>
