</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#table-datatable").dataTable();
	});

	  $("#addMore").click(function(e) {
    e.preventDefault();
   var firstDivContent = document.getElementById('fieldList');
   	var secondDivContent = document.getElementById('fieldList2');
      secondDivContent.innerHTML = secondDivContent.innerHTML + firstDivContent.innerHTML;
  });


</script>
</body>
</html>
