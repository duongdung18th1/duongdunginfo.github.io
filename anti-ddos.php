<?php
session_start();
if (isset($_SERVER['HTTP_CF_VISITOR']) && strpos($_SERVER['HTTP_CF_VISITOR'], 'https') !== false) {$_SERVER['HTTPS']='on';}
if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {$_SERVER['REMOTE_ADDR']=$_SERVER['HTTP_CF_CONNECTING_IP'];}
if (!isset($_SESSION['anti-ddos'])) {
    $_SESSION['anti-ddos']=1;
    $current_url=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    header("refresh:5, $current_url");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Anti DDoS Security Check - Api.ThanhDieu.Com">
  <meta name="author" content="ThanhDieu.Com">
  <title>Anti DDoS — Security Check</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pattaya|Potta One|Rowdies|Braah One|Chivo">
  <link rel="icon" href="https://i.pinimg.com/564x/56/f6/43/56f643d33126d3800d5db8309fafe77c.jpg">
</head>
<body class="bodystyle">
    <style>
        * {
    user-select: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none
}

body {
  /*  background: url('https://i.pinimg.com/564x/ff/5c/33/ff5c3321a863db98821f6045453aac9b.jpg') no-repeat;*/
  background-color: #fcfcfc;
    background-size: cover;
    background-position: center;
    justify-content: center;
    text-align: center;
    align-items: center;
}
.sucurify-icon {

}
.Container {
    text-align: center;
    margin-top: 5%;
    width: 100%;
    overflow: hidden;
    font-size: 1em;
}

@media (max-width: 768px) {
    .Container {
        margin-top: 15%;
        font-size: 0.8em; 
    }
}

.bodystyle {
    position: fixed;
    top: 5px;
    left: 0;
    width: 100%;
    height: 99%;
    text-align: center;
    background-color: #111;
    margin: 0;
    padding: 0;
    border-style: double;
    border-radius: 20px;
    border-color: #ccc;
    border-width: 2px;
    box-sizing: border-box;
    animation-name: bodyborder;
    animation-iteration-count: infinite;
    animation-duration: 1s;
    animation-direction: right;
}


            @keyframes bodyborder {
                30% {
                    border-color: #666
                }

                60% {
                    border-color: #999
                }

                90% {
                    border-color: #ccc
                }
            }

            @media (max-width: 768px) {
  .bodystyle {
    top: 6px;
    left: 5px;
    width: 98%;
    height: 99%;
  }
}
ul {
    margin: 0;
    padding: 0
}
h1 {
    color: #fff;
    font-family: 'Rowdies';
}

h2 {
    font-family: 'Braah One';
    font-size: 25px;
    color: silver;
}

.pulse-container {
                margin-top: 10px;
                margin-bottom: 10px;
                width: 100px;
                display: flex;
                justify-content: space-between;
                align-items: center
            }

            .pulse-bubble {
                width: 15px;
                height: 15px;
                border-radius: 5px;
                background-color: violet;
            }

            .pulse-bubble-1 {
                animation: pulse .4s ease 0s infinite alternate
            }

            .pulse-bubble-2 {
                animation: pulse .4s ease .2s infinite alternate
            }

            .pulse-bubble-3 {
                animation: pulse .4s ease .4s infinite alternate
            }

            @keyframes pulse {
                from {
                    opacity: 1;
                    transform: scale(1)
                }

                to {
                    opacity: .25;
                    transform: scale(.75)
                }
            }

.Blob {
  background: black;
  border-radius: 50%;
  margin: 40px;
  height: 150px;
  width: 150px; 
  box-shadow: 0 1px 7px rgb(231, 231, 231);
  margin-top: 70px;
}
    </style>
    <section id="Image">
  <div class="Container">
    <img class="Blob" src="https://i.pinimg.com/564x/a8/37/77/a83777652c801087a14ce35fa583179d.jpg" alt="ThanhDieuTV">
    <h1>ANTI DDOS — SECURITY CHECK</h1>
    <p style="font-family: Chivo;color: rgb(216, 216, 216);" >You won't see the form anymore.
    <br> We only check browser-based protections.</p>
    <strong style="color: rgb(216, 216, 216);font-family: Chivo;">power by
    <a style="color: #a690d6;" href="//facebook.com/wusthanhdieu" target="about:blank">thanhdieu.com</a>
</strong>
  </div>
</section>
 <div style="margin-top: 15px;" class="Container">
    <h2>- Waiting Security -</h2>
    <center> 
        <div class="pulse-container">
        <div class="pulse-bubble pulse-bubble-1"></div>
        <div class="pulse-bubble pulse-bubble-2"></div>
        <div class="pulse-bubble pulse-bubble-3"></div>
    </div>
    </div>
</center>
<br>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var e=document.createElement("img");
    var i=document.createElement("div");
    i.className="image";
    i.style.position="fixed";
    i.style.right="0px";
    i.style.bottom="0px";
    i.style.zIndex="-1";
    var css=`
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px rgb(106, 96, 255);
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: rgb(0, 255, 98);
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #00ffbc;
        }
    `;
    var style=document.createElement("style");
    style.appendChild(document.createTextNode(css));
    document.head.appendChild(style);
    var m=window.matchMedia("(max-width: 768px)");
    if (m.matches) {
    i.style.display="none";
    }
    e.src="//api.thanhdieu.com/anime-cb.php";
    e.alt="thanhdieu";
    i.appendChild(e);
    document.body.appendChild(i);
});
</script>
</body>
</html>
<?php exit(); }
?>
