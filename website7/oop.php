<?php
  /**
   *
   * @  Public - Acessar de qualquer lugar do projeto
   * Private - Acessar apenas dentro da class
   * Protected - Acessar de dentro da classe ou de uma class com 'extends'
   *
   * Descrição da function
   *
   * @author Jose Romario Peixoto
   * @param($name) - Set the person name;
   * @param($email) - Set the person email;
   * @return - person data
   *
   */
  class Person
  {
    private $name;
    private $email;

    public function __construct($name, $email){
      // get and save values
      $this->name = $name;
      $this->email = $email;
      echo __CLASS__.' Created<br>';
    }

    // public function __destruct(){
    //   echo __CLASS__.' Destroyed<br>';
    // }

    // function to setName
    public function setName($name){
      $this->name = $name;
    }

    // function to getName
    public function getName(){
      return $this->name.'<br>';
    }

    public function setEmail($name){
      $this->email = $email;
    }

    public function getEmail(){
      return $this->email.'<br>';
    }

  }

  // $person1 = new Person();
  //
  // echo $person1->getEmail();

  // Customer imports everything inside Person
  class Customer extends Person{
    private $balance;

    // create constructor
    public function __construct($name, $email, $balance){
      // get the extended class constructor
      parent::__construct($name, $email, $balance);
      $this->balance = $balance;
    }

    public function setBalance($balance){
      $this->balance = $balance;
    }

    public function getBalance(){
      return $this->balance.'<br>';
    }

  }

  $customer1 = new Customer('Romario', 'romario@gmail', 300);

  echo $customer1->getName();
  echo $customer1->getBalance();
  echo $customer1->getEmail();

 ?>
