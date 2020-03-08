<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href=" https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
 
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .givemespace{
                margin-top:200px;
            }

          
        </style>
    </head>
    <body>
        <h2 class="givemespace">FIND WORKA API ENDPOINTS  :: FRAMEWORK (LARAVEL)</h2><hr/>
        <div class="container">
            <div class="row">
                <div class="col-md-7">Api Endpoint </div>
                <table class="table table-responsive table-bordered">
                    <tr>
                        <th>API END POINT</th>
                         <th>PARAMS</th>
                          <th>TYPE</th>
                         <th>INSTRUCTION</th>
                    </tr>
                   
                     <tr>
                        <td>{url}/movie/getmovies</td>
                        <td>{  }</td>
                        <td>GET</td>
                        <td>Show All Movies</td>
                    </tr>
                    
                    <tr>
                        <td>{url}/movie/comment</td>
                        <td>{name, comment, episode_id }</td>
                        <td>Post</td>
                        <td>Add Comment To A Movie</td>
                    </tr>
                    
                    
                    
                    <tr>
                        <td>{url}/movie/comment</td>
                        <td>{  }</td>
                        <td>GET</td>
                        <td>Show All Comments</td>
                    </tr>
                    
                   
                </table>
            </div>
        </div>
    </body>
</html>
