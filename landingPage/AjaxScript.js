  var ourRequest = new XMLHttpRequest();
  $(document).ready(function() {
  ourRequest.open('GET', 'prices.json',true);
  ourRequest.onload = function() {

    if (ourRequest.status >= 200 && ourRequest.status < 400) {
      var ourData = JSON.parse(ourRequest.responseText);
      renderHTML(ourData);
    } else {
      console.log("We connected to the server, but it returned an error.");
    }
   
   };

  ourRequest.onerror = function() {
    console.log("Connection error");   
}
ourRequest.send();
  });
  

function renderHTML(data) {

keyList = Object.keys(data)
var i = 0
    $('#Prices > td').each(function () {
      if($(this).attr('id')== keyList[i] ){       
        console.log(data[keyList[i]]);            
        $(this).text(data[keyList[i]]);
        i++;
      }
      });
      
    }


