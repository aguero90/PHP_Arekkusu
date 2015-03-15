

// usiamo il plugin per le multiselect
$('.multiselect-with-plugin').multiselect();

// usiamo il plugin per gli editor di testo
$('.textEditor').summernote({height: 300});

// gestiamo la selezione delle immagini da associare ad un articolo
$(".selectImage").click(handleImageSelection);

function handleImageSelection(event) {

    if (!$(this).hasClass("imageSelected")) {

        $(this).addClass("imageSelected");

        var form = $(".imageSelectionForm").first();
        var input = $("<input>", {
            type: "hidden",
            name: "selectedImage[]",
            value: event.target.dataset.id
        });

        input.appendTo(form);

        var string = "";
        string += "<div class='col-xs-6 col-md-3' data-imageID='" + event.target.dataset.id + "' >";
        string += "<div class='thumbnail selectImage'>";
        string += "<img src='" + event.target.src + "' alt='" + event.target.alt + "' data-ID='" + event.target.dataset.id + "' />";
        string += "</div>";
        string += "</div>";

        $("#selectedImagesThumbnail").append(string);

    } else {

        $(this).removeClass("imageSelected");

        $("input[value='" + event.target.dataset.id + "']").remove();

        $("div[data-imageID='" + event.target.dataset.id + "']").remove();

    }
}

