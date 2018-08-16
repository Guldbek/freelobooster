@extends('app.layouts.app')

@section('content')
<style type="text/css">
#error-container{
  margin-top:56px;



}
.row{
    display:flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    min-height:90.255vh;
}
.error-img{

}
.error-txt p{
  padding-left:15%;
  padding-right:15%;
}
</style>
<?php $actual_link = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<div id="error-container" class="container">
  <div class="row">
      <div class="col-md-6 error-img">
        <img src="/images/cryingAmumu.png" alt="crying amumu">
      </div>
      <div class="col-md-6 error-txt">
        <h2>Aww... Dont cry</h2>
        <p>It's just a 404 error!</p>
        <p>We tried using <a href="http://leagueoflegends.wikia.com/wiki/Warding_Totem" rel="nofollow">Warding Totems</a> but were unable to find any page with the requested name:<br><?php echo $actual_link ?> </p>
    </div>
  </div>
</div>


@endsection
