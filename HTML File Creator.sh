#!/bin/bash/
read -p "Enter Name Of File:  " var
touch "$var.html"
echo "<html>
<head><title>$var</title>
</head>
<body>
//Write Your Code
</body>
</html>">>$var.html
exit 0; 