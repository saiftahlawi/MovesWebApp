document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('#subse').onclick = function(){
      var xhr=new XMLHttpRequest();
     var name=document.querySelector("#filname").value;
     var year=document.querySelector("#py").value;

      xhr.onreadystatechange=function(){

        if(xhr.readyState==4 && xhr.status==200){
            document.querySelector("#filname").value='';
            document.querySelector("#py").value='';
            alert("done!!");
                    }
                
      }
      xhr.open("GET","server.php?nem="+name+"&yer="+year,true);
      xhr.send();
    }
});