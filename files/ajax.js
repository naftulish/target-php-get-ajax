$('input[type=radio]').change(function() {
    if($(this).attr("id")==1){
        $('button[type=submit]').attr("type","button");
        btnClick();
    }else{
        $('button[type=button]').attr("type","submit");
    }
});




function btnClick(){
    $('button[type=button]').on("click" ,function(){
        var attr1 =  $(this).siblings('input[type="number"]').eq(0).attr("name");
        var attr2 =  $(this).siblings('input[type="number"]').eq(1).attr("name");
        var val1 =  $(this).siblings('input[type="number"]').eq(0).val();
        var val2 =  $(this).siblings('input[type="number"]').eq(1).val();

        $.get("files/functions.php?"+attr1+"="+val1+"&"+attr2+"="+val2,
            function(data){
            $("article h3").text(data);
         });

    });

}