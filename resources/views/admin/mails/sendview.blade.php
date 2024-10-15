<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .card-header {
            background: #232a3e;
            color: #ffffff;
            padding: 3px;
            margin-bottom: 8px;
            border-radius: 32px !important;
            text-align: center;
        }
        .card-header img {
            height: 60px; /* Adjusted logo height */
            width: auto;
            margin-bottom: -26px;
        }
        .card-header .site-name {
            font-size: 24px; /* Adjusted font size */
            font-weight: 600;
            margin-bottom:2px;
        }
        .card-header .mail-subject {
            font-size: 18px; /* Adjusted font size */
            font-weight: 600;
            color: #7081b9; /* Adjusted color */
        }
        .card-body {
            padding: 23px;
            background-color: #f8f9fb;
            border-radius: 32px;
            min-height: 200px;
            height: auto;
        }
        p {
            line-height: 1.6;
            margin: 0;
            font-size: 16px;
            text-decoration: none; /* Remove underline from text */
        }

        .body{
margin-bottom: .5rem;
    color: #656d9a;

}
    </style>
</head>
<body>
    <div class="container">
        
            <div class="card-header">
                
                    <div class="col-12">
                        <a href="https://csp.hh-shaker.com.sa/" target="_blank">
                            <img src="https://csp.hh-shaker.com.sa/assets-admin/images/IMG_1520.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="col-12">
                        <h4 class="site-name"><pre></br></pre></br></h4>
                    </div>
                    <div class="col-12">
                        <div class="mail-subject"><h4 class="site-name">HH-shaker</h4></div>
                    </div>
               
            </div>
            <div class="card-body">
                <p class="body">{!! nl2br($body) !!}</p>
            </div>
       
    </div>
</body>
</html>
