let menuLenght = 0;
let pricesArr = [];

test = new Array(20)
console.log(test);

//funkcja zamówienia 
document.addEventListener('click', function (event){
    if (!event.target.matches('#orderModal')) return;
    var inputs = document.getElementsByClassName('form-check-input'); 
    var suma = 0
    var orderedItems = document.getElementsByClassName("orderedItems")[0];
    orderedItems.innerHTML = ""
    

    for (let  i= 0; i < inputs.length; i++) {
        if(inputs[i].checked) {
            var orderName = inputs[i].parentElement.parentElement.parentElement.children[2].innerHTML;
            var orderValue = inputs[i].parentElement.parentElement.parentElement.children[3].innerHTML;
            var sold = orderValue.substring(0,3);
            var soldparsint = parseInt(sold);
            suma +=soldparsint;
            
            numInput = `<p><input type=\"number\" class=\"nums${i}\" name=\"nums\"min=\"1\" max=\"100\" value=1></p>`
            buttons = numInput + `<p class=\"item-icons\"> <span class=\"ikonsspan\"><i class=\"fas fa-plus plus${i}\"></i><a> </a><i class=\"fas fa-minus minus${i}\"></i></span>  </p>`;
            orderedItems.innerHTML += "<div class=\"item-box\"><div class=\"item\"><p>"+orderName+"</p>"+"<p class=\"orderplus\"> "+orderValue+"</p></div>"+buttons+"</div>";
            pricesArr[i] = parseInt(orderValue)
            console.log(pricesArr);
        }
        if(i == inputs.length-1){
            menuLenght = i;
        }
    }
    var orderSum = document.getElementsByClassName("soldsum")[0];
    orderSum.innerHTML = suma;

}, false);

// funkcja dodaje ilosc zamówień
// checking if user clicked on plus icon =>
document.addEventListener('click', function (event){
    for (let i = 0; i < menuLenght+1; i++) {
        if (event.target.matches(`.plus${i}`)){
            // console.log(event.target, i);
            // var plus = document.getElementsByClassName("plus");
            // var minus = document.getElementsByClassName("minus");
            var numBox = document.getElementsByClassName("nums"+i)[0];
            var numBoxValue = parseInt(numBox.value)
            var sum = parseInt(document.getElementsByClassName("soldsum")[0].innerHTML);
            numBox.value++;
            console.log(pricesArr[i], sum, i);
            document.getElementsByClassName("soldsum")[0].innerHTML = sum + pricesArr[i]
            document.getElementsByClassName("orderplus")[i].innerHTML = " " + pricesArr[i] * numBoxValue + " zł"
        }  
        }
        for (let i = 0; i < menuLenght+1; i++) {
            if (event.target.matches(`.minus${i}`)){
                // console.log(event.target, i);
                // var plus = document.getElementsByClassName("plus");
                // var minus = document.getElementsByClassName("minus");
                var numBox = document.getElementsByClassName("nums"+i)[0];
                var numBoxValue = parseInt(numBox.value)
                // console.log(numBoxValue);
                var sum = parseInt(document.getElementsByClassName("soldsum")[0].innerHTML);
                if(!numBoxValue == 0){
                    numBox.value--;
                }
                console.log(pricesArr[i], sum);
                document.getElementsByClassName("soldsum")[0].innerHTML = sum - pricesArr[i]
            }  
            }
});




