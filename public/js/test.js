// $(document).ready(function() {
//     console.log( "document loaded" );
//     $('.ui.checkbox')
//         .checkbox()
//     ;
//
//     $('.myslider').change(function () {
//         if($(this).is( ":checked" )){
//             console.log($(this).is( ":checked" ));
//             alert($(this).is( ":checked" ));
//         }else{
//             console.log($(this).is( ":checked" ));
//             alert($(this).is( ":checked" ));
//         }
//     });
//     all()
// });
//
// $(window).on( "load", function() {
//     console.log( "window loaded" );
// });

$('.ui.checkbox')
    .checkbox()
;

test_receive();

// $('.ui.modal')
//     .modal('show')
// ;

$(".clck").click(function() {
    all("name","Me");
});

$("#test").click(function() {
    $('.ui.modal')
        .modal('show')
    ;
});



$("#temp_sp").click(function() {
    var data={};
    var max = $("#temp_max").val();
    var min = $("#temp_min").val();
    data.temp_max = max;
    data.temp_min = min;
    console.log(data);
    set_data(data);
});

$("#pressure_sp").click(function() {
    var data={};
    var max = $("#pressure_max").val();
    var min = $("#pressure_min").val();
    data.pressure_max = max;
    data.pressure_min = min;
    console.log(data);
    set_data(data);
});

$("#humidity_sp").click(function() {
    var data={};
    var max = $("#humidity_max").val();
    var min = $("#humidity_min").val();
    data.humidity_max = max;
    data.humidity_min = min;
    console.log(data);
    set_data(data);
});

$("#water_sp").click(function() {
    var data={};
    var max = $("#water_max").val();
    var min = $("#water_min").val();
    data.water_max = max;
    data.water_min = min;
    console.log(data);
    set_data(data);
});

$("#light_sp").click(function() {
    var data={};
    var max = $("#light_max").val();
    var min = $("#light_min").val();
    data.light_max = max;
    data.light_min = min;
    console.log(data);
    set_data(data);
});

$("#light_sens").change(function () {
    var v = $(this).is( ":checked" );
    var data={};
    if(v){
        $('.light_sensor').addClass('green');
        $('.l_txt').html('ON');
    }else{
        $('.light_sensor').removeClass('green');
        $('.l_txt').html('OFF');
    }
    data.light_sens = v;
    set_data(data);
    });

$("#door_sens").change(function () {
    var v = $(this).is( ":checked" );
    var data={};
    if(v){
        $('.door_sensor').addClass('green');
        $('.d_txt').html('ON');
    }else{
        $('.door_sensor').removeClass('green');
        $('.d_txt').html('OFF');
    }
    data.door_sens = v;
    set_data(data);
});

$("#window_sens").change(function () {
    var v = $(this).is( ":checked" );
    var data={};
    if(v){
        $('.window_sensor').addClass('green');
        $('.w_txt').html('ON');
    }else{
        $('.window_sensor').removeClass('green');
        $('.w_txt').html('OFF');
    }
    data.window_sens = v;
    set_data(data);
});

 function set_data (data) {
    $.getJSON('/get_json', function(json){
        var object = json;
        console.log(object);
        if(object){
            $.each( object, function( key, val ) {
                //items.push( "<li id='" + key + "'>" + val + "</li>" );
                $.each(data,function (k,v) {
                    if(key==k){
                        object[key] = data[k];
                    }
                })
                console.log(key + ":"+ val);
            });
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var csrf_token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: '/save_json',
            method: 'post',
            data:JSON.stringify(object),
            contentType:"json",
            processData: false,// prefer use serialize method
            success:function(data){
                console.log("success: "+data);
            }
        });
        console.log(object);
    });
}

function test_receive(){
     var object={};
     object.message="Adedeji";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: '/receive_json',
        method: 'post',
        data:JSON.stringify(object),
        contentType:"json",
        processData: false,// prefer use serialize method
        success:function(data){
            console.log("success: "+data);
        }
    });
}