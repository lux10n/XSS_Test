# XSS_Test

POC :

the $path  is not sanitized, but thanks to the header content  policy, you can't have anything like inline JS or CSS, you can just XSS the HTML

Ex : GET /test.php?email=xxx@test.cc&xss=<h1>HACKED</h1>&path=<h1%20style="color:red">HACKED</h1>

Result :

![image](https://user-images.githubusercontent.com/52467281/221059036-494d163d-eb38-4171-8d8e-f6be49185923.png)
