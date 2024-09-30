<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$page['title']='股東會資訊 | 資通電腦';
$page['description']='資通電腦股東會相關資料，包含開會通知、議事手冊、議事錄、年報檔案檢視與下載';
$page['canonical']='https://www.ares.com.tw/investor-report/';
$page['css']=array('/css/investor.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');

include($_SERVER['DOCUMENT_ROOT'].'/template/investor-banner.php');
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
          <a href="" itemprop="item"><span itemprop="name">股東會資訊</span></a>
          <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
<?php
$investor = 'report';
include($_SERVER['DOCUMENT_ROOT'].'/template/investor-list.php');
?>
      <div class="col-12 col-md-9">
        <section class="report">
          <h2 class="text-left">股東會相關資料</h2>
          <hr class="d-inline-block">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th class="bg-blue4 text-center"></th>
                <th class="bg-blue4 text-center">開會通知</th>
                <th class="bg-blue4 text-center">議事手冊</th>
                <th class="bg-blue4 text-center">議事錄</th>
                <th class="bg-blue4 text-center">年報</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2023</th>
                <td><a href="/files/pdf/112年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/112年議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/112年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/111年報.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2022</th>
                <td><a href="/files/pdf/111年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/111年議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/111年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/110年報.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2021</th>
                <td><a href="/files/pdf/110年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/110年議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/110年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/109年報.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2020</th>
                <td><a href="/files/pdf/109年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/109年議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/109年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/108年報.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2019</th>
                <td><a href="/files/pdf/108年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/108年議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/108年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/107年報.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2018</th>
                <td><a href="/files/pdf/107年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/107年議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/107年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/106年報.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2017</th>
                <td><a href="/files/pdf/106年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/106年議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/106年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/105年報.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2016</th>
                <td><a href="/files/pdf/105年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/105年股東會議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/105年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/104年報.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2015</th>
                <td><a href="/files/pdf/104年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/104年股東會議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/104年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/fr2014y.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2014</th>
                <td><a href="/files/pdf/103年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/103年股東會議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/103年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/fr2013y.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2013</th>
                <td><a href="/files/pdf/102年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/102年股東會議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/102年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/fr2012y.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2012</th>
                <td><a href="/files/pdf/101年股東會開會通知.pdf">PDF</a></td>
                <td><a href="/files/pdf/101年股東會議事手冊.pdf">PDF</a></td>
                <td><a href="/files/pdf/101年股東會議事錄.pdf">PDF</a></td>
                <td><a href="/files/pdf/fr2011y.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2011</th>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="/files/pdf/fr2010y.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2010</th>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="/files/pdf/fr2009y.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2009</th>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="/files/pdf/fr2008.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2008</th>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="/files/pdf/fr2007y.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2007</th>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="/files/pdf/fr2006y.pdf">PDF</a></td>
              </tr>
              <tr>
                <th scope="row" class="bg-blue4 text-center">2006</th>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="/files/pdf/fr2005y.pdf">PDF</a></td>
              </tr>
              <!-- <tr>
                <th scope="row" class="bg-blue4 text-center">2005</th>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="/files/pdf/fr2004.pdf">PDF</a></td>
              </tr> -->
            </tbody>
          </table>
        </section>
      </div>
    </div>
  </div>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</body>

</html>

