# FINDWORKA-API-ENDPOINT


# <table class="table table-responsive table-bordered">
                    <tr>
                        <th>API END POINT</th>
                         <th>PARAMS</th>
                          <th>TYPE</th>
                         <th>INSTRUCTION</th>
                    </tr>
                    <tr>
                        <td>{url}/movie/create</td>
                        <td>{name, height, mass, skin_color, eye_color, birth_year, homeworld, films_id, comment_id, gender   }</td>
                        <td>Post</td>
                        <td>Create Movie</td>
                    </tr>
                    
                    <tr>
                        <td>{url}/movie/comment</td>
                        <td>{name, comment, movie_id }</td>
                        <td>Post</td>
                        <td>Add Comment To A Movie</td>
                    </tr>
                    
                     <tr>
                        <td>{url}/movie/showmovies</td>
                        <td>{  }</td>
                        <td>GET</td>
                        <td>Show All Movies</td>
                    </tr>
                    
                    <tr>
                        <td>{url}/movie/showmovies/id</td>
                        <td>{  }</td>
                        <td>GET</td>
                        <td>Show Single Movies</td>
                    </tr>
                    
                    <tr>
                        <td>{url}/movie/search</td>
                        <td>{ sort_param -(DESC | ASC ) , sort_by, (any_other parameters as you require e.g {name, height, mass etc..) }</td>
                        <td>GET</td>
                        <td>Filter Movies</td>
                    </tr>
                </table>
#
