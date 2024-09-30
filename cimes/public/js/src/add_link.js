// function embed_links(range){
  // range = range || $('body');
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
        spannode.className = 'keyword main-color';
        spannode.rel = 'help';
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

links.push(new set_link('ALM', 'https://cimes.ares.com.tw/products/module/alm.php'));
links.push(new set_link('CMS', 'https://cimes.ares.com.tw/products/module/cms.php'));
links.push(new set_link('LMS', 'https://cimes.ares.com.tw/products/module/lms.php'));
links.push(new set_link('MMS', 'https://cimes.ares.com.tw/products/module/mms.php'));
links.push(new set_link('PM', 'https://cimes.ares.com.tw/products/module/pm.php'));
links.push(new set_link('QC', 'https://cimes.ares.com.tw/products/module/qc.php'));
links.push(new set_link('TOOLING', 'https://cimes.ares.com.tw/products/module/tooling.php'));
links.push(new set_link('WIP', 'https://cimes.ares.com.tw/products/module/wip.php'));
links.push(new set_link('WRP', 'https://cimes.ares.com.tw/products/module/wrp.php'));



  $('.card-text').each(function() {
    for (var i = 0; i < links.length; i++) {
      $.add_links(this, links[i].keyword, links[i].url);
    }
  });

// }
