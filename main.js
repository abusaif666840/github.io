
// ================= INSERT DATA =====================
$(".insert_btn").on("click",function(e){
    e.preventDefault();

    let stu_name = $("#stu_name").val();
    let stu_email = $("#stu_email").val();
    let stu_password = $("#stu_password").val();

    $.ajax({
        url: "insert.php",
        method: "POST",
        data: {
            studentName: stu_name,
            studentEmail: stu_email,
            studentPassword: stu_password,
        },
        success: function(data){
            $(".form").trigger("reset");
            readData();
        }
    });

})


// ================= READ DATA =====================

function readData(){
    $.ajax({
        url: "read.php",
        method: "POST",
        success: function(data){
            $("#load_table").html(data);
        }
    });
}

readData();


// ================= DELETE DATA =====================

$(document).on("click",".delete_btn",function(){

    let studentId = $(this).data("id");

    $.ajax({
        url: "delete.php",
        method: "POST",
        data: {studentId: studentId,},
        success: function(data){
            readData();
        }
    });


})


// ================= EDIT DATA =====================

$(document).on("click",".edit_btn",function(){

    let studentId = $(this).data("id");

    $.ajax({
        url: "edit.php",
        method: "GET",
        data: {studentId: studentId},
        success: function(data){
            $("body").html(data);
        }
    });


})


$(".update_btn").on("click",function(e){
    e.preventDefault();

    let studentId = $(this).data("id");
    let stu_name = $("#stu_name").val();
    let stu_email = $("#stu_email").val();
    let stu_password = $("#stu_password").val();

    $.ajax({
        url: "update.php",
        method: "GET",
        data: {
            studentId: studentId,
            studentName: stu_name,
            studentEmail: stu_email,
            studentPassword: stu_password,
        },
        success: function(data){
            alert(data);
        }
    });

})



// HOME PAGE BACK

$(".back_btn").on("click",function(){

    let studentId = $(this).data("id");

    $.ajax({
        url: "index.php",
        success: function(data){
            $("body").html(data);
        }
    });


})
