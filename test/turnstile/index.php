<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form id="test_form" name="test_form" method="POST" onsubmit="return false;">
   <input type="text" placeholder="username"/>
   <input type="text" placeholder="text"/>
   <div class="cf-turnstile" data-sitekey="0x4AAAAAAANYo2zM6zXKKS_y" data-theme="light" data-action="test"></div>
   <button type="submit" value="Submit" onclick="formCheck()">Log in</button>
</form>
<div id="cd"></div>
<div id="end"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer async></script>
<script>
function formCheck(){
  $('#cd').text($('[name="cf-turnstile-response"]').val());
  var user = {
    'cf-turnstile-response': $('[name="cf-turnstile-response"]').val()
  }

  $.ajax({
    type: "POST",
    url: "post.php",
    data: user,
  }).done(function(data) {
    console.log(data);
    data = JSON.parse(JSON.parse(data).toString());
    console.log(data);
    console.log(Object.keys(data).map(k => data[k]));
    // alert(data[0]);
    // alert(data.success);
    // alert(Object.values(data));
    $('#end').html(`
    data.success的值是：${data.success}<br>
    data[0]的值是：${data[0]}<br>
    error-codes的值是：${data['error-codes'].toString()}<br>
    `);
  }).fail(function(){
    alert('pray')
  });
}

</script>
<div style="margin:0 45px;text-align:center">
  <div style="display: flex;justify-content:center;align-items:center;min-height:90px;">
  <div></div>
  </div>
</div>
</body>
</html>