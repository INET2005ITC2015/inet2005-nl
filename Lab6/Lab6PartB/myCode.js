$(document).ready(function(){
   $('#searchExpr').keyup(function () {
     var t = this;
     $("#TxtHint").load("newEmployeesNameSearcher.php?searchExpr=" + t.value);
   });
 });



