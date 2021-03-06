<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MovieListRequest;
use App\Http\Resources\MovieListResource;
use App\Http\Resources\CommentResource;
use App\Http\Resources\MovieListCollection;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use App\movieList;
use DB;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MovieListController extends Controller {

    public $data = [];
    protected $client;
    protected $baseUrl;
    
    public function __construct(Client $client) {
        $this->client = $client;
        $this->baseUrl = env('FIND_WORKA');
    }

    //Reworked Controllers
    public function getmovies() {
        
        try {
            $result = $this->client->request('GET', $this->baseUrl);
            $result = json_decode($result->getBody()->getContents());
            if ($result->results) {
                $this->data = $this->getresult($result->results);
                return response()->json($this->data->values()->all());
            }
        } catch (\Exception  $e) {
           // return $e;
            return "We could not connect to endpoint, please try again";
        }

        /* Retransforming this code using try catch...
          $getclientmoviews = new Client();
          $result = $getclientmoviews->get('https://swapi.co/api/films/');
          $result = json_decode($result->getBody()->getContents());
          // $data['count']['count'] = $result->count;
          if ($result->results) {
          $this->data = $this->getresult($result->results);
          return response()->json($this->data->values()->all());
          }
         * 
         */
    }

    public function getresult($result) {
        $i = 0;
        foreach ($result as $get) {
            $data[$i]['episode_id'] = $get->episode_id;
            $data[$i]['title'] = $get->title;
            $data[$i]['opening_crawl'] = $get->opening_crawl;
            $data[$i]['release_date'] = $get->release_date;
            $data[$i]['characters'] = $get->characters;
            $i++;
        }
        $this->data = collect($data);
        return $data = $this->data->sortBy('release_date');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    /*

      //OLD endpoint
      public function createmovie(MovieListRequest $request){

      $json  = [];

      $json = [
      'data' => new MovieListResource($request->handle()),
      'status' => Response::HTTP_OK,
      'msg' => "Movies Successfully Created"
      ];
      return response()->json($json);
      }

      // return ProductCollection::collection(Product::PAGINATE(20));
      // return new ProductResource($product);

      public function showmovies($id=""){
      $json = [];
      if($id == ""){
      $json = [
      'data' => MovieListCollection::collection(movieList::orderBy('created_at', 'DESC')->PAGINATE(20)),
      'status' => Response::HTTP_OK,
      'msg' => "All Movies Lists"
      ];
      }else{

      $json = [
      'data' =>  MovieListCollection::collection(movieList::where("id", $id)->get()),
      // 'data' =>  movieList::all(),
      'status' => Response::HTTP_OK,
      'msg' => "Movies Lists"
      ];
      }

      return response()->json($json);
      }



      public function search(Request $request){
      $searchMovies = [];

      $validator = Validator::make($request->all(), [
      'sort_by' => 'required',     //name, gender or height
      'sort_param' => 'required',  // DESC, ASC
      ]);

      if ($validator->fails()) {
      return $searchMovies = ["error" => $validator->messages()->first()];
      }

      if (isset($_SERVER['QUERY_STRING']) && trim($_SERVER['QUERY_STRING']) != ''){
      $expsql = '';
      $firstExplode = explode('&', $_SERVER['QUERY_STRING']);
      foreach ($firstExplode as $expItem) {
      $secExp = explode('=', trim($expItem));

      if(isset($secExp[1]) && trim($secExp[0]) != 'sort_param' && trim($secExp[0]) != 'sort_param' && trim($secExp[0]) != 'sort_by'){

      if(trim($secExp[0]) == 'gender'){
      $expsql .= (trim($secExp[1]) != '') ? '`'.$secExp[0] .'` = "' . str_replace('+', ' ', $secExp[1]) . '" AND ' : '';
      }elseif(trim($secExp[0]) == 'height'){
      $expsql .= (trim($secExp[1]) != '') ? '`'.$secExp[0] .'` = "' . str_replace('+', ' ', $secExp[1]) . '" AND ' : '';
      }
      else $expsql .= (trim($secExp[1]) != '') ? '`'.$secExp[0] .'` like ' . '"%' . str_replace('+', ' ', $secExp[1]) . '%" AND ' : '';


      }else{
      $expsql .= "";
      }


      }

      $formatexpsql = substr($expsql, 0, -4);
      $searchMovies = DB::table("movie_lists")->whereRaw(DB::raw($formatexpsql))->orderBy($request->sort_by, $request->sort_param)->get();

      }else{
      $searchMovies = 'No record found';
      }

      if(count($searchMovies) > 0){
      return response()->json($searchMovies);
      }else{
      return response()->json(["msg" => "No Record Found"]);
      }
      }
     * 
     */
}
