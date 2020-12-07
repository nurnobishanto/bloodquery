function showUser(str) {
      

    if (str == "") {
      document.getElementById("txtHint").innerHTML = "None";
      return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

 
        if (this.readyState == 4 || this.status == 200) {
 
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","getbrq.php?q="+str,true);
      xmlhttp.send();
    }
  }