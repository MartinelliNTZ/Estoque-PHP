
function mascara_cpf() {
    var cpf = document.getElementById("cpf")
    if (cpf.value.length == 3 || cpf.value.length == 7) {
        cpf.value += "."                
    }else if(cpf.value.length ==11){
        cpf.value += "-"
    }
}
function mascara_reais() {
    
    var elemento = document.getElementById('valorUnitario');
    var valor = elemento.value;
    if(valor.length >0){
        valor = valor + '';
        valor = parseInt(valor.replace(/[\D]+/g,''));
        valor = valor + '';
        valor = valor.replace(/([0-9]{2})$/g, ",$1");
    
        if (valor.length > 6) {
        valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
        }
    
        elemento.value = valor;
    }
}
