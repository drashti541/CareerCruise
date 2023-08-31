$("#submit").click(function(){
    var file = $("#exampleFormControlFile1").val();

    if(file == ''){
        swal({
            title: "Fields Empty!!",
            text: "Please check the missing fields!!",
            icon:"warning",
            button: "ok",
        });
    }else{
        swal({
            title: "Successfully Submitted",
            icon:"success",
            button: "ok",
        });
    }
})