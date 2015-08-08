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
      $user_id = $data['user_id'];
      $user_details = DB::select()->from('users')->where("user_id" , "=" , $user_id)->execute()[0];
      echo json_encode(array("id" => $user_details["user_id"] , "user_name" => $user_details["user_name"], "twitter_handle" =>$user_details["twitter_handle"], "pic_url" =>$user_details["pic_url"] , "date_added" =>$user_details["date_added"], "follow_tags"=>$user_details["follow_tags"]));
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
