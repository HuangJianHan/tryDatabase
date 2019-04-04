<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="bigContent">
        <div id="upContent">
            <div id="letterContent">
                <div id="logo"></div>
            </div>

            <div id="downForm">
                <h1>WIS产品防伪验证码</h1>
                <div id="form">
                    <!-- 防伪码 -->
                    <div id="form_first">
                        <span id="securityCode">防伪码</span>
                        <input type="text" name="first" placeholder="请输入标签上的防伪码"/>
                    </div>
                    <div id="form_second">
                        <span id="verificationCode">验证码</span>
                        <input id="verificationCode_con" type="text" name="second" placeholder="请输入验证码" />
                        <span id="random" onclick="tagF()"></span>
                    </div>
                </div>
                <input type="submit" name="submit" value="点击查询" onclick="confirm_val()"/>
            </div>
        </div>
        <div id="downContent">
            <div id="upContentDown">
                <span id="leftIcon">官方商城</span>
                <span id="rightIcon">官方微信</span>
            </div>
        </div>
        <div id="phone">
            <div id="letter">免费播400-001-1220官方防伪咨询热线</div>
        </div>
    </div>
</body>
</html>
<style>
    *{
        margin:0;
        padding:0;
    }
    html{
        display: flex;
        justify-content: center;
    }
    body{
        font-size: 37.5px;
        height: auto;
    }
    #bigContent{
        overflow: hidden;
        height: auto;
        overflow: hidden;
    }
    #letterContent{
        height:10rem;
    }
    #upContent{
        height: auto;
        background-color: #23a8f5;
        overflow: hidden;
    }
    #upContent #logo{
        background: url(./images/logo.png) no-repeat center;
        width: 100%;
        height: 100%;
        background-size: 40%;
    }

    #upContent #up{
        font-weight: 900;
    }
    #upContent #down{
        font-size: .8rem;
        font-weight: 500;
        line-height: 10%;
    }
    #upContent #up span{
        font-size: 1.5rem;
        font-weight: lighter;
        position: absolute;
        top: 2%;
    }
    #upContent #downForm{
        color: white;
        font-size: 1rem;
        text-align: center;
        position: relative;
        overflow: hidden;
        width: 87%;
        margin-left: 6%;
    }
   
    #form{
        width: 100%;
        height: auto;
        padding-top: 4%;

    }
    #form #form_first,#form #form_second{
        display: inline-block;
        width: 85%;
        padding: 5% 0% 2% 0%;
        border-bottom: 1px solid white;
        text-align: left;
        position: relative;
    }
    
    #form input{
        border: none;
        background-color: rgba(255,255,255,0);
        color: white;
        width: 66%;
        height: 2rem;
        padding-left:10%;
    }
    #form input::placeholder{
        text-align: left;
        color: white;
    }
    #form input::-webkit-input-placeholder{
        text-align: left;
        color: white;
    }
    #form input::-moz-placeholder{
        text-align: left;
        color: white;
    }
    #form input::-ms-input-placeholder{
        text-align: left;
        color: white;
    }
    #random{
        position: absolute;
        top: 20%;
        right: 0%;
        background-color: #7acbfa;
        display: inline-block;
        padding: 3%;
        border-radius: 4px;

    }

    #upContent #downForm input[type="submit"]{
        background-color: white;
        height: 3rem;
        border-radius: .6rem;
        color: #23a8f5;
        margin-top:6%;
        width: 86%;
        margin-bottom: 6%;
        border: none;
    }

    #downContent{
        height: 14rem;
        font-size: 1rem;
    }

    #downContent #upContentDown{
        width: 100%;
        height: 100%;
        overflow: hidden;
        display: -webkit-flex;        
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #downContent #upContentDown #leftIcon,#downContent #upContentDown #rightIcon{
        display: inline-block;
        width: 45%;
        height: 78%;
        text-align: center;
        line-height: 19rem;
    }
    #downContent #upContentDown #leftIcon{
        border-right:1px solid #9e9e9e;
        background: url('./images/logo_2.png') no-repeat center;
        background-size: auto;
    }
    #downContent #upContentDown #rightIcon{
        background: url('./images/logo_3.png') no-repeat center;
        background-size: auto;
    }

    #phone{
        background-color: #1f8fe5;
        color: white;
        font-size: 1rem;
        width: 100%;
        height: 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url(./images/icon1.png);
        background-repeat: no-repeat;
        background-position: 98%;
        background-size: auto;
        padding: 1%;
    }

    @media screen and (min-width:640px){
        body{
            width:640px;
        }
        #phone{
            background-position:77%;
        }
        #form input{
            font-size:1.4rem;
        }
    }
    @media screen and (min-width:320px)
                  and (max-height:568px){
            #phone{
                justify-content:initial;
                background-position: 97%;
            }
        }

    @media screen and (min-width:412px)
                  and (max-height:732px){
                    #form input{
                        font-size:1.2rem;
                    }
                    #upContent #downForm input[type="submit"]{
                        font-size: 1.4rem;
                    }
                  }

    @media screen and (min-width:768px) and (min-height:1024px){
            #upContent #downForm,#form input,#phone{
                font-size: 2.1rem;
            }
            #upContent #downForm input[type="submit"]{
                height: 6rem;
                font-size: 2rem;
            }
            #random{
                padding: 2%;
            }
            #letterContent{
                height: 17rem;
            }
            #phone{
                background-position:92%;
            }
        }
    @media  screen and (min-width:768px)
                       and (min-height:1024px){
        body{
            width:100%;
            margin-left: 0%;
        }
    }
   
    
    
</style>

<script>
    var ran = document.getElementById("random");
    var veri_con = document.getElementById("verificationCode_con");
    var str = "";
    window.onload = function(){
        tagF();
    };
   
    
    var arr = [1,2,3,4,5,6,7,8,9,'A','B','C','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','x','t','u','v','w','x','y','z'];
    function tagF(){
        
        ran.innerHTML = "";
        for(var i = 0;i<4;i++){
            str = arr[Math.floor(Math.random()*arr.length+1)];
            if(str == undefined){
                i -= 1;
                continue;
            }else{
                ran.innerHTML += str;
            }
        }
    }

    function confirm_val(){
        if(veri_con.value == ran.innerHTML){
            alert("输入正确");
        }
        else{
            alert("输入错误");
        }
    }

    
</script>