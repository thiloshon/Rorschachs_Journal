<script>
$(document).ready(function(){

    $("#poll").click(function(){
        var count = '';
        if (document.getElementById("vote1").checked) {
            count = 0;
        }
        if (document.getElementById("vote2").checked) {
            count = 1;
        }
        var jsonV= { "vote": count };

        $.ajax({
            type  : "POST",
            url   : "poll_vote.php",
            data  : jsonV,
            dataType: "json",
            success : function ( responseText ){
                console.log("Is working " + responseText);
                $("#result").html( responseText.vote );
            },
            complete : function(){
                $("#poll").slideUp();
            },
            error : function( error,responseText ){
                // alert("Server not Responding. Sorry for the inconvenience caused. Please Try again Later");
                console.log( error );
                $("#result").html( error + responseText );
                alert( count );
            }
        });
    });
});
</script>