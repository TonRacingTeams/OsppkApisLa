<script>
window.onload = onPageLoad();
function onPageLoad() {
	var Urban = document.getElementById("Urban");
  if (Urban.checked == true){
    Urban.value = "1";
  } else {
     Urban.value = "";
  }
}
</script>