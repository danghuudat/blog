$(document).ready(function() {
    pageScroll();

    getWidthHeader('table_fixed','table_scroll');
});

var my_time;
function pageScroll() {
    var objDiv = document.getElementById("contain");
    objDiv.scrollTop = objDiv.scrollTop + 1;
    if ((objDiv.scrollTop + 1200) == objDiv.scrollHeight) {
        objDiv.scrollTop = 0;
    }
    my_time = setTimeout('pageScroll()', 40);
}

function getWidthHeader(id_header, id_scroll) {
    var colCount = 0;
    $('#' + id_scroll + ' tr:nth-child(1) td').each(function () {
        if ($(this).attr('colspan')) {
            colCount += +$(this).attr('colspan');
        } else {
            colCount++;
        }
    });

    for(var i = 1; i <= colCount; i++) {
        var th_width = $('#' + id_scroll + ' > tbody > tr:first-child > td:nth-child(' + i + ')').width();
        $('#' + id_header + ' > thead th:nth-child(' + i + ')').css('width',th_width + 'px');
    }
}
window.setTimeout("showTime()", 1000);
function getVNTime(){
    var time = new Date();
    var dow = time.getDay();
    if(dow==0)
        dow = "Chủ nhật";
    else if (dow==1)
        dow = "Thứ hai";
    else if (dow==2)
        dow = "Thứ ba";
    else if (dow==3)
        dow = "Thứ tư";
    else if (dow==4)
        dow = "Thứ năm";
    else if (dow==5)
        dow = "Thứ sáu";
    else if (dow==6)
        dow = "Thứ bảy";
    var day = time.getDate();
    var month = time.getMonth()+1;
    var year = time.getFullYear();
    var hr = time.getHours();
    var min = time.getMinutes();
    var sec = time.getSeconds();
    day = ((day < 10) ? "0" : "") + day;
    month = ((month < 10) ? "0" : "") + month;
    hr = ((hr < 10) ? "0" : "") + hr;
    min = ((min < 10) ? "0" : "") + min;
    sec = ((sec < 10) ? "0" : "") + sec;
    var str="<p style='font-size:5rem'>" +hr + ":" + min + ":" + sec+'</p><p style="font-size: 4rem">'+dow + " " + day + "/" + month + "/" + year + "</p>"
    return str;
}
function showTime(){
    var vnclock = document.getElementById("vnclock");
    if (vnclock != null)
        vnclock.innerHTML = getVNTime();
    setTimeout("showTime()", 1000);
}
