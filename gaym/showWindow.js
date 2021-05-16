function showWindow(id) {

    //$.ajax('history.php', {"id": "10"}, function(region){
    //    alert(region);
    //});
    
    $.ajax({
        data: {"id": id},
        type: "POST",
        url: 'history.php',
        success: function(Response){
            document.getElementById("find").innerHTML = Response;
            if (Response[1] == " " && Response[0] == " ") {
                showImg();
                document.getElementById("photo").innerHTML = "<img src='/images/go.png'>";
            }
            else if (Response[0] == " ") {
                showImg();
                document.getElementById("photo").innerHTML = "<img src='/images/sadputin.jpg'>";   
            }
            //document.getElementById("exampleModalLabel").innerHTML = JSON.parse(Response)['title'];
            //document.getElementById("modal-body").innerHTML = JSON.parse(Response)['body'];
            //$('.modal').modal('show');
        }
    });
}