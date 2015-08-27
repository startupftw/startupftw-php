<?php session_start(); defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller_REST
{
  public function action_index(){
      $action = $_GET['action'];
      if($action == 'getTopicList'){
           echo json_encode($this->getTopicList());
      }elseif($action == 'getUserTopicList'){
         echo json_encode($this->getUserTopicList($_GET));
      }elseif($action == 'getUserProfile'){
         echo json_encode($this->getUserProfile($_GET));
      }elseif ($action == 'getUserLikedProductList') {
          echo json_encode($this->getUserLikedProductList($_GET));
      }elseif ($action == 'getProduct') {
            echo json_encode($this->getProduct($_GET));
      }elseif ($action == 'getProductUpdateByProductId') {
            echo json_encode($this->getProductUpdateByProductId($_GET));
      }elseif ($action == 'getAllProducts') {
            echo json_encode($this->getAllProducts($_GET));
      }elseif ($action == 'getAllProductsUpdates') {
            echo json_encode($this->getAllProductsUpdates($_GET));
      }elseif ($action == 'getParentCommentsByProduct') {
            echo json_encode($this->getParentCommentsByProduct($_GET));
      }elseif ($action == 'getChildCommentsByParentCommentId') {
            echo json_encode($this->getChildCommentsByParentCommentId($_GET));
      }elseif ($action == 'getProductByUser') {
            echo json_encode($this->getProductByUser($_GET));
      }
  }

  public function action_create(){
    $action = $_POST['action'];
    if($action == 'updateUserTopicList'){
        echo json_encode($this->updateUserTopicList($_POST));
    }else if($action == 'addUserProfile'){
      echo json_encode($this->addUserProfile($_POST));
    }else if($action == 'updateUserProfile'){
      echo json_encode($this->updateUserProfile($_POST));
    }else if($action == 'addProduct'){
      echo json_encode($this->addProduct($_POST));
    }else if($action == 'addProductUpdate'){
      echo json_encode($this->addProductUpdate($_POST));
    }else if($action == 'addProductUpdate'){
      echo json_encode($this->addProductUpdate($_POST));
    }else if($action == 'incrementProductLikeCount'){
      echo json_encode($this->incrementProductLikeCount($_POST));
    }else if($action == 'addComment'){
      echo json_encode($this->addComment($_POST));
    }
  }

  private function getProductByUser($data){
    try{
      $owner_id = $data['owner_id'];
      $query = DB::select()->from('product_information')->where('owner_id' , '=' , $owner_id)->execute();
      $data = array();
      foreach($query as $q){
        array_push($data , $q);
      }
      return array("success" => true , "data" => $data);
    }catch(Exception $e){
      return array("success" => false , "message" => $e->getMessage());
    }

  }

  //this api requires $offset and $limit information
  //parent_comment_id
  //offset
  //limit

  private function getChildCommentsByParentCommentId($data){
    try{
      $limit = 10;
      $offset = 0;

      if(isset($data['limit'])){
        $limit = $data['limit'];
      }

      if(isset($data['offset'])){
        $offset = $data['offset'];
      }

      $query = DB::select()->from("comments")->where("parent_comment_id" , "=" , $data['parent_comment_id'])->limit($limit)->offset($offset)->order_by("comment_time" , "desc")->execute();

      $data = array();
      foreach($query as $q){
          array_push($data , $q);
      }

      return array("success" => true , "data" => $data);

    }catch(Exception $e){
      return array("success" => false , "message" => $e->getMessage());
    }
  }

  //this api requires $offset and $limit information
  private function getParentCommentsByProduct($data){
    try{
      $limit = 10;
      $offset = 0;

      if(isset($data['limit'])){
        $limit = $data['limit'];
      }

      if(isset($data['offset'])){
        $offset = $data['offset'];
      }

      $query = DB::select()->from("comments")->where("product_id" , "=" , $data['product_id'])->limit($limit)->offset($offset)->order_by("comment_time" , "desc")->execute();

      $data = array();
      foreach($query as $q){
          array_push($data , $q);
      }

      return array("success" => true , "data" => $data);

    }catch(Exception $e){
      return array("success" => false , "message" => $e->getMessage());
    }
  }
  private function incrementProductLikeCount($data){
    try{
      //i neeed , product_id and the user_id, who liked it
      $count = DB::select()->from('product_information')->where("product_id" , "=" ,$data['product_id'])->execute()[0]['like_count'];
      $query = DB::update("product_information" )->set(array("like_count" => $count + 1))->where("product_id" , "=" ,$data['product_id'])->execute();

      $products_liked = DB::select()->from('users')->where("user_id" , "=" ,$data['user_id'])->execute()[0]['products_liked'];
      $products_liked = $products_liked . ',' . $data['product_id'];
      $query = DB::update("users" )->set(array("products_liked" => $products_liked))->where("user_id" , "=" ,$data['user_id'])->execute();

      return array("success" => true , "message" => "Count increment successfull");
    }catch(Exception $e){
      return array("success" => false , "message" => $e->getMessage());
    }
  }
  private function getAllProductsUpdates($data){
    $limit = 10;
    $offset = 1;
    if(isset($data['limit'])){
      $limit = $data['limit'];
    }
    if(isset($data['offset'])){
      $offset = $data['offset'];
    }

    try{
      $query = DB::select()->from("product_updates")->order_by('update_time' , 'desc')->limit($limit)->offset($offset)->execute();
      $res = array();
      foreach($query as $q){
        array_push($res , $q);
      }
      return array("success"=>true , "data" => $res);

    }catch(Exception $e){
      return array("success" => false , "message" => $e->getMessage());
    }
  }

  private function addComment($data){
    //will need the following
    //$product_id
    //comment_type -> parent or child
    //if child, then I need parent id too.
    //user_id, who commented

    //soooo....lets code this thing up sergei
    try{

    $product_id = $data['product_id'];
    $user_id = $data['user_id'];
    $comment_type = $data['comment_type'];
    if($comment_type == "parent"){
      //so if its a parent comment, all we have to do is enter it into the DB
      //so do it then dude!

      $query = DB::insert("comments" , array("product_id" , "message" , "user_id" , "comment_type"))->values(array($data['product_id'],$data['message'],$data['user_id'],$data['comment_type']));
      $query->execute();

      //also this is the place where I increase the comment count of the product

      $current_comment_count = DB::select()->from("product_information")->where("product_id" , "=" , $product_id)->execute()[0]['comment_count'];

      $update_count_query = DB::update("product_information")->set(array('comment_count' => $current_comment_count + 1))->where("product_id" , "=" , $product_id)->execute();

      return array("success" => true , "message" => "comment posted successfully");
    }else if($comment_type == "child"){
      //well else we shall have to insert it aong with the parent id
      //so... ok..
      $query = DB::insert("comments" , array("product_id" , "message" , "user_id" , "comment_type" , "parent_comment_id"))->values(array($data['product_id'],$data['message'],$data['user_id'],$data['comment_type'] , $data['parent_comment_id']));
      $query->execute();
      return array("success" => true , "message" => "reply posted successfully");
    }
  }catch(Exception $e){
    return array("success" => false , "message" => $e->getMessage());
  }
  }


  private function getAllProducts($data){
    $limit = 10;
    $offset = 1;
    if(isset($data['limit'])){
      $limit = $data['limit'];
    }
    if(isset($data['offset'])){
      $offset = $data['offset'];
    }

    try{
      $query = DB::select()->from("product_information")->order_by('timestamp' , 'desc')->limit($limit)->offset($offset)->execute();
      $res = array();
      foreach($query as $q){
        array_push($res , $q);
      }
      return array("success"=>true , "data" => $res);

    }catch(Exception $e){
      return array("success" => false , "message" => $e->getMessage());
    }
  }

  private function getProductUpdateByProductId($data){
    try{
      $query = DB::select()->from("product_updates")->where("product_id" , "=" , $data['product_id'])->order_by('update_time' , 'desc')->execute();
      $res = array();
      foreach($query as $q){
        array_push($res , $q);
      }
      return array("success"=>true , "data" => $res);
    }catch(Exception $e){
        return array("success" => false , "message" => $e->getMessage());
    }
  }
  private function addProductUpdate($data){
    $product_id = $data['product_id'];

    try{
      $query = DB::insert("product_updates" , array("product_id" , "update_type" , "update_info" ))->values(array($data['product_id'] , $data['update_type'] , $data['update_info']))->execute();
      return array("success" => true , "message" => "update pushed successfully");
    }catch(Exception $e){
      return array("success" => false , "message" => $e->getMessage());
    }

  }
  private function getProduct($data){
    $product_id = $data['product_id'];

    $query = DB::select()->from('product_information')->where("product_id" , "=" , $product_id);

    try{
       return array("success"=>true , "data" => $query->execute()[0]);

    }catch(Database_Exception $e){
        return array("success" => false , "message" => $e->getMessage());
    }
  }
  private function addProduct($data){
    //so as this is a new product, it wont be having a product key or anything. Also , I think we will have to map the owner to this product too, right ?
    //or may be we can have a differnt api call for that......, cool.
    //soooooo.....
    $query = DB::insert('product_information', array('owner_id', 'product_name' , 'product_twitter_handle','product_tag_ids' , 'product_pitch' , 'product_url' ,'playstore_url' , 'appstore_url' , 'logo' , 'comment_count' , 'like_count' , 'launch_date'))->values(
    array($data['owner_id'] , $data['product_name'] , $data['product_twitter_handle'],$data['product_tag_ids'],$data['product_pitch'],$data['product_url'],$data['playstore_url'] , $data['appstore_url'],$data['logo'],$data['comment_count'],$data['like_count'],$data['launch_date']));

    try{
      $query->execute();
      return array("success" => true , "message" => "Product Add successful");
    }catch(Database_Exception $e){
      return array('success' => false , 'message' => 'Database Exception : ' . $e->getMessage());
    }catch(Exception $e){
      return array('success' => false , 'message' => $e->getMessage());
    }



  }

  private function updateUserProfile($data){
      if(!isset($data['user_id'])){
        return array("success" => false , "message" => "cannot run update on an without a valid user_id");
      }

      $user_id = $data['user_id'];
      $user = DB::select()->from('users')->where('user_id' , '=' , user_id)->execute();
      if(sizeof($user) > 0){
        //this means we have the user ,and we can edit it
        $update_array = array();
        if(isset($data["email"])){
          $update_array['email'] = $data['email'];
        }
        if(isset($data["user_name"])){
          $update_array['user_name'] = $data['user_name'];
        }
        if(isset($data["pic_url"])){
          $update_array['pic_url'] = $data['pic_url'];
        }
        if(isset($data["follow_tags"])){
          $update_array['follow_tags'] = $data['follow_tags'];
        }
        if(isset($data["product_liked"])){
          $update_array['product_liked'] = $data['product_liked'];
        }
        try{
          DB::update("users")->set($update_array)->where("user_id" , "=" , $user_id)->execute();
          return json_encode(array("success" => true , "message" => "Update successful"));
        }catch(Exception $e){
          return array("success" => false , "message" => "Something went wrong during the update query command.Please contact developer");
        }
      }else{
        //this means the user is not in our DB. Giving out an error
          return array("success" => false , "message" => "User data unavailable. Update failed.");
      }

  }

  private function addUserProfile($data){
      //check if the user with this twitter handle is already there
      $twitter_handle = $data['twitter_handle'];
      $user = DB::select()->from('users')->where('twitter_handle' , '=' , $twitter_handle)->execute();
      if(sizeof($user) > 0){
        //this means we already have this user, cant no create no more sergi!
        $res = array();
        $res['success'] = false;
        $res['message'] = 'User already present , please use update command, to update his profile.';
        return $res;
      }else{
          $query = DB::insert('users', array('email', 'user_name' , 'twitter_handle','pic_url' , 'follow_tags' , 'products_liked'))->values(
          array($data['email'] , $data['user_name'],$data['twitter_handle'],$data['pic_url'],$data['follow_tags'],$data['products_liked']))->execute();
          return array("success" => true , "message" => "User insert successful");
      }
  }

  private function getTopicList(){
    $res = DB::select()->from("tags")->execute();
    $a = array();
    foreach ($res as $key ) {
      $a[$key['tag_id']] = $key['tag_name'];
      }
      return array("success"=>true , "data" => $a);
    }

    private function getUserTopicList($data){
      $user_id = $data['user_id'];
      $user_tags = DB::select()->from('users')->where("user_id" , "=" , $user_id)->execute()[0]['follow_tags'];
      $user_tags = explode(',',$user_tags);
      $res = array();
      foreach ($user_tags as $key ) {
        $temp = DB::select()->from('tags')->where('tag_id' , '=' , $key)->execute()[0]['tag_name'];
        array_push($res , $temp);
      }
      return array("success"=>true , "data" => $res);
    }

    private function getUserProfile($data){
      $user_id = $data['user_id'];
      $user_details = DB::select()->from('users')->where("user_id" , "=" , $user_id)->execute()[0];
      return array("success"=>true , "data" => $user_details);
    }

    private function updateUserTopicList($data){
      $user_id = $data['user_id'];

      $selected_tags = json_decode($data['selected_tags'],true);

      $res = array();
      foreach ($selected_tags as $key) {
        $temp = DB::select()->from("tags")->where("tag_name" , '=' , $key)->execute()[0]['tag_id'];
        array_push($res , $temp);
      }

      $res = implode($res , ':');
      try{
        DB::update("users")->set(array("follow_tags" => $res))->where("user_id" , "=" , $user_id)->execute();
        return array("success" => true , message=>"topic list updated successfully");
      }catch(Exception $e){
        return array("success" => false , "message" => $e->getMessage());
      }
    }
}
