var steps;
var steps_used;
var step_count;
var current_step;

$(document).ready(function(){
    steps        = $('fieldset');
    current_step = 0;
    
    $('.next').click(function() {
        // Hide current step
        $(steps_used[current_step]).hide();
        
        // Show next step
        $(steps_used[++current_step]).show();
        
        setProgressBar(current_step);
    });
    
    $('.previous').click(function(){
        // Hide current step
        $(steps_used[current_step]).hide();
        
        // Show previous step
        $(steps_used[--current_step]).show();
        
        setProgressBar(current_step);
    });
    
    setProgressBar(current_step);
    
    // Change progress bar action
    function setProgressBar(curStep){
        var percent = parseFloat(100 / step_count) * curStep;
        
        percent = percent.toFixed();
        $('.progress-bar')
            .css('width',percent+'%')
            .html(percent+'%');        
    }
});

$(function () {
    $('#competition').change(function () {
        steps_used = $.merge(steps.slice(0, 6), steps.slice(6));
        step_count = steps_used.length;
    });
});
            

function validateForm() {
    var competition = document.getElementById('competition').value;
    var teamname = document.getElementById('teamname').value;
    var fullnameketua = document.getElementById('fullnameketua').value;
    var emailketua = document.getElementById('emailketua').value;
    var campus = document.getElementById('campus').value;
    var Line = document.getElementById('Line').value;
    var kartuketua = document.getElementById('kartuketua').value;

    var fullnameang1 = document.getElementById('fullnameang1').value;
    var emailang1 = document.getElementById('emailang1').value;
    var kartuang1 = document.getElementById('kartuang1').value;

    var fullnameang2 = document.getElementById('fullnameang2').value;
    var emailang2 = document.getElementById('emailang2').value;
    var kartuang2 = document.getElementById('kartuang2').value;

    var email = document.getElementById('emailteam').value;
    var password = document.getElementById('password').value;
    var repassword = document.getElementById('repassword').value;
        
    if (competition == "" ) {
        alert("Pilih Lomba Anda!");
        return false;
    }
    if (teamname == "" ) {
        alert("Masukkan Nama Tim!");
        return false;
    }
    if (teamname != "") {
        var teamname = document.getElementById('teamname').value;
        var regEx = /^[a-zA-Z0-9\s]*$/;
        if(!teamname.match(regEx))
        {
            alert("Nama Tim Hanya Boleh Huruf, Angka, dan Spasi");
            return false;
        }
    }
    if (fullnameketua == "" ) {
        alert("Masukkan Nama Lengkap Ketua!");
        return false;
    }
    if (emailketua == "" ) {
        alert("Masukkan Email Ketua!");
        return false;
    }
    if (campus == "") {
        alert("Masukkan No. Telepon / ID Line Ketua!");
        return false;
    }
    if (Line == "") {
        alert("Masukkan ID Line Ketua!");
        return false;
    }
    if (kartuketua == "") {
        alert("Lengkapi Kartu Identitas Ketua!");
        return false;
    }

    if (fullnameang1 == "" ) {
        alert("Masukkan Nama Lengkap Anggota Tim 1!");
        return false;
    }
    if (emailang1 == "" ) {
        alert("Masukkan Nama Lengkap Anggota Tim 1!");
        return false;
    }
    if (kartuang1 == "") {
        alert("Lengkapi Kartu Identitas Anggota Tim 1!");
        return false;
    }

    if (fullnameang2 == "" ) {
        alert("Masukkan Nama Lengkap Anggota Tim 2!");
        return false;
    }
    if (emailang2 == "" ) {
        alert("Masukkan Nama Lengkap Anggota Tim 2!");
        return false;
    }
    if (kartuang2 == "") {
        alert("Lengkapi Kartu Identitas Anggota Tim 2!");
        return false;
    }

    if (email == "") {
        alert("Masukkan Alamat Email!");
        return false;
    }
    if (password == "") {
        alert("Masukkan Password!");
        return false;
    }
    if (repassword == "") {
        alert("Masukkan Re-Password");
        return false;
    }
        
    if (password === repassword) {
        return true;
    }
    else {
        alert ("\nPASSWORD TIDAK SAMA: \nCoba lagi...")
        return false;
    }
}


function disableSubmit() {
    document.getElementById("submit_data").disabled = true;
}

function activateButton(element) {
    if(element.checked) {
        document.getElementById("submit_data").disabled = false;
    }
    else  {
        document.getElementById("submit_data").disabled = true;
    }
}