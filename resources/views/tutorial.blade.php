@extends('layouts.app')

@section('content')


<div class="icon-image">
    <img class="logo2" src="/images/RakuAirBlack.png"></img>
</div>

        <header>
            <h1 class = "tutorial_h1">Tutorial</h1>
        </header>
    
        <div class='welcomepro'>
         <div class='choose'>
          <div class='choose-icon'>
              <img src = "images/point.png" alt = "step1">
          </div>
          
          <div class='step'>
                <h1>Choose!</h1><br>
                <P>Select your feeling.</P>
        </div>
    </div>
   
    <div class='check'>
        <div class='check-icon'>
             <img src = "images/AC.jpg" alt = "step2">
        </div>
        
        <div class='step'>
             <h1>Check!</h1><br>
             <P>Check the feelings of your tribe and team.</P>
        </div>
    </div>
   
    <div class='adjust'>
        <div class='adjust-icon'>
                <img src = "images/map.jpg" alt = "step3">
        </div>
        <div class='step'>
             <h1>Adjust!</h1><br>
             <P>Adjust the AC and push 'Adjusted button' on navbar.</P>
        </div>
    </div>
</div>
        
        
          <div class="btn-tutorial">
                <a href="{{ route('signup.get')}}" class="btn tutorial_btn1">Sign up</a>
            </div>
        
        <footer class="col-lg-12 footerintro">
            &copy; 2018 KEMKOW All Rights Reserved.
        </footer>
        
        
</html>

@endsection