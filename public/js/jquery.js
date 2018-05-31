$(document).ready(function(){
    $("input[name=name-client]").blur(function(){
        if($(this).val() === '') {
            $("#errorNameClient").remove();
            $(this).after("<span style='color: #dd4b39;' id='errorNameClient'>El nombre del cliente es obligatorio!</span");
            $(this).css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorNameClient").remove();
            $(this).css("border-color", "#00a65a");
        } 
    });

    $("input[name=name-enriched]").blur(function(){
        if($(this).val() === '') {
            $("#errorNameEnriched").remove();
            $(this).after("<span style='color: #dd4b39;' id='errorNameEnriched'>El nombre del encargado es obligatorio!</span");
            $(this).css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorNameEnriched").remove();
            $(this).css("border-color", "#00a65a");
        } 
    });

    $("input[name=email-enriched]").blur(function(){
        if($(this).val() === '') {
            $("#errorEmailEnriched").remove();
            $(this).after("<span style='color: #dd4b39;' id='errorEmailEnriched'>El correo es obligatorio!</span");
            $(this).css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorEmailEnriched").remove();
            $(this).css("border-color", "#00a65a");
        } 
    });

    $("input[name=name-hardware]").blur(function(){
        if($(this).val() === '') {
            $("#errorNameHardware").remove();
            $(this).after("<span style='color: #dd4b39;' id='errorNameHardware'>El nombre del hardware es obligatorio!</span");
            $(this).css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorNameHardware").remove();
            $(this).css("border-color", "#00a65a");
        } 
    });

    $("input[name=supervisor]").blur(function(){
        if($(this).val() === '') {
            $("#errorSupervisor").remove();
            $(this).after("<span style='color: #dd4b39;' id='errorSupervisor'>El nombre del supervisor es obligatorio!</span");
            $(this).css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorSupervisor").remove();
            $(this).css("border-color", "#00a65a");
        } 
    });

    $("input[name=commentary]").blur(function(){
        if($(this).val() === '') {
            $("#errorComementary").remove();
            $(this).after("<span style='color: #dd4b39;' id='errorComementary'>El comentario es obligatorio!</span");
            $(this).css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorComementary").remove();
            $(this).css("border-color", "#00a65a");
        } 
    });

    $("select[name=quantity]").change(function() {
        if($(this).val() == "Other"){
            $(this).removeAttr("name");
            $("#other-quantity").html("<label for='other-quantity'>Otra Cantidad</label><input type'number' name='quantity' class='form-control' placeholder='Enter...'>");
            $("input[name=quantity]").blur(function(){
                if($(this).val() === '') {
                    $("#errorQuantity").remove();
                    $(this).after("<span style='color: #dd4b39;' id='errorQuantity'>La cantidad es obligatorio!</span");
                    $(this).css("border-color", "#dd4b39");
                    event.preventDefault();
                } else {
                    $("#errorQuantity").remove();
                    $(this).css("border-color", "#00a65a");
                }
            });
        } else {
            $(this).attr("name=quantity");
            $("#other-quantity").html("");
        }
    });

    $("#formCustomers").submit(function(event){
        if($("input[name=name-client]").val() === '') {
            $("#errorNameClient").remove();
            $("input[name=name-client]").after("<span style='color: #dd4b39;' id='errorNameClient'>El nombre del cliente es obligatorio!</span");
            $("input[name=name-client]").css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorNameClient").remove();
            $("input[name=name-client]").css("border-color", "#00a65a");
        }

        if($("input[name=name-enriched]").val() === '') {
            $("#errorNameEnriched").remove();
            $("input[name=name-enriched]").after("<span style='color: #dd4b39;' id='errorNameEnriched'>El nombre del encargado es obligatorio!</span");
            $("input[name=name-enriched]").css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorNameEnriched").remove();
            $("input[name=name-enriched]").css("border-color", "#00a65a");
        }

        if($("input[name=email-enriched]").val() === '') {
            $("#errorEmailEnriched").remove();
            $("input[name=email-enriched]").after("<span style='color: #dd4b39;' id='errorEmailEnriched'>El correo es obligatorio!</span");
            $("input[name=email-enriched]").css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorEmailEnriched").remove();
            $("input[name=email-enriched]").css("border-color", "#00a65a");
        }
    });

    $("#formHardwares").submit(function(event){
        if($("input[name=name-hardware]").val() === '') {
            $("#errorNameHardware").remove();
            $("input[name=name-hardware]").after("<span style='color: #dd4b39;' id='errorNameHardware'>El nombre del hardware es obligatorio!</span");
            $("input[name=name-hardware]").css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorNameHardware").remove();
            $("input[name=name-hardware]").css("border-color", "#00a65a");
        }
    });

    $("#formMoves").submit(function(event){
        if($("input[name=supervisor]").val() === '') {
            $("#errorSupervisor").remove();
            $("input[name=supervisor]").after("<span style='color: #dd4b39;' id='errorSupervisor'>El nombre del supervisor es obligatorio!</span");
            $("input[name=supervisor]").css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorSupervisor").remove();
            $("input[name=supervisor]").css("border-color", "#00a65a");
        }

        if($("input[name=commentary]").val() === '') {
            $("#errorComementary").remove();
            $("input[name=commentary]").after("<span style='color: #dd4b39;' id='errorComementary>El comentario del hardware es obligatorio!</span");
            $("input[name=commentary]").css("border-color", "#dd4b39");
            event.preventDefault();
        } else {
            $("#errorComementary").remove();
            $("input[name=commentary]").css("border-color", "#00a65a");
        }
    });

    $(".mensajeCustomers").fadeOut(10000);
    $(".mensajeHardwares").fadeOut(10000);
    $(".mensajeMoves").fadeOut(10000);
});