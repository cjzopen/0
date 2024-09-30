function embed_links(range){
  var is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
  if(!is_safari){
    range = range || 'body';
      $.add_links = function(node, te, ln) {
        var pos, skip, spannode, middlebit, endbit, middleclone;
        skip = 0;
        if (node.nodeType == 3) {
          pos = node.data.toUpperCase().indexOf(te);
          if (pos >= 0 && node.parentNode.className != 'keyword') {
            var pre = node.nodeValue.substr(pos - 1, 1);
            var post = node.nodeValue.substr(pos + te.length, 1)
            spannode = document.createElement('a');
            spannode.href = ln;
            spannode.className = 'keyword';
            // spannode.target = '_blank';
            middlebit = node.splitText(pos);
            endbit = middlebit.splitText(te.length);
            middleclone = middlebit.cloneNode(true);
            spannode.appendChild(middleclone);
            middlebit.parentNode.replaceChild(spannode, middlebit);
            skip = 1;
          }
        } else if (node.nodeType == 1 && node.childNodes && !/(script|style|iframe)/i.test(node.tagName) && node.nodeName != 'A') {
          for (var i = 0; i < node.childNodes.length; ++i) {
            i += $.add_links(node.childNodes[i], te, ln);
          }
          // $.add_links(node.childNodes[0], te, ln);
        }
        return skip;
      }

      function set_link(keyword, url) {
        this.keyword = keyword;
        this.url = url;
      }

var links = new Array();
//英文關鍵字必需全部大寫
links.push(new set_link('ORACLE ERP LOCAL TEMPLATE', 'https://www.ares.com.tw/products/Local-Template/'));
links.push(new set_link('ORACLE 軟體服務', 'https://oracle.ares.com.tw/'));
links.push(new set_link('ORACLE 顧問服務', 'https://oracle.ares.com.tw/'));
links.push(new set_link('金融服務', 'https://www.ares.com.tw/products/#financial'));
links.push(new set_link('軟體服務', 'https://www.ares.com.tw/services/'));
links.push(new set_link('委外服務', 'https://www.ares.com.tw/services/outsourcing/'));
links.push(new set_link('資通服務', 'https://www.ares.com.tw/services/'));
links.push(new set_link('ERP 企業資源規劃系統', 'https://www.ares.com.tw/products/#business'));
links.push(new set_link('HCP 人力資產規劃系統', 'https://hcp.ares.com.tw/'));
links.push(new set_link('CIMES 製造執行系統', 'https://cimes.ares.com.tw/'));
links.push(new set_link('EGUI 電子發票管理系統', 'https://www.ares.com.tw/products/egui/'));
links.push(new set_link('FORTIFY 企業資安監測方案', 'https://www.ares.com.tw/products/fortify/'));
links.push(new set_link('CRM 客戶關係管理系統', 'https://www.ares.com.tw/products/gd-crm/'));
links.push(new set_link('薪資密封袋', 'https://pki.ares.com.tw/products/usp/'));
links.push(new set_link('UPKI 憑證驗證服務系統', 'https://pki.ares.com.tw/'));
links.push(new set_link('GOV 政府專案', 'https://www.ares.com.tw/services/gov/'));
links.push(new set_link('系統整合開發', 'https://www.ares.com.tw/services/system-development-integration/'));
links.push(new set_link('資安顧問服務', 'https://www.ares.com.tw/products/#security'));


    $(range).each(function() {
      for (var i = 0; i < links.length; i++) {
        $.add_links(this, links[i].keyword, links[i].url);
      }
    });
  }else{
    return;
  }


}
