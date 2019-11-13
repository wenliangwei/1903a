<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery.js"></script>
    <script src="jquery.uploadify.js"></script>
    <link rel="stylesheet" href="uploadify.css">
</head>
<body>
<input type="file" id="uploadify" value="上传文件">
</body>
</html>
<script>
    $(document).ready(function(){
        $("#uploadify").uploadify({
            'swf':'uploadify.swf',
            'uploader':'upload.php',
            'onUploadSuccess':function(file,data,msg){


            }
        })
    })
</script>