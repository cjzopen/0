  <aside id="contact-area">
    <div class="text-center h2 hr">產品諮詢</div>
    <div class="container" data-nosnippet>
      <div class="row text-center">
        <div class="col-6 col-md-3">
        <a class="d-block" href="tel:+886-2-2522-1351,,301" aria-label="電話" id="contact-area-phone-link">
          <div class="circle-icon" aria-hidden="true">
            <div class="d-flex justify-content-center align-items-center h-100">
              <svg width="50" height="50"><use xlink:href="#c-phone"/></svg>
            </div>
          </div>
        </a>
        <div class="color-blue h5 mt-2" id="contact-area-phone">02-2522-1351</div>
        <small id="contact-area-ext">分機 301 汪小姐</small>
        </div>
        <div class="col-6 col-md-3">
        <a class="d-block" href="<?= isset($eventsConsult)?$eventsConsult:"/consult/"; ?>">
          <div class="circle-icon" aria-hidden="true">
            <div class="d-flex justify-content-center align-items-center h-100">
              <svg width="50" height="50"><use xlink:href="#c-form"/></svg>
            </div>
          </div>
          <div class="color-blue h5 mt-2">免費諮詢</div>
        </a>
        </div>
        <div class="col-6 col-md-3">
        <a class="d-block" href="mailto:jenny@ares.com.tw" aria-label="聯絡信箱" id="contact-area-mail-link">
          <div class="circle-icon" aria-hidden="true">
            <!-- <img loading="lazy" width="60" height="60" src="/img/mail.svg" alt="*"> -->
            <div class="d-flex justify-content-center align-items-center h-100">
              <svg width="50" height="50"><use xlink:href="#c-mail"/></svg>
            </div>
          </div>
        </a>
          <div class="color-blue h5 mt-2" id="contact-area-mail">jenny@ares.com.tw</div>
        </div>
        <div class="col-6 col-md-3">
        <a class="d-block" href="/epaper/subscribe/">
          <div class="circle-icon" aria-hidden="true">
            <!-- <img loading="lazy" width="60" height="60" src="/img/paper.svg" alt="*"> -->
            <div class="d-flex justify-content-center align-items-center h-100">
              <svg width="50" height="50"><use xlink:href="#c-paper"/></svg>
            </div>
          </div>
          <div class="color-blue h5 mt-2">訂閱電子報</div>
        </a>
        </div>
      </div>
    </div>
  </aside>
  <footer id="footer" role="contentinfo">
    <a href="#all" class="back-to-top" aria-label="Back to top">
      <svg xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="274 364 64 64" enable-background="new 274 364 64 64" xml:space="preserve"><path fill="#FFFFFF" d="M308.249,391L307,389.75l-10,10l2.5,2.5l7.501-7.499l7.5,7.499l2.5-2.5L308.249,391z"/></svg>
    </a>
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-3">
          <div class="footer-title color-blue3"><a href="/profile/">關於我們</a></div>
          <ul>
            <li><a href="/profile/">公司簡介</a></li>
            <li><a href="/contact/">公司據點</a></li>
            <li><a href="/milestone/">里程碑</a></li>
            <li><a href="/partners/">客戶及合作夥伴</a></li>
            <li><a href="/esg/">企業永續發展</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-3">
          <div class="footer-title color-blue3"><a href="/job/">菁英招募</a></div>
          <ul>
            <li><a href="/job/#資通文化">公司文化</a></li>
            <li><a href="/job/#benefits">福利制度</a></li>
            <!-- <li><a href="/job/#development">學習成長</a></li> -->
            <li><a href="/job/#jobs">加入我們</a></li>
            <li><a href="/job/#article">相關文章</a></li>
          </ul>
        </div>
        <div class="clearfix hidden-md hidden-lg"></div>
        <div class="col-6 col-md-3">
          <div class="footer-title color-blue3"><a href="/governance/">投資人專區</a></div>
          <ul>
            <li><a href="/governance/">公司治理</a></li>
            <li><a href="/investor-service/">股東服務</a></li>
            <li><a href="/investor-events/">重大訊息</a></li>
            <li><a href="/investor-revenue/">營收報告</a></li>
            <li><a href="/investor-financial/">財務報表</a></li>
            <li><a href="/investor-report/">股東會資訊</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-3">
          <div class="footer-title color-blue3"><a href="/stakeholder/">利害人專區</a></div>
          <ul>
            <li><a href="https://web.ares.com.tw/aresoa" accesskey="8" title="alt 8" rel="nofollow">員工專區</a></li>
            <!-- <li><a href="/partners/#partner">策略夥伴專區</a></li> -->
            <li><a href="/stakeholder/">利害人專區</a><br><br></li>
            <li class="h5">
              <a class="mr-2" href="https://www.facebook.com/AresInternational" aria-label="資通電腦粉絲專頁"><svg width="20" height="20"><use xlink:href="#facebook-icon"/></svg></a>
              <a class="mr-2" href="https://www.youtube.com/@AresTaiwan?sub_confirmation=1" aria-label="資通 youtube 頻道"><svg width="20" height="20"><use xlink:href="#youtube-icon"/></svg></a>
              <a class="mr-2" href="https://www.linkedin.com/company/ares-international-corporation" aria-label="資通 linkedin"><svg width="20" height="20"><use xlink:href="#linkedin-icon"/></svg></a>
              <!-- <a class="mr-2" href="https://lin.ee/VjtvDKA" aria-label="資通 LINE"><svg width="20" height="20"><use xlink:href="#line-icon"/></svg></a> -->
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-md-8 text-md-left">
          <small>版權所有 &copy; <?= date('Y'); ?> 資通電腦股份有限公司</small>
        </div>
        <div class="col-12 col-md-4 text-md-right">
          <small>
            <a href="/sitemap/" accesskey="m" class=" px-2 border-right border-white">網站地圖</a>
            <a href="/privacy/" class="px-2">隱私權聲明</a>
          </small>
        </div>
      </div>
    </div>
  </footer>
  </div>
