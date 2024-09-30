<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8" />
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <link rel="stylesheet" href="https://transloadit.edgly.net/releases/uppy/v1.2.0/uppy.min.css">
</head>
<body>

<div>
  <div>
    <h5>autoProceed is on</h5>

    <!-- Target DOM node #1 -->
    <div class="UppyDragDrop-One"></div>

    <!-- Progress bar #1 -->
    <div class="UppyDragDrop-One-Progress"></div>
  </div>

  <div>
    <h5>autoProceed is off</h5>

    <!-- Target DOM node #2 -->
    <div id="UppyDragDrop-Two"></div>

    <!-- Progress bar #2 -->
    <div class="UppyDragDrop-Two-Progress"></div>
    <div id="drag-drop-area"></div>
    <div class="UploadForm"></div>

    <button class="UppyDragDrop-Two-Upload">Upload</button>
  </div>
</div>
<script src="https://transloadit.edgly.net/releases/uppy/v1.2.0/uppy.min.js"></script>
<script>
var uppy = Uppy.Core()
.use(Uppy.Dashboard, {
  inline: true,
  target: '#drag-drop-area'
})
.use(Uppy.Tus, {endpoint: 'http://test.ares.com.tw/doyouknowdeway/'})
.use(ProgressBar, {
  target: '.UploadForm',
  fixed: false,
  hideAfterFinish: true
})

uppy.on('complete', (result) => {
  console.log('Upload complete! We’ve uploaded these files:', result.successful)
})
</script>
</body>
</html>