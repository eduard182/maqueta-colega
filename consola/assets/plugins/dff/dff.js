 var room = 1;

function education_fields() {

    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass" + room);
    var rdiv = 'removeclass' + room;
    divtest.innerHTML = '<div class="row" style="margin-bottom:20px;">  <div class="col-sm-6 nopadding"> <div class="form-group"> <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Cantidad"> </div> </div> <div class="col-sm-6 nopadding"> <div class="form-group"> <div class="input-group"> <select class="form-control" id="educationDate" name="educationDate[]"> <option value="">Cellar</option> <option value="2015">2015</option> <option value="2016">2016</option> <option value="2017">2017</option> <option value="2018">2018</option> </select> <div class="input-group-append"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> <i class="fa fa-minus"></i> </button> </div> </div> </div> </div> <div class="clear"></div> </div>';

    objTo.appendChild(divtest)
}

function remove_education_fields(rid) {
    $('.removeclass' + rid).remove();
}