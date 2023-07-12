<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/barcodec.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300;600&family=Noto+Sans+Thai:wght@700&family=Pattaya&display=swap"
        rel="stylesheet">
    <title>Bar-code</title>
</head>
<body>
    <div class="container">
    <div class="input-form">
        <p>Barcode</p>
        <input type="text" class="input" placeholder="Enter Your Value">
        <button class="Create-btn" onclick="barcodeCreate()">Create</button>
        <svg id="barcode"></svg>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
    <script>
        function barcodeCreate() {
        var data = document.querySelector('.input').value;
         JsBarcode('#barcode', data , {
        background : '#fff',
        color : '#000',
        height : 100,
        displayValue : true
    });
}
    </script> 
</body>
</html>