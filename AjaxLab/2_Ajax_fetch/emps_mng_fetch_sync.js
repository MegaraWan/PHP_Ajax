let emps;	
let depts;

function $id(id) {
  return document.getElementById(id);
} 

//---------------------------------------------------clearForm()
function clearForm(){
  let inputs = document.querySelectorAll("#empPanel input");
  for(let i in inputs){ //清空所有輸入盒
    inputs[i].value = "";
  }
  $id("job").selectedIndex = 0;  //將下拉式選單reset在第0個位置
}



//----------------------------------------------------------
function showEmps() {
	let html = "";

	if (emps.length === 0) {
		html = "<tr><td colspan='4' align='center'>尚無員工資料</td></tr>";
	} else {
			for (let i=0; i<emps.length; i++) {
				html += "<tr>";
				html += `<td>${emps[i].empno}</td>`;
				html += `<td>${emps[i].ename}</td>`;
				html += `<td>${emps[i].job}</td>`;
				html += `<td>${emps[i].hiredate}</td>`;
				html += `<td>${emps[i].sal}</td>`;
				html += "</tr>";
			}
		//將emps資料放入頁面中
	}

	$id("showPanel").innerHTML = html;
}	

//----------------------------------------------------------
function getEmps(deptno=0){
	let url = "getEmps.php?deptno=" + deptno;
	fetch(url)
	.then(function (response) {
		return response.json()
	})
	.then(function (result) {
		emps = result.emps;
		showEmps();//將其顯示到頁面中
	})
	.catch(function(error){
		console.log(error);
	})
}

//----------------------------------------------------------
function showDepts(){
	let html = "<option value='0'>全部</option>";
	for (let i=0; i<depts.length; i++) {
		html += `<option value='${depts[i].deptno}'>${depts[i].dname}</option>`;
	}
	document.getElementById("deptnoOptions").innerHTML = html;
}

//----------------------------------------------------------
/*
async function getDepts(deptno=0) {
	let response1 = await fetch("getDepts.php");
	result1 = await response1.json();
	depts = result1.depts;
  showDepts();//將其顯示到頁面中

  //------------再取回所有員工資料資料

	let response2 = await fetch("getEmps.php?deptno=" + $id("deptnoOptions").value);
	result2 = await response2.json();
	emps = result2.emps;
  showEmps();
}
*/

//----------------------------------------------------------
function getDepts(deptno=0) {
	fetch ("getDepts.php")
	.then (function(response) {
		return response.json();
	})
	.then (function (data) {
		depts = data.depts;
		showDepts();//將其顯示到頁面中
		getEmps($id("deptnoOptions").value);
	})
	.catch (function (error) {
		alert("error");
		console.log(error);
	});
}

//----------------------------------------------------------
window.addEventListener("load", function () {
	//------------先取回所有部門資料及員工資料資料
	getDepts();

	
})