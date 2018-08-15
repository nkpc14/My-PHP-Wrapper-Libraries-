function showHint(str,id) {
    if(str.length ==0){
        document.getElementById(id).innerHTML = "";
        return;
    }else{
        var http = new XMLHttpRequest();
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById(id).innerHTML = this.responseText;
            }
        };
        http.open("GET","gethint.php?q="+ str,true);
        http.send();

    }
}