<?php
$user = \Auth::user();
$userteam = $user->team;  
?>
        

<div class = 'clearbtnparent'>
        @if($userteam == 1 ||   $userteam == 2 || $userteam == 4)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear1a' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'glyphicon glyphicon-warning-sign clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 7)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear1b' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 3)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2a' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 5 ||  $userteam == 6 || $userteam == 8 || $userteam == 9)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2b' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        
        
        <div class = 'clearbtnparent'>
        @elseif($userteam == 10 ||   $userteam == 11 || $userteam == 14 || $userteam == 15 )        
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2a' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 18 ||   $userteam == 19)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2b' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 12 ||   $userteam == 13 || $userteam == 16 || $userteam == 17 )
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2c' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 20 ||   $userteam == 21)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2d' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        
        </div>
        
         <div class = 'clearbtnparent'>
        @elseif($userteam == 22 ||   $userteam == 26)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2c' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 30)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2d' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 23 || $userteam == 24 || $userteam == 25 || $userteam == 27 || $userteam == 28 || $userteam == 29)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear3a' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 31 || $userteam == 32 || $userteam == 33)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear3b' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        
        </div>
        
         <div class = 'clearbtnparent'>
        @elseif($userteam == 34 ||   $userteam == 35 || $userteam == 38 || $userteam == 39 )
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4a' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 42 || $userteam == 43)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4b' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 36 ||  $userteam == 37 || $userteam == 41)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4c' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 40 ||  $userteam == 44 || $userteam == 45)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4d' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        
<!--   <form method="post" action="../datareceive.html" onSubmit="return checkSubmit()">-->
<!--<input type="text" name="text1" value="データを送信します">-->
<!--<input type="submit" value="送信する">-->
<!--<input type="reset" value="クリア">-->
<!--</form>-->
@endif

<script type="text/javascript">
function checkSubmit() {
	return confirm("⚠︎エアコンの温度を調節しましたか？");
}
</script>
        </div>
