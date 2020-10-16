<html>
    <head>
        <title>comments</title>
        <script src="jquery-3.4.1.min.js"></script>
         <script src="jquery-ui.js"></script>
        <script>
         $(function(){
             $("#footer").load("footer.html");
            });  
        </script>
    <style>
        body{
            background-color: oldlace;
            font: fantasy;
            text-align: center;
            padding: 20px;
            font-size: 50px;
        }
        .footer{
                padding: 20px;
                font-size: 20px;
                float: right;
                background-color: lightpink;
                width: 40%;
                margin: auto;
            }
    </style>
        </head>
<body>

<?php echo $_POST["comment"]?><br> Thank you for your submission!

<p><a  href="index.html">Click here to return to the homepage</a></p>
    <div class="footer" id="footer"></div>
</body>
</html>