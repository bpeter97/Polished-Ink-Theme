<footer>
      <div class="container">
        <?php 
        if(get_theme_mod('footer_facebook') != "") {
          echo '<ul class="list-inline list-social">';
            echo '<li class="list-inline-item social-facebook">';
              echo '<a href="'. get_theme_mod('footer_facebook') .'">';
                echo '<i class="fab fa-facebook-f"></i>';
              echo '</a>';
            echo '</li>';
          echo '</ul>';
        }
        ?>
        <p class="pt-3">&copy; <?php bloginfo('name'); ?> <?= Date('Y')==2019 ? Date('Y') : "2019 - " . Date('Y') ?>. All Rights Reserved.</p>
      </div>
    </footer>
    <?php wp_footer(); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php bloginfo('template_url'); ?>/js/new-age.min.js"></script>

    <script>
      var modalId = $("#image-gallery");

      $(document).ready(function() {
        loadGallery(true, "a.thumbnail");

        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
          $("#show-previous-image, #show-next-image").show();
          if (counter_max === counter_current) {
            $("#show-next-image").hide();
          } else if (counter_current === 1) {
            $("#show-previous-image").hide();
          }
        }

        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */

        function loadGallery(setIDs, setClickAttr) {
          var current_image,
            selector,
            counter = 0;

          $("#show-next-image, #show-previous-image").click(function() {
            if ($(this).attr("id") === "show-previous-image") {
              current_image--;
            } else {
              current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
          });

          function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data("image-id");
            $("#image-gallery-title").text($sel.data("title"));
            $("#image-gallery-image").attr("src", $sel.data("image"));
            disableButtons(counter, $sel.data("image-id"));
          }

          if (setIDs == true) {
            $("[data-image-id]").each(function() {
              counter++;
              $(this).attr("data-image-id", counter);
            });
          }
          $(setClickAttr).on("click", function() {
            updateGallery($(this));
          });
        }
      });

      // build key actions
      $(document).keydown(function(e) {
        switch (e.which) {
          case 37: // left
            if (
              (modalId.data("bs.modal") || {})._isShown &&
              $("#show-previous-image").is(":visible")
            ) {
              $("#show-previous-image").click();
            }
            break;

          case 39: // right
            if (
              (modalId.data("bs.modal") || {})._isShown &&
              $("#show-next-image").is(":visible")
            ) {
              $("#show-next-image").click();
            }
            break;

          default:
            return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
      });
    </script>
  </body>
</html>
