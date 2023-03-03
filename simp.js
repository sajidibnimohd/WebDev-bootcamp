// subration of two numbers in javascript?
<div class="form-group col-lg-6">
    <label for="exampleInputText">Total Price</label>
    <input type="text" name="totalval" class="form-control" id="totalval" onchange="updateDue()">
</div>
<div class="form-group col-lg-6">
    <label for="exampleInputText">Initial Deposit</label>
    <input type="text" name="inideposit" class="form-control" id="inideposit" onchange="updateDue()">
</div>
<div class="form-group col-lg-6">
    <label for="exampleInputText">Outstanding Dues</label>
    <input type="text" name="remainingval" class="form-control" id="remainingval">
</div>


function updateDue() {

    var total = parseInt(document.getElementById("totalval").value);
    var val2 = parseInt(document.getElementById("inideposit").value);

    // to make sure that they are numbers
    if (!total) { total = 0; }
    if (!val2) { val2 = 0; }

    var ansD = document.getElementById("remainingval");
    ansD.value = total - val2;
}




//Source: https://stackoverflow.com/questions/29317741












