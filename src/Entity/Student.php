<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table('students')
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue *
     */
    private $id;

    /** @ORM\Column(type="string") **/
    private $firstName;

    /** @ORM\Column(type="string") **/
    private $lastName;

    /** @ORM\Column(type="string") **/
    private $email;

    /** @ORM\Embedded(class="Address") */
    private $address;

    /**
     * One teacher has many students. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Teacher", mappedBy="teacher")
     */
    private $teacher;

    public function getId() :? int
    {
        return $this->id;
    }

    public function getFirstName() : string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName() : string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getTeacher() : Teacher
    {
        return $this->teacher;
    }

    public function setTeacher(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    public function getAddress() : Address
    {
        return $this->address;
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }
}
