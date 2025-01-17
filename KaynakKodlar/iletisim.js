document.getElementById("logo").onclick = function(){
    window.location = "anaSayfa.php";
};

document.getElementById("iletisim").onclick = function(){
    window.location = "iletisim.php";
};

document.getElementById("github").onclick = function(){
    window.open("https://github.com/muhammetsah1n", "_blank");
};

document.getElementById("linkedin").onclick = function(){
    window.open("https://www.linkedin.com/in/muhammet-%C5%9Fahin-10458332b/", "_blank");
};

document.getElementById("closeButton").onclick = function(){
    popup.style.display = "none";
};