function ajax(gewicht, lengte) {
  let debug = false;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  }else {
    xmlhttp = new ActiveXobject("Microsoft.XMLHTTP");
  }
  let controlScript ="BML.php";
  //BML.php?lengte_cm=189&gewicht=76
  let httpString = controlScript + "?gewicht=" + gewicht + "&lengte_cm=" + lengte;
  let httpResponse = "";

  xmlhttp.open("GET", httpString, true);
  xmlhttp.send();
  xmlhttp.onreadystatechange = function() {
      if (debug) console.log("httpString = " + httpString);
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      if (debug)console.log("http response = " + xmlhttp.responseText);
      httpResponse=xmlhttp.responseText;
      console.log(httpResponse);
      document.getElementById('resultaat').innerHTML = httpResponse
    }}
}
