<?php
namespace Video24;

class Form
{
    //Fields
    private $name;
    private $email;
    private $website;
    private $comment;

    //Error fields
    private $nameErr;
    private $emailErr;
    private $websiteErr;

    //Check Validation
    public $valid;


    public function __construct($name,$email,$website,$comment)
    {
        $this->nameErr = "";
        $this->emailErr = "";
        $this->websiteErr = "";
        $this->valid = true;
        $this->setName($name);
        $this->setEmail($email);
        $this->setWebsite($website);
        $this->setComment($comment);
    }


    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function getComment()
    {
        return $this->comment;
    }

    private function setName($name)
    {
        if(empty($name))
        {
            $this->nameErr = "Name is required";
            $this->valid = false;
        }
        else
        {
            $name = $this->test_input($name);
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
            {
                $this->nameErr = "Only letters and white space allowed";
                $this->valid = false;
            }
            else
            {
                $this->name = $name;
            }
        }
    }

    private function setEmail($email)
    {
        if(empty($email))
        {
            $this->emailErr = "Email is required";
            $this->valid = false;
        }
        else
        {
            $email = $this->test_input($email);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
              $this->emailErr = "Invalid email format";
              $this->valid = false;
            }
            else
            {
                $this->email = $email;
            }
        }
    }

    private function setWebsite($website)
    {
        if(empty($website))
        {
            $this->website = "";
        }
        else
        {
            $website = $this->test_input($website);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
            {
                $this->websiteErr = "Invalid URL";
                $this->valid = false;
            }
            else
            {
                $this->website = $website;
            }
        }
    }

    private function setComment($comment)
    {
        if(empty($comment))
        {
            $this->comment = "";
        }
        else
        {
            $comment = $this->test_input($comment);
            $this->comment = $comment;
        }
    }

    public function getNameErr()
    {
        return $this->nameErr;
    }

    public function getEmailErr()
    {
        return $this->emailErr;
    }

    public function getWebsiteErr()
    {
        return $this->websiteErr;
    }

    public function getCommentErr()
    {
        return $this->commentErr;
    }

    private function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function setForm($name,$email,$website,$comment)
    {
        $this->valid = true;
        $this->setName($name);
        $this->setEmail($email);
        $this->setWebsite($website);
        $this->setComment($comment);
    }

}
