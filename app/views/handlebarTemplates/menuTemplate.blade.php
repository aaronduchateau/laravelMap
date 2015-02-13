<script id="menu-left-2-template" type="text/x-handlebars-template">
	@{{#if menu}}
	@{{#menu}} 
	<!--start item-->
	    <div class="custom-well-dash-left left-open-2" data-result-index="@{{id}}">
	      <table style="margin-left:15px;margin-right:5px;width:95%;">
	        <tr>
	          <td style="width:90%;">
	            <h4 class="heading">@{{countyName}}</h4>
	          </td>
	          <td style="width:10%;">
	          <span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true" style="color:white;margin-right:10px;"></span>
	          </td>
	        </tr>
	      </table>
	    </div>
	<!--end item--> 
	@{{/menu}} 
	@{{else}}
	<p class="heading" style="padding:20px;color:white;">No Counties Available</p>
	@{{/if}}
</script>