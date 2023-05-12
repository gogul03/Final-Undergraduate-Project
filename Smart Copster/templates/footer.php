   <footer class="footer">
            <div class="container-fluid">
                
                
            </div>
        </footer>

    </div>
</div>


</body>

    
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	
	<script src="assets/js/chartist.min.js"></script>

    
    <script src="assets/js/bootstrap-notify.js"></script>

    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

   
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Smart Copster</b> Traffic Offence System."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
	
 <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){


var element = $(this);


var del_id = element.attr("id");


var info = 'id=' + del_id;
 if(confirm("Sure you want to do these? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete-user.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});

</script>
<script src="assets/js/script.js"></script>
</script>
</html>
