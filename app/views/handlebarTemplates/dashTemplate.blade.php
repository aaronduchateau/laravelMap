<script id="user-reviews" type="text/x-handlebars-template">
	@{{#userReviews}} 
	<!--start item-->
	<div class="well custom-well-info">
        <h6 class="review-heading">@{{title}}:
        <span class="pull-right">
        	<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
        </h6>
        </p>
        <p class="review-date">@{{rDate}}<p>
        <p class="body">@{{body}}</p>
    </div>
	<!--end item--> 
	@{{/userReviews}} 
</script>
<script id="job-description" type="text/x-handlebars-template">
	@{{#jobDescription}} 
	<!--start item-->
	<div class="white-class">
        <h4 class="heading just-custom-font-header">@{{title}}:</h4>
        <p class="body just-custom-font-header">@{{body}}</p>
    </div>
	<!--end item--> 
	@{{/jobDescription}} 
</script>
<script id="dash-left-template" type="text/x-handlebars-template">
	@{{#dashLeftArrayData}} 
	<!--start item-->
	    <div class="custom-well-dash-left left-open" data-result-index="@{{@index}}">
	      <table style="margin-left:15px;margin-right:5px;width:95%;">
	        <tr>
	          <td style="width:90%;">
	            <p class="heading">@{{title}}</p>
	            <p class="body">@{{body}}</p>
	            <p class="small">
	            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
	            <span class="mile-holder">@{{distance}}</span>
	            <span class="pull-right">
	            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
	            <span class="date-holder">@{{eDate}}</span>
	            </p>
	          </td>
	          <td style="width:10%;">
	          <span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true" style="color:white;margin-right:10px;"></span>
	          </td>
	        </tr>
	      </table>
	    </div>
	<!--end item--> 
	@{{/dashLeftArrayData}} 
</script>

<script id="dash-right-template" type="text/x-handlebars-template">
	
	<!--start item-->
        <div class="custom-well-dash-left single-right-item">
          <table style="margin-left:10px;margin-right:5px;" data-attr-lat="@{{mapLat}}" data-attr-lng="@{{mapLng}}">
            <tr>
              <td style="width:18%;">
               <img src="{{ URL::asset('images/icon-map-new.png') }}" style="margin-left:5px;margin-right:10px;width:40px;" class="small-user">
              </td>
              <td>
                <div style='margin-top:10px;margin-bottom:10px;'>
                <!--<span class="heading"></span> - -->
                <span class="body"><b>lat:</b> @{{mapLat}} &nbsp;&nbsp;&nbsp;<b>lat:</b> @{{mapLng}}</span>
                <p class="small">
                <span class="pull-left">
                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                <span class="date-holder">@{{mapTime}}</span>
                <br><br>
                </p>
                </div>
        
              </td>
            </tr>
          </table>
        </div>
    <!--end item--> 
	
</script>

<script id="map-info-template" type="text/x-handlebars-template">
	<div class="content-marker">
		<div id="bodyContent" style="margin-left:15px;">
			<h4 class="just-custom-font-header">Avatar Needed</h4>
			<h5 class="just-custom-font-header">@{{ORIGINALSOURCE}}</h5>
			<h6 class="just-custom-font-header"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>@{{Property}} (1.7mi)</h6>
			<p>Looking for qualified applicant to survey factory floor, and check for sealent defects. Desired applicant should be...
			</p>
			<div style="width:130px;" class="pull-left">
				<h6>
					<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> @{{DATE}}
				</h6>
				<h6>
					<span class="glyphicon glyphicon-time" aria-hidden="true"></span> @{{STARTTIME}} - @{{ENDTIME}}
				</h6>
				<h5 style="color:#0D6A92;">
					<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				</h5>
		    </div>		
		    <div style="width:150px;" class="pull-right" data-result-index="@{{TRACKER}}">
			    <h2 class="pull-right" style="margin-top:3px;color:#0D6A92;">
			    <span style="font-size:0.6em;">$</span>@{{ORIGINALLISTPRICE}}<span style="font-size:0.4em;">/ hr</span>
			    </h2>
			    <a href="javascript:void(0);" data-result-index="@{{TRACKER}}" class="btn btn-primary pull-right left-open" style="margin-top:-3px;">
					View Gig Information
				</a>
		    </div>
		</div>
	</div>
</script>

<script id="dash-expanded-info-template" type="text/x-handlebars-template">
	<div class="content-info">
		<div id="bodyContentInfo">
			<div class="dash-expanded-info-title pull-left" style="width:50%;">
				<h4 class="just-custom-font-header white-class" style="margin-top:0px;">@{{ORIGINALSOURCE}}</h4>
			</div>
			<span class="glyphicon glyphicon-print pull-right" style="margin-right:3px;color:white;" id="print-left-dash" aria-hidden="true"></span>
			<span class="glyphicon glyphicon-envelope pull-right" style="margin-right:10px;color:white;" aria-hidden="true"></span>
            <div style="clear:both;"></div>
            <table style="width:100%;">
            	<tr>
            		<td style="width:50%;">
            			<div class="well custom-well-info">
            				<span class="just-custom-font">
            					Owner Name / In Care of:
            				</span>
            				<br/>
            				<h5>
	            				<span class="label label-primary darker-blue-backgroud-class">
	            					@{{emptyCheck ownerName.value}} / @{{emptyCheck inCareOf.value}}
	            				</span>	
            				</h5>
            			</div>
            			<div class="well custom-well-info">
            				<span class="just-custom-font">
            				 	Estimated Land Value / Improvment Value:
            				</span>
            				<br/>
            				<h5>
            					<span class="label label-primary darker-blue-backgroud-class">
            						$@{{formatCurrency landValue.value}} / $@{{formatCurrency impValue.value}}
        						</span>
    						</h5>
    					</div>
            			<div class="well custom-well-info">
            				<span class="just-custom-font">
								Measurment in Acres:
							</span>
							<br/>
							<h5>
								<span class="label label-primary darker-blue-backgroud-class">
								@{{emptyCheck acreage.value}}
								</span>
							</h5>
            			</div>
            			<div class="well custom-well-info">
            				<span class="just-custom-font">
								County Account Reference:
							</span>
							<br/>
							<h5>
								<span class="label label-primary darker-blue-backgroud-class">
								#@{{emptyCheck account.value}}
								</span>
							</h5>
            			</div>
            		</td>
            		<td style="max-width:50%;">
            			<div class="well custom-well-info">
            				<span class="just-custom-font">
            				 	Contact Mailing Address 1:
            				</span>
            				<br/>
            				<h5>
            					<span class="label label-primary darker-blue-backgroud-class">
            						@{{emptyCheck ownerAddress1.value}}
        						</span>
    						</h5>
    					</div>
	            		<div class="well custom-well-info">
            				<span class="just-custom-font">
            					Contact Mailing Address 2:
            				</span>
            				<br/>
            				<h5>
	            				<span class="label label-primary darker-blue-backgroud-class">
	            					@{{emptyCheck ownerAddress2.value}}
	            				</span>	
            				</h5>
            			</div>
            			<div class="well custom-well-info">
            				<span class="just-custom-font">
            				 	Contact Mailing Address 3:
            				</span>
            				<br/>
            				<h5>
            					<span class="label label-primary darker-blue-backgroud-class">
            						@{{emptyCheck ownerAddress2.value}}
        						</span>
    						</h5>
    					</div>
            			<div class="well custom-well-info">
            				<span class="just-custom-font">
								City, State, ZIP
							</span>
							<br/>
							<h5>
								<span class="label label-primary darker-blue-backgroud-class">
								@{{emptyCheck ownerCity.value}}, @{{emptyCheck ownerState.value}} @{{emptyCheck ownerZip.value}} 
								</span>
							</h5>
            			</div>
            		</td>
            	</tr>	
            </table>
            <div class="custom-well-info" style="margin-top: 10px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;">
	            <div id="nested-map" style="height:400px;">
	            </div>
            </div>
		</div>
	</div>
</script>
<script type="text/javascript">
Handlebars.registerHelper('emptyCheck', function(passedString) {
    var theString = passedString ? passedString : "Empty"; 
    return new Handlebars.SafeString(theString)
});
Handlebars.registerHelper("last", function(arrayPassed) {
	if (arrayPassed){	
  		return arrayPassed[arrayPassed.length-1];
	}
});
Handlebars.registerHelper('formatCurrency', function(value) {
    return value.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
});
</script>