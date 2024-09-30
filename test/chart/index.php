<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!-- <form name="kk">
<input type="number" name="k1" value="0" id="k1">
<input type="number" name="k2" value="0" id="k2">
<input type="number" name="k3" value="0" id="k3">
<input type="number" name="k4" value="0" id="k4">
<input type="number" name="k5" value="0" id="k5">
<a href="#" id="start">產生</a>
</form> -->
<div>
  <canvas id="myChart"></canvas>
</div>
<!-- <p>圖片可以右鍵另存：</p> -->
<!-- <img width="720" height="720" src="" id="photo"> -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['本月焦點', '產品特寫', '技術交流', '最新消息', '產品頁CTA', '從瀏覽器觀看', '資通官網', '退訂頁面'],
      datasets: [{
        label: '總人數',
        data: [29, 19, 21, 9, 7, 10, 6, 5],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  // const start = document.getElementById('start');
  // start.addEventListener("click", (event) => {
  //   const ctx = document.getElementById('myChart');

  //   new Chart(ctx, {
  //     type: 'pie',
  //     data: {
  //       labels: ['非常滿意', '滿意', '普通', '不滿意' , '非常不滿意'],
  //       datasets: [{
  //         data: [kk.k1.value, kk.k2.value, kk.k3.value, kk.k4.value, kk.k5.value],
  //         backgroundColor: [ '#fa41e4','#e770ff', '#51bef0', '#f58d25' , '#f5410f'],
  //         borderWidth: 0
  //       }]
  //     }
  //   });
  //   setTimeout(function(){
  //     const dataURL = ctx.toDataURL();
  //     document.getElementById('photo').setAttribute('src', dataURL);
  //   },3000);
  // });
</script>
</body>
</html>