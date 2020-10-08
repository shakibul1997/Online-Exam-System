

document.querySelector('#timeend').addEventListener("click", timeout);

function timeout() {
    $("#timeend").attr("disabled", "disabled");
    setTimeout(function () {
        $("#timeend").removeAttr("disabled");
    }, 3000);
}


//timeout();
