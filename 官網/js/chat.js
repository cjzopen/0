var dataLayer = window.dataLayer || [];
var chatInput = $('#chat-input');
var chatroom = $('.chatroom');
var keywordList = $('#keywords-list');
var chatIcon = 'https://www.ares.com.tw/img/atong-s.svg';

if (!window.document.documentMode){
  $('#chat-toggle').on('click', function(){
    $('.chatroom-wrap').show();
    chatInput.focus();
  });
}
$('.chat-header').on('click', function(){
  $('.chatroom-wrap').hide();
})
chatInput.on('input', function(){
  if($(this).val().length>1){
    let chatInputValue = $(this).val();
    let chatData = {
      keyword: chatInputValue
    }
    $.ajax({
      type: "POST",
      url: '/php/chat_keyword.php',
      data: chatData,
    })
    .done(function(data){
      var array = $.parseJSON(data);
      if(array){
        let $html ='';
        array.forEach(function(e) {
          // let ind = e.indexOf(chatInputValue);
          // $html = `${$html}${str.substr(0, ind)}<strong>${str.substr(ind, chatInputValue.length)}</strong>${str.substr(ind + chatInputValue.length)}`;
          $html = `${$html}<div class="keyword p-2"><svg focusable="false" width="16" height="16" viewBox="0 0 24 24"><path fill="#999999" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg> <span class="the-word">${e.keyword}</span></div>`;
        });
        keywordList.html($html);
        keywordList.show();
      }else{
        keywordList.hide();
      }
    })
  }else{
    keywordList.hide();
  }
});
$(document).on('click','#keywords-list .keyword', function(){
  let $text = $(this).find('.the-word').text();
  chatInput.val($text);
  chatCheck();
  keywordList.hide();
})
$(document).on('click','.chat-host-inner-click.button', function(){
  let $text = $(this).text();
  chatInput.val($text);
  chatCheck();
})

function chatCheck(){
  isPass = true;
  let pattern =new RegExp("[`~!@#$^&*()=|{}':;',\\[\\]<>/?~！@#￥…&*（）——|{}【】‘；：”“'。，、？%]");
  let matchResult = chatInput.val().match(pattern);
  if(chatInput.val().length<1){
    isPass = false;
  }
  if(matchResult){
    isPass = false;
    chatroom.append(`<div class="chat-host d-inline-flex">
                      <img loading="lazy" width="50" height="50" src="${chatIcon}" alt="資">
                      <div class="chat-host-inner d-inline-block">
                        <div>輸入內容含有特殊字元</div>
                      </div>
                    </div>`);
    chatInput.val('');
  }
  if(isPass){
    var chatData = {
      keyword: chatInput.val()
    };
    dataLayer.push({
      'event': 'chat_input',
      'chat_input': chatInput.val()
    });
    $.ajax({
      type: "POST",
      url: '/php/chat_post.php',
      data: chatData,
      beforeSend: function(){
        chatroom.append(`<div class="chat-guest">
                                <div class="chat-guest-inner d-inline-block">
                                  <div class="text-left">${chatInput.val().toString()}</div>
                                </div>
                              </div>`);
        chatInput.val('');
      },
    })
    .done(function(data){
      if(data){
        chatroom.append(`<div class="chat-host d-inline-flex">
                              <img loading="lazy" width="50" height="50" src="${chatIcon}" alt="資">
                              <div class="chat-host-inner d-inline-block">
                                <div>${data}</div>
                              </div>
                            </div>`);
      }else{
        chatroom.append(`<div class="chat-host">
                                <div class="chat-host-inner d-inline-block">
                                  <div>error</div>
                                </div>
                              </div>`);
      }
    })
    .always(function(){
      $('#chat-input').focus();
      keywordList.hide();
      chatroom.animate({
        scrollTop: $('.chatroom')[0].scrollHeight - $('.chatroom')[0].clientHeight
      }, 0);
    })
  }
  return false;
}