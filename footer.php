<script src="js/bootstrap.js"></script>
<script>
    var url = window.location.href;
    var navMenu = document.querySelector('#menu');
    console.log(url.split('/'))
    if(url.split('/')[6] === "cadastrar_produto.php"){
        navMenu.children[1].classList.add("active")
    }else{
        navMenu.children[2].classList.add("active")
    }
    
    var alerta = document.querySelector('#alerta');
        if(alerta){
            var fadeEffect = setInterval(function () {
            if (!alerta.style.opacity) {
                alerta.style.opacity = 1;
            }
            if (alerta.style.opacity > 0) {
                alerta.style.opacity -= 0.3;
            } else {
                clearInterval(fadeEffect);
                alerta.style.display = "none";
            }
            }, 500);
        }
</script>

