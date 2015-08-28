<?php session_start(); defined('SYSPATH') or die('No direct script access.');
require_once("twitteroauth/autoload.php");
use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', "O7uJUy006LDNH3KmMnWK5P2yM");
define('CONSUMER_SECRET', "e0IKeDI0glIzIDYuAwHjTwu64I6IuLXyLZz4X0wcg9NSiluh54");
define('OAUTH_CALLBACK', "http://ftw.com/Welcome/signInComplete");

class Controller_Welcome extends Controller
{

	public function before(){
		date_default_timezone_set('UTC');

	}
#extends Kohana_RestUser
	public function action_lol(){

	}
	public function action_login(){
		$content = new View_LoginPage();
		$content->isLoginPage = true;

		if(isset($_GET['type'])){
			$content->type = $_GET['type'];
		}

		$renderer = Kostache_Layout::factory('layout');
		$this->response->body($renderer->render($content));
	}


	public function action_index(){
		$base =  URL::base(Request::$initial, TRUE);

		if(array_key_exists("access_token",$_SESSION)){
			$access_token = $_SESSION['access_token'];
			$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET,  $access_token['oauth_token'] , $access_token['oauth_token_secret']);
			$content = $connection->get("account/verify_credentials");
			 echo var_dump($content);

		}else{
			header('Location:' ."$base"."Welcome/login");
			die;
		}
	}

	public function action_signInWithTwitter()
	{
		$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
		$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
		//echo var_dump($request_token);

		$_SESSION['oauth_token'] = $request_token['oauth_token'];
		$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
		$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));

		header("Location: " . $url);
		die();
	}
	public function action_signInComplete(){
		$base =  URL::base(Request::$initial, TRUE);
		$request_token = [];
		$request_token['oauth_token'] = $_SESSION['oauth_token'];
		$request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];

		if (isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {
			header("Location: " ."$base"."Welcome/login?type=loginFailed");
			die();
    	}else{
	   		$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);
		   	$access_token = $connection->oauth("oauth/access_token", array("oauth_verifier" => $_REQUEST['oauth_verifier']));
			$_SESSION['access_token'] = $access_token;
			header('Location:' . "$base"."Welcome/home");
			die();
    	}
	}

	public function action_home(){
		//get session data
		$access_token = $_SESSION['access_token'];
		$screen_name = $access_token['screen_name'];

		$base =  URL::base(Request::$initial, TRUE);

		//check if this person is in our DB
		$res = DB::select()->from('users')->where('twitter_handle' , '=' , $screen_name)->execute();

		if( 0 == sizeof($res)){
			//this means its a first time user. We will have to put his data in our database
			//get his data first
			$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET,  $access_token['oauth_token'] , $access_token['oauth_token_secret']);
			$content = $connection->get("account/verify_credentials");
//			echo json_encode($content);
			$profile_image_url =  $content->profile_image_url_https;
			$screen_name = $content->screen_name;
			$name = $content->name;

			DB::insert("users" , array('user_name' , 'twitter_handle' , 'pic_url' ))->values(array($name , $screen_name , $profile_image_url))->execute();
			header('Location:' . "$base"."Welcome/followTopics");
			die();
		}

	}

	public function action_followTopics(){
		echo 'hi';
	}

}
