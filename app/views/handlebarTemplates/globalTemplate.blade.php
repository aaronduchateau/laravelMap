<script id="top-menu" type="text/x-handlebars-template">
	<nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#0D6A92;">
      <div class="container" style="width:100%;">
        <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right" style="margin-top:-12px;">
            <li role="presentation" class="@{{menu}}"><a href="../users/menu">Menu</a></li>
            <li role="presentation" class="@{{dash}}"><a href="../users/dashboard">Dashboard</a></li>
            <li role="presentation"><a href="../users/logout">Sign out (@{{emailHeld}})</a></li>
          </ul>
        </nav>
        <h3 class="custom-text-brand"><img src="../images/icon-map-new.png" style="width:20px;margin-top:-4px;"/> TimberChopper&#0153;</h3>
        </div>
      </div>
    </nav>
</script>
<script id="general-loader" type="text/x-handlebars-template">
<h4 class="white-class" style="width:300px;text-align:center;margin-top:50px;">
  <img src="../images/loader.gif" style="width:32px;height:32px;">
  Loading Content...
</h4>
</script>