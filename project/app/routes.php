<?php 
$app->get('/', function (Slim\Http\Request $request, Slim\Http\Response $response, array $args)   {
   $basePath = $request->getUri()->getBasePath();
   $vars = [
            'page' => [
            'title' => 'Welcome Our Slim Project.',
			'password_status' => '',
			'thanks'=>'',
			'base_url' =>$basePath
		    ],
          ];
          return $this->view->render($response, 'login.twig.html', $vars);
});

$app->get('/login', function (Slim\Http\Request $request, Slim\Http\Response $response, array $args)   {
   $basePath = $request->getUri()->getBasePath();
   $vars = [
            'page' => [
            'title' => 'Welcome Our Slim Project.',
			'thanks'=>'',
			'base_url' =>$basePath
		    ],
          ];
          return $this->view->render($response, 'login.twig.html', $vars);
})->setName('login'); 
	 
$app->post('/postlogin', function($request, $response, $args)  use($app) {
	$connection = $this->get("db");
	$basePath = $request->getUri()->getBasePath();
	$username=$request->getParam('username');;
	$password=$request->getParam('password');
	
	if (!empty($username) && !empty($password) ){

    $query='select count(*) from slimtable where username="'.$username.'" and  password="'.$password.'"';
	$result=$connection->query($query);
	$num_rows=$result->fetchColumn();
	 if($num_rows >0)
	 {
	  $password_status=1;
	 }  
	 else
	 {
		 $password_status=2;
     }	
	 
	  $vars = [
            'page' => [
            'title' => 'Welcome Our Slim Project.',
			'password_status' => $password_status,
			'thanks'=>'',
			'base_url' =>$basePath
		    ],
          ];
	  $this->flash->addMessage('password_status', $password_status);
	 return $response->withRedirect($this->get('router')->pathFor('login'));
 	} 
	else {
		   return $response->withRedirect($this->get('router')->pathFor('login'));
	}
})->setName('postlogin'); 