<?php
$db = new PDO("sqlite:/example/global/servise.db");
putenv("TZ=ASIA/TAIPEI");

$html = '';
$count = 1;
$result = $db->query("SELECT * FROM question");
foreach ($result->fetchAll() as $row) {
  $html=$html.'<tr><td>'.$count.'</td><td>'.$row['keyword'].'</td><td>'.$row['reply'].'</td></tr>';
  $count++;
}
?>

<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<style>
:root{
  --input-height:40px;
}
#chat-toggle{
  position: fixed;
  right:16px;
  bottom:16px;
}
#chat-dialogue{
  display: none;
  opacity: 0;
  position: fixed;
  right:14px;
  bottom:60px;
}
.chatroom-wrap{
  font-size:14px;
  width: 428px;
  max-width: 98%;
  display: none;
  /* border:1px solid #f0eff3; */
  box-shadow: 0 0 8px #999;
  position:fixed;
  right:8px;
  bottom:0;
  z-index: 1400;
  border-radius: 10px 10px 0 0;
  overflow: hidden;
}
.chat-header{
  background-color: #0195ce;
  cursor: pointer;
  text-align: center;
  color:#fff;
  padding: .5rem;
  font-size: 16px;
}
.chat-header::after{
  content:'';
  clear:both;
}
#chat-close{
  float:right;
}
.chat-host{
  display: inline-flex;
}
.chat-host-inner,.chat-guest-inner{
  display: inline-block;
  max-width:calc(100% - 52px);
  padding:4px;
  margin:8px;
  border-radius: 0 8px 8px;
  background-color: #fff;
  box-shadow: 0 0 8px #aaa;
  position: relative;
}
.chat-host-inner{
  padding:0;
}
.chat-host-inner>div>*{
  padding:4px;
}
.chat-guest-inner{
  border-radius: 8px 8px 0 8px;
  background-color: #2858aa;
  color:#fff;
}
.chatroom{
  height: calc(100vh - 76px);
  overflow-y: auto;
  background-color: #f0eff3;
}
.chat-guest{
  text-align: right;
}
#chat-enter,#chat-input{
  -webkit-appearance: none;
  appearance: none;
  height: var(--input-height);
  background-color: #fff;
  border:1px solid #f0eff3;
  outline: none;
}
#chat-input{
  border-right:none;
}
#chat-enter{
  width: 48px;
  flex-shrink: 0;
  border-left:none;
}
#keywords-list{
  display: none;
  position: absolute;
  left: 0;
  bottom: var(--input-height);
  width: 100%;
  max-height: 320px;
  overflow-y:auto;
  background-color: #fff;
  border-top:1px solid #ccc;
}
#keywords-list .keyword{
  cursor: pointer;
}
#keywords-list .keyword:hover{
  background-color: #e9e9ea;
}
#keywords-list .keyword+.keyword{
  border-top:1px solid #d8d8d8;
}
.chat-host-inner-click{
  display: block;
  cursor: pointer;
  border-top:1px solid #d8d8d8;
  padding:0;
  color:#2858aa;
  text-align: center;
}
.chat-host-inner-click+*{
  border-top:1px solid #d8d8d8;
}
#chat-input-form{
  display: flex;
}
@media (min-width:1200px){
  #chat-toggle:hover #chat-dialogue{
    display: inline;
    opacity: 1;
    transition:opacity .4s;
  }
}
@media (min-height:480px){
  .chatroom{
    height: 440px;
    max-height: calc(100vh - 76px);
  }
}
</style>
<div class="container">
<div id="chat-toggle">
  <img id="chat-dialogue" loading="lazy" width="257" height="150" src="https://www.ares.com.tw/img/dialogue.svg" alt="*">
  <img class="rounded-circle" loading="lazy" width="48" height="48" src="https://www.ares.com.tw/img/atong.svg" alt="通">
</div>

<div class="chatroom-wrap" data-nosnippet aria-hidden="true">
  <div class="chat-header">
    <span>資通電腦智能客服</span>
    <div id="chat-close">
      <svg width="24" height="24" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
        <path fill="currentColor" d="M19,6.4L17.6,5L12,10.6L6.4,5L5,6.4l5.6,5.6L5,17.6L6.4,19l5.6-5.6l5.6,5.6l1.4-1.4L13.4,12L19,6.4z"/>
      </svg>
    </div>
  </div>
  <div class="chatroom">
    <div class="chat-host">
      <img class="rounded-circle" loading="lazy" width="40" height="40" src="https://www.ares.com.tw/img/atong-s.svg" alt="通">
      <div class="chat-host-inner">
        <div>
          <div>哈囉！我是阿通~<br>如果想了解產品或相關資訊，請輸入重點文字，例如：MES、人資系統、網站弱點掃描，會出現選項供您選擇。<br>也可點選下方按鈕觀看：</div>
          <a class="chat-host-inner-click" href="https://www.ares.com.tw/profile/" rel="noopener noreferrer" target="_blank">關於資通</a>
          <a class="chat-host-inner-click" href="https://www.ares.com.tw/products/" rel="noopener noreferrer" target="_blank">產品服務</a>
          <a class="chat-host-inner-click" href="https://www.104.com.tw/company/9l7gjnk" rel="noopener noreferrer" target="_blank">熱門職缺</a>
          <a class="chat-host-inner-click" href="https://www.ares.com.tw/epaper/" rel="noopener noreferrer" target="_blank">資通電子報</a>
        </div>
      </div>
    </div>
  </div>
  <div>
    <form id="chat-input-form" name="chat-input-form" method="post" onsubmit="return chatCheck();">
      <input type="text" id="chat-input" name="chat-input" autocomplete="off" maxlength="10" class="w-100">
      <div id="keywords-list">
        <!-- <div class="keyword p-3"></div> -->
      </div>
      <button type="submit" id="chat-enter"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></button>
    </form>
  </div>
</div>



<br>
<table class="table table-bordered">
<?php echo $html; ?>
</table>
</div>


<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
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
      url: 'chat_keyword.php',
      data: chatData,
    })
    .done(function(data){
      var array = $.parseJSON(data);
      if(array){
        let $html ='';
        array.forEach(function(e) {
          // let ind = e.indexOf(chatInputValue);
          // $html = `${$html}${str.substr(0, ind)}<strong>${str.substr(ind, chatInputValue.length)}</strong>${str.substr(ind + chatInputValue.length)}`;
          $html = `${$html}<div class="keyword p-2">${e.keyword}</div>`;
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
  let $text = $(this).text();
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
                      <img class="rounded-circle" loading="lazy" width="40" height="40" src="${chatIcon}" alt="資">
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
      url: 'chat_post.php',
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
                              <img class="rounded-circle" loading="lazy" width="40" height="40" src="${chatIcon}" alt="資">
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
</script>
</body>
</html>