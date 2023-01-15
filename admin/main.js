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
    $('#admin').change(function () {
        if ($(this).val() != '') {
            
            // Ambil step-step yang dibutuhkan untuk game selain FIFA
            // [game, ketua, anggota-1, anggota-2, anggota-3, final]
            steps_used = $.merge(steps.slice(0, 6), steps.slice(6));
            
            step_count = steps_used.length;
        }
        else {
           
            // Ambil step-step yang dibutuhkan untuk game FIFA
            // [game, personal, final]
            steps_used = $.merge(steps.slice(0, 1), steps.slice(7));
            
            step_count = steps_used.length;
        }
    });
});
            

function validateForm() {

    if ($('#admin').val() != '') {
        var admin = document.getElementById('admin').value;
        var fullnameadmin = document.getElementById('fullnameadmin').value;
        var ttladmin = document.getElementById('ttladmin').value;
        var jkadmin = document.getElementById('jkadmin').value;
        var kelasadmin = document.getElementById('kelasadmin').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var repassword = document.getElementById('repassword').value;
        
        if (admin == "" ) {
            alert("Pilih Kategori Anda!");
            return false;
        }
        if (fullnameadmin == "" ) {
            alert("Masukkan Nama Lengkap Anda!");
            return false;
        }
        if (ttladmin == "") {
            alert("Masukkan Tanggal Lahir Anda!");
            return false;
        }
        if (jkadmin == "") {
            alert("Pilih Jenis Kelamin Anda!");
            return false;
        }
        if (kelasadmin == "") {
            alert("Masukkan Asal Sekolah Anda!");
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
    }
    var password = document.getElementById('password').value;
    var repassword = document.getElementById('repassword').value;

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


