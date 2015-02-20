<!--top menu goes here-->
<div class="options-area" style="margin-left:5px;margin-right:10px;">
  <h5 style="color:white;" class="left-result-heading dash-heading-4 pull-left">
    &nbsp;&nbsp;&nbsp;Good News! 250 gigs near your location (97401)
  </h5>
  <div class="pull-left left-action-buttons" style="display:none;">
    <h3 class="left-action-buttons-title">Avatar Needed</h3>
    <a class="btn btn-primary pull-right back" style="margin-right: 20px;">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
    </a>
    <div class="dropdown pull-right">
      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" style="margin-right:10px;">
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Apply</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bookmark</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Endorse</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Print</a></li>
      </ul>
    </div>
    <a href="javascript:void(0);" id="review-scroll" class="btn btn-primary pull-right">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
      <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
    </a>
  </div>
  <button id="config" class="btn btn-primary pull-right" style="margin-right:10px;">
    <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 
  </button>
  <button class="btn btn-primary pull-right back-right" style="margin-right:10px;display:none;">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  </button>
   <button id="current-loc-click" class="btn btn-primary pull-right" style="margin-right:10px;">
    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
  </button>
  <button id="search-click"class="btn btn-primary pull-right" style="margin-right:10px;">
    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
  </button>
  <input class="input custom-input pull-right" id="lngMap" placeholder="longitude" value="-122.877734">
  <input class="input custom-input pull-right" id="latMap" placeholder="lattitude" value="42.320921">
  
</div>
<div class="container-dash">
  <div class="dash-left-list" style="background-color:rgba(13,106,146,0.9);">
    <div class="dash-left-inter-margin" style="display:none;">
      <!--this is populated using avatarTemplate-->
    </div>
    <div class="dash-left-full-margin">
    </div>
  </div>
  <div id="map-canvas" class="dash-center" style="">
    <h4 class="white-class" style="width:300px;text-align:center;margin-top:50px;">
    <img src="{{ URL::asset('images/loader.gif') }}" style="width:32px;height:32px;">
    Loading Content...
    </h4>
    <!--map goes here-->
  </div>
  <div class="dash-right-list" style="background-color:rgba(13,106,146,0.9);">
    <div class="dash-right-inter-margin" style="display:none;">
      <!--this is populated using avatarTemplate-->
    </div>
  </div>
  <div class="dash-options" style="background-color:rgba(13,106,146,0.0);">
    <div class="options-inter-margin" style="display:none;">
      <!--content-->
      <form role="form">
        <!--<div class="form-group">
          <label for="exampleInputEmail1">Search by Keyword:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Filter by Keywords">
        </div>-->
        <div class="form-group">
          <label for="exampleInputEmail1">Search Location:</label>
          <input type="text" class="form-control" placeholder="Address" id="search-address">
          <input type="text" class="form-control" placeholder="City" id="search-city">
          <input type="text" class="form-control" placeholder="State" id="search-state">
          <input type="text" class="form-control" placeholder="Zip" id="search-zip">
          <!--<input type="checkbox"> <span style="color:white;">Reset to saved Address</span>-->
          <a href="javascript:void(0);" class="btn btn-default" id="search-all-address">Search By Address</a>
        </div>
        <!--<div class="form-group">
           <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                filter within 50 miles
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">10 miles</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">25 miles</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">50 miles</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">75 miles</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">100 miles</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">200 miles</a></li>
              </ul>
            </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Day Range:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Start Date:">
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="End Date:">
        </div>
        <button type="submit" class="btn btn-default">Update Search Results</button>
      </form>-->
      <!--content-->
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg blue-background" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color:rgba(13,106,146,0.8);">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <p class="modal-title" id="exampleModalLabel" style="color:#d3d3d3;font-size:15px;">Don't have an Account? <a href="#" style="color:white;">Sign Up Here</a>.</p>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
            <form class="navbar-form navbar-left well custom-form-well" role="form" >
              <p class="custom-font" style="margin-top:0px;">Sign into Avatar Account</p>
              <div class="form-group form-margin">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group form-margin">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
          </div>
          <div class="col-md-4">
            <form class="navbar-form navbar-left well custom-form-well" role="form" >
              <p class="custom-font" style="margin-top:0px;">Sign into Company Account</p>
              <div class="form-group form-margin">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group form-margin">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
          </div>
          <div class="col-md-4">
           <h2 class="custom-text-brand"> MyEyesRemote&#0153;</h2>
           <img src="{{ URL::asset('images/logo-small.png')}}" style="margin-left:10px;margin-top:10px;"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--include this on every page-->
