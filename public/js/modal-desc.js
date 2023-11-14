// Modal en descripción en la tabla suplementos || Vista suplementosAdmin

$(document).ready(function () {
    $(".btn-ver-descripcion").click(function () {
        var descripcionCompleta = $(this)
            .closest("tr")
            .find(".descripcion-completa")
            .text();
        $("#descripcionModal").text(descripcionCompleta);
    });
});
