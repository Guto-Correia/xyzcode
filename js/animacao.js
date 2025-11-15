
/* ######################################    animacao banner    ################################################ */

$('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });

/* ######################################    animacao ferramentas    ################################################ */
  
$('.linguagens div div').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 200,
  });

/* ######################################    animacao painel serviços    ################################################ */

let botoes = document.querySelectorAll(".tabPainel a");

let texto = document.querySelectorAll(".painelServico article");

// console.log(botoes[2])

for(let i = 0; i < botoes.length; i++){

  botoes[i].onclick = function(){

    // remover a class tabAtiva dos butons
    for(let j = 0; j < botoes.length; j++){
      botoes[j].classList.remove("tabAtivo");
    }

    // adicionar a class tabAtiva so no botao que eu cliquei
    botoes[i].classList.add("tabAtivo");

    // esconder os texto-adicionando a tag oculto neles
    for(let k = 0; k < botoes.length; k++){
      texto[k].classList.add("oculto");
    }
    
    // mostrar o texto referente ao butao
    texto[i].classList.remove("oculto");

  }
}


/* ############# ANIMAÇÃO WOW JS ################## */
new WOW().init();