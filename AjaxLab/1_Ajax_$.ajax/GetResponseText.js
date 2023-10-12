function $id(id) {
  return document.getElementById(id);
}

function checkId() {  
  let memId = document.getElementById("memId").value;
  console.log(1);
  $.ajax({
    url: `GetResponseText.php?memId=${$id("memId").value}`,
    method: "get", //contentType:可省略, 預設為application/x-www-form-urlencoded
    dataType: "text",
    success(response) {
      $id("idMsg").innerText = response;
    },
    error(xhr, status, error) {
      console.log(status, error);
    }
  })

}//function_checkId   
  
//..........................................
window.addEventListener("load", function () {
  $id("memId").addEventListener("change", checkId);
  $id("btn").addEventListener("click", checkId); 
}, false);