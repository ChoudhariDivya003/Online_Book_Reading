<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="pic-ctn">
        <img src="bookweb/homepage1.jpg" class="pic">
        <img src="bookweb/homepage3.jpg" class="pic">
      </div>

<style>
.pic-ctn {
width: 50%;
height: auto;
left: 15%;
top: 32px;
}

@keyframes display { //Adjust as per number of pics
0% {
transform: translateX(1200px);
opacity: 0;
}
10% {
transform: translateX(0);
opacity: 1;
}
20% {
transform: translateX(0);
opacity: 1;
}
30% {
transform: translateX(-1200px);
opacity: 0;
}
100% {
transform: translateX(-1200px);
opacity: 0;
}
}

.pic-ctn {
position: absolute;
width: 1200vw;
height: 3200px;
margin-top: 70px;
}

.pic-ctn > img {
position: absolute;
top: 0;
right: 15px;
left: calc(50% - 100px);
opacity: 0;
animation: display 15s infinite;
}

.pic{
position: absolute;
max-width: 400px;
top: 200;
right: 105;

}

img:nth-child(2) { //Adjust as per no. of pics
animation-delay: 5s;
}
img:nth-child(3) {
animation-delay: 10s;
}
</style>
</body>
</html>