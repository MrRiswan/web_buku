$(document).on('ready', function(){
    
    'use strict';

     for(var keys=document.querySelectorAll("#calculator span"),operators=["+","-","x","รท"],decimalAdded=!1,i=0;i<keys.length;i++)keys[i].onclick=function(e){var input=document.querySelector(".screen"),inputVal=input.innerHTML,btnVal=this.innerHTML;if("C"==btnVal)input.innerHTML="",decimalAdded=!1;else if("="==btnVal){var equation=inputVal,lastChar=equation[equation.length-1];equation=equation.replace(/x/g,"*").replace(/รท/g,"/"),(operators.indexOf(lastChar)>-1||"."==lastChar)&&(equation=equation.replace(/.$/,"")),equation&&(input.innerHTML=eval(equation)),decimalAdded=!1}else if(operators.indexOf(btnVal)>-1){var lastChar=inputVal[inputVal.length-1];""!=inputVal&&-1==operators.indexOf(lastChar)?input.innerHTML+=btnVal:""==inputVal&&"-"==btnVal&&(input.innerHTML+=btnVal),operators.indexOf(lastChar)>-1&&inputVal.length>1&&(input.innerHTML=inputVal.replace(/.$/,btnVal)),decimalAdded=!1}else"."==btnVal?decimalAdded||(input.innerHTML+=btnVal,decimalAdded=!0):input.innerHTML+=btnVal;e.preventDefault()};

});