/* 
 * JavaScript desenvolvido pela equipe
 */

// Troca icone plus/minus
function trocaPlusMinus(id){
  var x = document.getElementById("demo"+id).className;

    if(x === "fa fa-plus-circle"){
        document.getElementById("demo"+id).className = "fa fa-minus-circle";
    }else{
        document.getElementById("demo"+id).className = "fa fa-plus-circle";
    };
};