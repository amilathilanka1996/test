<?php $this->pageTitle=Yii::app()->name; 

/*<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p> */

$users2 = User::model()->findAll();

//print_r($users2);

//array('users' => $users2);

foreach($users2 as $user1){
	echo $user1->username .'<br>' ;
}

//$user1 = User::model()->find(array('condition' => "username='user1'"));

//echo $user1->password;

echo 'title <br><br>';

echo Yii::app()->user->name.'<br><br>';

$error2 = Errorlist::model()->findAll();
foreach($error2 as $user1){
	echo $user1->username .'<br>' ;
}


