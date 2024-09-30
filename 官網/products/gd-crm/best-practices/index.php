<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='GD-CRM 成功案例 | 資通電腦';
$page['description']='從行業別、合作廠商來看資通電腦代理的 GD-CRM 客戶關係管理系統之成功案例';
$page['canonical']='https://www.ares.com.tw/products/gd-crm/best-practices/';
$page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/product-gdcrm-bestpractice.css');
$page['ogimage']='https://www.ares.com.tw/img/product/crm/crm-1.jpg';
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

$swiper = array(
  array('img' => 'scania.png', 'name' => '永德福汽車'),
  array('img' => 'pt.png', 'name' => '百崴宇智'),
  array('img' => 'challen.png', 'name' => '佳霖科技'),
  // array('img' => 'solen.png', 'name' => '信統電機'),
  array('img' => 'keding.png', 'name' => '科定企業'),
  // array('img' => 'everleap.png', 'name' => '詠躍科技'),
  array('img' => 'ecaic.png', 'name' => '鼎耀企管'),
  array('img' => 'quatek.png', 'name' => '德技集團'),
  // array('img' => 'acx.png', 'name' => '璟德電子'),
  array('img' => 'helm.png', 'name' => '翰門企業'),
  array('img' => 'optotech.png', 'name' => '光磊科技'),
  // array('img' => 'everlight.png', 'name' => '億光電子'),
  array('img' => 'premtek.png', 'name' => '技鼎'),
  array('img' => 'aic.png', 'name' => '沛亨半導體'),
  // array('img' => 'ss.png', 'name' => '信咚企業'),
  array('img' => 'averlogic.png', 'name' => '凌泰科技'),
  // array('img' => 'liteon.png', 'name' => '敦南科技'),
  array('img' => 'ptc.png', 'name' => '普誠科技'),
  array('img' => 'hanmi.png', 'name' => '韓美半導體'),
  array('img' => 'ishen.png', 'name' => '一申國際'),
  array('img' => 'mitake.png', 'name' => '三竹資訊'),
  array('img' => 'epoch.png', 'name' => '大紀元'),
  array('img' => 'ctci.png', 'name' => '中鼎工程'),
  array('img' => 'ctw.png', 'name' => '喜提達物流'),
  array('img' => 'entie.png', 'name' => '安泰銀行'),
  array('img' => 'allianz.png', 'name' => '安聯投信'),
  array('img' => 'franklin.png', 'name' => '富蘭克林投信'),
  array('img' => 'cyh.png', 'name' => '中化裕民'),
  array('img' => 'cm.png', 'name' => '中美製藥'),
  // array('img' => 'tmica.png', 'name' => '壯生'),
  array('img' => 'sintong.png', 'name' => '信東'),
  // array('img' => 'meadjohnson.png', 'name' => '美強生'),
  array('img' => 'dynamic.png', 'name' => '曜亞國際'),
  // array('img' => 'cpc.png', 'name' => '中國生產力中心'),
  array('img' => 'tff.png', 'name' => '台北金融研究發展基金會'),
  array('img' => 'mirdc.png', 'name' => '金屬工業發展研究中心'),
  array('img' => 'pidc.png', 'name' => '塑膠工業技術發展中心'),
  array('img' => '1chiun.png', 'name' => '一詮'),
  array('img' => 'shilin.png', 'name' => '士林電機'),
  array('img' => 'walrus.png', 'name' => '大井泵浦'),
  array('img' => 'greco.png', 'name' => '大東樹脂'),
  array('img' => 'oriental.png', 'name' => '台灣東方馬達'),
  // array('img' => 'ckd.png', 'name' => '台灣喜開理'),
  array('img' => 'yungzip.png', 'name' => '永日化學'),
  array('img' => 'topoint.png', 'name' => '尖點科技'),
  array('img' => 'mwp.png', 'name' => '長華塑膠'),
  array('img' => 'nanmat.png', 'name' => '南美特科技'),
  array('img' => 'tslg.png', 'name' => '耐落集團'),
  array('img' => 'fcs.png', 'name' => '富強鑫精密'),
  array('img' => 'creation.png', 'name' => '開元食品'),
  array('img' => 'texyear.png', 'name' => '德淵'),
  // array('img' => 'upc.png', 'name' => '聯成化學'),
  array('img' => 'acepillar.png', 'name' => '羅昇企業'),
  array('img' => 'tkk.png', 'name' => '台灣港建'),
  array('img' => 'lelon.png', 'name' => '立隆電子'),
  array('img' => 'gwinstek.png', 'name' => '固緯電子'),
  array('img' => 'ledlink.png', 'name' => '雷笛克光學'),
  // array('img' => 'tbpc.png', 'name' => '臺醫光電科技'),
  array('img' => 'avalue.png', 'name' => '安勤科技'),
  array('img' => 'sinbon.png', 'name' => '信邦電子'),
  // array('img' => 'aopen.png', 'name' => '建碁'),
  array('img' => 'biostar.png', 'name' => '映泰'),
  array('img' => 'kgn.png', 'name' => '飛泰貿易'),
  array('img' => 'eagletek.png', 'name' => '翔宇科技'),
  array('img' => 'zippy.png', 'name' => '新巨'),
  array('img' => 'tri.png', 'name' => '德律科技')
);
include ('../_banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">GD-CRM</span></a>
            <meta itemprop="position" content="3">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">新聞與案例</span></a>
            <meta itemprop="position" content="4">
          </li>
        </ul>
      </div>
    </div>
<?php
include ('../_nav.php');
?>
  </div>
  <section>
    <div class="container">
      <h1 class="text-center">行業別</h1>
      <hr>
      <ul class="row" id="circle">
          <li class="col-12 col-md-6 col-lg-4">
            <div class="icon d-flex justify-content-center align-items-center">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="circle" cx="50" cy=50 r="50" fill="#98d24d" />
                <rect x="41.304" y="41.304" fill="#FFFFFF" width="17.391" height="17.393"/>
                <rect x="34.153" y="34.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" width="31.471" height="31.47"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="42.672" y1="29" x2="42.672" y2="33.709"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="57.64" y1="29" x2="57.64" y2="33.709"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="50.156" y1="29" x2="50.156" y2="33.709"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="42.672" y1="66.291" x2="42.672" y2="71"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="57.64" y1="66.291" x2="57.64" y2="71"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="50.156" y1="66.291" x2="50.156" y2="71"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="29" y1="57.483" x2="33.71" y2="57.483"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="29" y1="42.516" x2="33.71" y2="42.516"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="29" y1="50" x2="33.71" y2="50"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="66.291" y1="57.483" x2="71" y2="57.483"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="66.291" y1="42.516" x2="71" y2="42.516"/>
                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="66.291" y1="50" x2="71" y2="50"/>
              </svg>
            </div>
            <h4 class="text-center mt-2 color-blue">半導體業</h4>
          </li>
          <li class="col-12 col-md-6 col-lg-4">
            <div class="icon d-flex justify-content-center align-items-center">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="circle" cx="50" cy=50 r="50" fill="#98d24d" />
                <path fill="#FFFFFF" d="M71.407,32.315H28.586c-1.777,0-3.218,1.441-3.218,3.219v26.281h49.259V35.534 C74.628,33.757,73.188,32.315,71.407,32.315z M70.854,61.157H29.145V35.964h41.709V61.157z"/>
                <path fill="#FFFFFF" d="M50,62.37H22c0,4.461,2.374,5.314,2.374,5.314H50h25.624c0,0,2.377-0.854,2.377-5.314H50z"/>
              </svg>
            </div>
            <h4 class="text-center mt-2 color-blue">電腦周邊產業</h4>
          </li>
          <li class="col-12 col-md-6 col-lg-4">
            <div class="icon d-flex justify-content-center align-items-center">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="circle" cx="50" cy=50 r="50" fill="#98d24d" />
                <path fill="#FFFFFF" d="M76.835,29.759H64.891c-0.644,0-1.165,0.521-1.165,1.166v38.15c0,0.645,0.521,1.165,1.165,1.165h11.944 c0.644,0,1.165-0.521,1.165-1.165v-38.15C78,30.281,77.479,29.759,76.835,29.759z M66.056,40.237v-3.309h9.614v3.309H66.056z M75.67,32.091v2.804h-9.614v-2.804H75.67z M66.056,67.911V42.272h9.614v25.639H66.056z"/>
                <circle fill="#FFFFFF" cx="67.963" cy="52.17" r="0.937"/>
                <path fill="#FFFFFF" d="M58.271,33.368H23.765c-0.972,0-1.765,0.818-1.765,1.826V61.92c0,1.009,0.793,1.826,1.765,1.826h12.288 l-1.5,4.63c-0.407,1.059-0.171,1.749,2.028,1.749h4.774l0,0h4.771c2.199,0,2.436-0.69,2.028-1.749l-1.5-4.63h11.615 c0.974,0,1.766-0.817,1.766-1.826V35.194C60.036,34.186,59.244,33.368,58.271,33.368z M41.355,61.916 c-0.518,0-0.94-0.421-0.94-0.938c0-0.52,0.423-0.938,0.94-0.938c0.517,0,0.938,0.419,0.938,0.938 C42.293,61.495,41.872,61.916,41.355,61.916z M57.766,58.31H24.271V36.672c0-0.616,0.495-1.121,1.104-1.121h31.283 c0.61,0,1.106,0.505,1.106,1.121V58.31z"/>
                <path fill="#FFFFFF" d="M44.554,37.93l-1.619,2.304c-0.021,0.027-0.032,0.061-0.046,0.091c0.089,0.012,0.177,0.028,0.265,0.044 c0.142,0.027,0.281,0.059,0.419,0.095c0.088,0.024,0.175,0.049,0.263,0.076l1.463-2.084c0.141-0.199,0.091-0.497-0.109-0.636 c-0.099-0.069-0.219-0.097-0.34-0.075C44.727,37.764,44.623,37.831,44.554,37.93z"/>
                <path fill="#FFFFFF" d="M40.896,40.354c0.131-0.021,0.263-0.041,0.394-0.055c0.086-0.011,0.172-0.018,0.257-0.023l-0.443-2.548 c-0.021-0.121-0.087-0.226-0.187-0.296c-0.102-0.07-0.221-0.097-0.341-0.076c-0.219,0.039-0.378,0.227-0.378,0.449 c0,0.027,0.002,0.053,0.006,0.078l0.438,2.518C40.728,40.384,40.811,40.369,40.896,40.354z"/>
                <path fill="#FFFFFF" d="c-0.101-0.07-0.222-0.098-0.343-0.077c-0.12,0.022-0.225,0.088-0.293,0.186c-0.056,0.078-0.086,0.169-0.086,0.265 c0,0.026,0.003,0.054,0.008,0.079c0.022,0.12,0.087,0.225,0.187,0.293l2.03,1.428c0.088-0.044,0.175-0.088,0.263-0.129 C39.03,40.918,39.171,40.859,39.311,40.802z"/>
                <path fill="#FFFFFF" d="M44.22,52.021H38.94v-7.579c0-1.457,1.182-2.638,2.639-2.638l0,0c1.459,0,2.641,1.181,2.641,2.638V52.021z"/>
                <path fill="#FFFFFF" d="M44.864,52.667h-6.569v-8.226c0-1.811,1.474-3.284,3.284-3.284c1.812,0,3.285,1.474,3.285,3.284V52.667z M39.586,51.376h3.987v-6.935c0-1.099-0.895-1.993-1.994-1.993c-1.099,0-1.993,0.895-1.993,1.993V51.376z"/>
                <polygon fill="#FFFFFF" points="44.354,47.489 38.806,47.489 38.806,52.225 40.213,52.225 40.213,54.87 40.858,54.87 40.858,52.225 42.019,52.225 42.019,54.87 42.664,54.87 42.664,52.225 44.354,52.225"/>
              </svg>
            </div>
            <h4 class="text-center mt-2 color-blue">電子零組件業</h4>
          </li>
          <li class="col-12 col-md-6 col-lg-4">
            <div class="icon d-flex justify-content-center align-items-center">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="circle" cx="50" cy=50 r="50" fill="#98d24d" />
                <path fill="#FFFFFF" d="M62.754,57.994H56.66V43.326c0-3.902-3.164-7.068-7.067-7.068c-3.904,0-7.069,3.166-7.069,7.068v14.668 h-6.091v6.112h26.321V57.994z"/>
                <path fill="#FFFFFF" d="M62.754,65.606H36.433c-0.829,0-1.5-0.672-1.5-1.5v-6.112c0-0.828,0.671-1.5,1.5-1.5h4.591V43.326 c0-4.725,3.844-8.568,8.569-8.568c4.724,0,8.567,3.844,8.567,8.568v13.168h4.594c0.828,0,1.5,0.672,1.5,1.5v6.112 C64.254,64.935,63.582,65.606,62.754,65.606z M37.933,62.606h23.321v-3.112H56.66c-0.828,0-1.5-0.672-1.5-1.5V43.326 c0-3.07-2.498-5.568-5.567-5.568c-3.071,0-5.569,2.498-5.569,5.568v14.668c0,0.828-0.672,1.5-1.5,1.5h-4.591V62.606z"/>
                <line fill="#FFFFFF" x1="35.525" y1="34.877" x2="39.733" y2="39.084"/>
                <rect x="34.654" y="35.254" transform="matrix(0.7072 0.707 -0.707 0.7072 37.1642 -15.7771)" fill="#FFFFFF" width="5.952" height="3.453"/>
                <line fill="#FFFFFF" x1="64.476" y1="33.601" x2="59.791" y2="38.283"/>
                <rect x="60.408" y="32.629" transform="matrix(0.7074 0.7068 -0.7068 0.7074 43.5854 -33.4003)" fill="#FFFFFF" width="3.451" height="6.625"/>
                <line fill="#FFFFFF" x1="49.983" y1="27" x2="49.983" y2="33.601"/>
                <rect x="48.258" y="27" fill="#FFFFFF" width="3.451" height="6.601"/>
                <rect x="44.732" y="63.699" fill="#FFFFFF" width="2.5" height="9.301"/>
                <rect x="51.955" y="63.699" fill="#FFFFFF" width="2.5" height="9.301"/>
              </svg>
            </div>
            <h4 class="text-center mt-2 color-blue">LED 產業</h4>
          </li>
          <li class="col-12 col-md-6 col-lg-4">
            <div class="icon d-flex justify-content-center align-items-center">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="circle" cx="50" cy=50 r="50" fill="#98d24d" />
                <path fill="#FFFFFF" d="M68.796,44.26L56.86,41.332c-0.296-0.071-0.59-0.08-0.873-0.042v-9.543c0.644-0.519,1.005-1.35,0.873-2.221
                    c-0.206-1.307-1.432-2.201-2.733-1.998l-22.72,3.537c-1.308,0.203-2.201,1.425-1.999,2.729c0.096,0.614,0.421,1.135,0.87,1.493
                    v35.719c0,0.823,0.667,1.493,1.496,1.493h22.721H67.96c0.824,0,1.492-0.67,1.492-1.493V48.629c0.528-0.314,0.939-0.828,1.099-1.477
                    C70.864,45.869,70.078,44.573,68.796,44.26z M33.27,35.617l19.729-3.069v11.935v25.028h-7.542v-7.487h-4.646v7.487H33.27V35.617z
                     M66.462,69.511h-3.859v-3.827h-2.754v3.827h-3.861v-23.16l10.475,2.357V69.511z"/>
                <rect x="40.811" y="36.835" fill="#FFFFFF" width="4.646" height="4.526"/>
                <rect x="40.811" y="45.02" fill="#FFFFFF" width="4.646" height="4.529"/>
                <rect x="40.811" y="53.206" fill="#FFFFFF" width="4.646" height="4.527"/>
                <rect x="59.849" y="50.401" fill="#FFFFFF" width="2.754" height="2.684"/>
                <rect x="59.849" y="55.252" fill="#FFFFFF" width="2.754" height="2.684"/>
                <rect x="59.849" y="60.104" fill="#FFFFFF" width="2.754" height="2.682"/>
              </svg>
            </div>
            <h4 class="text-center mt-2 color-blue">傳統製造業</h4>
          </li>
          <li class="col-12 col-md-6 col-lg-4">
            <div class="icon d-flex justify-content-center align-items-center">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="circle" cx="50" cy=50 r="50" fill="#98d24d" />
                <path fill="#FFFFFF" d="M58.726,47.821c3.707,0,6.546-2.838,6.546-6.545c0-3.715-2.839-6.547-6.546-6.547
                  c-3.708,0-6.541,2.832-6.541,6.547C52.185,44.983,55.018,47.821,58.726,47.821 M41.273,47.821c3.707,0,6.547-2.838,6.547-6.545
                  c0-3.715-2.84-6.547-6.547-6.547c-3.713,0-6.544,2.832-6.544,6.547C34.729,44.983,37.561,47.821,41.273,47.821 M41.273,52.181
                  C36.256,52.181,26,54.8,26,59.819v5.451h30.544v-5.451C56.544,54.8,46.291,52.181,41.273,52.181 M58.726,52.181
                  c-0.652,0-1.307,0-2.182,0.217c2.617,1.744,4.365,4.365,4.365,7.422v5.451H74v-5.451C74,54.8,63.741,52.181,58.726,52.181"/>
              </svg>
            </div>
            <h4 class="text-center mt-2 color-blue">基金會 / 協會</h4>
          </li>
          <li class="col-12 col-md-6 col-lg-4">
            <div class="icon d-flex justify-content-center align-items-center">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="circle" cx="50" cy=50 r="50" fill="#98d24d" />
                <path fill="#FFFFFF" d="M78,31.83H45.4v28.391h14.809c1.162-2.546,3.725-4.325,6.703-4.325c2.977,0,5.541,1.779,6.703,4.325H78
                    V31.83z"/>
                <path fill="#FFFFFF" d="M35.864,55.896c2.445,0,4.608,1.199,5.949,3.037v-19.08H29.448L22,48.079v12.136h7.164
                    C30.326,57.668,32.889,55.896,35.864,55.896z M26.576,48.853l4.158-4.938h6.606v8.848H26.576V48.853z"/>
                <path fill="#FFFFFF" d="M35.864,58.364c-2.706,0-4.901,2.195-4.901,4.899c0,2.708,2.195,4.906,4.901,4.906
                    c2.709,0,4.903-2.198,4.903-4.906C40.767,60.56,38.573,58.364,35.864,58.364z"/>
                <path fill="#FFFFFF" d="M66.912,58.364c-2.709,0-4.903,2.195-4.903,4.899c0,2.708,2.194,4.906,4.903,4.906
                    c2.705,0,4.9-2.198,4.9-4.906C71.812,60.56,69.617,58.364,66.912,58.364z"/>
              </svg>
            </div>
            <h4 class="text-center mt-2 color-blue">流通服務業</h4>
          </li>
          <li class="col-12 col-md-6 col-lg-4">
            <div class="icon d-flex justify-content-center align-items-center">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="circle" cx="50" cy=50 r="50" fill="#98d24d" />
                <polygon fill="#FFFFFF" points="29.318,39.396 50.742,24.933 72.165,39.396   "/>
                <path fill="#FFFFFF" d="M36.354,64.065c0,0.963-0.781,1.746-1.746,1.746h-3.545c-0.964,0-1.744-0.783-1.744-1.746V42.919
                    c0-0.963,0.78-1.744,1.744-1.744h3.545c0.965,0,1.746,0.781,1.746,1.744V64.065z"/>
                <path fill="#FFFFFF" d="M71.294,68.032c0.963,0,1.744,0.779,1.744,1.744v3.545c0,0.965-0.781,1.746-1.744,1.746H28.708
                    c-0.964,0-1.746-0.781-1.746-1.746v-3.545c0-0.965,0.782-1.744,1.746-1.744H71.294z"/>
                <path fill="#FFFFFF" d="M72.165,64.065c0,0.963-0.781,1.746-1.745,1.746h-3.545c-0.964,0-1.745-0.783-1.745-1.746V42.919
                    c0-0.963,0.781-1.744,1.745-1.744h3.545c0.964,0,1.745,0.781,1.745,1.744V64.065z"/>
                <path fill="#FFFFFF" d="M54.26,64.065c0,0.963-0.782,1.746-1.745,1.746h-3.546c-0.964,0-1.744-0.783-1.744-1.746V42.919
                    c0-0.963,0.78-1.744,1.744-1.744h3.546c0.963,0,1.745,0.781,1.745,1.744V64.065z"/>
              </svg>
            </div>
            <h4 class="text-center mt-2 color-blue">金融業</h4>
          </li>
          <li class="col-12 col-md-6 col-lg-4">
            <div class="icon d-flex justify-content-center align-items-center">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle class="circle" cx="50" cy=50 r="50" fill="#98d24d" />
                <path fill="#FFFFFF" d="M71.345,37.172l-2.688-0.708c-0.141-0.448-0.324-0.877-0.54-1.287l1.403-2.409
                    c0.445-0.825,0.638-1.672,0-2.31c-0.638-0.64-1.537-0.436-2.311,0.001l-2.447,1.425c-0.393-0.203-0.805-0.375-1.234-0.506
                    l-0.723-2.745C62.535,27.733,62.073,27,61.171,27s-1.393,0.779-1.635,1.633l-0.738,2.803c-0.398,0.133-0.781,0.295-1.15,0.488
                    l-2.515-1.465c-0.827-0.446-1.673-0.641-2.31,0c-0.64,0.637-0.435,1.534,0,2.31l1.486,2.552c-0.178,0.353-0.334,0.718-0.455,1.101
                    l-2.857,0.751c-0.898,0.271-1.634,0.731-1.634,1.637c0,0.901,0.779,1.393,1.634,1.632l2.855,0.754
                    c0.123,0.38,0.278,0.746,0.457,1.101l-1.486,2.548c-0.446,0.829-0.64,1.675,0,2.314c0.637,0.637,1.535,0.431,2.31,0l2.515-1.467
                    c0.367,0.193,0.752,0.355,1.15,0.489l0.738,2.8c0.271,0.9,0.732,1.636,1.635,1.636s1.394-0.78,1.635-1.636l0.723-2.742
                    c0.431-0.135,0.842-0.305,1.236-0.506l2.445,1.426c0.826,0.444,1.673,0.637,2.311,0c0.639-0.64,0.434-1.539,0-2.312l-1.403-2.407
                    c0.217-0.41,0.399-0.84,0.541-1.288l2.687-0.709c0.898-0.271,1.635-0.73,1.635-1.634S72.199,37.413,71.345,37.172z M61.248,42.019
                    c-1.774,0-3.212-1.438-3.212-3.21c0-1.774,1.438-3.215,3.212-3.215c1.772,0,3.212,1.44,3.212,3.215
                    C64.46,40.581,63.021,42.019,61.248,42.019z"/>
                <path fill="#FFFFFF" d="M56.194,55.962l-2.729-0.719c-0.08-0.383-0.184-0.76-0.304-1.129l2.003-1.987
                    c0.646-0.684,1.052-1.451,0.6-2.232s-1.371-0.816-2.233-0.599l-2.732,0.745c-0.259-0.287-0.531-0.56-0.818-0.818l0.745-2.735
                    c0.215-0.911,0.183-1.781-0.6-2.229c-0.781-0.452-1.595-0.022-2.232,0.597l-1.987,2.003c-0.368-0.119-0.745-0.222-1.129-0.303
                    l-0.719-2.729c-0.27-0.896-0.731-1.632-1.634-1.632c-0.901,0-1.392,0.778-1.633,1.632l-0.718,2.729
                    c-0.385,0.081-0.76,0.184-1.13,0.303l-1.987-2.003c-0.685-0.644-1.45-1.049-2.232-0.597c-0.782,0.448-0.817,1.37-0.599,2.229
                    l0.747,2.734c-0.288,0.26-0.562,0.53-0.821,0.819l-2.733-0.745c-0.914-0.216-1.781-0.183-2.231,0.599
                    c-0.452,0.781-0.022,1.596,0.597,2.232l2.002,1.987c-0.119,0.369-0.222,0.746-0.303,1.129l-2.727,0.719
                    c-0.899,0.27-1.635,0.731-1.635,1.636c0,0.901,0.779,1.392,1.635,1.633l2.727,0.72c0.081,0.384,0.184,0.76,0.303,1.129
                    l-2.002,1.987c-0.645,0.684-1.049,1.452-0.597,2.232c0.45,0.783,1.37,0.816,2.231,0.596l2.733-0.741
                    c0.259,0.286,0.533,0.56,0.82,0.817l-0.746,2.733c-0.215,0.914-0.184,1.781,0.598,2.232c0.783,0.452,1.596,0.022,2.233-0.598
                    l1.987-2.004c0.369,0.12,0.746,0.223,1.13,0.304l0.718,2.727c0.27,0.9,0.732,1.635,1.633,1.635c0.903,0,1.393-0.78,1.634-1.635
                    l0.719-2.727c0.385-0.081,0.762-0.184,1.13-0.304l1.986,2.002c0.684,0.646,1.452,1.052,2.233,0.6
                    c0.782-0.451,0.816-1.371,0.599-2.232l-0.745-2.735c0.287-0.256,0.56-0.53,0.818-0.815l2.732,0.741
                    c0.915,0.218,1.781,0.186,2.233-0.596c0.452-0.78,0.021-1.597-0.6-2.232l-2.003-1.987c0.12-0.369,0.224-0.745,0.304-1.129
                    l2.729-0.72c0.898-0.27,1.633-0.731,1.633-1.633C57.827,56.693,57.049,56.204,56.194,55.962z M42.424,62.264
                    c-2.576,0-4.667-2.089-4.667-4.666c0-2.578,2.09-4.668,4.667-4.668c2.578,0,4.667,2.09,4.667,4.668
                    C47.091,60.175,45.002,62.264,42.424,62.264z"/>
              </svg>
            </div>
            <h4 class="text-center mt-2 color-blue">其他</h4>
          </li>
          <li class="col-12 col-md-6 col-lg-4">
            <div class="icon d-flex justify-content-center align-items-center">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="100px" height="100px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                <path fill="#98d24d" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path>
              </svg>
            </div>
            <h4 class="text-center mt-2 color-blue">生技/藥品/醫療業</h4>
          </li>
          <li class="col-12 col-md-6 col-lg-4">
            <div class="icon d-flex justify-content-center align-items-center">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="100px" height="100px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                <circle class="circle" cx="12" cy=12 r="12" fill="#98d24d" />
                <path fill="#ffffff" d="M13 13v8h8v-8h-8zM3 21h8v-8H3v8zM3 3v8h8V3H3zm13.66-1.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65z"/>
              </svg>
            </div>
            <h4 class="text-center mt-2 color-blue">軟體/系統整合服務業</h4>
          </li>
      </ul>
    </div>
    <ul id="support">
      <li>
        <h4 class="color-blue">半導體業</h4>
        <p>佳霖科技、沛亨半導體、普誠科技、技鼎、德技集團、韓美半導體、笙泉科技、聚積科技、資騰科技、禾瑞亞科技</p>
      </li>
      <li>
        <h4 class="color-blue">電腦周邊產業</h4>
        <p>信邦電子、德律科技、映泰、新巨、安勤科技、翔宇科技、南京資訊</p>
      </li>
      <li>
        <h4 class="color-blue">電子零組件業</h4>
        <p>雷笛克光學、台灣港建、鎰福電子</p>
      </li>
      <li>
        <h4 class="color-blue">LED 產業</h4>
        <p>光磊科技、景傳光電</p>
      </li>
      <li>
        <h4 class="color-blue">傳統製造業</h4>
        <p>德淵、士林電機、羅昇企業、<a href="/events/181">科定</a>、<a href="https://marketing.ares.com.tw/newsletter/2007-08/product-2">永德福汽車</a>、大井泵浦、開元食品、耐落集團、長華塑膠、台灣東方馬達、尖點科技、國產建材、中國砂輪、環球水泥</p>
      </li>
      <li>
        <h4 class="color-blue">基金會 / 協會</h4>
        <p>台北金融研究發展基金會</p>
      </li>
      <li>
        <h4 class="color-blue">流通服務業</h4>
        <p>飛泰貿易、曜亞國際、凌騰科技</p>
      </li>
      <li>
        <h4 class="color-blue">金融業</h4>
        <p>富蘭克林投信、安泰銀行</p>
      </li>
      <li>
        <h4 class="color-blue">其他</h4>
        <p>中鼎工程、喜提達物流、一申國際、大紀元、鼎鼎聯合行銷、台一國際投資顧問、京懋建設</p>
      </li>
      <li>
        <h4 class="color-blue">生技/藥品/醫療業</h4>
        <p>培力藥品、再生緣生物科技、科懋生物科技、信東生技、中美製藥、哈佛健診、華聯生技</p>
      </li>
      <li>
        <h4 class="color-blue">軟體/系統整合服務業</h4>
        <p>中菲電腦、蒙恬科技、國眾電腦</p>
      </li>
    </ul>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">成功案例</h2>
      <hr>
      <div class="swiper-container bg-white">
        <div class="swiper-wrapper">
<?php
$swiper_item='';
foreach ($swiper as $key ) {
  $swiper_item = $swiper_item.'<div class="swiper-slide"><img class="img-fluid" src="/img/product/crm/logo/'.$key['img'].'" alt="'.$key['name'].'" title="'.$key['name'].'"></div>';
}
echo $swiper_item;
?>
        </div>
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>
  </section>
  <section class="list">
    <div class="container">
<?php
$product='gd-crm';
$event_type='best_practice';
require($_SERVER['DOCUMENT_ROOT'].'/template/product-article-list.php');
?>
    </div>
  </section>
<?php
$eventsConsult='/products/gd-crm/consult/';
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/lib/swiper4.3.3/swiper.min.js" defer></script>
<script src="/js/gd-crm.js" defer></script>
</body>
</html>

