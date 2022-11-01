
<p id="sh">This is a Show or hide test.</p>

<script>

function sh(){
    document.getElementById("sh").style.display="none";
}
function sa(a,b){
    return (2*a)+(3*b);
}


</script>
<br>
<button id="but1"onclick="sh()">show/hide</button><br>
<br>
    <p> The result for this calculation<script> sa(4,5)</script>the end </p>

    <br>
    <p id="test1">  </p>
    
    <p id="lorem" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse inventore
     officiis porro quidem! Earum, esse rerum quasi laudantium quod corporis nam rem,
      officiis sed itaque ipsam nostrum dicta ut unde! </p>
   
   
   <p id="lol"></p>
   
<br>


<script>

function checktext(){
    var input="tadds";
    var input_num =input.length;

    getElementById("lol").innerHTML=input_num;
}

</script>



<input type="text" name="tadds" placeholder="Please enter any text with at least one space character." 
onkeydown="<script> checktext() </script>" >

<p id="padds">

</p>


