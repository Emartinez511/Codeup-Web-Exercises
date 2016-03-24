(function(){
"use strict"
    var leftInput = "";
    var rightInput = "";
    var opInput = "";
    var totalInput = "0";

    var Clear = function (event) {
        rightInput = "";
        document.getElementById('input_b').value = rightInput;
        leftInput = "";
        document.getElementById('input_a').value = leftInput;
        opInput = "";
        document.getElementById('input_op').value = opInput;
    }

    var Equal = function (event)  {
        switch (opInput){
            case "+":
                totalInput = parseFloat(leftInput) + parseFloat(rightInput);
                break; 
            case "-":
                totalInput = parseFloat(leftInput) - parseFloat(rightInput);
                break;
            case "*":        
                 totalInput = parseFloat(leftInput) * parseFloat(rightInput);
                break;
            case "/":
                totalInput = parseFloat(leftInput) / parseFloat(rightInput);
                break;
            case "sqrt":
                totalInput = Math.sqrt(leftInput)*1;
                break;
            case "^":
                totalInput = Math.pow(leftInput, rightInput);
                break;
            case "binary":
                totalInput = parseInt(leftInput,10).toString(2);
                break;             
            case "toDecimal":
                totalInput = parseInt(leftInput,2).toString(10);
                break;
            case "toHex":
                totalInput = parseInt(leftInput).toString(16);
                break;
        }
                document.getElementById('input_a').value = totalInput;
                document.getElementById('input_op').value = "";
                document.getElementById('input_b').value = "";
    }

    var inputFirst = function (event) {      

        if (opInput !== "") {
                rightInput = rightInput + this.value;
                document.getElementById('input_b').value = rightInput;
            } else {
                leftInput = leftInput + this.value;
                document.getElementById('input_a').value = leftInput;
                }
    }
            
    var Header = function (event) {
                document.getElementById('main_header').innerHTML = "Algebraic!";

            }    


    var Operator = function(event) {
            opInput = this.value;
            document.getElementById('input_op').value = opInput;
            }

// --------OPERATOR EVENT LISTENER

    var opButtons = document.getElementsByClassName('cal_buttons_op');

    for (var i = 0; i < opButtons.length; i++) {
        opButtons[i].addEventListener('click', Operator, false);
    }

// ----------NUMBERS EVENT LISTENER--------

    var numButtons = document.getElementsByClassName('cal_buttons');

    for (var i = 0; i < numButtons.length; i++) {
        numButtons[i].addEventListener('click', inputFirst, false);
    }
    
// ----------CLEAR EVENT LISTENER

    document.getElementById('clear').addEventListener('click', Clear, false);
    document.getElementById('=').addEventListener('click', Equal, false)
    document.getElementById('=').addEventListener('mouseover', Header, false)
    document.getElementById('toHex').addEventListener('click', Equal, false)
   

})();