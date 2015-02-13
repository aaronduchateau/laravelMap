<!--top menu goes here-->
<div class="options-area" style="margin-left:5px;margin-right:10px;">
  <h5 style="color:white;" class="left-result-heading dash-heading-4 pull-left">
    &nbsp;&nbsp;&nbsp;Welcome, please choose a state, then a county from the menu below:
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
  <div class="menu-left-list-1" style="background-color:rgba(13,106,146,0.9);">
    <div class="menu-left-inter-margin-1" >
      @foreach($usStates as $usState)
        <!--start item-->
          <div class="custom-well-dash-left left-open-1" data-result-index="{{$usState->id}}">
            <table style="margin-left:15px;margin-right:5px;width:95%;">
              <tr>
                <td style="width:90%;">
                  <h4 class="heading">{{$usState->name}}</h4>
                </td>
                <td style="width:10%;">
                <span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true" style="color:white;margin-right:10px;"></span>
                </td>
              </tr>
            </table>
          </div>
        <!--end item--> 
      @endforeach
    </div>
  </div>
  <div class="menu-left-list-2" style="background-color:rgba(13,106,146,0.9);">
    <div class="menu-left-inter-margin-2">
      <!--this is populated using avatarTemplate-->
    </div>
 </div>
 <div id="map-canvas" class="dash-center" style="background-color:#7692AA;">
    <div class="dash-center-top-container" style="width: 100%;">
      <div class="dash-center-top">
        <h4 class="white-class" style="width:300px;text-align:center;margin-top:50px;">
        <img src="../images/loader.gif" style="width:32px;height:32px;">
        Loading Content...
        </h4>
      </div>  
    </div>
    <div class="dash-center-bottom" style="width:100%;height:150px;padding:15px;background-color:rgb(51, 122, 183);">
      <div class="pull-left" style="width: 70%">
        <textarea id="message-box" style="height:74px;padding:5px;"></textarea>
      </div>
      
      <a class="btn btn-primary pull-right" style="margin-right: 0px">
        <span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 
      </a>
      <a class="btn btn-primary pull-right">
        <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> 
      </a>
      <a class="btn btn-primary pull-right">
        <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> 
      </a>
       <br><br>
      <a class="btn btn-primary pull-right" id="send-btn" style="margin-right: 0px;">
        Send <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
      </a>
    </div>    
  </div>
</div>


<!--include this on every page-->
<input type="hidden" id="client-email-holder" value="{{Auth::user()->email}}">

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

<script src="{{ URL::asset('assets/jsModels/menuModel.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/googleMapPopulateScoped.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/globalVars.js') }}"></script>
<script src="{{ URL::asset('dist/scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!--$(selector).mCustomScrollbar("scrollTo",position,options);-->
<!--//http://manos.malihu.gr/jquery-custom-content-scroller/-->

<!--include handlbar templates-->
@include('handlebarTemplates.menuTemplate')
@include('handlebarTemplates.globalTemplate')

<script>
 
  $( document ).ready(function() {
    //set up everything to have the right margins and what not
    window.g.twoLeftPageSetup();
    
    //load global template and populate top menu
    window.g.populateTopMenu({menu:' active', dash:'', profile:'', transactions:'', help:'', emailHeld: $('#client-email-holder').val()});
    

    $(".menu-left-list-1").mCustomScrollbar({
        theme:"minimal"
    });


    function highlightLastItem(className, event){
        $( className ).each(function() {
            $( this ).removeClass('active-item-right');
        });
        $(event.target).closest( className ).addClass('active-item-right');
    }

    var populateSecondMenu = function (data){ 
     
        //this loads our template for the second left pain
        var source = $("#menu-left-2-template").html();
        var leftDashTemplate = Handlebars.compile(source);
        templateResult = leftDashTemplate({menu: data});
        $('.menu-left-inter-margin-2').html(templateResult);

    }
    
    //populate second from left menu bar
    $(document).on('click', '.left-open-1', function(event) {
        var indexTracker = $(event.target).closest('div').attr('data-result-index');
        //highlight the last clicked item
        highlightLastItem('.left-open-1', event);
        //call model provide index and callback
        window.menu.fetchCounties(indexTracker, populateSecondMenu);
    });
    


    /*

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

    fetchCounties

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
    */
    
  });

</script>