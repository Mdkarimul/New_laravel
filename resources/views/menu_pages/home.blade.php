@extends("../admin")

@section("main-content")

<div class="time-schedule">
  <div class="time-schedule-form">
    <h4 class="" style="border:1px solid #ccc;padding:5px;border-radius:20px;">Time Schedule </h4>
  <form>
   <span>Dr name<b style="color:#A10600;">*</b></span>
  <input type="text" id="one" class="" placeholder="Dr name">
 <span>Start time<b style="color:#A10600;">*</b></span>
  <input type="text" id="two" class="" placeholder="Start time (Ex :12am)">
  <span>End time<b style="color:#A10600;">*</b></span>
  <input type="text" class="" placeholder="End time (Ex :12am)">

  <span>Date<b style="color:#A10600;">*</b></span>
  <input type="text" class="" placeholder="Date (Ex:DD/MM/YYYY)">

  <span>Location<b style="color:#A10600;">*</b></span>
  <input type="text" class="" placeholder="Location (Ex: City,Building)">


  <input type="submit">
</form>
  </div>
  
</div>


@endsection