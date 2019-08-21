$(document).ready(function() {

	function carbInUnits($inputC) {
		var carbinUnits = ($inputC/15);
		return carbinUnits;
	}

	function getInUnits($input) {
		var inUnits = ($input - 150)/50;
		return inUnits;
	}

	$("#bs-btn").click(
		function() {
			// regex for only numbers
			var reg = /^\d+$/;
			var input = $("#bs").val();
			var inputC = $("#cg").val();

			if(reg.test(input) == false) {
				$("#output").removeClass("alert alert-danger");
				$("#output").addClass("alert alert-danger");
				$("#output").empty();
				$("#output").append("You entered " + input + " for your blood sugar, which is not a valid number. Please enter a positive number.");
			} else {
				if(reg.test(inputC) == false) {
					$("#output").removeClass("alert alert-danger");
					$("#output").addClass("alert alert-danger");
					$("#output").empty();
					$("#output").append("You entered " + inputC + " for your carb intake, which is not a valid number. Please enter a positive number.");
				} else {
					if(input > 1000) {
						$("#output").removeClass("alert alert-danger");
						$("#output").addClass("alert alert-danger");
						$("#output").empty();
						$("#output").append("You entered " + input + " for your blood sugar. Make sure this is correct, as it is extremly high.");
					} else if(inputC > 50) {
						$("#output").removeClass("alert alert-danger");
						$("#output").addClass("alert alert-danger");
						$("#output").empty();
						$("#output").append("You entered " + inputC + " for your carb intake. Make sure this is correct, as it is extremly high.");
					} else {
						if(input <= 150 && inputC < 8) {
							$("#output").removeClass("alert alert-danger");
							$("#output").addClass("alert alert-danger");
							$("#output").empty();
							$("#output").append("You entered " + input + " for your blood sugar, and " + inputC + " for your carb intake. You do not need to take any insulin.");
							if(input <= 50) {
								$("#output").append("Your blood sugar is very low, please contact your doctor.");
							}
						} else {
							var inUnitsOutput = getInUnits(input);
							var carbInUnitsOutput = carbInUnits(inputC);
							var totInUnits = inUnitsOutput + carbInUnitsOutput;
							var roundedUnits = Math.round(totInUnits);
							$("#output").removeClass("alert alert-danger");
							$("#output").addClass("alert alert-danger");
							$("#output").empty();
							$("#output").append("You need to take " + roundedUnits + " unit(s) of insulin.(" + inUnitsOutput + " blood sugar + " + carbInUnitsOutput + " carbs. " + totInUnits + " before rounding.)");
						}
					}
				}
			}
			
		}
	);
});