let depts;
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
    
    //-----------打包資料(end)
    
    //---------------------------------送出Ajax請求
    

}

function getDepts() {

}
//----------------------------------------------------------
/*
async function getDepts() {
  let response = await fetch("getDepts.php");
  let result = await response.json();
  if (!result.error) {
    depts = result.depts;
    let html = "<option value=''>請選擇</option>";
    depts.forEach(function(dept){
      html += `<option value='${dept.deptno}'>${dept.dname}</option>`
    })
    $id("deptno").innerHTML = html;
  } else {
    console.log(result);
  }  
}
*/
//----------------------------------------------------------
window.addEventListener("load", function(){
  //取回部門資料
  getDepts();
  $id("btnSend").onclick = function(){
    //---------檢查表單, 職稱必選
    if($id("job").selectedIndex === 0){
      alert("職稱必選喔!!!");
      return;
    }
    //---------檢查表單, 部門必選
    if($id("deptno").selectedIndex === 0){
      alert("部門必選喔!!!");
      return;
    }
    //送到後端, 將員工資料新增到資料庫
    addEmpToDb();
  }
})