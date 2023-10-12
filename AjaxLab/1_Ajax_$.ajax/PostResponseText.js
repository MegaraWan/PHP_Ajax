function $id(id) {
  return document.getElementById(id);
}

function checkId() {  
  let memId = document.getElementById("memId").value;

  $.ajax({
    url: "PostResponseText.php",
    method: "post",
    contentType: "application/x-www-form-urlencoded",
    data: {memId},
    dataType: "text",
    success(response) {
      $id("idMsg").innerText = response;
    },
    error(xhr, status, error) {
      console.log(status, error);
    }
  });

}//function_checkId   
  
//..........................................
window.addEventListener("load", function () {
  $id("memId").addEventListener("change", checkId) 
}, false);