
<html>
<head>
<script>
// function showCD(str) {
//   if (str=="") {
//     document.getElementById("txtHint").innerHTML="";
//     return;
//   }
//   var xmlhttp=new XMLHttpRequest();
//   xmlhttp.onreadystatechange=function() {
//     if (this.readyState==4 && this.status==200) {
//       document.getElementById("txtHint").innerHTML=this.responseText;
//     }
//   }
//   xmlhttp.open("GET","Video33XML.php?q="+str,true);
//   xmlhttp.send();
// }
function getVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","Video33XML.php?vote="+int,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<!-- <form>
Select a CD:
<select name="cds" onchange="showCD(this.value)">
  <option value="">Select a CD:</option>
  <option value="Bob Dylan">Bob Dylan</option>
  <option value="Bee Gees">Bee Gees</option>
  <option value="Cat Stevens">Cat Stevens</option>
</select>
</form>
<div id="txtHint"><b>CD info will be listed here...</b></div> -->


<br><br><br>

<div id="poll">
<h3>Do you like PHP and AJAX so far?</h3>
<form>
Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>

</body>
</html>