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
    let empData = {
          empno:parseInt($id("empno").value),
          ename:$id("ename").value,
          job:$id("job").value,
          mgr:parseInt($id("mgr").value),
          hiredate:$id("hiredate").value,
          sal:parseInt($id("sal").value),
          comm:parseInt($id("comm").value),
          deptno:parseInt($id("deptno").value),
          action:"insert"
        }
    //將資料打包進URLSearchParams();    
      let urlencodedData = new URLSearchParams(empData);
    //-----------打包資料(end)
    
    //---------------------------------送出Ajax請求
    fetch("emp_ins_fetch_urlencoded.php", {
      method: "post",

      body: urlencodedData
    })
    .then((response) => {
      return response.json(); //json()傳回promise物件, 就可以繼續以.then()的方式來取得json()轉換後的js物件
    })
    .then(function(result){
      console.log(result);
      if( ! result.error) {
        alert("新增員工資料成功~");
        clearForm();
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