$(document).ready(function(){
    $('#batch').change(function (e) {
        var class_id = e.target.value;
        // console.log(typeof (class_id));
       $.get('/class?id_class='+class_id,function (data) {
           // console.log(typeof(data[0]));
           $('#student_id').empty();
           $('#student_name').empty();
           $('#student_email').empty();
           $('#student_id').empty();
           if(data.length == 0){
               $('#student_id').append(`<p style="color: red">No DATA</p>`);
               $('#student_name').append(`<p style="color: red">No DATA</p>`);
               $('#student_email').append(`<p style="color: red">No DATA</p>`);
           }
           $.each(data,function (key,value) {
                   $('#student_id').append(`<p>${value.SV_MSSV}</p>`);
                   $('#student_name').append(`<p>${value.SV_HOTEN}</p>`);
                   $('#student_email').append(`<p>${value.SV_EMAIL}</p>`);
                   $('#check').append(`<input type="checkbox" value="1">`);
           })
       })
    })

});
