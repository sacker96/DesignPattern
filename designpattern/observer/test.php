<?php

interface Observer
{
	public function update();
}

interface Subject
{
	public function attach(Observer $observer);
	public function detach(Observer $observer);
	public function notify();
}

class Account implements Subject
{

	const LOGIN_SUCCESS = 1;
	const LOGIN_FAILURE = 2;
    const LOGIN_IVALID = 3;
    const EXPIRED = 4;

	private $state;
	private $storage;

    private $data;

	public function __construct()
	{
		$this->storage = array();
		$this->data = array();
	}
    // Attach 1 Observer
	public function attach(Observer $observer)
	{
		$isContain = array_search($observer, $this->storage);
        if ($isContain === false) {
            $this->storage[] = $observer;
        }
	}
    // Xóa 1 Observer ra khỏi danh sách
	public function detach(Observer $observer)
	{
      foreach($this->storage as $key => $val) {
        if ($val == $observer) {
          unset($this->storage[$key]);
        }
      }
    }
    // Gửi thông báo update tới tất cả các observers trong hệ thống
    public function notify() {
	    foreach($this->storage as $observer) {
	     	$observer->update($this);
	     }
    }

    public function login($email, $ip)
    {
    	$this->setData([
    	    'email' => $email,
    	    'ip' => $ip
    	]);
    	if ($email == 'sacker961@gmail.com' && $ip == '10.0.0.1') {
    	    $this->setState(Account::LOGIN_INVALID);
    	} else {
    	    $login = $this->process($email);
    	   if ($login) {
    		    $this->setState(Account::LOGIN_SUCCESS);
    	    } else {
			    $this->setState(Account::LOGIN_FAILURE);
    	    }
    	}

    	$this->notify();
    }

    public function save()
    {
        $this->notify();
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function process($email)
    {
        if ($email == 'vutq@gmail.com') {
            return true;
        }
        return false;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}

class Logger implements Observer
{
    public function update(Account $account)
    {
        $state = $account->getState();
        $data = $account->getData();
        if ($state == Account::LOGIN_SUCCESS) {
            // thực hiện log thời gian user online blahh..
            echo  "User {$data['email']} vừa online";
        }
    }
}

class Mailer implements Observer
{
    public function update(Account $account)
    {
        $state = $account->getState();
        $data = $account->getData();
        if ($state == Account::EXPIRED) {
            // Gửi email thông tin tài khoản đã hết hạn
            Email::send($email, "Account hết hạn rồi bạn ei");
           // echo "Account $data['email'] has expired. Email sent!";
        }
    }
}

class Security implements Observer
{
    public function update(Account $account)
    {
        $state = $account->getState();
        $data = $account->getData();
        if ($state == Account::LOGIN_INVALID) {
            // Block ip
          //  echo "Account $data['email'] with ip $data['ip'] are trying to hack our system";
        }
    }
}

$account = new Account();
//Attach các observer vào subject
$security = new Security();
$account->attach(new Logger());
$account->attach(new Mailer());
$account->attach($security);
// Đăng nhập
$account->login('sacker96@gmail.com', '192.168.0.1');
// Thay đổi state
$account->setState(Account::EXPIRED);
$account->save();
$account->login('vutq@gmail.com', '10.0.0.1');
// Xóa security observer
$account->detach($security);
$account->login('vutq@gmail.com', '10.0.0.1'); //will success