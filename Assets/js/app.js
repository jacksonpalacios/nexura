class Contracts{

    constructor(){
        this.code = $("input#code").val();
        this.object_contract = $("textarea#object_contract").val();
        this.estimate_budget = $("input#estimate_budget").val();
        this.type_contract = $("select#type_contract").val();
        this.secretary = $("select#secretary").val();

        let end_date = $("input#end_date").val();
        this.end_date = end_date.replace("/", "-");

        let start_date = $("input#start_date").val();
        this.start_date = start_date.replace("/", "-")
    }
}

class ButtonContracts {
    constructor(el) {
        if (el) {
            this.el = el
            this.onClick = this.onClick.bind(this)
            this.el.addEventListener('click', this.onClick)
        }
    }

    onClick(e) {
        e.preventDefault()
        const contracts = new Contracts()

        $.ajax({
            method: "POST",
            url: "http://nexura.local/contracts/add/",
            data: contracts
        }).done(function (datos) {
            console.log(datos)
        });
    }

}

function init() {
    const button = document.querySelector('#btn_save_contracts')
    const miBoton = new ButtonContracts(button)
}

window.addEventListener('load', init)


$(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $(':file').on('fileselect', function(event, numFiles, label) {
        console.log(numFiles);
        console.log(label);
    });
});