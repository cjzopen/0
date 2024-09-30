$(function() {
  var p = $(window).width();
  $(".paging li").hide(),
  p < 500 ? ($(".paging li:lt(3)").show(),
  $(".paging .prev").click(function() {
    var i = $(".paging ul").children("li:visible:first");
    i.prevAll(":lt(3)").show(),
    i.prev().nextAll().hide()
  }),
  $(".paging .next").click(function() {
    var i = $(".paging ul").children("li:visible:last");
    i.nextAll(":lt(3)").show(),
    i.next().prevAll().hide()
  })) : ($(".paging li:lt(5)").show(),
  $(".paging .prev").click(function() {
    var i = $(".paging ul").children("li:visible:first");
    i.prevAll(":lt(5)").show(),
    i.prev().nextAll().hide()
  }),
  $(".paging .next").click(function() {
    var i = $(".paging ul").children("li:visible:last");
    i.nextAll(":lt(5)").show(),
    i.next().prevAll().hide()
  }));

  var abbr_array = $('abbr');
  [].forEach.call(abbr_array, function(abbr) {
    abbr.innerHTML += '<span class="abbr-toggle"></span><div class="abbr-content">'+abbr.getAttribute("title")+'</div>';
  });
  $(document).on('click','abbr',function(){
    $(this).find('.abbr-content').toggle()
  });

  $('#synopsis').appendTo('#content');

  if($('#article .relateArticle').length){
    $('#article').after('<aside class="relativeAside" role="complementary"><div class="relateArticle" itemscope itemtype="http://schema.org/WebPage"><br><p>loading...</p><br></div></aside>');
    var aside = $('aside.relativeAside');
    var inside = $('article .relateArticle');
    aside.find('.relateArticle').html(inside.html());
    inside.remove();
  }else{
    $('#article').css({
      'float':'none',
      'margin-left':'auto',
      'margin-right':'auto'
    })
  }
  // const tooltipsData = [
  //   {selector: '#article a[href*="oracle.ares.com.tw"]', content: '資通電腦是國內最專業的 Oracle 顧問服務團隊，擁有豐富的 Oracle ERP、Agile PLM、Project Costing 及 Oracle Cloud 導入經驗，近年來更輔導多家不同產業的廠商導入 Oracle 先進排程規劃（Advanced Supply Chain Planning；ASCP）更曾獲 Oracle FY06 大中華區最佳應用合作夥伴的獎項肯定。同時，資通亦專注於研發產品技術與系統整合，盼能為企業資訊化提供單一產品到整體的解決方案，服務範疇包括事前規劃、專案導入與系統上線後的支援，以「合適的軟體」和「正確、有效的導入方法」確保專案導入的成功，資通團隊正是 Oracle IT Solution 解決方案與專業顧問諮詢服務的最佳輔導團隊，是亟欲快速提升企業競爭力的最佳合作夥伴。'},
  //   {selector: '#article a[href*="cimes.ares.com.tw"]', content: '資通電腦 ciMes 有經驗豐富的系統導入顧問，可協助企業在評估製造系統時，檢視各產業生產環節真正需求。在台灣 LED 產業市占第一，為國際研究機構 Gartner 台灣唯一建議參考製造執行系統，並榮獲台灣精品獎肯定。目前更有汽車、車用零件、金屬加工及射出成型、光電產業、電子組裝、機械加工、半導體等近百家成功案例。'},
  //   {selector: '#article a[href*="hcp.ares.com.tw"]', content: 'HCP 為跨兩岸的人資系統，適合中大型企業使用，支援多國語言、多集團、多公司、多廠區、多幣別等功能。系統包含 HRM 人資管理模組、HRD 人資發展模組，以及員工／主管自助服務、行動應用 App、商業智慧分析、薪資密封袋等加值服務功能。也提供專業的顧問服務與 62 個最佳人事管理實務流程，能協助企業順利導入系統，並縮短導入時間與成本。HCP 至今已導入超過 500 家工廠，客戶範圍遍及台灣、大陸、越南、印尼、菲律賓等地。'},
  //   {selector: '#article a[href*="ares-pp.ares.com.tw"]', content: 'ARES PP 文件、檔案控管解決方案，可以保護、追蹤、稽核所有的檔案。使用 ARES PP 流程非常簡便，Client 端不需安裝 Agent 程式即可使用。文件可以彈性授權，同時兼顧安全與便利。另外，提供離線文件破解防禦偵測，安全保護無須擔心！更提供特殊的 ARES Privacy Document（.APD）檔案格式，讓檔案傳輸不受限。系統有詳實的稽核紀錄，企業安全有保障，完全符合個資法規定！因應現今智慧型裝置可以輕易攝錄電腦螢幕的問題，ARES PP 也提供了防手機偷拍的功能，真正做到企業資安滴水不漏！'},
  //   {selector: '#article a[href*="pki.ares.com.tw"]', content: '因應資安趨勢，資通電腦於 2002 年起研發網路安全軟體，完成公鑰基礎架構（Public-key infrastructure；PKI）安控系統，以提供完善的整體安全架構規劃、分析與導入為實務重點研發的 ARES uPKI 技術通過美國 Novell Suse YES 認證。相關技術已獲得台灣、大陸、日本及美國等地專利，同時也提供身分認證、電子簽章、加解密、合法授權等 PKI 解決方案。因應新版個資法的時程與內容，資通電腦 uPKI 全產品應用有效從使用者同意及蒐集、認證與存取、資料處理的適法性、存證稽核與保管責任上全面符合法規、達到個資法應用的全方位防護。是建構 PKI 最佳的資訊安全選擇。'},
  // ];
  // tooltipsData.forEach(({selector, content}) => {
  //   new jBox('Tooltip', {
  //     attach: selector,
  //     animation: 'zoomIn',
  //     width: 400,
  //     content,
  //     onCreated: function () {
  //       $('.jBox-Tooltip').attr('aria-hidden', 'true');
  //     }
  //   });
  // });
});