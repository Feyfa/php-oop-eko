<?php 

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    /**
     * Set the value of sample
     *
     * @return  self
     */ 
    public function setSample($sample): void
    {
        $this->sample = $sample;
    }

    public function  __clone()
    {
        unset($this->sample);
    }
    
    public function __toString(): string
    {
        return "Student id:$this->id , name:$this->name , value:$this->value\n";        
    }

    public function __invoke(...$arguments)
    {
        $join = join(',', $arguments);
        echo "Invoke Student With Arguments $join\n";
    }

    public function __debugInfo()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'value' => $this->value,
            'sample' => $this->sample,
            'author' => 'Muhammad Jidan',
            'version' => '1.0.0',
        ];
    }
}