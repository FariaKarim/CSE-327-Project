function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search-form");
  filter = input.value.toUpperCase();
  list = document.getElementById("list-start");
  p = list.getElementsByTagName("p");
  
  for (i = 0; i < p.length; i++) {
    txtValue = p[i].textContent || p[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      p[i].style.display = "";
    } else {
      p[i].style.display = "none";
    }  
  }
}