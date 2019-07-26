<script src="js/bootstrap.js"></script>
<script>
    var url = window.location.href;
    var navMenu = document.querySelector('#menu');
    var nomeUrl = url.split('/')[6];
    var nomeArquivo = nomeUrl.split('.php')[0]
    
    if(nomeArquivo === "cadastrar_produto"){
        navMenu.children[1].classList.add("active");
    }else if(nomeArquivo === 'listar_produtos'){
        navMenu.children[2].classList.add("active");
    }else if(nomeArquivo === 'cadastrar_categoria'){
        navMenu.children[3].classList.add("active");
    }else if(nomeArquivo === 'cadastrar_fornecedor'){
        navMenu.children[4].classList.add("active");        
    }else if(nomeArquivo === 'cadastrar_usuario'){
        navMenu.children[5].classList.add("active");
    }else if(nomeArquivo === 'aprovar_usuario'){
        navMenu.children[6].classList.add("active");
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

