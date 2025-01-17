document.getElementById("logo").onclick = function(){
    window.location = "anaSayfa.php";
};

document.getElementById("iletisim").onclick = function(){
    window.location = "iletisim.php";
};

window.onload = function(){

    const secenek1 = localStorage.getItem("secenek1");
    const secenek2 = localStorage.getItem("secenek2");
    const secenek3 = localStorage.getItem("secenek3");
    const secenek4 = localStorage.getItem("secenek4");
    const secenek5 = localStorage.getItem("secenek5");

    document.getElementById("secenek1").innerHTML = secenek1;
    document.getElementById("secenek2").innerHTML = secenek2;
    document.getElementById("secenek3").innerHTML = secenek3;
    document.getElementById("secenek4").innerHTML = secenek4;
    document.getElementById("secenek5").innerHTML = secenek5;

    localStorage.clear();

};

const wheel = document.querySelector(".wheel");
const spinButton = document.getElementById("spinButton");
var value = Math.ceil((Math.random()+0.2) * 3600);

spinButton.onclick = function(){

    wheel.style.transform = "rotate("+value+"deg)";

};

wheel.addEventListener('transitionend', () => {

    const secenek1 = document.getElementById("secenek1").innerText;
    const secenek2 = document.getElementById("secenek2").innerText;
    const secenek3 = document.getElementById("secenek3").innerText;
    const secenek4 = document.getElementById("secenek4").innerText;
    const secenek5 = document.getElementById("secenek5").innerText;
    
    var sonuc=Math.floor( ((value+6) % 360 ) / (360/5));

    if (sonuc==0){
        document.getElementById("sonucMetni").innerHTML = "SONUÇ : "+secenek2;
    }
    else if (sonuc==1){
        document.getElementById("sonucMetni").innerHTML = "SONUÇ : "+secenek1;
    }
    else if (sonuc==2){
        document.getElementById("sonucMetni").innerHTML = "SONUÇ : "+secenek5;
    }
    else if (sonuc==3){
        document.getElementById("sonucMetni").innerHTML = "SONUÇ : "+secenek4;
    }
    else if (sonuc==4){
        document.getElementById("sonucMetni").innerHTML = "SONUÇ : "+secenek3;
    }

    popup.style.display = "block";

    value += Math.ceil((Math.random()+0.2) * 3600);

});

document.getElementById("closeButton").onclick = function(){
    popup.style.display = "none";
};
