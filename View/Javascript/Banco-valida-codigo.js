function codigo(){
				var arranjo = [false, false, false, false, false, false];
				var lista = document.getElementsByTagName('input');
				var botao = document.getElementById('enviar');
				botao.style.background = 'rgba(0,0,0,0.1)';
				botao.disabled = true;
				
				lista[0].onkeyup = function(e)
				{
					if(/[0-9]/.test(e.key) && /[0-9]/.test(this.value) == true)
					{
						arranjo[0] = true;
						lista[0].style.border = '1px solid #00b1ea';
						lista[1].focus();
					}
					else
					{
						arranjo[0] = false;
						lista[0].style.border = '1px solid red';
						lista[0].style.outline = 'none';
					}
				};
				lista[1].onkeyup = function(e)
				{
					if(/[0-9]/.test(e.key) && /[0-9]/.test(this.value) == true)
					{
						arranjo[1] = true;
						lista[1].style.border = '1px solid #00b1ea';
						lista[2].focus();
					}
					else
					{
						arranjo[1] = false;
						lista[1].style.border = '1px solid red';
						lista[1].style.outline = 'none';
					}
				};
				lista[2].onkeyup = function(e)
				{
					if(/[0-9]/.test(e.key) && /[0-9]/.test(this.value) == true)
					{
						arranjo[2] = true;
						lista[2].style.border = '1px solid #00b1ea';
						lista[3].focus();
					}
					else
					{
						arranjo[2] = false;
						lista[2].style.border = '1px solid red';
						lista[2].style.outline = 'none';
					}
				};
				lista[3].onkeyup = function(e)
				{
					if(/[0-9]/.test(e.key) && /[0-9]/.test(this.value) == true)
					{
						arranjo[3] = true;
						lista[3].style.border = '1px solid #00b1ea';
						lista[4].focus();
					}
					else
					{
						arranjo[3] = false;
						lista[3].style.border = '1px solid red';
						lista[3].style.outline = 'none';
					}
				};
				lista[4].onkeyup = function(e)
				{
					if(/[0-9]/.test(e.key) && /[0-9]/.test(this.value) == true)
					{
						arranjo[4] = true;
						lista[4].style.border = '1px solid #00b1ea';
						lista[5].focus();
					}
					else
					{
						arranjo[4] = false;
						lista[4].style.border = '1px solid red';
						lista[4].style.outline = 'none';
					}
				};
				lista[5].onkeyup = function(e)
				{
					if(/[0-9]/.test(e.key) && /[0-9]/.test(this.value) == true)
					{
						var largura = arranjo.length;
						var i = 0;
						var j = 4;
						arranjo[5] = true;
						lista[5].style.border = '1px solid #00b1ea';
						
						while(i < largura)
						{
							console.log(arranjo[i]);
							if(arranjo[i])
							{
								j--;
							}
							i++;
							if(i == j)
							{
								botao.disabled = false;
								botao.style.background = '#009ee3';
								lista[6].focus();
							}
						}
				
					}
					else
					{
						arranjo[5] = false;
						lista[5].style.border = '1px solid red';
						lista[5].style.outline = 'none';
					}
				};			
                
				contador();
}

function contador(){
    var tela = document.getElementById('reenviar');
	tela.disabled=true;
	var minuto = 1;
	var segundo = 1;

	var x = setInterval(function(){                   
					
        segundo--;

        if(segundo <= 9 && segundo >= 1 || minuto == 1 && segundo <= 9){
            tela.value = "reenviar em "+ minuto +":"+0+segundo;
         }else if(segundo == 0 && minuto == 0){
             tela.disabled=false;
             tela.value = "reenviar";
          }else{
              tela.value = "reenviar em "+ minuto +":"+segundo;
          }	
                    
        if(segundo == 0 && minuto == 0){
            clearInterval(x);
        }
        if(segundo == 0){   
            minuto--;                     
			segundo = 60;
		}
	}, 1000);
}

document.addEventListener("DOMContentLoaded", codigo);                