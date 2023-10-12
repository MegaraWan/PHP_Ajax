let member;

function $id(id) {
    return document.getElementById(id);
}

function showMember() {
    let html; 
    if (member.memId) {
        html = `<table class='memTable'>
            <tr><th>帳號</th><td>${member.memId}</td></tr>
            <tr><th>姓名</th><td>${member.memName}</td></tr>
            <tr><th>電話</th><td>${member.tel}</td></tr>
            <tr><th>email</th><td>${member.email}</td></tr>
        </table>`;        
    } else {
        html = "<center>查無此會員資料</center>";
    }
    document.getElementById("showPanel").innerHTML = html
}

function getMember(){
    let memId = document.getElementById("memId").value;

    $.ajax({
        url: `getMore_JSON.php?memId=${memId}`,
        //method: "get",
        //contentType: "application/x-www-form-urlencoded",
        dataType: "json",
        success(response) { //response是已被JSON.parse()過的資料
            member = response;
            showMember();
        },
        error(xhr, status, error) {
            console.log(status, error);
        }
    });
}