<div class="breadcrumb<?php if (is_404()) echo ' breadcrumb--404'; ?>">
  <div class="inner">
    <div class="breadcrumb-layout<?php if (is_404()) {
                                    echo 'breadcrumb-layout__404';
                                  } ?>">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>