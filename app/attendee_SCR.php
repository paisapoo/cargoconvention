<script src="js/sorttable.js"></script>
<script>
function addNameFunc() {
	document.getElementById("addCompany").value = '';
	document.getElementById("addCountry").value = '';
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("addName");
  filter = input.value.toUpperCase();
  table = document.getElementById("datatable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function addCompanyFunc() {
	document.getElementById("addName").value = '';
	document.getElementById("addCountry").value = '';
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("addCompany");
  filter = input.value.toUpperCase();
  table = document.getElementById("datatable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function addCountryFunc() {
	document.getElementById("addCompany").value = '';
	document.getElementById("addName").value = '';
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("addCountry");
  filter = input.value.toUpperCase();
  table = document.getElementById("datatable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
