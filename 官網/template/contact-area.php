<?php
$consultUrl = isset($eventsConsult)?$eventsConsult:"consult/";
?>
    <div class="container" data-nosnippet>
      <div class="row text-center">
        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
        <a href="tel:+886-2-2522-1351,,301">
          <div class="d-inline-block rounded-circle border"><i class="fas fa-phone-alt h1"></i></div>
          <div class="main-color">02-2522-1351</div>
          <small>分機 301 汪小姐</small>
        </a>
        </div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
        <a href="<?= $consultUrl; ?>">
          <p class="icon consultation" aria-hidden="true"></p>
          <div class="main-color">表單諮詢</div>
        </a>
        </div>
        <div class="hidden-md hidden-lg clearfix"></div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
        <a href="mailto:jenny@ares.com.tw">
          <p class="icon mail" aria-hidden="true"></p>
          <div class="main-color">jenny@ares.com.tw</div>
        </a>
        </div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
        <a href="/epaper/subscribe/">
          <p class="icon paper" aria-hidden="true"></p>
          <div class="main-color">訂閱電子報</div>
        </a>
        </div>
      </div>
    </div>