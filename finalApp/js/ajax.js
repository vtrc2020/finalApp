$('document').ready(function () {

    function cardloading() {
        $.ajax({
            url: 'ppl.json',
            type: 'get',
            dataType: 'JSON',
            cache: false,
            success: function (data) {
                console.log(data);
                $.each(data, function(i,o){
                    console.log(i,o);
                    
                    $("#profile").append('<div class="person" id="p'+o.id+'"></div>');
                    $("#p"+o.id).append(`
                                       <h3>${o.id}</h3>
                                       <div class="profileImage"><img src="img/${o.id}.jpg"></div>
                                       <h4>Name: ${o.name}</h4>
                                       <h4>Email: ${o.email}</h4>
                                    <h4>Username: ${o.username}</h4>
                                    <h4>City: ${o.location}</h4>
                                       `);
                });
            }

        });
    };
    cardloading();
    $('form').submit(function(e){
        $(".person").remove();
        var formData = new FormData($(this)[0]);
        $.ajax({
            url:'ajaxprocess.php',
            type:'post',
            data:formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(){
                cardloading();
            }
            
        });
        
        e.preventDefault();
    });

});
