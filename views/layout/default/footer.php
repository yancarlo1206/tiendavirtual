  <!--<script src="<?php echo BASE_URL; ?>public/js/jquery-1.11.1.min.js"></script>-->
  <script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/chart.min.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/chart-data.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/easypiechart.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/easypiechart-data.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/moment-with-locales.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/bootstrap-datetimepicker.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/bootstrap-select.min.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/custom.js"></script>

  <script src="<?php echo BASE_URL; ?>public/js/tksis.js"></script>

  <?php if(isset($_layoutParams['js']) && count($_layoutParams['js'])){ ?>
  <?php for($i=0; $i < count($_layoutParams['js']); $i++){ ?>
  <script src="<?php echo $_layoutParams['js'][$i] ?>" type="text/javascript"></script>
  <?php } ?>
  <?php } ?>

</body>
</html>