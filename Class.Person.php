        class Person {

    public $firstname;

    public $lastname;  

    public $middlename;

    public $id;

        public  function __construct($firstname, $lastname, $middlename,$id) {

            $this->firstname = $firstname;

            $this->lastname = $lastname;

            $this->middlename = $middlename;

            $this->id =$id;

      }

 /* If Person has first name and last name retrun string */ 

        public function human() {

  	        if ($this->firstname AND $this->lastname)

		{

			  return "Person : ". $this->firstname." ". $this->lastname."";

		}

		return false;

        }

              }

 

        class Employee extends Person {

/* if employee has an id return string */      

      public function hardworker() { 

  		   if ($this->firstname AND $this->lastname AND $this->id)

		{

  	 return " ID : ". $this->id. " IS ". $this->firstname. $this->lastname;

  	}

		 return false;

  	  }

                }



  

         class Pet extends Person {



public function GoodKitty() {

  	

  	if ($this->firstname)

		{

			return "Pet : ". $this->firstname." ". $this->lastname."";

		}

		return false;

  }

  

  

              }        

 