<input type="hidden" id="client-email-holder" value="{{Auth::user()->email}}">
<input type="hidden" id="ghetto-domain-for-js-holder" value="{{ URL::asset('')}}">

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&v=3&libraries=geometry"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="{{ URL::asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('dist/js/handlebars-v2.0.0.js') }}"></script>
<script src="{{ URL::asset('dist/js/jQuery.print.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ URL::asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>

<script src="{{ URL::asset('assets/jsModels/avatarDashboardModel.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/googleMapPopulateScoped.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/globalVars.js') }}"></script>
<script src="{{ URL::asset('dist/scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!--$(selector).mCustomScrollbar("scrollTo",position,options);-->
<!--//http://manos.malihu.gr/jquery-custom-content-scroller/-->

<!--include handlbar templates-->
@include('handlebarTemplates.dashTemplate')
@include('handlebarTemplates.globalTemplate')

<script>
  function timeNow() {
    var d = new Date(),
        h = (d.getHours()<10?'0':'') + d.getHours(),
        m = (d.getMinutes()<10?'0':'') + d.getMinutes();
    return (h + ':' + m);
  }

  function rightTemplateJson(){
    var tempJson = {mapLat: $('#latMap').val(), mapLng: $('#lngMap').val(), mapTime: timeNow()};
    return tempJson;
  }

  function myLocationCallback(position){
    $('#latMap').val(position.coords.latitude);
    $('#lngMap').val(position.coords.longitude);
    $('#search-click').click();
  }

  $( document ).ready(function() {
    console.log({{$mapCountyData}});
    window.g.mapConfig = {{$mapCountyData}};
    $('#latMap').val(window.g.mapConfig[0].startLat);
    $('#lngMap').val(window.g.mapConfig[0].startLng);

    //set up everything to have the right margins and what not
    window.g.triPageSetup();
    
    //load global template and populate top menu
     window.g.populateTopMenu(
      { menu: {class: "", link: "{{ URL::asset('/users/menu') }}", action: ""},
        dash: {class: " active", link: "javascript:void(0);", action: ""},
        emailHeld: $('#client-email-holder').val() });
    
    //load dash specific template
    var rightDashTemplate;
    var templateResult;

    
    //this loads our template for the left pain
    var source   = $("#dash-left-template").html();
    var leftDashTemplate = Handlebars.compile(source);
    templateResult = leftDashTemplate(window.avatar);
    $('.dash-left-inter-margin').append(templateResult);

    //this load our template for the right pain 
    source = $("#dash-right-template").html();
    rightDashTemplate = Handlebars.compile(source);
    templateResult = rightDashTemplate(rightTemplateJson());
    $('.dash-right-inter-margin').append(templateResult);
    $('.single-right-item:first').addClass('active-item-right');

    //populate the map
    window.gmd.populateMap( $('#latMap').val(), $('#lngMap').val() );
   

    $(window).load(function(){
        
      $(".dash-left-list").mCustomScrollbar({
        theme:"minimal"
      });

      $(".dash-right-list").mCustomScrollbar({
        theme:"minimal"
      });
      
    });

    //print the left dash pain
    $(document).on('click', '#print-left-dash', function(event) {
      $('.dash-left-full-margin').print({
        globalStyles : false, // Use Global styles
        mediaPrint : false, // Add link with attrbute media=print
        //stylesheet : "http://fonts.googleapis.com/css?family=Inconsolata", //Custom stylesheet
        iframe : false, //Print in a hidden iframe
        noPrintSelector : ".avoid-this", // Don't print this
        append : "custom tip can go here", // Add this on top
        prepend : "<h2>Avatar RFP - MyEyesRemote.com</h2>" // Add this at bottom
      });
    });

    $(document).on('click', '.left-open', function(event) {
        //$(".container-dash").css('left','0px');
        //if (window.nestedMap){
          //window.nestedMap.setMap(null);
        //}
        $('#config').hide();
        $('.back').show();
        $('.back-right').hide()
        //start: toggle heading area
        $('.left-result-heading').hide();
        $('.left-action-buttons').show();
        //end: toggle heading area
        $('.dash-left-inter-margin').slideUp('slow');
        $('.dash-left-full-margin').slideUp('slow');
        $( ".container-dash" ).animate({
          left: "0"
        }, 400, function() {
          // Animation complete.
          
          //this loads our template for the expanded info view in the left pain
          var source = $("#dash-expanded-info-template").html();
          var leftDashTemplate = Handlebars.compile(source);
          //var indexTracker = $(event.target).attr('data-result-index');
          var indexTracker = $(event.target).closest('div').attr('data-result-index');
        
          var templateResult = leftDashTemplate(window.g.mapRowData);
          $('.dash-left-full-margin').html(templateResult);

          //
          window.gmd.interactMap.nestedMap(window.g.mapRowData['ACCOUNT'].value);

          //this loads the work description for the expanded view
          source   = $("#job-description").html();
          leftDashTemplate = Handlebars.compile(source);
          templateResult = leftDashTemplate(window.avatar);
          $('.dash-left-full-margin').append(templateResult);
          //load empty div for binding
          $('.dash-left-full-margin').append("<h4 id='top-review' class='white-class'>User Reviews:</h4>");
          //this loads the user reviews for the expanded view
          source   = $("#user-reviews").html();
          leftDashTemplate = Handlebars.compile(source);
          templateResult = leftDashTemplate(window.avatar);
          $('.dash-left-full-margin').append(templateResult);

          $('#image-thumb-slider').css("max-width", (window.g.halfWidth() - 80) + "px");
          $('.dash-left-full-margin').slideDown('slow');
        });
    });
    
    //bind scroll click to view user reviews
    $(document).on('click', '#review-scroll', function() {
        $(".dash-left-list").mCustomScrollbar("scrollTo","#top-review");
    });

    $(document).on('click', '.back', function() {
       goBack();
    });

    $(document).on('click', '.back-right', function() {
       goBack();
    });

    function goBack(){
      $('.back-right').hide();
      $('#config').show();
        //start: toggle heading area
      $('.left-result-heading').show();
      $('.left-action-buttons').hide();
      //end: toggle heading area
      $('.dash-left-full-margin').slideUp('slow');
      $( ".container-dash" ).animate({
        left: - window.g.oneQuarterWidth()
      }, 400, function() {
        $('.dash-left-inter-margin').slideDown('slow');
          // Animation complete.
      });
    }

    $(document).on('click', '#config', function() {
       //$(".container-dash").css('left','0px');
       $('#config').hide();
       $('.back-right').show();
        $( ".container-dash" ).animate({
          left: - window.g.halfWidth()
        }, 400, function() {
          // Animation complete.
        });
    });

    $(document).on('click', '#search-click', function() {
       templateResult = rightDashTemplate(rightTemplateJson());
       $('.dash-right-inter-margin').prepend(templateResult);
       $( ".single-right-item" ).each(function() {
         $( this ).removeClass('active-item-right');
       });
       $('.single-right-item:first').addClass('active-item-right');
       window.gmd.interactMap.panToPosition( $('#latMap').val(), $('#lngMap').val() );
       console.log('click');
    });

    $(document).on('click', '#search-all-address', function() {
      var address = $('#search-address').val();
      var city = $('#search-city').val();
      var state = $('#search-state').val();
      var zip = $('#search-zip').val();
      var fullAddy = address + ' ' + city + ' ' + state + ' ' + zip;
      window.gmd.interactMap.addressLookup(fullAddy);
      goBack();
    });

    $(document).on('click', '#current-loc-click', function() {
       navigator.geolocation.getCurrentPosition(myLocationCallback);
    });

    $(document).on('click', '.single-right-item', function(event) {
       var latMap = $(event.target).closest('table').attr('data-attr-lat');
       var lngMap = $(event.target).closest('table').attr('data-attr-lng');
       $( ".single-right-item" ).each(function() {
         $( this ).removeClass('active-item-right');
       });
       $(event.target).closest('.single-right-item').addClass('active-item-right');
       window.gmd.interactMap.panToPosition( latMap, lngMap );
      
    });
    
  });

</script>