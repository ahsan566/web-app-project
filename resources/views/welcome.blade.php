<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CricketIBA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
				z-index:1;
            }

			


			.flex {
                display: flex;
                justify-content: center;
				z-index:1;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
				z-index:1;
            }
			
			
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }


			.button:hover{
			
			background-color: #ff0000;
			
			}

			.button {
			background-color: #990000; 
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;}
}

            .links {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


			.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
		    color: white;
			text-align: center;
}	

.top{

			position: fixed;
			left: 0;
			top: 0;
			width: 100%;
		    text-align: center;

}

        </style>
    </head>
    <body>
        
		
		
			<div class="flex-center position-ref full-height">
          
			 <div class="content">
                <img src="cricketibalogo.jpg" alt="Logo" style="width:300px;height:250px;">
                </div>

            <div class="content">
                <div class="title m-b-md">
                   CricketIBA
                </div> 


				<div class="flex">
                 <a href="/player">
				<button class="button">Dugout</button>
					</a>

				<div class="flex">
                 <a href="/login">
				<button class="button">Login</button>
					</a>

				<div class="flex">
                 <a href="/blog">
				<button class="button">Blog</button>
					</a>


					<p class="footer">Powered by Asad Ahsaan and Haya</p>



             </div>
        </div>

		
    </body>

</html>
