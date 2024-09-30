function embed_links(range){
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
    } else if (node.nodeType == 1 && node.childNodes && !/(script|style)/i.test(node.tagName) && node.nodeName != 'A') {
      for (var i = 0; i < node.childNodes.length; ++i) {
        i += $.add_links(node.childNodes[i], te, ln);
      }
    }
    return skip;
  }

  function set_link(keyword, url) {
    this.keyword = keyword;
    this.url = url;
  }

var links = new Array();
//英文關鍵字必需全部大寫
links.push(new set_link('AFEIS', 'https://www.ares.com.tw/en/products/afeis/'));
links.push(new set_link('CIMES', 'https://cimes.ares.com.tw/en/'));
links.push(new set_link('EARESBANK', 'https://www.ares.com.tw/en/products/earesbank/'));
links.push(new set_link('ARGOERP', 'https://argoerp.ares.com.tw/en/'));
links.push(new set_link('ERP', 'https://argoerp.ares.com.tw/en/'));
// links.push(new set_link('FSTP', 'https://www.ares.com.tw/products/fstp'));
links.push(new set_link('GD-CRM', 'https://www.ares.com.tw/en/products/gd-crm/'));
// links.push(new set_link('EHCP', 'https://hcp.ares.com.tw/en/product/mobile_app/'));
// links.push(new set_link('HCP MOBILE', 'https://hcp.ares.com.tw/en/product/mobile_app/'));
links.push(new set_link('HCP', 'https://hcp.ares.com.tw/en/'));
links.push(new set_link('GV', 'https://www.ares.com.tw/en/products/lt/#gv'));
links.push(new set_link('GIB', 'https://www.ares.com.tw/en/products/lt/#gib'));
links.push(new set_link('NM', 'https://www.ares.com.tw/en/products/lt/#nm'));
links.push(new set_link('EGUI', 'https://www.ares.com.tw/en/products/lt/#egui'));
links.push(new set_link('UIAM', 'https://pki.ares.com.tw/en/products/uiam/'));
links.push(new set_link('UPKI', 'https://pki.ares.com.tw/en/'));
links.push(new set_link('SWIFT', 'https://www.ares.com.tw/en/products/swift/'));
links.push(new set_link('IAM', 'https://pki.ares.com.tw/en/'));
links.push(new set_link('PKI', 'https://pki.ares.com.tw/en/'));
// links.push(new set_link('SSO', 'https://pki.ares.com.tw/en/products/uiam/'));
// links.push(new set_link('SINGLE SIGN ON', 'https://pki.ares.com.tw/en/products/uiam/'));
links.push(new set_link('ARGOHR', 'https://argoerp.ares.com.tw/en/solution/extension/ArgoHR'));
links.push(new set_link('HRM', 'https://hcp.ares.com.tw/en/'));
links.push(new set_link('HR', 'https://hcp.ares.com.tw/en/'));
links.push(new set_link('MES', 'https://cimes.ares.com.tw/en/'));
links.push(new set_link('IFRS', 'https://argoerp.ares.com.tw/en/solution/extension/ArgoIFRS'));
// links.push(new set_link('EUP', 'https://www.ares.com.tw/services/eup'));
// links.push(new set_link('AML', 'https://www.ares.com.tw/products/aml'));
links.push(new set_link('KM', 'http://smekm.moeasmea.gov.tw'));
// links.push(new set_link('CRYPTO SERVER', 'https://pki.ares.com.tw/en/home.asp?productId=cryptoserver'));
// links.push(new set_link("NUNTIO","https://www.ares.com.tw/products/nuntio/"));
links.push(new set_link('OBU', 'https://www.ares.com.tw/en/products/afeis/'));
// links.push(new set_link('GCRS', 'https://www.ares.com.tw/products/gcrs/'));
links.push(new set_link('ARES PRIVACY PROTECTOR', 'https://ares-pp.ares.com.tw/en/'));
links.push(new set_link('ARES PP', 'https://ares-pp.ares.com.tw/en/'));
links.push(new set_link('ORACLE ERP', 'https://www.ares.com.tw/en/products/oracle/'));
links.push(new set_link('ORACLE EBS', 'https://www.ares.com.tw/en/products/oracle/'));
links.push(new set_link('ORACLE CLOUD', 'https://www.ares.com.tw/en/products/oracle/'));
links.push(new set_link('ORACLE', 'https://www.ares.com.tw/en/products/oracle/'));
links.push(new set_link('PLM', 'https://www.ares.com.tw/en/products/plm/'));
// links.push(new set_link('CTR', 'https://www.ares.com.tw/products/ctr/'));
// links.push(new set_link('報表管理系統', 'https://www.ares.com.tw/products/ctr/'));
// links.push(new set_link('CMO', 'https://www.ares.com.tw/products/cmo/'));
// links.push(new set_link('預算編製系統', 'https://www.ares.com.tw/products/cmo/'));
links.push(new set_link('NHMS', 'https://www.ares.com.tw/en/products/nhms/'));
links.push(new set_link('CRYPTO SERVER', 'https://pki.ares.com.tw/en/products/cs/'));
// links.push(new set_link('MOTP', 'https://pki.ares.com.tw/en/products/motp/'));
// links.push(new set_link('V AIR', 'https://www.ares.com.tw/events/ArgoERP-Vair-Contract'));
// links.push(new set_link('ANALYZER', 'https://www.ares.com.tw/products/analyzer/'));
// links.push(new set_link('FORTIFY', 'https://www.ares.com.tw/en/products/fortify/'));
// links.push(new set_link('WEBINSPECT', 'https://www.ares.com.tw/en/products/fortify/'));

// links.push(new set_link('ARES', 'https://www.ares.com.tw/en/'));


  $(range).each(function() {
    for (var i = 0; i < links.length; i++) {
      $.add_links(this, links[i].keyword, links[i].url);
    }
  });

}
