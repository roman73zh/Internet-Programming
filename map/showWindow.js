function showWindow(id) {

    //$.ajax('history.php', {"id": "10"}, function(region){
    //    alert(region);
    //});
    
    $.ajax({
        data: {"id": id},
        type: "POST",
        url: 'history.php',
        success: function(Response){
            document.getElementById("exampleModalLabel").innerHTML = JSON.parse(Response)['title'];
            document.getElementById("modal-body").innerHTML = JSON.parse(Response)['body'];
            $('.modal').modal('show');
        }
    });
}