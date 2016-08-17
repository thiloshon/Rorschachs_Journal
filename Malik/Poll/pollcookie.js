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

        if ( localStorage.getItem( 'voted' ) == 'true' ) {
            alert('You have already voted!');
        }else if ( localStorage.getItem( 'voted' ) == null ){
            $.ajax({
                type  : "POST",
                url   : "poll_vote.php",
                data  : jsonV,
                dataType: "json",
                success : function ( responseText ){
                    console.log("It's working" + responseText);
                    $("#result").html( responseText.vote );
                },
                complete : function(){
                    $("#poll").slideUp();
                    localStorage.setItem('voted', 'true');
                },
                error : function( error,responseText ){
                    // alert("Server not Responding. Sorry for the inconvenience caused. Please Try again Later");
                    console.log( error );
                    $("#result").html( error + responseText );
                    alert( count );
                }
            });
        }
    });
});
