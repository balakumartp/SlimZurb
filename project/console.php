<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Finder\Finder;

$console = new Application('Command Line Interface', '1.0');

$config = [
    'settings' => [
        'displayErrorDetails' => 1,
    ],
];
$app = new Slim\App($config);
$container = $app->getContainer();

/**
 *Add user
 */
$console->register('adduser')
        ->setDescription('Adding User')
        ->setDefinition(array(
            new InputArgument('username', InputArgument::OPTIONAL, 'User Name', 'username of user'),
			new InputArgument('password', InputArgument::OPTIONAL, 'Password', 'Password of user'),
        ))
        ->setCode(function (InputInterface $input, OutputInterface $output) {
    	    $pdo = new PDO("mysql:host=" . "localhost" . ";dbname=" . "slimdb",
			"root", "password1");
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		    $username = $input->getArgument('username');
			$password=$input->getArgument('password');
			$query="insert into slimtable (`username`,`password`) values ('$username','$password')";
	        $result=$pdo->query($query);
			
			
            $output->writeln('Hello, ' . $username . '!' .' Added Successfully');  
			
        });
		
/**
 *Delete user
 */	
 
$console->register('deleteuser')
        ->setDescription('Deleting User.')
        ->setDefinition(array(
            new InputArgument('username', InputArgument::OPTIONAL, 'Delete.', 'Username of user'),
        ))
        ->setCode(function (InputInterface $input, OutputInterface $output) {
            $pdo = new PDO("mysql:host=" . "localhost" . ";dbname=" . "slimdb",
			"root", "password1");
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		    $username = $input->getArgument('username');
			$query='select count(*) from slimtable where username="'.$username.'"';
	        $result=$pdo->query($query);
	        $num_rows=$result->fetchColumn();
			if($num_rows >0)
			{
				$query="delete from slimtable where username='$username'";
				$result=$pdo->query($query);
				$output->writeln('Hello, ' . $username . '!' .' Deleted Successfully');  		
			}  
			else
			{
				$output->writeln('Hello, ' . $username . '!' .' Not Exist');  		
			}	
        });
 
$console->run();

/**
 * Usage:
 *
 * Add User :
 * php console.php adduser type here username type here password
 *
 
 * Delete user:
 * php console.php deleteuser type here username
 * 
 */