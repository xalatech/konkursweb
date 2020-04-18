function hentOpplysninger(url) {
    event.preventDefault();
    var orgNr = $("#organisasjonsnummer").val();
    orgNr = orgNr.replace(/\s/g, '');
    $("#organisasjonsnummer").val(orgNr);

    if (orgNr != "") {
        $.ajax({
            url: url + orgNr,
            method: "GET",
            success: function (data) {
                $("#navn").val(data.navn);
                $("#adresse").val(data.forretningsadresse.adresse);
                $("#postnummer").val(data.forretningsadresse.postnummer);
                $("#poststed").val(data.forretningsadresse.poststed);

                $("#epost").focus();

            }
        });
    }
}
