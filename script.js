function Rf_sum1(){
    return function(){
        let x = document.getElementById('price1').value;
        let y = document.getElementById('number1').value;
        let sum = y*x;
        document.getElementById("sum1").value = sum;
    }
}
function Rf_sum2(){
    return function(){
        let x = document.getElementById('price2').value;
        let y = document.getElementById('number2').value;
        let sum = y*x;
        document.getElementById("sum2").value = sum;
    }
}

function Rf_sum3(){
    return function(){
        let x = document.getElementById('price3').value;
        let y = document.getElementById('number3').value;
        let sum = y*x;
        document.getElementById("sum3").value = sum;
    }
}



function reduceSUM1(){
    let number = document.getElementById('number1').value;
    let price = document.getElementById('price1').value;
    let item = [price,number];
    let resutl = item.map((item)=> {return item*number});
    document.getElementById("sum1").value = resutl[0];
}

function reduceSUM2(){
    let number = document.getElementById('number2').value;
    let price = document.getElementById('price2').value;
    let item = [price,number];
    let resutl = item.map((item)=> {return item*number});
    document.getElementById("sum2").value = resutl[0];
}

function reduceSUM3(){
    let number = document.getElementById('number3').value;
    let price = document.getElementById('price3').value;
    let item = [price,number];
    let resutl = item.map((item)=> {return item*number});
    document.getElementById("sum3").value = resutl[0];
}




function DataFigma(){
    let Figma = [{name:'Tanya Degurechaff',type:'Figma',price:1000},{name:'LLENN',type:'Figma',price:'1250'},{name:'Snow Miku: Snow Princess ver.',type:'Figma',price:'1500'}];
    return Figma;
}




function findSUM1(){
    let name = document.getElementById('name1').value;
    let number = document.getElementById('number1').value;
    let item = DataFigma();
    let x = item.find((emp)=>{
        return emp.name == name;
    });
    let result = x['price'] * number;
    alert(result)
    document.getElementById("sum1").value = result;

}


function findSUM2(){
    let name = document.getElementById('name2').value;
    let number = document.getElementById('number2').value;
    let item = DataFigma();
    let x = item.find((emp)=>{
        return emp.name == name;
    });
    let result = x['price'] * number;
    alert(result)
    document.getElementById("sum2").value = result;

}

function findSUM3(){
    let name = document.getElementById('name3').value;
    let number = document.getElementById('number3').value;
    let item = DataFigma();
    let x = item.find((emp)=>{
        return emp.name == name;
    });
    let result = x['price'] * number;
    alert(result)
    document.getElementById("sum3").value = result;

}