
<script type="text/javascript">

	$(function () {

	  "use strict";

	  //Make the dashboard widgets sortable Using jquery UI
	  /*$(".connectedSortable").sortable({
		placeholder: "sort-highlight",
		connectWith: ".connectedSortable",
		handle: ".box-header, .nav-tabs",
		forcePlaceholderSize: true,
		zIndex: 999999
	  });*/
	  $(".connectedSortable .box-header, .connectedSortable .nav-tabs-custom").css("cursor", "move");
	  //The Calender
		$("#calendar").datepicker({ language: 'en' });
		$("#calendar").datepicker('update', Date());
	 });
 
	function ajaxModulo(_url) {
	/* Send the data using post and put the results in a div */
		$.ajax({
			url: _url,
			type: "post",
			
			success: function(data){
				$("#cuadros").append(data);
					
			},
			error:function(){
				alert("No se ha podido obtener la informaci�n del M�dulo");
			}   
		});
	}
	
	
</script>


<script language="javascript" type="text/javascript">

		var masonry = new Macy({
				container: '#macy-container',
				trueOrder: false,
				waitForImages: false,
				useOwnImageLoader: false,
				debug: true,
				mobileFirst: true,
				columns: 12,
				margin: 24,
				breakAt: {
						1200: 3,
						940: 3,
						520: 2,
						400: 2
				}
		});

</script>