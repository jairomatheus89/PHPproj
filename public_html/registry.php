<style>
@media screen and (min-width:480px) {

    body{
        display:flex;
        flex-direction:column;
        align-items:center;
	background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDa596pLL4YpGF-MTCcthbaToGSNMkD1ky2sfjgAjjnmXEcfCreW4mXaU&s=10");
	background-position:center;
        background-size: cover;
    }
    h1{
        margin-top:450px;
        color:rgb(255, 72, 179);
        text-shadow: 2px 2px 1px white;
        font-size:80pt;
        margin-bottom:20px;
    }

    #butzinho{
        color:white;
        border-radius: 20px;
        font-size:50pt;
        border:0;
        background-color:red;
        margin-top:20px;
    }
    #butzinho:hover{
        cursor:pointer;
        border: 2px solid red;
        background-color:white;
        color:red;
    }

    h2{
        margin-top:200px;
        color:rgb(44, 53, 172);
        text-shadow: 2px 2px 1px white;
        font-size:90pt;
    }


    .conteiner{
        width:200px;
        height:200px;
        overflow:hidden;
        border-radius:50%;
        /* background-color:orange; */
    }

    img{
        width: 100%;
        height: 100%;
        object-fit:cover;
        object-position: 0 -100px;
    }

}

</style>


<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST["name"]);
    $nameUpper = strtoupper($name);
    if ($nameUpper === "MARGARETE"){
        echo "<h1><span style='color:red; text-shadow:0px 0px ;'>&#10084;</span>$nameUpper<span style='color:red; text-shadow:0px 0px'>&#10084;</span></h1>";
        echo "<div class='conteiner'><img src='https://media.tenor.com/LpMGDd9aUcMAAAAM/dogs-doggos.gif'></div>";
    }else{
        echo "<h2>$nameUpper</h2>";
    }
    
}
?>
    <button id="butzinho" onclick="clickhome()">Return Home</button>


    <script>
        let homebut = document.getElementByID("butzinho");
        function clickhome() {
            window.location.href = "index.php"
        }


    </script>
</body>
