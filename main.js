
$(document).ready(function() {
    $("#search").keyup(function() {
        let searchText = $(this).val();
        if (searchText != "") {
            $.ajax({
                url: "search_action.php",
                method: "post",
                data: {
                    query: searchText
                },
                success: function(response) {
                    $("#show-list").html(response);
                }
            })
        } else {
            $("#show-list").html("");
        }
    })

    $(document).on('click', 'a', function() {
        $("#search").val($(this).text())
        $("#show-list").html("");
    })
})

$('#team').change(function(){
    let id_team = $(this).val();
    $.ajax({
        type: "post",
        url: "addmember_jqury.php",
        data:{id:id_team,function:'team'},
        success : function(data) {
            console.log(data)
            $('#company').html(data)
        }
    })
});
$('#company').change(function(){
    console.log($(this))  
});