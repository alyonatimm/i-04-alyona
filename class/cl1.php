<?php
    class User {
        public $surname;
        public $name;
        public $age;

        public function show() {
            echo 'Фамилия: '.$this->surname.'<br>';
            echo 'Имя: '.$this->name.'<br>';
            echo 'Возраст: '.$this->age.'<br>';
        }
        public function getName () {
            return $this->name;
        }
        public function getSurname () {
            return $this->surname;
        }
    }

    class Student extends User {
        public $rate;
        
        public function showRate() {
           parent::show();
           echo 'Рейтинг: '.$this->rate.'<br>';
        }
    }
    class Group extends Student {
        public $name;
        public $students = [];

        public function __construct($name) {
            $this->name = $name;
        }

        public function addStudent($student) {
            $this->students[] =$student;
        }

        public function display() {
            echo '<h1>Группа: '.$this->name.'</h1>';
            echo '<h1>Список студентов:</h1>';
            echo '<ol>';
            foreach ($this->students as $student) {
                echo '<li>';
                echo $student->getSurname().' ';
                echo $student->getName();
                echo '</li>';
            }
            echo '</ol>';
        }
    }

    $i04 = new Group('И-04');

    $x1 = new User;
    $x1->surname ='Тимченко';
    $x1->name ='Алёна';
    $x1->age = 18;

    $x2 = new User;
    $x2->surname ='Овчинникова';
    $x2->name ='Галя';
    $x2->age = 17;

    $x3 = new Student;
    $x3->surname ='Иванов';
    $x3->name ='Вася';
    $x3->age = 40;
    $x3->rate = 4.1;
    
    $i04->addStudent($x1);
    $i04->addStudent($x2);

    $i04->display();

?>
