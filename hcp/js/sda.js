window.addEventListener('load', function(){
  const params = new URLSearchParams(window.location.search);
  if(params.has('gclid')){
    let url = window.location.href.split(/[?#]/)[0].toLowerCase();

    const productKeywords = ['hcp', 'e-recruiting', 'knowbe4', 'outsourcing'];

    let product = '';
    for(let keyword of productKeywords){
      if(url.includes(keyword)){
        product = keyword;
        break;
      }
    }

    function setCpcCookie(name, value){
      const expires = new Date();
      expires.setTime(expires.getTime() + (2 * 60 * 60 * 1000)); // 設置 2 小時後過期
      document.cookie = `${name}=${value}; path=/; Secure; SameSite=Strict; expires=${expires.toUTCString()}`;
    }

    setCpcCookie('daer', product);
    window.dataLayer.push({
      'event': 'cpc_enter_'+product
    });
  }
});