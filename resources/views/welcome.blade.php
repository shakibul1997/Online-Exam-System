<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Exam </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* background-color:red; */
                background-image: url("img/student3.jpg") ;
                background-repeat:no-repeat;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
           
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                top: 0px;
                /* background-color:rgb(60, 179, 113); */
                width:1250px;
                height:30px;
            }

            .content {
                text-align: center;
                font-size:50px;
               color: #FFEFD5;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 85px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background:gray;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                        <a href="{{ url('/home') }}">Home</a>
                    @else
                   
                   
                            <a href="">Home</a>
                       
                       
                            <a href="">About</a>
                       
                       
                            <a href="">Contract</a>
                        
                        
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                      
                    @endauth
                </div>
            @endif
            <div class="content">
           Online Examination 
        
                </div>

                
                </div>
            </div>
        </div>
    </body>
</html>