<script src="/lib/jquery.js?v=3.6.0" defer></script>
<script src="/js/main.min.js?216" defer></script>
<!-- <script src="/lib/font-awesome/js/fontawesome-all.min.js" defer></script> -->
<?php //include_once "/sites/global/cookie-notification.php"; ?>
<svg class="d-none hide" aria-hidden="true">
  <defs>
    <symbol viewBox="0 0 60 60" id="c-phone"><path fill="#70B2DF" d="M53.611 41.373L47.5 35.265a4.717 4.717 0 00-3.357-1.388 4.726 4.726 0 00-3.359 1.388l-2.778 2.778c-1.068 1.068-2.948 1.071-4.02 0L21.951 25.994a2.848 2.848 0 010-4.023l2.777-2.777a4.717 4.717 0 001.393-3.348 4.724 4.724 0 00-1.396-3.37L18.618 6.39A4.717 4.717 0 0015.26 5a4.722 4.722 0 00-3.353 1.382l-2.225 2.21c-6.24 6.24-6.24 16.394 0 22.639L28.753 50.31A15.914 15.914 0 0040.07 55a15.9 15.9 0 0011.317-4.692l2.222-2.22c.896-.896 1.389-2.088 1.389-3.357s-.493-2.463-1.387-3.358zM19.307 28.636l12.037 12.047a6.547 6.547 0 004.653 1.929c1.6 0 3.146-.583 4.364-1.659l3.065-3.047c.383-.38 1.053-.383 1.434 0l6.107 6.109a1.005 1.005 0 010 1.428l-3.063 2.993a12.29 12.29 0 01-7.841 2.846c-3.257 0-6.334-1.283-8.664-3.615L12.325 28.585c-4.51-4.513-4.841-11.61-.788-16.485l1.998-2.063 1.013-1.006a1.008 1.008 0 011.431.002l6.107 6.088a1.013 1.013 0 010 1.43l-3.063 3.085c-2.291 2.595-2.165 6.55.284 9z"/></symbol>
    <symbol viewBox="0 0 60 60" id="c-form"><path fill="#70B2DF" d="M30.221 28.267c0-.968-.788-1.754-1.757-1.754h-6.738c-.968 0-1.756.787-1.756 1.754 0 .968.788 1.756 1.756 1.756h6.738a1.758 1.758 0 001.757-1.756zM21.726 23.422h10.329c.97 0 1.758-.787 1.758-1.755s-.788-1.755-1.758-1.755H21.726c-.968 0-1.756.787-1.756 1.755s.788 1.755 1.756 1.755z"/><path  fill="#70B2DF" d="M53.18 15.763a5.374 5.374 0 00-3.827-1.587 5.386 5.386 0 00-3.83 1.587l-.832.835-8.81-8.808a1.768 1.768 0 00-1.244-.515H16.562a4.342 4.342 0 00-4.339 4.337v36.325a4.343 4.343 0 004.339 4.338h25.822a4.343 4.343 0 004.337-4.338V29.878l6.459-6.458a5.422 5.422 0 000-7.657zM33.115 39.17l-1.687-1.688-1.656-1.656 13.863-13.861 3.342 3.34L33.115 39.17zm-5.596-1.123l3.367 3.37c-2.506 2.382-4.152 2.771-4.959 2.771-.503 0-.81-.149-.915-.204-1.05-1.611 1.015-4.35 2.507-5.937zm8.562-25.089l4.958 4.957h-4.013a.946.946 0 01-.945-.945v-4.012zm7.303 35.207a.838.838 0 01-.838.837H16.399a.837.837 0 01-.837-.837V11.384c0-.461.375-.837.837-.837h16.527v6.067a4.397 4.397 0 004.391 4.393h2.987l2.193-2.193-15.842 15.844c-2.831 2.447-6.75 7.514-3.8 11.279l.126.146c.19.188 1.237 1.136 3.164 1.138 2.491 0 5.241-1.59 8.169-4.717l9.072-9.073v14.732h-.002v.002zm7.871-27.138l-2.036 2.038-3.342-3.342 2.038-2.04c.895-.893 2.45-.893 3.344 0a2.365 2.365 0 01-.004 3.344z"/></symbol>
    <symbol viewBox="0 0 60 60" id="c-mail"><path fill="#70B2DF" d="M51.86 18.44H36.214v3.834H48.54L29.96 40.852 11.384 22.274H24.06V18.44h-16a2.88 2.88 0 0 0-2.88 2.87v29.74a2.886 2.886 0 0 0 2.88 2.88h43.8a2.883 2.883 0 0 0 2.884-2.88V21.31a2.877 2.877 0 0 0-2.883-2.87zm-.953 31.653H9.022V25.33l18.91 18.91c.56.566 1.295.845 2.03.845.74 0 1.48-.278 2.04-.846l18.905-18.91v24.763z"/><path fill="#70B2DF" d="M20.876 24.496l8.99 11.463c.23.297.61.297.837 0l8.983-11.464a.863.863 0 0 0 .175-.537h-4.953V7.69c0-.702-.573-1.272-1.276-1.272h-6.694c-.707 0-1.277.57-1.277 1.272v16.27H20.7c0 .2.06.385.176.536z"/></symbol>
    <symbol viewBox="0 0 60 60" id="c-paper"><g fill="#70B2DF"><path d="M53.066 10.3H14.008c-1.367 0-1.737.347-1.737 1.64v5.336H6.793c-1.365 0-1.735.35-1.735 1.638v27.07c0 1.93 2.404 4.43 4.696 4.43h43.313c1.37 0 1.74-.347 1.74-1.638V11.94c0-1.293-.368-1.64-1.74-1.64zm-1.22 37.325H9.754c-.527 0-1.68-1.1-1.742-1.64V20.067h4.26v25.055h2.96V13.09h36.616v34.535z"/><path d="M19.114 16.693h13.314v12.56H19.114zM36.497 18.44H47.59v2.092H36.498zM36.497 24.89H47.59v2.094H36.498zM19.114 33.438H47.59v2.09H19.115zM19.114 39.89H47.59v2.096H19.115z"/></g></symbol>
    <symbol viewBox="0 0 75.32 92.604" id="pdf">
      <path d="M9.564 0C4.292 0 0 4.295 0 9.567v73.47c0 5.272 4.292 9.567 9.564 9.567h56.18c5.272 0 9.564-4.294 9.564-9.567V22.624s.15-1.769-.617-3.49c-.72-1.614-1.893-2.737-1.893-2.737a1.571 1.571 0 00-.01-.012L58.85 2.714a1.571 1.571 0 00-.023-.024S57.637 1.557 55.873.8C53.796-.09 51.655.003 51.655.003L51.687 0z" fill="#ff2116" paint-order="markers fill stroke"/><path d="M9.564 3.143h42.123a1.571 1.571 0 00.032 0s1.684.016 2.916.545a7.993 7.993 0 012.032 1.284l.006.006 13.904 13.64s.838.884 1.244 1.795c.327.734.348 2.078.348 2.078a1.571 1.571 0 00-.003.067v60.48c0 3.585-2.836 6.424-6.422 6.424H9.564c-3.586 0-6.421-2.838-6.421-6.425V9.567c0-3.586 2.835-6.424 6.42-6.424z" fill="#f5f5f5" paint-order="markers fill stroke"/><path d="M18.804 55.136c-2.162-2.162.177-5.133 6.526-8.288l3.994-1.986 1.557-3.405a134.054 134.054 0 002.838-6.79l1.283-3.385-.884-2.506c-1.087-3.08-1.474-7.71-.785-9.374.934-2.255 3.993-2.024 5.205.393.946 1.888.849 5.306-.272 9.618l-.92 3.534.81 1.375c.445.756 1.746 2.55 2.89 3.989l2.152 2.675 2.677-.349c8.503-1.11 11.416.776 11.416 3.48 0 3.413-6.677 3.695-12.285-.243-1.261-.886-2.127-1.767-2.127-1.767s-3.513.715-5.243 1.182c-1.785.48-2.675.782-5.29 1.665 0 0-.918 1.332-1.516 2.3-2.224 3.605-4.821 6.591-6.676 7.678-2.077 1.217-4.254 1.3-5.35.204zm3.393-1.212c1.216-.751 3.676-3.661 5.378-6.361l.69-1.094-3.14 1.579c-4.848 2.438-7.066 4.735-5.913 6.125.648.78 1.423.716 2.985-.25zm31.494-8.84c1.189-.833 1.016-2.511-.328-3.188-1.045-.526-1.888-.634-4.606-.594-1.67.114-4.354.45-4.81.553 0 0 1.476 1.019 2.13 1.394.872.498 2.99 1.422 4.537 1.895 1.526.467 2.409.418 3.077-.06zM41.028 39.82c-.72-.756-1.943-2.334-2.719-3.507-1.014-1.331-1.523-2.27-1.523-2.27s-.742 2.385-1.35 3.82l-1.898 4.692-.55 1.064s2.925-.959 4.414-1.348c1.576-.411 4.776-1.04 4.776-1.04zm-4.081-16.365c.183-1.54.261-3.078-.233-3.853-1.373-1.5-3.03-.25-2.749 3.317.095 1.2.393 3.251.791 4.516l.725 2.298.51-1.73c.28-.953.71-3 .956-4.548z" fill="#ff2116"/><g font-family="Franklin Gothic Medium Cond" letter-spacing="0" word-spacing="4.26" fill="#2c2c2c"><path d="M22.48 65.148h3.511q1.683 0 2.732.322 1.049.312 1.765 1.403.717 1.08.717 2.606 0 1.402-.582 2.41-.581 1.007-1.568 1.454-.976.446-3.012.446h-1.215v5.536h-2.347zm2.348 1.818v4.944h1.163q1.558 0 2.15-.582.602-.582.602-1.89 0-.976-.394-1.579-.395-.613-.873-.748-.467-.145-1.485-.145zM33.002 65.148h3.188q2.316 0 3.697.821 1.392.82 2.098 2.44.717 1.62.717 3.594 0 2.077-.644 3.708-.634 1.62-1.953 2.617-1.308.997-3.738.997h-3.365zm2.347 1.88v10.417h.976q2.046 0 2.97-1.412.925-1.423.925-3.791 0-5.214-3.895-5.214zM44.956 65.148h7.872v1.88h-5.525v4.238h4.424v1.88h-4.424v6.179h-2.347z"/></g>
    </symbol>
    <symbol viewBox="0 0 512 512" id="facebook-icon"><path fill="#2d88ff" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></symbol>
    <symbol viewBox="0 0 576 512" id="youtube-icon"><path fill="red" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></symbol>
    <symbol viewBox="0 0 448 512" id="linkedin-icon"><path fill="#0e76a8" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></symbol>
    <symbol viewBox="0 0 320 320" id="line-icon"><rect fill="#06c755" width="320" height="320" rx="72.14"/><path fill="#fff" d="M266.66,144.92c0-47.74-47.86-86.58-106.69-86.58S53.28,97.18,53.28,144.92c0,42.8,38,78.65,89.22,85.42,3.48.75,8.21,2.29,9.4,5.26,1.08,2.7.71,6.93.35,9.65,0,0-1.25,7.53-1.52,9.13-.47,2.7-2.15,10.55,9.24,5.76s61.44-36.18,83.82-61.95h0C259.25,181.24,266.66,164,266.66,144.92Z"/><path fill="#06c755" d="M231.16,172.49h-30a2,2,0,0,1-2-2v0h0V123.94h0v0a2,2,0,0,1,2-2h30a2,2,0,0,1,2,2v7.57a2,2,0,0,1-2,2H210.79v7.85h20.37a2,2,0,0,1,2,2V151a2,2,0,0,1-2,2H210.79v7.86h20.37a2,2,0,0,1,2,2v7.56A2,2,0,0,1,231.16,172.49Z"/><path fill="#06c755" d="M120.29,172.49a2,2,0,0,0,2-2v-7.56a2,2,0,0,0-2-2H99.92v-37a2,2,0,0,0-2-2H90.32a2,2,0,0,0-2,2v46.53h0v0a2,2,0,0,0,2,2h30Z"/><rect fill="#06c755" x="128.73" y="121.85" width="11.64" height="50.64" rx="2.04"/><path fill="#06c755" d="M189.84,121.85h-7.56a2,2,0,0,0-2,2v27.66l-21.3-28.77a1.2,1.2,0,0,0-.17-.21v0l-.12-.12,0,0-.11-.09-.06,0-.11-.08-.06,0-.11-.06-.07,0-.11,0-.07,0-.12,0-.08,0-.12,0h-.08l-.11,0h-7.71a2,2,0,0,0-2,2v46.56a2,2,0,0,0,2,2h7.57a2,2,0,0,0,2-2V142.81l21.33,28.8a2,2,0,0,0,.52.52h0l.12.08.06,0,.1.05.1,0,.07,0,.14,0h0a2.42,2.42,0,0,0,.54.07h7.52a2,2,0,0,0,2-2V123.89A2,2,0,0,0,189.84,121.85Z"/></symbol>
    <symbol id="check-circle" viewBox="0 0 512 512"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></symbol>
  </defs>
</svg>
