<?php 

class Category
{
    private string $name;
    private bool $expensive;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        if(trim($name) !== "")
        {
            $this->name = $name;
        }
    }

    /**
     * Get the value of expensive
     */ 
    public function isExpensive()
    {
        return $this->expensive;
    }

    /**
     * Set the value of expensive
     *
     * @return  self
     */ 
    public function setExpensive($expensive)
    {
        $this->expensive = $expensive;
    }
}