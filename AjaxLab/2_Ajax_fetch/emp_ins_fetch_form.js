function $id(id) {
  return document.getElementById(id);
} 
//----------------------------------------------------------
function clearForm(){
  let inputs = document.getElementsByTagName("input");
  for (let i in inputs) { //清空所有輸入盒
    inputs[i].value = "";
  }
  $id("job").selectedIndex = 0; //將下拉式選單reset在第0個位置
}

//----------------------------------------------------------
function addEmpToDb(){

    //-----------打包資料(start)
    //將資料打包進FormData;   
    let formData = new FormData($id("empForm"));  //multipart/form-data    
    //-----------打包資料(end)
    
    //---------------------------------送出Ajax請求
    fetch("emp_ins_fetch_form.php", {
      method: "post",
      body: formData
    })
    .then(response=>response.json())
    .then((result)=>{
      if (!result.error) {
        alert("新增員工資料成功");
        clearForm();
      } else {
        alert("新增失敗");
      }
    })
    .catch(function(error){
      console.log(error);
    })


}
//----------------------------------------------------------
window.addEventListener("load",function(){
  $id("btnSend").onclick = function(){
    //---------檢查表單, 職稱必選
    if($id("job").selectedIndex === 0){
      alert("職稱必選喔!!!");
      return;
    }
    //送到後端, 將員工資料新增到資料庫
    addEmpToDb();
  }
})