document.getElementById("logo").onclick = function() {
    window.location = "anaSayfa.php";
};

document.getElementById("iletisim").onclick = function() {
    window.location = "iletisim.php";
};

document.getElementById("button").onclick = function() {

    localStorage.setItem("secenek1", document.getElementById("secenek1").value);
    localStorage.setItem("secenek2", document.getElementById("secenek2").value);
    localStorage.setItem("secenek3", document.getElementById("secenek3").value);
    localStorage.setItem("secenek4", document.getElementById("secenek4").value);
    localStorage.setItem("secenek5", document.getElementById("secenek5").value);
    localStorage.setItem("secenek6", document.getElementById("secenek6").value);
    localStorage.setItem("secenek7", document.getElementById("secenek7").value);
    localStorage.setItem("secenek8", document.getElementById("secenek8").value);

    window.location = "sekizliCarkSayfasi.php";

};