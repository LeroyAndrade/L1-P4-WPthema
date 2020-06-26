
  <footer class="bg-primary">
    <div class="container ">
      <article class="row">
        <div class="col-md-4">

        </div>
        <small> &copy; <?php the_author();  echo " ". date("Y"); ?> </small>

      <div class="validatie" class="col-md-4">
          <small>
          <a href="http://validator.w3.org/check?uri=referer" target="_blank">
              <img src="https://blanken5.home.xs4all.nl/afb/valid-html5-blue.png" alt="Valide HTML5"></a>
          <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">
              <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue.gif" alt="Valide CSS">
          </a>
        </small>
      </div>
      <div class="col-md-4">

      </div>
    </div>
    </article>
    </div>

    </footer>
        <?php wp_footer(); //dit is de admin bar ?>
  </body>
</html>
