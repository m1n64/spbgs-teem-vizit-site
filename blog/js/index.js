(function () {

    var result;
    var ctx = document.getElementById("res").getContext('2d');



    $.getJSON( "data/results.json", function( data ) {

    }).done(function (data) {
        const options = {
            type: 'pie',
            data: {
                labels: ["Антон", "Никита", "Кирилл", "Стас", "Алёна"],
                datasets: [{
                    label: 'Голосов',
                    data: data.results,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    display: true
                }
            }
        };

        var myChart = new Chart(ctx, options);

        $("#hidden").html(JSON.stringify(data));

    });

    $("#error-msg").hide();


    $(".edits").click(function () {
       let v = $(this).attr("to");
       // $("#pic"+v).removeClass("icon-ic_radio_button_unchecked_48px").addClass("icon-ic_radio_button_checked_48px");
        for(let i  = 1; i <= 5; i++){
            if (i == v) $("#pic"+v).removeClass("icon-ic_radio_button_unchecked_48px").addClass("icon-ic_radio_button_checked_48px");
            else $("#pic"+i).removeClass("icon-ic_radio_button_checked_48px").addClass("icon-ic_radio_button_unchecked_48px");
        }

        $("#go").attr("voice", v);

    });

    var voice;

    $("#go").click(function () {
        let rs = $(this).attr('voice');
        if (rs == '-1') {
            $("#error-msg").show();
            return false;
        }
        $("#error-msg").hide();
        $("#mod1").modal();
        voice = rs;
    });

    if (localStorage["isVoice"] !== undefined || localStorage["isVoice"] !== "yes") {
        $("#go").hide().unbind("click");
        $(".edits").unbind("click");
    }

    $('#mod1').on($.modal.BEFORE_CLOSE, function(event, modal) {
        let wnd = op();
        let t = setInterval(function () {
            if (wnd.closed) {
                $("#mod2").modal();

                clearInterval(t);
            }
        }, 200);
    });

    $('#mod2').on($.modal.BEFORE_CLOSE, function(event, modal) {
        let res = JSON.parse($("#hidden").html());

        for(let i =0; i < res.results.length; i++) {
            if (i === voice-1) res.results[i]++;
        }

        $.post(
            'ajax/setvoice.ajax.php',
            {
                data: JSON.stringify(res)
            },
            (e)=>{
                localStorage.setItem("isVoice", "yes");
                location.reload();
            }
        );



    });

})();