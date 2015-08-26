<?php session_start(); defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller_REST
{
  public function action_index(){
      $action = $_GET['action'];
      if($action == 'getTopicList'){
           $this->getTopicList();
      }
      elseif($action == 'getUserTopicList'){
         $this->getUserTopicList($_GET);
      }
      elseif($action == 'getUserProfile'){
         $this->getUserProfile($_GET);
      }

  }

  public function action_create(){
    $action = $_POST['action'];
    if($action == 'updateUserTopicList'){
        echo $this->updateUserTopicList($_POST);
    }
    else if($action == 'addUserProfile'){
      echo $this->addUserProfile($_POST);
    }else if($action == 'updateUserProfile'){
      echo $this->updateUserProfile($_POST);
    }
  }

  private function updateUserProfile($data){
      if(!isset($data['twitter_handle'])){
        return array("success" => false , "message" => "cannot run update on an unknown twitter_handle");
      }

      $twitter_handle = $data['twitter_handle'];
      $user = DB::select()->from('users')->where('twitter_handle' , '=' , $twitter_handle)->execute();
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
          DB::update("users")->set($update_array)->where("twitter_handle" , "=" , $twitter_handle)->execute();
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
        return json_encode($res);
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
      echo json_encode($a);
    }

    private function getUserTopicList($data){
      $user_id = $data['user_id'];
      $user_tags = DB::select()->from('users')->where("user_id" , "=" , $user_id)->execute()[0]['follow_tags'];
      $user_tags = explode(':',$user_tags);
      $res = array();
      foreach ($user_tags as $key ) {
        $temp = DB::select()->from('tags')->where('tag_id' , '=' , $key)->execute()[0]['tag_name'];
        array_push($res , $temp);
      }
      echo json_encode($res);
    }

    private function getUserProfile($data){
      $twitter_handle = $data['twitter_handle'];
      $user_details = DB::select()->from('users')->where("twitter_handle" , "=" , $twitter_handle)->execute()[0];
      echo json_encode($user_details);
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
      DB::update("users")->set(array("follow_tags" => $res))->where("user_id" , "=" , $user_id)->execute();
    }
}
